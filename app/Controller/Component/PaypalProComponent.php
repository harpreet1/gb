<?php
class PaypalProComponent extends Component {

////////////////////////////////////////////////////////////

	public $config = array(
		'endpoint' => 'https://api-3t.paypal.com/nvp',
		'email' => PAYPAL_USERNAME,
		'password' => PAYPAL_PASSWORD,
		'signature' => PAYPAL_SIGNATURE
	);

	public $sandboxConfig = array(
		'endpoint' => 'https://api-3t.sandbox.paypal.com/nvp',
		'email' => PAYPAL_USERNAME,
		'password' => PAYPAL_PASSWORD,
		'signature' => PAYPAL_SIGNATURE
	);

	public $amount = null;

	public $ipAddress = '';

	public $creditCardType = '';
	public $creditCardNumber = '';
	public $creditCardExpires = '';
	public $creditCardCvv = '';

	public $customerFirstName = '';
	public $customerLastName = '';
	public $customerEmail = '';

	public $billingAddress1 = '';
	public $billingAddress2 = '';
	public $billingCity = '';
	public $billingState = '';
	public $billingCountryCode = '';
	public $billingZip = '';

	protected $_controller = null;

////////////////////////////////////////////////////////////

	public function initialize($controller) {

		$this->_controller = $controller;

		$this->ipAddress = $_SERVER['REMOTE_ADDR'];

		if(PAYPAL_MODE == 'test') {
			$this->config = $this->sandboxConfig;
		}
	}


////////////////////////////////////////////////////////////

	public function doDirectPayment() {

		$doDirectPaymentNvp = array(
			'METHOD' => 'DoDirectPayment',
			'VERSION' => '53.0',
			'PAYMENTACTION' => 'Sale',
			'IPADDRESS' => $this->ipAddress,
			'RETURNFMFDETAILS' => 1,

			'ACCT' => $this->creditCardNumber,
			'EXPDATE' => $this->creditCardExpires,
			'CVV2' => $this->creditCardCvv,
			'CREDITCARDTYPE' => $this->creditCardType,


			'FIRSTNAME' => $this->customerFirstName,
			'LASTNAME' => $this->customerLastName,
			'EMAIL' => $this->customerEmail,

			'STREET' => $this->billingAddress1,
			'STREET2' => $this->billingAddress2,
			'CITY' => $this->billingCity,
			'STATE' => $this->billingState,
			'COUNTRYCODE' => $this->billingCountryCode,
			'ZIP' => $this->billingZip,

			'AMT' => $this->amount,
			'CURRENCYCODE' => 'USD',

			'USER' => $this->config['email'],
			'PWD' => $this->config['password'],
			'SIGNATURE' => $this->config['signature'],

		);

//		$this->log($doDirectPaymentNvp);

		print_r($doDirectPaymentNvp);

		App::uses('HttpSocket', 'Network/Http');
		$httpSocket = new HttpSocket();

		print_r($this->config['endpoint']);

		$response = $httpSocket->post($this->config['endpoint'], $doDirectPaymentNvp);

		print_r($response);

		parse_str($response , $parsed);

		print_r($parsed);

		die('dodirect array');

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

