<?php
class AuthorizeNetComponent extends Component {

////////////////////////////////////////////////////////////

	private $url = '';
	private $api_login = '';
	private $transaction_key = '';

////////////////////////////////////////////////////////////

	public function __construct() {
	}

////////////////////////////////////////////////////////////

	public function initialize($controller) {

		$this->_controller = $controller;

		$this->api_url = Configure::read('Settings.AUTHORIZENET_API_URL');
		$this->api_login = Configure::read('Settings.AUTHORIZENET_API_LOGIN');
		$this->api_transaction_key = Configure::read('Settings.AUTHORIZENET_API_TRANSACTION_KEY');

	}

////////////////////////////////////////////////////////////

	public function charge($data) {

		$post_values = array(

			'x_login'               => $this->api_login,
			'x_tran_key'            => $this->api_transaction_key,

			'x_version'             => '3.1',
			'x_delim_data'          => 'TRUE',
			'x_delim_char'          => ',',
			'x_encap_char'          => '"',
			'x_relay_response'      => 'FALSE',

			'x_type'                => 'AUTH_CAPTURE',
			'x_method'              => 'CC',

			'x_card_num'            => '4111111111111111',
			'x_exp_date'            => '0115',
			'x_card_code'           => '',

			'x_invoice_num'         => '',
			'x_tax'                 => '',
			'x_amount'              => $data['amount'],

			'x_description'         => $data['description'],

			'x_first_name'          => $data['first_name'],
			'x_last_name'           => $data['last_name'],

			'x_address'             => '1234 Street',
			'x_state'               => 'WA',
			'x_zip'                 => '98004',
			'x_country'             => 'United States',

			'x_ship_to_first_name'  => $data['first_name'],
			'x_ship_to_last_name'   => $data['last_name'],

			'x_ship_to_address'     => '',
			'x_ship_to_state'       => '',
			'x_ship_to_zip'         => '',
			'x_ship_to_country'     => '',

			'x_cust_id'             => '',
			'x_phone'               => '',
			'x_email'               => '',

			'x_customer_ip'         => $_SERVER['REMOTE_ADDR'],

		);

		App::uses('HttpSocket', 'Network/Http');
		$httpSocket = new HttpSocket();

		$response = $httpSocket->post($this->api_url, $post_values);

		if (!empty($response['body'])) {
			$parsed = preg_split("/,(?=(?:[^\"]*\"[^\"]*\")*(?![^\"]*\"))/", $response['body']);
			foreach ($parsed as $key => $value) {
				$parsed[$key] = substr($value, 1, -1);
			}
		} else {
			$parsed = array('-1', '-1', '-1');
		}

		if($parsed[0] == '1') {
			return $parsed;
		} else {
			switch ($parsed[2]) {
			case '7':
				$error = 'invalid expiration date';
				break;

			case '8':
				$error = 'expired';
				break;

			case '6':
			case '17':
			case '28':
				$error = 'declined';
				break;

			case '78':
				$error = 'cvc';
				break;

			default:
				$error = 'general';
				break;
			}
		}

		$this->log($parsed, 'authorizenet-errors');
		throw new Exception('Credit Card Processing Error: ' . $error);

	}

////////////////////////////////////////////////////////////

}

