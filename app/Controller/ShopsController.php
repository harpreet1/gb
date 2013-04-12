<?php
App::uses('AppController', 'Controller');
class ShopsController extends AppController {

//////////////////////////////////////////////////

	public $components = array(
		'Cart',
		'Ups',
		'Fedex',
		'AuthorizeNet'
	);

//////////////////////////////////////////////////

	public function beforeFilter() {
		parent::beforeFilter();
		$this->disableCache();
	}

//////////////////////////////////////////////////

	public function clear() {
		$clear = $this->Cart->clear();
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
		$shop = $this->Session->read('Shop');
		$this->set(compact('shop'));
	}

//////////////////////////////////////////////////


	public function address() {

		$shop = $this->Session->read('Shop');
		if(!$shop['Order']['total']) {
			$this->redirect('/');
		}

		if ($this->request->is('post')) {
			$this->loadModel('Order');
			$this->Order->set($this->request->data);
			if($this->Order->validates()) {

				$order = $this->request->data['Order'];
				$order['order_type'] = 'creditcard';

				$i = 0;
				foreach($shop['Users'] as $user) {

					$data['ShipFromZip'] = $user['zip'];
					$data['ShipToZip'] = $order['shipping_zip'];
					$data['Weight'] = $user['weight'];

					if($user['flat_shipping'] != 1) {
						$result = $this->_ups($data);
						$this->Session->write('Shop.Users.' . $user['id'] . '.shipping_service', $result[0]['ServiceName']);
						$this->Session->write('Shop.Users.' . $user['id'] . '.shipping', $result[0]['TotalCharges']);
						$this->Session->write('Shop.Users.' . $user['id'] . '.Shippingfees', $result);
					} else {
						$result = array(
							0 => array(
								'ServiceCode' => '1',
								'ServiceName' => 'Flat',
								'TotalCharges' => $user['shipping']
							)
						);
						$this->Session->write('Shop.Users.' . $user['id'] . '.shipping_service', $result[0]['ServiceName']);
						$this->Session->write('Shop.Users.' . $user['id'] . '.shipping', $user['shipping']);
						$this->Session->write('Shop.Users.' . $user['id'] . '.Shippingfees', $result);
					}

					$i++;
				}

				$shop = $this->Session->read('Shop');

				$shippingtotal = 0;
				foreach($shop['Users'] as $user) {
					$shippingtotal += $user['Shippingfees'][0]['TotalCharges'];
				}
				$shippingtotal = sprintf('%.2f', $shippingtotal);

				$order['shipping'] = $shippingtotal;
				$order['total'] = sprintf('%.2f', $shop['Order']['subtotal'] + $shippingtotal);

				$this->Session->write('Shop.Order', $order + $shop['Order']);

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

	// public function charge() {

	// 	$shop = $this->Session->read('Shop');

	// 	$payment = array(
	// 		'creditcard_number' => '4111111111111111',
	// 		'creditcard_month' => '12',
	// 		'creditcard_year' => '12',
	// 		'creditcard_code' => '123',
	// 	);

	// 	try {
	// 		$authorizeNet = $this->AuthorizeNet->charge($shop['Order'], $payment);
	// 		debug($authorizeNet);
	// 	} catch(Exception $e) {
	// 		debug($e->getMessage());
	// 	}

	// 	die('charge end.');

	// }

//////////////////////////////////////////////////

	public function review() {

		$shop = $this->Session->read('Shop');
		$total = array();
		$i = 0;

		if(empty($shop)) {
			$this->redirect('/');
		}

		if ($this->request->is('post') && isset($this->request->data['Ship'])) {

			foreach($this->request->data['Ship'] as $key => $value) {
				$userId = str_replace('rating_', '', $key);
				if($this->Session->check('Shop.Users.' . $userId . '.shipping_selected')) {
					$this->Session->write('Shop.Users.' . $userId . '.shipping_selected', $value);
					$this->Session->write('Shop.Users.' . $userId . '.shipping_service', $shop['Users'][$userId]['Shippingfees'][$value]['ServiceName']);
					$this->Session->write('Shop.Users.' . $userId . '.shipping', $shop['Users'][$userId]['Shippingfees'][$value]['TotalCharges']);
				}
			}

			$shop = $this->Session->read('Shop');
			$shippingtotal = 0;
			foreach($shop['Users'] as $user) {
				$shippingtotal += $user['Shippingfees'][$user['shipping_selected']]['TotalCharges'];
			}
			$shippingtotal = sprintf('%.2f', $shippingtotal);

			$order['shipping'] = $shippingtotal;
			$order['total'] = sprintf('%.2f', $shop['Order']['subtotal'] + $shippingtotal);

			$this->Session->write('Shop.Order', $order + $shop['Order']);

			$this->redirect(array('action' => 'review'));

		}

		$ccform = false;
		$formURL = null;

		if ($this->request->is('post') && isset($this->request->data['Order']['formURL'])) {
			try {
				// $authorizeNet = $this->AuthorizeNet->charge($shop['Order'], $payment);
				$formURL = $this->Shop->getFormUrl($shop);
			} catch(Exception $e) {
				$this->Session->setFlash($e->getMessage());
				$this->redirect(array('action' => 'review'));
			}
			$ccform = true;

		}

		if (isset($this->request->query['token-id'])) {

			$gatewayURL = Configure::read('Settings.NMI_gatewayURL');
			$APIKey = Configure::read('Settings.NMI_APIKey');

			$tokenId = $this->request->query['token-id'];
			$xmlRequest = new DOMDocument('1.0','UTF-8');
			$xmlRequest->formatOutput = true;
			$xmlCompleteTransaction = $xmlRequest->createElement('complete-action');
			$this->Shop->appendXmlNode($xmlCompleteTransaction,'api-key', $APIKey);
			$this->Shop->appendXmlNode($xmlCompleteTransaction,'token-id', $tokenId);
			$xmlRequest->appendChild($xmlCompleteTransaction);

			// Process Step Three
			$data = $this->Shop->sendXMLviaCurl($xmlRequest, $gatewayURL);

			$gwResponse = @new SimpleXMLElement((string)$data);

			if ((string)$gwResponse->result == 1 ) {
				// print " <p><h3> Transaction was Approved, XML response was:</h3></p>\n";
				// print '<pre>' . (htmlentities($data)) . '</pre>';

			} elseif((string)$gwResponse->result == 2)  {
				print " <p><h3> Transaction was Declined.</h3>\n";
				print " Decline Description : " . (string)$gwResponse->{'result-text'} ." </p>";
				print " <p><h3>XML response was:</h3></p>\n";
				print '<pre>' . (htmlentities($data)) . '</pre>';
				die;
			} else {
				print " <p><h3> Transaction caused an Error.</h3>\n";
				print " Error Description: " . (string)$gwResponse->{'result-text'} ." </p>";
				print " <p><h3>XML response was:</h3></p>\n";
				print '<pre>' . (htmlentities($data)) . '</pre>';
				die;
			}


			$this->loadModel('Order');

			$this->Order->set($this->request->data);
			if($this->Order->validates()) {

				// $payment = array(
				// 	'creditcard_number' => $this->request->data['Order']['creditcard_number'],
				// 	'creditcard_month' => $this->request->data['Order']['creditcard_month'],
				// 	'creditcard_year' => $this->request->data['Order']['creditcard_year'],
				// 	'creditcard_code' => $this->request->data['Order']['creditcard_code'],
				// );

				$o['OrderItem'] = $shop['OrderItem'];

				$i = 0;
				foreach($shop['Users'] as $user) {
					$o['OrderUser'][$i] = $user;
					$o['OrderUser'][$i]['id'] = null;
					$o['OrderUser'][$i]['user_id'] = $user['id'];
					$o['OrderUser'][$i]['tax'] = 0;
					$o['OrderUser'][$i]['total'] = $user['subtotal'] + $user['shipping'];
					$o['OrderUser'][$i]['status'] = 'new order';
					$i++;
				}

				$o['Order'] = $shop['Order'];

				$o['Order']['order_status_id'] = 1;
				$o['Order']['ip_address'] = $_SERVER['REMOTE_ADDR'];
				$o['Order']['remotehost'] = gethostbyaddr($_SERVER['REMOTE_ADDR']);
				$o['Order']['useragent'] = $_SERVER['HTTP_USER_AGENT'];

				$save = $this->Order->saveAll($o, array('validate' => 'first'));
				if($save) {
					$this->sendemails($this->Order->id);
					$this->redirect(array('action' => 'success'));
				}

			} else {
				$this->Session->setFlash('The order could not be processed. Please, try again.', 'flash_error');
			}
		}

		$this->set(compact('shop', 'ccform', 'formURL'));

	}

//////////////////////////////////////////////////

	public function sendemails($id) {

		$this->loadModel('Order');

		$order = $this->Order->find('first', array(
			'contain' => array(
				'OrderUser' => array('User' => array(
					'fields' => array(
						'User.id',
						'User.name',
						'User.email',
					)
				)),
				'OrderItem' => array('User' => array(
					'fields' => array(
						'User.id',
						'User.name',
						'User.email',
					)
				)),
			),
			'conditions' => array(
				'Order.id' => $id
			),
		));

		App::uses('CakeEmail', 'Network/Email');
		$email = new CakeEmail();

		$email->from(Configure::read('Settings.ADMIN_EMAIL'))
			->cc(Configure::read('Settings.ADMIN_EMAIL'))
			->to(Configure::read('Settings.ADMIN_EMAIL'))
			->subject('Shop Order - Admin Copy')
			->template('order-admin')
			->emailFormat('html')
			->viewVars(array('order' => $order))
			->send()
		;

		$email->from(Configure::read('Settings.ADMIN_EMAIL'))
			->cc(Configure::read('Settings.ADMIN_EMAIL'))
			->to($order['Order']['email'])
			->subject('Shop Order - Customer Copy')
			->template('order-customer')
			->emailFormat('html')
			->viewVars(array('order' => $order))
			->send()
		;

		foreach($order['OrderUser'] as $vendor) {

			$vendoritems = array();

			foreach($order['OrderItem'] as $items) {
				if($items['user_id'] == $vendor['user_id']) {

					$vendoritems[] = $items;

				}
			}

			$email->from(Configure::read('Settings.ADMIN_EMAIL'))
				->cc(Configure::read('Settings.ADMIN_EMAIL'))
				->to('er777@reyesworld.com')
				->subject('Gourmet Basket Shop Order - Vendor Copy')
				->template('order-vendor')
				->emailFormat('html')
				->viewVars(array('order' => $order, 'vendor' => $vendor, 'vendoritems' => $vendoritems))
				->send();
		}

	}

//////////////////////////////////////////////////

	public function success() {
		$shop = $this->Session->read('Shop');
		$clear = $this->Cart->clear();

		if(empty($shop)) {
			$this->redirect('/');
		}
		$this->set(compact('shop'));
	}

//////////////////////////////////////////////////

}
