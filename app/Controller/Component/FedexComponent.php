<?php
class FedexComponent extends Component {

//////////////////////////////////////////////////

/*

$_['text_title']                               = 'Fedex';
$_['text_weight']                              = 'Weight:';
$_['text_eta']                                 = 'Estimated Time:';
$_['text_europe_first_international_priority'] = 'Europe First International Priority';
$_['text_fedex_1_day_freight']                 = 'Fedex 1 Day Freight';
$_['text_fedex_2_day']                         = 'Fedex 2 Day';
$_['text_fedex_2_day_am']                      = 'Fedex 2 Day AM';
$_['text_fedex_2_day_freight']                 = 'Fedex 2 Day Freight';
$_['text_fedex_3_day_freight']                 = 'Fedex 3 Day Freight';
$_['text_fedex_express_saver']                 = 'Fedex Express Saver';
$_['text_fedex_first_freight']                 = 'Fedex First Fright';
$_['text_fedex_freight_economy']               = 'Fedex Fright Economy';
$_['text_fedex_freight_priority']              = 'Fedex Fright Priority';
$_['text_fedex_ground']                        = 'Fedex Ground';
$_['text_first_overnight']                     = 'First Overnight';
$_['text_ground_home_delivery']                = 'Ground Home Delivery';
$_['text_international_economy']               = 'International Economy';
$_['text_international_economy_freight']       = 'International Economy Freight';
$_['text_international_first']                 = 'International First';
$_['text_international_priority']              = 'International Priority';
$_['text_international_priority_freight']      = 'International Priority Freight';
$_['text_priority_overnight']                  = 'Priority Overnight';
$_['text_smart_post']                          = 'Smart Post';
$_['text_standard_overnight']                  = 'Standard Overnight';

*/

//////////////////////////////////////////////////

	public $fedex_dropoff_type = '';
	public $fedex_packaging_type = '';

	//public $url = 'https://gateway.fedex.com/web-services/';
	public $url = 'https://gatewaybeta.fedex.com/web-services/';

	public $handlingFee  = 0;

	public $defaults     = array(
		'ShipperZip' => '94901',
		'ShipperCountry' => 'US',
		'ShipFromZip' => '94901',
		'ShipFromCountry' => 'US',
		'ShipToZip' => '76086',
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

	public function startup(Controller $controller, $options=array()) {
		$this->defaults = array_merge((array)$this->defaults, (array)$options);
	}

////////////////////////////////////////////////////////////

	public function getRate($data = null) {

		$results[0]['ServiceCode'] = 1;
		$results[0]['ServiceName'] = 'FEDEX 1';
		$results[0]['TotalCharges'] = 33;

		$results[1]['ServiceCode'] = 2;
		$results[1]['ServiceName'] = 'FEDEX 2';
		$results[1]['TotalCharges'] = 44;

		return $results;
	}

////////////////////////////////////////////////////////////

	public function getRate2($data = null) {
		if ($data['Weight'] < .1) {
			$data['Weight'] = .1;
		}

		$res = $this->request($data);
		if (!empty($res)) {
			return $res;
		}
		return false;
	}

//////////////////////////////////////////////////

	protected function request($data = null) {
		App::uses('Xml', 'Utility');
		$xml = $this->buildRequest($data);
		// print_r($xml);

		// die;

		$ch = curl_init($this->url);
		curl_setopt($ch, CURLOPT_HEADER, 1);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_TIMEOUT, 60);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $xml);

		$response = curl_exec($ch);

		// debug($response);

		curl_close($ch);

		$dom = new DOMDocument();
		$dom->loadXml($response);

		// $rate_reply_details = $dom->getElementsByTagName('RateReplyDetails');

		// print_r($rate_reply_details);

		die('end fedex');




		return $response;
	}

