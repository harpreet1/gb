<?php
App::uses('AppController', 'Controller');
class ShopController extends AppController {

//////////////////////////////////////////////////

	public $components = array(
		'Cart',
		'Ups',
		'Fedex',
		'PaypalPro'
	);

//////////////////////////////////////////////////

	public $uses = 'Product';

//////////////////////////////////////////////////

	public function beforeFilter() {
		parent::beforeFilter();
		$this->disableCache();
		//$this->Security->validatePost = false;
	}

//////////////////////////////////////////////////

	public function clear() {
		$this->Session->delete('Shop');
		$this->Session->setFlash('All item(s) removed from your shopping cart', 'flash_error');
		$this->redirect('/');
	}

//////////////////////////////////////////////////

	public function add() {
		if ($this->request->is('post')) {
			$id = $this->request->data['Product']['id'];
			$product = $this->Cart->add($id, 1);
		}
		if(!empty($product)) {
			$this->Session->setFlash($product['Product']['name'] . ' was added to your shopping cart.', 'flash_success');
		}
		$this->redirect($this->referer());
	}

//////////////////////////////////////////////////

	public function update() {
		$this->Cart->update($this->request->data['Product']['id'], 1);
	}

//////////////////////////////////////////////////

	public function remove($id = null) {
		$product = $this->Cart->remove($id);
		if(!empty($product)) {
			$this->Session->setFlash($product['Product']['name'] . ' was removed from your shopping cart', 'flash_error');
		}
		$this->redirect(array('action' => 'cart'));
	}


//////////////////////////////////////////////////

	public function cartupdate() {
		if ($this->request->is('post')) {
			foreach($this->request->data['Product'] as $key => $value) {
				$p = explode('-', $key);
				$this->Cart->add($p[1], $value);
			}
			$this->Session->setFlash('Shooping Cart is updated.', 'flash_success');
		}
		$this->redirect(array('action' => 'cart'));
	}

//////////////////////////////////////////////////

	public function cart() {
		$cart = $this->Session->read('Shop.Cart');
		$this->set('items', $cart['Items']);
		$this->set('cartTotal', $cart['Property']['cartTotal']);
	}

//////////////////////////////////////////////////

	public function ups() {

		$ups = $this->Ups->getRate(array(
			'ShipFromZip' => 91367,
			'ShipFromCountry' => 'US',
			'ShipToZip' => 91367,
			'ShipToCountry' => 'US',
			'Weight' => 1,
			'Service' => '03'
		));
		$this->set(compact('ups'));
	}

//////////////////////////////////////////////////

	public function fedex() {

		$fedex = $this->Fedex->getRate(array(
			'ShipFromZip' => 91367,
			'ShipFromCountry' => 'US',
			'ShipToZip' => 91367,
			'ShipToCountry' => 'US',
			'Weight' => 1,
			'Service' => '03'
		));
		$this->set(compact('fedex'));
	}

//////////////////////////////////////////////////


	public function address() {

		$shop = $this->Session->read('Shop');
		if(!$shop['Cart']['Property']['cartTotal']) {
			$this->redirect('/');
		}

		if ($this->request->is('post')) {
			$this->loadModel('Order');
			$this->Order->set($this->request->data);
			if($this->Order->validates()) {
				$order = $this->request->data['Order'];
				$order['order_type'] = 'creditcard';
				$this->Session->write('Shop.Order', $order);
				$this->Session->write('Shop.Data', $order);
				$this->redirect(array('action' => 'review'));
			} else {
				$this->Session->setFlash('The form could not be saved. Please, try again.', 'flash_error');
			}
		}
		if(!empty($shop['Order'])) {
			$this->request->data['Order'] = $shop['Order'];
		}

	}

//////////////////////////////////////////////////

	public function step1() {
		$paymentAmount = $this->Session->read('Shop.Cart.Property.cartTotal');
		if(!$paymentAmount) {
			$this->redirect('/');
		}
		$this->Paypal->step1($paymentAmount);
	}

//////////////////////////////////////////////////

	public function step2() {

		$token = $this->request->query['token'];
		$paypal = $this->Paypal->GetShippingDetails($token);

		$ack = strtoupper($paypal["ACK"]);
		if($ack == "SUCCESS" || $ack == "SUCESSWITHWARNING") {
			$this->Session->write('Shop.Paypal.Details', $paypal);
			$this->redirect(array('action' => 'review'));
		} else {
			$ErrorCode = urldecode($paypal["L_ERRORCODE0"]);
			$ErrorShortMsg = urldecode($paypal["L_SHORTMESSAGE0"]);
			$ErrorLongMsg = urldecode($paypal["L_LONGMESSAGE0"]);
			$ErrorSeverityCode = urldecode($paypal["L_SEVERITYCODE0"]);
			echo "GetExpressCheckoutDetails API call failed. ";
			echo "Detailed Error Message: " . $ErrorLongMsg;
			echo "Short Error Message: " . $ErrorShortMsg;
			echo "Error Code: " . $ErrorCode;
			echo "Error Severity Code: " . $ErrorSeverityCode;
			die();
		}

	}

//////////////////////////////////////////////////

