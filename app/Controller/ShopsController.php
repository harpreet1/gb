<?php
App::uses('AppController', 'Controller');
class ShopsController extends AppController {

//////////////////////////////////////////////////

	public $components = array(
		'Cart',
		'Ups',
		'Fedex',
		'PaypalPro'
	);

//////////////////////////////////////////////////

	public function beforeFilter() {
		parent::beforeFilter();
		$this->disableCache();
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
			foreach($this->request->data['Shop'] as $key => $value) {
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
		$this->set(compact('cart'));
		$this->set('items', $cart['Items']);
		$this->set('cartTotal', $cart['Property']['cartTotal']);
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

				$i = 0;
				foreach($shop['Cart']['Users'] as $d) {
					$data['ShipFromZip'] = $d['zip'];
					$data['ShipToZip'] = $order['shipping_zip'];
					$data['Weight'] = $d['totalweight'];
					$shipping[$d['id']] = $this->_ups($data);
					$shippingchecks['User'][$d['id']]['id'] = $d['id'];
					$shippingchecks['User'][$d['id']]['name'] = $d['name'];
					$shippingchecks['User'][$d['id']]['totalprice'] = $d['totalprice'];
					$shippingchecks['User'][$d['id']]['totalquantity'] = $d['totalquantity'];
					$shippingchecks['User'][$d['id']]['totalweight'] = $d['totalweight'];
					$shippingchecks['User'][$d['id']]['ShipFromZip'] = $d['zip'];
					$shippingchecks['User'][$d['id']]['ShipToZip'] = $order['shipping_zip'];
					$shippingchecks['User'][$d['id']]['Weight'] = $d['totalweight'];
					$i++;
				}

				$i = 0;
				foreach ($shipping as $ship) {
					foreach ($ship as $k) {
						$total[$k['ServiceCode']]['ServiceCode'] = $k['ServiceCode'];
						$total[$k['ServiceCode']]['ServiceName'] = $k['ServiceName'];
						$total[$k['ServiceCode']]['TotalCharges'] = 0;
						$i++;
					}
				}

				$i = 0;
				foreach ($shipping as $ship) {
					foreach ($ship as $k) {
						$total[$k['ServiceCode']]['TotalCharges'] = $k['TotalCharges'] + $total[$k['ServiceCode']]['TotalCharges'];
						$i++;
					}
				}

				$this->Session->write('Shop.Shipping', $shipping);
				$this->Session->write('Shop.Shippingtotal', $total);
				$this->Session->write('Shop.Shippingchecks', $shippingchecks);
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

		$states = $this->Shop->states();
		$this->set(compact('states'));

	}

//////////////////////////////////////////////////

	protected function _ups($data) {
		$ups = $this->Ups->getRate(array(
			'ShipFromZip' => $data['ShipFromZip'],
			'ShipFromCountry' => 'US',
			'ShipToZip' => $data['ShipToZip'],
			'ShipToCountry' => 'US',
			'Weight' => $data['Weight'],
		));
		return $ups;
	}

//////////////////////////////////////////////////

	protected function _fedex() {

		$fedex = $this->Fedex->getRate(array(
			'ShipFromZip' => 91367,
			'ShipFromCountry' => 'US',
			'ShipToZip' => 91367,
			'ShipToCountry' => 'US',
			'Weight' => 1,
		));
		return $fedex;
	}

//////////////////////////////////////////////////

	public function review() {

		$shop = $this->Session->read('Shop');
		$total = array();
		$i = 0;

		if(empty($shop)) {
			$this->redirect('/');
		}

		if ($this->request->is('post')) {
			$this->loadModel('Order');
			$this->Order->set($this->request->data);
			if($this->Order->validates()) {

				try {
					$this->PaypalPro->amount = 19.95;
					$this->PaypalPro->creditCardNumber = '6221197157705652';
					$this->PaypalPro->creditCardCvv = '111';
					$this->PaypalPro->creditCardExpires = '022014';
					$this->PaypalPro->creditCardType = 'Discover';

					$this->PaypalPro->customerFirstName = 'Andras';
					$this->PaypalPro->customerLastName = 'Kende';
					$this->PaypalPro->customerEmail = 'store_1348477764_per@kende.com';

					$this->PaypalPro->billingAddress1 = '301 Lake Village Dr';
					$this->PaypalPro->billingAddress2 = '';
					$this->PaypalPro->billingCity = 'McKinney';
					$this->PaypalPro->billingState = 'TX';
					$this->PaypalPro->billingZip = '75071';
					$this->PaypalPro->billingCountryCode = 'US';

					$paypal = $this->PaypalPro->doDirectPayment();
//					debug($result);
				} catch(Exception $e) {
					$this->Session->setFlash($e->getMessage());
					$this->redirect(array('action' => 'review'));
				}
//				die('vege');

				$i = 0;
				foreach($shop['Cart']['Items'] as $c) {
					$o['OrderItem'][$i]['user_id'] = $c['User']['id'];
					$o['OrderItem'][$i]['name'] = $c['Product']['name'];
					$o['OrderItem'][$i]['quantity'] = $c['quantity'];
					$o['OrderItem'][$i]['price'] = $c['subtotal'];
					$o['OrderItem'][$i]['weight'] = $c['totalweight'];
					$i++;
				}

				$o['Order'] = $shop['Data'];
				$o['Order']['subtotal'] = $shop['Cart']['Property']['cartTotal'];

				$o['Order']['shipping'] = $shop['Shippingtotal']['03']['TotalCharges'];

				$o['Order']['total'] = $shop['Cart']['Property']['cartTotal'] + $shop['Shippingtotal']['03']['TotalCharges'];
				$o['Order']['weight'] = $shop['Cart']['Property']['cartWeight'];

				$o['Order']['status'] = 1;

				//if($shop['Data']['order_type'] == 'paypal') {
				//	$resArray = $this->Paypal->ConfirmPayment($o['Order']['total']);
				//	// debug($resArray);
				//	$ack = strtoupper($resArray["ACK"]);
				//	if($ack == "SUCCESS" || $ack == "SUCCESSWITHWARNING") {
				//		$o['Order']['status'] = 2;
				//	}
				//}
				$save = $this->Order->saveAll($o, array('validate' => 'first'));
				if($save) {

					$this->set(compact('shop'));

					App::uses('CakeEmail', 'Network/Email');
					$email = new CakeEmail();
					$email->from(Configure::read('Settings.ADMIN_EMAIL'))
							->cc(Configure::read('Settings.ADMIN_EMAIL'))
							->to($shop['Data']['email'])
							->subject('Shop Order')
							->template('order')
							->emailFormat('text')
							->viewVars(array('shop' => $shop, 'paypal' => $paypal))
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
