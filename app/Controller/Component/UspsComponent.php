<?php
class UspsComponent extends Component {

////////////////////////////////////////////////////////////

	public $defaults = array(

	);

////////////////////////////////////////////////////////////

	public function startup(Controller $controller, $options=array()) {

		$this->defaults = array_merge((array)$this->defaults, (array)$options);

	}

////////////////////////////////////////////////////////////

	public function getRate($data = null) {

		$results[0]['ServiceCode'] = 1;
		$results[0]['ServiceName'] = 'USPS 1';
		$results[0]['TotalCharges'] = 11;

		$results[1]['ServiceCode'] = 2;
		$results[1]['ServiceName'] = 'USPS 2';
		$results[1]['TotalCharges'] = 22;

		return $results;
	}

////////////////////////////////////////////////////////////

	public function getRate2($data = null) {


		if ($data['Weight'] < 0.1) {
			$data['Weight'] = 0.1;
		}

		if ($data['Weight'] > 70) {
			$data['Weight'] = 70;
		}

		$xml = $this->buildRequest($data);

		debug($xml);

		$request = 'API=RateV4&XML='.urlencode($xml);

		$url = 'http://production.shippingapis.com/ShippingAPI.dll?' . $request;
		// http://production.shippingapis.com/ShippingAPITest.dll?API=Verify
		debug($url);

		App::uses('HttpSocket', 'Network/Http');
		$httpSocket = new HttpSocket();
		$result = $httpSocket->get($url);

		debug($result);

		App::uses('Xml', 'Utility');
		$formattedResponse = Xml::toArray(Xml::build($result['body']));
		// $formattedResponse = $this->formatResponse($response);


		debug($formattedResponse);

		$allowed = array(0, 1, 2, 3, 4, 5, 6, 7, 12, 13, 16, 17, 18, 19, 22, 23, 25, 27, 28);

		foreach ($formattedResponse['RateV4Response']['Package']['Postage'] as $key => $value) {
			if(in_array($value['@CLASSID'], $allowed)) {
				debug($value);
			}

		}

		die('under contstruction');

		if (!empty($formattedResponse)) {
			return $formattedResponse;
		}
		return false;

	}

////////////////////////////////////////////////////////////

	protected function buildRequest($data = array()) {

		$this->defaults = array_merge((array)$this->defaults, (array)$data);

		$weight = ($this->defaults['Weight'] < 0.1 ? 0.1 : $this->defaults['Weight']);
		$pounds = floor($weight);
		$ounces = round(16 * ($weight - $pounds), 2); // max 5 digits

		$xml  = '<RateV4Request USERID="'.Configure::read('Settings.USPS_USERID').'">';
		$xml .= '	<Package ID="1">';
		$xml .=	'		<Service>ALL</Service>';
		$xml .=	'		<ZipOrigination>' . substr($this->defaults['ShipFromZip'], 0, 5) . '</ZipOrigination>';
		$xml .=	'		<ZipDestination>' . substr($this->defaults['ShipToZip'], 0, 5) .'</ZipDestination>';
		$xml .=	'		<Pounds>' . $pounds . '</Pounds>';
		$xml .=	'		<Ounces>' . $ounces . '</Ounces>';
		$xml .=	'		<Container>Variable</Container>';
		$xml .=	'		<Size>Regular</Size>';
		$xml .= '		<Width>5</Width>';
		$xml .= '		<Length>5</Length>';
		$xml .= '		<Height>5</Height>';
		$xml .= '		<Girth>' . (round(((float)1 + (float)1 * 2 + 1 * 2), 1)) . '</Girth>';
		$xml .=	'		<Machinable>false</Machinable>';
		$xml .=	'	</Package>';
		$xml .= '</RateV4Request>';

		return $xml;
	}

////////////////////////////////////////////////////////////

}