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

		$this->ipAddress = $_SERVER['REMOTE_ADDR'];

		$this->api_url = Configure::read('Settings.AUTHORIZENET_API_URL');
		$this->api_login = Configure::read('Settings.AUTHORIZENET_API_LOGIN');
		$this->api_transaction_key = Configure::read('Settings.AUTHORIZENET_API_TRANSACTION_KEY');

	}

////////////////////////////////////////////////////////////

	public function charge($data) {

		$post_values = array(

			// the API Login ID and Transaction Key must be replaced with valid values
			'x_login'			=> $this->api_login,
			'x_tran_key'		=> $this->api_transaction_key,

			'x_version'			=> '3.1',
			'x_delim_data'		=> 'TRUE',
			'x_delim_char'		=> '|',
			'x_relay_response'	=> 'FALSE',

			'x_type'			=> 'AUTH_CAPTURE',
			'x_method'			=> 'CC',
			'x_card_num'		=> '4111111111111111',
			'x_exp_date'		=> '0115',

			'x_amount'			=> $data['amount'],
			'x_description'		=> $data['description'],

			'x_first_name'		=> $data['first_name'],
			'x_last_name'		=> $data['last_name'],
			'x_address'			=> '1234 Street',
			'x_state'			=> 'WA',
			'x_zip'				=> '98004'
			// Additional fields can be added here as outlined in the AIM integration
			// guide at: http://developer.authorize.net
		);

		print_r($post_values);

		App::uses('HttpSocket', 'Network/Http');
		$httpSocket = new HttpSocket();

		$response = $httpSocket->post($this->api_url, $post_values);

		print_r($response);

		parse_str($response , $parsed);

		print_r($parsed);

		die('authorizenet response end.');

		if(array_key_exists('ACK', $parsed) && $parsed['ACK'] == 'Success') {
			return $parsed;
		}
		elseif(array_key_exists('ACK', $parsed) && array_key_exists('L_LONGMESSAGE0', $parsed) && $parsed['ACK'] != 'Success') {
			$this->log($parsed , 'paypal');
			throw new Exception($parsed['ACK'] . ' : ' . $parsed['L_LONGMESSAGE0']);
		}
		elseif(array_key_exists('ACK', $parsed) && array_key_exists('L_ERRORCODE0', $parsed) && $parsed['ACK'] != 'Success') {
			$this->log($parsed , 'paypal');
			throw new Exception($parsed['ACK'] . ' : ' . $parsed['L_ERRORCODE0']);
		}
		else {
			$this->log($parsed , 'paypal');
			throw new Exception(__('There is a problem with the payment gateway. Please try again later.'));
		}

	}

////////////////////////////////////////////////////////////

}