//////////////////////////////////////////////////

	protected function buildRequest($data=array()) {

		$this->defaults = array_merge((array)$this->defaults, (array)$data);

		$date = time();

		$day = date('l', $date);

		if ($day == 'Saturday') {
			$date += 172800;
		} elseif ($day == 'Sunday') {
			$date += 86400;
		}

		$xml  = '<?xml version="1.0"?>';
		$xml .= '<SOAP-ENV:Envelope xmlns:SOAP-ENV="http://schemas.xmlsoap.org/soap/envelope/" xmlns:ns1="http://fedex.com/ws/rate/v10">';
		$xml .= '	<SOAP-ENV:Body>';
		$xml .= '		<ns1:RateRequest>';
		$xml .= '			<ns1:WebAuthenticationDetail>';
		$xml .= '				<ns1:UserCredential>';
		$xml .= '					<ns1:Key>' . Configure::read('Settings.FEDEX_KEY') . '</ns1:Key>';
		$xml .= '					<ns1:Password>' . Configure::read('Settings.FEDEX_PASSWORD') . '</ns1:Password>';
		$xml .= '				</ns1:UserCredential>';
		$xml .= '			</ns1:WebAuthenticationDetail>';
		$xml .= '			<ns1:ClientDetail>';
		$xml .= '				<ns1:AccountNumber>' . Configure::read('Settings.FEDEX_ACCOUNT') . '</ns1:AccountNumber>';
		$xml .= '				<ns1:MeterNumber>' . Configure::read('Settings.FEDEX_METER') . '</ns1:MeterNumber>';
		$xml .= '			</ns1:ClientDetail>';
		$xml .= '			<ns1:Version>';
		$xml .= '				<ns1:ServiceId>crs</ns1:ServiceId>';
		$xml .= '				<ns1:Major>10</ns1:Major>';
		$xml .= '				<ns1:Intermediate>0</ns1:Intermediate>';
		$xml .= '				<ns1:Minor>0</ns1:Minor>';
		$xml .= '			</ns1:Version>';
		$xml .= '			<ns1:ReturnTransitAndCommit>true</ns1:ReturnTransitAndCommit>';
		$xml .= '			<ns1:RequestedShipment>';
		$xml .= '				<ns1:ShipTimestamp>' . date('c', $date) . '</ns1:ShipTimestamp>';
		// $xml .= '				<ns1:DropoffType>' . $this->fedex_dropoff_type . '</ns1:DropoffType>';
		$xml .= '				<ns1:PackagingType>YOUR_PACKAGING</ns1:PackagingType>';
		$xml .= '				<ns1:Shipper>';
		$xml .= '					<ns1:Contact>';
		$xml .= '						<ns1:PersonName>BILL CLINTON</ns1:PersonName>';
		$xml .= '						<ns1:CompanyName>BOSS</ns1:CompanyName>';
		$xml .= '						<ns1:PhoneNumber>310-333-4444</ns1:PhoneNumber>';
		$xml .= '					</ns1:Contact>';
		$xml .= '					<ns1:Address>';
		$xml .= '						<ns1:StateOrProvinceCode>CA</ns1:StateOrProvinceCode>';
		$xml .= '						<ns1:PostalCode>91367</ns1:PostalCode>';
		$xml .= '						<ns1:CountryCode>US</ns1:CountryCode>';
		$xml .= '					</ns1:Address>';
		$xml .= '				</ns1:Shipper>';

		$xml .= '				<ns1:Recipient>';
		$xml .= '					<ns1:Contact>';
		$xml .= '						<ns1:PersonName>ANDRAS KENDE</ns1:PersonName>';
		$xml .= '						<ns1:CompanyName>KENDE</ns1:CompanyName>';
		$xml .= '						<ns1:PhoneNumber>818-888-9999</ns1:PhoneNumber>';
		$xml .= '					</ns1:Contact>';
		$xml .= '					<ns1:Address>';
		$xml .= '						<ns1:StreetLines>2454 Wilshire Blvd</ns1:StreetLines>';
		$xml .= '						<ns1:City>SANTA MONICA</ns1:City>';
		$xml .= '						<ns1:StateOrProvinceCode>CA</ns1:StateOrProvinceCode>';
		$xml .= '						<ns1:PostalCode>90403</ns1:PostalCode>';
		$xml .= '						<ns1:CountryCode>US</ns1:CountryCode>';
		$xml .= '						<ns1:Residential>true</ns1:Residential>';
		$xml .= '					</ns1:Address>';
		$xml .= '				</ns1:Recipient>';
		$xml .= '				<ns1:ShippingChargesPayment>';
		$xml .= '					<ns1:PaymentType>SENDER</ns1:PaymentType>';
		$xml .= '					<ns1:Payor>';
		$xml .= '						<ns1:AccountNumber>' . Configure::read('Settings.FEDEX_ACCOUNT') . '</ns1:AccountNumber>';
		$xml .= '						<ns1:CountryCode>US</ns1:CountryCode>';
		$xml .= '					</ns1:Payor>';
		$xml .= '				</ns1:ShippingChargesPayment>';
		$xml .= '				<ns1:RateRequestTypes>LIST</ns1:RateRequestTypes>';
		$xml .= '				<ns1:PackageCount>1</ns1:PackageCount>';
		$xml .= '				<ns1:RequestedPackageLineItems>';
		$xml .= '					<ns1:SequenceNumber>1</ns1:SequenceNumber>';
		$xml .= '					<ns1:GroupPackageCount>1</ns1:GroupPackageCount>';
		$xml .= '					<ns1:Weight>';
		$xml .= '						<ns1:Units>LB</ns1:Units>';
		$xml .= '						<ns1:Value>10</ns1:Value>';
		$xml .= '					</ns1:Weight>';
		$xml .= '					<ns1:Dimensions>';
		$xml .= '						<ns1:Length>20</ns1:Length>';
		$xml .= '						<ns1:Width>20</ns1:Width>';
		$xml .= '						<ns1:Height>10</ns1:Height>';
		$xml .= '						<ns1:Units>IN</ns1:Units>';
		$xml .= '					</ns1:Dimensions>';
		$xml .= '				</ns1:RequestedPackageLineItems>';
		$xml .= '			</ns1:RequestedShipment>';
		$xml .= '		</ns1:RateRequest>';
		$xml .= '	</SOAP-ENV:Body>';
		$xml .= '</SOAP-ENV:Envelope>';

		return $xml;
	}

//////////////////////////////////////////////////

}

