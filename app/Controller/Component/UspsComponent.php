<?php
class UspsComponent extends Component {

////////////////////////////////////////////////////////////

	public $defaults = array(
		'ShipperZip' => '94901',
		'ShipperCountry' => 'US',
		'ShipFromZip' => '94901',
		'ShipFromCountry' => 'US',
		'ShipToZip' => '',
		'ShipToCountry' => 'US',

		'ShipperNumber' => '01',
		'PickupType' => '01',
		'PackagingType' => '02',

		'DimensionsUnit' => 'IN',

		'DimensionsLength' => '8',
		'DimensionsHeight' => '8',
		'DimensionsWidth' => '8',

		'WeightUnit' => 'LBS',
		'Weight' => '1',

		'Service' => '03'
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

		$request = 'API=RateV4&XML=' . urlencode($xml);

		$url = 'http://production.shippingapis.com/ShippingAPI.dll?' . $request;

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

		$xml  = '<RateV4Request USERID="' . Configure::read('Settings.USPS_USERID') . '">';
		$xml .= '	<Package ID="1">';
		$xml .=	'		<Service>ALL</Service>';
		$xml .=	'		<ZipOrigination>' . substr($this->defaults['ShipFromZip'], 0, 5) . '</ZipOrigination>';
		$xml .=	'		<ZipDestination>' . substr($this->defaults['ShipToZip'], 0, 5) .'</ZipDestination>';
		$xml .=	'		<Pounds>' . $pounds . '</Pounds>';
		$xml .=	'		<Ounces>' . $ounces . '</Ounces>';
		$xml .=	'		<Container>REGULAR</Container>';
		$xml .=	'		<Size>1</Size>';
		$xml .= '		<Width>1</Width>';
		$xml .= '		<Length>1</Length>';
		$xml .= '		<Height>1</Height>';
		$xml .= '		<Girth>' . (round(((float)1 + (float)1 * 2 + 1 * 2), 1)) . '</Girth>';
		$xml .=	'		<Machinable>false</Machinable>';
		$xml .=	'	</Package>';
		$xml .= '</RateV4Request>';

		return $xml;
	}

////////////////////////////////////////////////////////////

}