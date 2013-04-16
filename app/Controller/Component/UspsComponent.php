<?php
class UspsComponent extends Component {

////////////////////////////////////////////////////////////

	public $defaults = array();

////////////////////////////////////////////////////////////

	public function startup(Controller $controller, $options=array()) {
		$this->defaults = array_merge((array)$this->defaults, (array)$options);
	}

////////////////////////////////////////////////////////////

	public function getRate($data = null) {

		$xml = $this->buildRequest($data);
		// debug($xml);

		$url = 'http://production.shippingapis.com/ShippingAPI.dll?' . 'API=RateV4&XML=' . urlencode($xml);
		// debug($url);

		$response = @file_get_contents($url);
		// debug($response);

		$response = str_replace('&amp;lt;sup&amp;gt;&amp;amp;reg;&amp;lt;/sup&amp;gt;', '', $response);
		// debug($response);

		App::uses('Xml', 'Utility');
		$formattedResponse = Xml::toArray(Xml::build($response));
		// debug($formattedResponse);

		$serviceAllowed = array(0, 1, 3, 4);

		$results = array();
		$i = 0;

		if(!empty($formattedResponse['RateV4Response']) && empty($formattedResponse['Error'])) {
			foreach ($formattedResponse['RateV4Response']['Package']['Postage'] as $key => $value) {
				if(in_array($value['@CLASSID'], $serviceAllowed)) {
					$results[$i]['ServiceCode'] = $value['@CLASSID'];
					$results[$i]['ServiceName'] = $value['MailService'];
					$results[$i]['TotalCharges'] = $value['Rate'];
					$i++;
				}
			}
		}

		if (!empty($results)) {
			return $results;
		}
		return false;

	}

////////////////////////////////////////////////////////////

	protected function buildRequest($data = array()) {

		if ($data['Weight'] < 0.1) {
			$data['Weight'] = 0.1;
		}

		if ($data['Weight'] > 70) {
			$data['Weight'] = 70;
		}

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