	public function review() {

		$shop = $this->Session->read('Shop');

		if(empty($shop)) {
			$this->redirect('/');
		}

		if ($this->request->is('post')) {
			$this->loadModel('Order');
			$this->Order->set($this->request->data);
			if($this->Order->validates()) {

				try {
					$this->PaypalPro->amount = 19.95;
					$this->PaypalPro->creditCardNumber = '6221197159205602';
					$this->PaypalPro->creditCardCvv = '123';
					$this->PaypalPro->creditCardExpires = '082014';
					$this->PaypalPro->creditCardType = 'Discover';

					$this->PaypalPro->customerFirstName = 'Steve';
					$this->PaypalPro->customerLastName = 'Smith';
					$this->PaypalPro->customerEmail = 'andras_1348474134_per@kende.com';

					$this->PaypalPro->billingAddress1 = '301 Lake Village Dr';
					$this->PaypalPro->billingAddress2 = '';
					$this->PaypalPro->billingCity = 'McKinney';
					$this->PaypalPro->billingState = 'TX';
					$this->PaypalPro->billingZip = '75071';
					$this->PaypalPro->billingCountryCode = 'US';


					$result = $this->PaypalPro->doDirectPayment();
					debug($result);
				} catch(Exception $e) {
					$this->Session->setFlash($e->getMessage());
					$this->redirect(array('action' => 'review'));
				}
				die('vege');

				$i = 0;
				foreach($shop['Cart']['Items'] as $c) {
					$o['OrderItem'][$i]['name'] = $c['Product']['name'];
					$o['OrderItem'][$i]['quantity'] = $c['quantity'];
					$o['OrderItem'][$i]['price'] = $c['subtotal'];
					$o['OrderItem'][$i]['weight'] = $c['totalweight'];
					$i++;
				}

				$o['Order'] = $shop['Data'];
				$o['Order']['subtotal'] = $shop['Cart']['Property']['cartTotal'];
				$o['Order']['total'] = $shop['Cart']['Property']['cartTotal'];
				$o['Order']['weight'] = $shop['Cart']['Property']['cartWeight'];

				$o['Order']['status'] = 1;

				if($shop['Data']['order_type'] == 'paypal') {
					$resArray = $this->Paypal->ConfirmPayment($o['Order']['total']);
					// debug($resArray);
					$ack = strtoupper($resArray["ACK"]);
					if($ack == "SUCCESS" || $ack == "SUCCESSWITHWARNING") {
						$o['Order']['status'] = 2;

					}
				}
				$save = $this->Order->saveAll($o, array('validate' => 'first'));
				if($save) {

					$this->set(compact('shop'));

					App::uses('CakeEmail', 'Network/Email');
					$email = new CakeEmail();
					$email->from(ADMIN_EMAIL)
							->cc(ADMIN_EMAIL)
							->to($shop['Data']['email'])
							->subject('Shop Order')
							->template('order')
							->emailFormat('text')
							->viewVars(array('shop' => $shop))
							->send();
					$this->redirect(array('action' => 'success'));
				}

			} else {
				$this->Session->setFlash('The form could not be saved. Please, try again.', 'flash_error');
			}
		}

		if(empty($shop['Data']) && !empty($shop['Paypal']['Details'])) {
			$shop['Data']['name'] = $shop['Paypal']['Details']['FIRSTNAME'] . ' ' . $shop['Paypal']['Details']['LASTNAME'];
			$shop['Data']['email'] = $shop['Paypal']['Details']['EMAIL'];
			$shop['Data']['phone'] = '';
			$shop['Data']['billing_address'] = $shop['Paypal']['Details']['SHIPTOSTREET'];
			$shop['Data']['billing_address2'] = '';
			$shop['Data']['billing_city'] = $shop['Paypal']['Details']['SHIPTOCITY'];
			$shop['Data']['billing_zipcode'] = $shop['Paypal']['Details']['SHIPTOZIP'];
			$shop['Data']['billing_state'] = $shop['Paypal']['Details']['SHIPTOSTATE'];

			$shop['Data']['shipping_address'] = $shop['Paypal']['Details']['SHIPTOSTREET'];
			$shop['Data']['shipping_address2'] = '';
			$shop['Data']['shipping_city'] = $shop['Paypal']['Details']['SHIPTOCITY'];
			$shop['Data']['shipping_zipcode'] = $shop['Paypal']['Details']['SHIPTOZIP'];
			$shop['Data']['shipping_state'] = $shop['Paypal']['Details']['SHIPTOSTATE'];

			$shop['Data']['order_type'] = 'paypal';

			$this->Session->write('Shop.Data', $shop['Data']);
		}

		$this->set(compact('shop'));

	}

//////////////////////////////////////////////////

	public function success() {
		$shop = $this->Session->read('Shop');
		$this->Session->delete('Shop');
		if(empty($shop)) {
			$this->redirect('/');
		}
		$this->set(compact('shop'));
	}

//////////////////////////////////////////////////

}
