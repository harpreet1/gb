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

		if ($data['Weight'] < 0.1) {
			$data['Weight'] = 0.1;
		}

		if ($data['Weight'] > 70) {
			$data['Weight'] = 70;
		}

		$xml = $this->buildRequest($data);

		debug($xml);

		$request = 'API=Verify&XML='.urlencode($xml);

		$url = 'http://production.shippingapis.com/ShippingAPITest.dll?' . $request;
		// http://production.shippingapis.com/ShippingAPITest.dll?API=Verify
		debug($url);

		App::uses('HttpSocket', 'Network/Http');
		$httpSocket = new HttpSocket();
		$res = $httpSocket->get($url);

		debug($res);

		App::uses('Xml', 'Utility');
		$response = Xml::toArray(Xml::build($res));
		$formattedResponse = $this->formatResponse($response);

		debug($formattedResponse);
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

		$xml  = '<Verify&XML USERID="'.Configure::read('Settings.USPS_USERID').'">';

		print_r(Settings.USPS_USERID);
		$xml .= '	<Package ID="1">';
		$xml .=	'		<Service>ALL</Service>';
		$xml .=	'		<ZipOrigination>' . substr($this->defaults['ShipFromZip'], 0, 5) . '</ZipOrigination>';
		$xml .=	'		<ZipDestination>' . substr($this->defaults['ShipToZip'], 0, 5) .'</ZipDestination>';
		$xml .=	'		<Pounds>' . $pounds . '</Pounds>';
		$xml .=	'		<Ounces>' . $ounces . '</Ounces>';
		$xml .=	'		<Container>REGULAR</Container>';
		$xml .=	'		<Size>5</Size>';
		$xml .= '		<Width>5</Width>';
		$xml .= '		<Length>5</Length>';
		$xml .= '		<Height>5</Height>';
		$xml .= '		<Girth>' . (round(((float)1 + (float)1 * 2 + 1 * 2), 1)) . '</Girth>';
		$xml .=	'		<Machinable>false</Machinable>';
		$xml .=	'	</Package>';
		$xml .= '</Verify&XML>';

		return $xml;
	}

////////////////////////////////////////////////////////////

}