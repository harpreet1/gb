<?php
class UpsComponent extends Component {

//////////////////////////////////////////////////

	public $accessKey    = '2C8C98E873ABA238';
	public $userId       = 'jorgersw';
	public $password     = 'Silver888light';
	public $upsUrl       = 'https://www.ups.com/ups.app/xml/Rate';
	public $handlingFee  = 0;
	public $response;

	public $defaults     = array(
		'ShipperZip'	    => '94901',
		'ShipperCountry'    => 'US',
		'ShipFromZip'	    => '94901',
		'ShipFromCountry'   => 'US',
		'ShipToZip'         => '76086',
		'ShipToCountry'     => 'US',

		'ShipperNumber'		=> '01',
		'PickupType'		=> '01',
		'PackagingType'		=> '02',

		'DimensionsUnit'	=> 'IN',

		'DimensionsLength'	=> '8',
		'DimensionsHeight'	=> '8',
		'DimensionsWidth'	=> '8',

		'WeightUnit'		=> 'LBS',
		'Weight'			=> '1',

		'Service'			=> '03'
	);

//////////////////////////////////////////////////

	public function startup(&$controller, $options=array()) {
		$this->defaults = array_merge((array)$this->defaults, (array)$options);
	}

//////////////////////////////////////////////////

	public function getRate($data = null) {
		if ($data['Weight'] < .1) {
			$data['Weight'] = .1;
		}

		$res = $this->request($data);
		if (!empty($res['RatingServiceSelectionResponse']['RatedShipment']['TotalCharges']['MonetaryValue'])) {
			$rate = $res['RatingServiceSelectionResponse']['RatedShipment']['TotalCharges']['MonetaryValue'];
			$rate = number_format($rate, 2, '.', '');
			return $rate;
		}
		return false;
	}

//////////////////////////////////////////////////

	public function request($data = null) {
		App::uses('Xml', 'Utility');
		$xml = $this->buildRequest($data);
		//echo $xml;
		$ch = curl_init($this->upsUrl);
		curl_setopt($ch, CURLOPT_HEADER, 1);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_TIMEOUT, 60);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $xml);
		$res = curl_exec($ch);
		$res = strstr($res, '<?'); // REMOVES HEADERS
		$this->response = Xml::toArray(Xml::build($res));
		return $this->response;
	}

//////////////////////////////////////////////////

	public function buildRequest($data=array()) {
		$this->defaults = array_merge((array)$this->defaults, (array)$data);
		if ($this->defaults['DimensionsLength'] < .1) { $this->defaults['DimensionsLength'] = 1; }
		if ($this->defaults['DimensionsHeight'] < .1) { $this->defaults['DimensionsHeight'] = 1; }
		if ($this->defaults['DimensionsWidth'] < .1) { $this->defaults['DimensionsWidth'] = 1; }

		switch ($this->defaults['Service']) {
			case "07": case "54": case "08": case "65": case "82": case "83": case "84": case "85": case "86":
				if ($this->defaults['ShipFromCountry'] == $this->defaults['ShipToCountry']) {
					$this->defaults['ShipToCountry'] = 'US';
				}
				break;

			default:
				break;
		}

		return "<?xml version=\"1.0\"?>
		<AccessRequest xml:lang=\"en-US\">
			<AccessLicenseNumber>$this->accessKey</AccessLicenseNumber>
			<UserId>$this->userId</UserId>
			<Password>$this->password</Password>
		</AccessRequest>
		<?xml version=\"1.0\"?>
		<RatingServiceSelectionRequest xml:lang=\"en-US\">
			<Request>
			<TransactionReference>
				<CustomerContext>Bare Bones Rate Request</CustomerContext>
				<XpciVersion>1.0001</XpciVersion>
			</TransactionReference>
			<RequestAction>Rate</RequestAction>
			<RequestOption>Rate</RequestOption>
			</Request>
		<PickupType>
			<Code>".$this->defaults['PickupType']."</Code>
		</PickupType>
		<Shipment>
			<Shipper>
			<Address>
				<PostalCode>".$this->defaults['ShipperZip']."</PostalCode>
				<CountryCode>".$this->defaults['ShipperCountry']."</CountryCode>
			</Address>
			<ShipperNumber>".$this->defaults['ShipperNumber']."</ShipperNumber>
			</Shipper>
			<ShipTo>
			<Address>
				<PostalCode>".$this->defaults['ShipToZip']."</PostalCode>
				<CountryCode>".$this->defaults['ShipToCountry']."</CountryCode>
			<ResidentialAddressIndicator/>
			</Address>
			</ShipTo>
			<ShipFrom>
			<Address>
				<PostalCode>".$this->defaults['ShipFromZip']."</PostalCode>
				<CountryCode>".$this->defaults['ShipFromCountry']."</CountryCode>
			</Address>
			</ShipFrom>
			<Service>
			<Code>".$this->defaults['Service']."</Code>
			</Service>
			<Package>
			<PackagingType>
				<Code>".$this->defaults['PackagingType']."</Code>
			</PackagingType>
			<Dimensions>
				<UnitOfMeasurement>
				<Code>".$this->defaults['DimensionsUnit']."</Code>
				</UnitOfMeasurement>
				<Length>".$this->defaults['DimensionsLength']."</Length>
				<Width>".$this->defaults['DimensionsWidth']."</Width>
				<Height>".$this->defaults['DimensionsHeight']."</Height>
			</Dimensions>
			<PackageWeight>
				<UnitOfMeasurement>
				<Code>".$this->defaults['WeightUnit']."</Code>
				</UnitOfMeasurement>
				<Weight>".number_format($this->defaults['Weight'], 2, '.', '')."</Weight>
			</PackageWeight>
			</Package>
		</Shipment>
		</RatingServiceSelectionRequest>";
	}

}
