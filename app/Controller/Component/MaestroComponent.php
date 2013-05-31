<?php
class MaestroComponent extends Component {

////////////////////////////////////////////////////////////

	public $defaults = array();

	public function startup(Controller $controller, $options=array()) {
		$this->defaults = array_merge((array)$this->defaults, (array)$options);
	}

////////////////////////////////////////////////////////////

	public function getRate($data = null) {

		$xml = $this->buildRequest($data);

		App::uses('HttpSocket', 'Network/Http');
		$httpSocket = new HttpSocket();
		$res = $httpSocket->post(Configure::read('Settings.MAESTRO_API_URL'), $xml);

		debug($res);

		App::uses('Xml', 'Utility');
		$response = Xml::toArray(Xml::build($res['body']));

		debug($response);

		debug($response['checkout']['order']['shippingcharge']);

		die('maestro maestro maestro');

	}

//////////////////////////////////////////////////

	protected function buildRequest($data = array()) {

		$this->defaults = array_merge((array)$this->defaults, (array)$data);

		$xml = '<?xml version="1.0" encoding="UTF-8"?>
			<checkout>
				<shipto>
					<name>' . $this->defaults['CustomerFullName'] . '</name>
					<address>' . $this->defaults['CustomerAddress'] . '</address>
					<city>' . $this->defaults['CustomerCity'] . '</city>
					<state>' . $this->defaults['CustomerState'] . '</state>
					<zip>' . substr($this->defaults['CustomerZipCode'], 0, 5) . '</zip>
					<country>US</country>
				</shipto>
				<shoppingcart>
					<product>
						<productid>9900</productid>
						<quantity>10</quantity>
					</product>
					<product>
						<productid>6061</productid>
						<quantity>100</quantity>
					</product>
				</shoppingcart>
			</checkout>';

		return $xml;

	}

////////////////////////////////////////////////////////////

}