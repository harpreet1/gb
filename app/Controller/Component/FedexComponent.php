<?php
class FedexComponent extends Component {

////////////////////////////////////////////////////////////

	//public $url = 'https://gateway.fedex.com/web-services/';
	public $url = 'https://gatewaybeta.fedex.com/web-services/';

	public $defaults = array();

	public function startup(Controller $controller, $options=array()) {
		$this->defaults = array_merge((array)$this->defaults, (array)$options);
	}

////////////////////////////////////////////////////////////

	public function getRate($data = null) {

		$xml = $this->buildRequest($data);
		App::uses('HttpSocket', 'Network/Http');
		$httpSocket = new HttpSocket();
		$response = $httpSocket->post($this->url, $xml);

		$dom = new DOMDocument();
		$dom->loadXml($response['body']);

		$results = array();
		$i = 0;

		if ($dom->getElementsByTagName('HighestSeverity')->item(0)->nodeValue == 'FAILURE' || $dom->getElementsByTagName('HighestSeverity')->item(0)->nodeValue == 'ERROR') {
			$error = $dom->getElementsByTagName('HighestSeverity')->item(0)->nodeValue;
		} else {
			$rate_reply_details = $dom->getElementsByTagName('RateReplyDetails');

			foreach ($rate_reply_details as $rate_reply_detail) {
				$code = strtolower($rate_reply_detail->getElementsByTagName('ServiceType')->item(0)->nodeValue);
				$total_net_charge = $rate_reply_detail->getElementsByTagName('RatedShipmentDetails')->item(0)->getElementsByTagName('ShipmentRateDetail')->item(0)->getElementsByTagName('TotalNetCharge')->item(0);
				$cost = $total_net_charge->getElementsByTagName('Amount')->item(0)->nodeValue;

				$results[$i] = array(
					'ServiceCode'	=> $code,
					'ServiceName'	=> ucwords(str_replace('_', ' ', $code)),
					'TotalCharges'	=> $cost,
				);
				$i++;
			}
		}

		if (!empty($results)) {
			return $results;
		}
		return false;

	}

//////////////////////////////////////////////////

	protected function buildRequest($data = array()) {

		if ($data['Weight'] < 0.1) {
			$data['Weight'] = 0.1;
		}

		if ($data['Weight'] > 70) {
			$data['Weight'] = 70;
		}

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
		$xml .= '						<ns1:PersonName>' . $this->defaults['UserName'] . '</ns1:PersonName>';
		$xml .= '						<ns1:CompanyName>' . $this->defaults['UserCompany'] . '</ns1:CompanyName>';
		$xml .= '						<ns1:PhoneNumber>' . $this->defaults['UserPhone'] . '</ns1:PhoneNumber>';
		$xml .= '					</ns1:Contact>';
		$xml .= '					<ns1:Address>';
		$xml .= '						<ns1:StateOrProvinceCode>' . $this->defaults['UserState'] . '</ns1:StateOrProvinceCode>';
		$xml .= '						<ns1:PostalCode>' . $this->defaults['UserZipCode'] . '</ns1:PostalCode>';
		$xml .= '						<ns1:CountryCode>US</ns1:CountryCode>';
		$xml .= '					</ns1:Address>';
		$xml .= '				</ns1:Shipper>';
		$xml .= '				<ns1:Recipient>';
		$xml .= '					<ns1:Contact>';
		$xml .= '						<ns1:PersonName>' . $this->defaults['CustomerFullName'] . '</ns1:PersonName>';
		$xml .= '						<ns1:CompanyName></ns1:CompanyName>';
		$xml .= '						<ns1:PhoneNumber>' . $this->defaults['CustomerPhone'] . '</ns1:PhoneNumber>';
		$xml .= '					</ns1:Contact>';
		$xml .= '					<ns1:Address>';
		$xml .= '						<ns1:StreetLines>' . $this->defaults['CustomerAddress'] . '</ns1:StreetLines>';
		$xml .= '						<ns1:City>' . $this->defaults['CustomerCity'] . '</ns1:City>';
		$xml .= '						<ns1:StateOrProvinceCode>' . $this->defaults['CustomerState'] . '</ns1:StateOrProvinceCode>';
		$xml .= '						<ns1:PostalCode>' . $this->defaults['CustomerZipCode'] . '</ns1:PostalCode>';
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
		$xml .= '						<ns1:Value>' . number_format($this->defaults['Weight'], 2, '.', '') . '</ns1:Value>';
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

////////////////////////////////////////////////////////////

}