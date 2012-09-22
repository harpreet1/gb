<?php
class UpsComponent extends Component {

//////////////////////////////////////////////////

/*

to do:

$_['text_us_origin_01']    = 'UPS Next Day Air';
$_['text_us_origin_02']    = 'UPS 2nd Day Air';
$_['text_us_origin_03']    = 'UPS Ground';
$_['text_us_origin_07']    = 'UPS Worldwide Express';
$_['text_us_origin_08']    = 'UPS Worldwide Expedited';
$_['text_us_origin_11']    = 'UPS Standard';
$_['text_us_origin_12']    = 'UPS 3 Day Select';
$_['text_us_origin_13']    = 'UPS Next Day Air Saver';
$_['text_us_origin_14']    = 'UPS Next Day Air Early A.M.';
$_['text_us_origin_54']    = 'UPS Worldwide Express Plus';
$_['text_us_origin_59']    = 'UPS 2nd Day Air A.M.';

*/

//////////////////////////////////////////////////

	public $accessKey    = '2C8C98E873ABA238';
	public $userId       = 'jorgersw';
	public $password     = 'Silver888light';
//	public $upsUrl       = 'https://www.ups.com/ups.app/xml/Rate';
	public $upsUrl       = 'https://wwwcie.ups.com/ups.app/xml/Rate';
	public $handlingFee  = 0;

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
		if (!empty($res)) {
			return $res;
		}
		return false;
	}

//////////////////////////////////////////////////

	public function request($data = null) {
		App::uses('Xml', 'Utility');
		$xml = $this->buildRequest($data);
		//print_r($xml);
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
		$response = Xml::toArray(Xml::build($res));
		//print_r($response);
		return $response;
	}

//////////////////////////////////////////////////

	public function buildRequest($data=array()) {

		$this->defaults = array_merge((array)$this->defaults, (array)$data);

		if ($this->defaults['DimensionsLength'] < .1) { $this->defaults['DimensionsLength'] = 1; }
		if ($this->defaults['DimensionsHeight'] < .1) { $this->defaults['DimensionsHeight'] = 1; }
		if ($this->defaults['DimensionsWidth'] < .1) { $this->defaults['DimensionsWidth'] = 1; }

		$xml = '<?xml version="1.0"?>
		<AccessRequest xml:lang="en-US">
			<AccessLicenseNumber>' . $this->accessKey . '</AccessLicenseNumber>
			<UserId>' . $this->userId . '</UserId>
			<Password>' . $this->password . '</Password>
		</AccessRequest>
		<?xml version="1.0"?>
		<RatingServiceSelectionRequest xml:lang="en-US">
			<Request>
				<TransactionReference>
					<CustomerContext>Bare Bones Rate Request</CustomerContext>
					<XpciVersion>1.0001</XpciVersion>
				</TransactionReference>
				<RequestAction>Rate</RequestAction>
				<RequestOption>shop</RequestOption>
			</Request>
			<PickupType>
				<Code>' . $this->defaults['PickupType'] . '</Code>
			</PickupType>
			<Shipment>
				<Shipper>
					<Address>
						<PostalCode>' . $this->defaults['ShipperZip'] . '</PostalCode>
						<CountryCode>' . $this->defaults['ShipperCountry'] . '</CountryCode>
					</Address>
					<ShipperNumber>' . $this->defaults['ShipperNumber'] . '</ShipperNumber>
				</Shipper>
				<ShipTo>
					<Address>
						<PostalCode>' . $this->defaults['ShipToZip'] . '</PostalCode>
						<CountryCode>' . $this->defaults['ShipToCountry'] . '</CountryCode>
						<ResidentialAddressIndicator/>
					</Address>
				</ShipTo>
				<ShipFrom>
					<Address>
						<PostalCode>' . $this->defaults['ShipFromZip'] . '</PostalCode>
						<CountryCode>' . $this->defaults['ShipFromCountry'] . '</CountryCode>
					</Address>
				</ShipFrom>
				<Package>
					<PackagingType>
						<Code>' . $this->defaults['PackagingType'] . '</Code>
					</PackagingType>
					<Dimensions>
						<UnitOfMeasurement>
							<Code>' . $this->defaults['DimensionsUnit'] . '</Code>
						</UnitOfMeasurement>
						<Length>' . $this->defaults['DimensionsLength'] . '</Length>
						<Width>' . $this->defaults['DimensionsWidth'] . '</Width>
						<Height>' . $this->defaults['DimensionsHeight'] . '</Height>
					</Dimensions>
					<PackageWeight>
						<UnitOfMeasurement>
							<Code>' . $this->defaults['WeightUnit'] . '</Code>
						</UnitOfMeasurement>
						<Weight>' . number_format($this->defaults['Weight'], 2, '.', '') . '</Weight>
					</PackageWeight>
				</Package>
			</Shipment>
		</RatingServiceSelectionRequest>';

		return $xml;
	}

//////////////////////////////////////////////////

}
