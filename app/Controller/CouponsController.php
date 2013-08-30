<?php
App::uses('AppController', 'Controller');
class CouponsController extends AppController {

////////////////////////////////////////////////////////////

	public $components = array(
		'Paginator',
		'Cart',
	);

////////////////////////////////////////////////////////////

	public function add() {

		if ($this->request->is('post') || $this->request->is('put')) {

			$coupon = $this->Coupon->find('first', array(
				'conditions' => array(
					'Coupon.code' => $this->request->data['Coupon']['code'],
					'Coupon.date_start <' => date('Y-m-d H:i:s'),
					'Coupon.date_finish >' => date('Y-m-d H:i:s'),
				)
			));

			if(!empty($coupon)) {
				$shop = $this->Session->read('Shop');
				$discount = $shop['Order']['subtotal'] * ($coupon['Coupon']['discount_percentage'] / 100);
				$this->Session->write('Shop.Order.discount', $discount);
				$this->Session->write('Shop.Coupon', $coupon['Coupon']);
				$this->Session->setFlash('The coupon code is applied.');
			} else {
				$this->Session->delete('Shop.Order.discount');
				$this->Session->delete('Shop.Coupon');
				$this->Session->setFlash('The coupon code enterid is invalid.');
			}

		}

		return $this->redirect(array('controller' => 'shops', 'action' => 'cart'));
	}

////////////////////////////////////////////////////////////

	public function remove() {
		$this->Session->delete('Shop.Order.discount');
		$this->Session->delete('Shop.Coupon');
		$this->Session->setFlash('The coupon code is removed.');
		return $this->redirect(array('controller' => 'shops', 'action' => 'cart'));
	}

////////////////////////////////////////////////////////////

	public function admin_index() {
		$this->Coupon->recursive = 0;
		$this->set('coupons', $this->Paginator->paginate());
	}

////////////////////////////////////////////////////////////

	public function admin_view($id = null) {
		if (!$this->Coupon->exists($id)) {
			throw new NotFoundException('Invalid coupon');
		}
		$options = array('conditions' => array('Coupon.id' => $id));
		$this->set('coupon', $this->Coupon->find('first', $options));
	}

////////////////////////////////////////////////////////////

	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Coupon->create();
			if ($this->Coupon->save($this->request->data)) {
				$this->Session->setFlash('The coupon has been saved.');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('The coupon could not be saved. Please, try again.');
			}
		}
	}

////////////////////////////////////////////////////////////

	public function admin_edit($id = null) {
		if (!$this->Coupon->exists($id)) {
			throw new NotFoundException('Invalid coupon');
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Coupon->save($this->request->data)) {
				$this->Session->setFlash('The coupon has been saved.');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('The coupon could not be saved. Please, try again.');
			}
		} else {
			$options = array('conditions' => array('Coupon.id' => $id));
			$this->request->data = $this->Coupon->find('first', $options);
		}
	}

////////////////////////////////////////////////////////////

	public function admin_delete($id = null) {
		$this->Coupon->id = $id;
		if (!$this->Coupon->exists()) {
			throw new NotFoundException('Invalid coupon');
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Coupon->delete()) {
			$this->Session->setFlash('The coupon has been deleted.');
		} else {
			$this->Session->setFlash('The coupon could not be deleted. Please, try again.');
		}
		return $this->redirect(array('action' => 'index'));
	}

////////////////////////////////////////////////////////////

}