<?php
class CartComponent extends Component {

//////////////////////////////////////////////////

	public $components = array('Session');

//////////////////////////////////////////////////

	public $controller = null;

//////////////////////////////////////////////////

	public function startup(&$controller) {
		$this->controller =& $controller;
	}

//////////////////////////////////////////////////

	public $maxQuantity = 100;

//////////////////////////////////////////////////

	public function add($id, $quantity = 1) {

		if(!is_numeric($quantity)) {
			$quantity = 1;
		}
		$quantity = abs($quantity);
		if($quantity > $this->maxQuantity) {
			$quantity = $this->maxQuantity;
		}
		if($quantity == 0) {
			$this->remove($id);
			return;
		}

		$product = $this->controller->Product->find('first', array(
			'recursive' => -1,
			'contain' => array('User'),
			'fields' => array(
				'Product.id',
				'Product.name',
				'Product.slug',
				'Product.image',
				'Product.price',
				'Product.weight_unit',
				'Product.weight',
				'Product.height',
				'Product.length',
				'Product.width',
				'User.id',
				'User.shop_name',
				'User.zip',
				'User.state',
			),
			'conditions' => array(
				'Product.id' => $id
			)
		));
		if(empty($product)) {
			return false;
		}
		$data['quantity'] = $quantity;
		$data['subtotal'] = sprintf('%01.2f', $product['Product']['price'] * $quantity);
		$data['totalweight'] = sprintf('%01.2f', $product['Product']['weight'] * $quantity);

		$data['Product'] = $product['Product'];
		$data['User'] = $product['User'];
		$this->Session->write('Shop.Cart.Items.' . $id, $data);

		$this->cart();

		return $product;
	}

//////////////////////////////////////////////////

	public function remove($id) {
		if($this->Session->check('Shop.Cart.Items.' . $id)) {
			$product = $this->Session->read('Shop.Cart.Items.' . $id);
			$this->Session->delete('Shop.Cart.Items.' . $id);
			$this->cart();
			return $product;
		}
		return false;
	}

//////////////////////////////////////////////////

	public function cart() {
		$cart = $this->Session->read('Shop.Cart');
		$cartTotal = 0;
		$cartQuantity = 0;
		$cartWeight = 0;

		$this->Session->delete('Shop.Cart.Shipping');

		if (count($cart['Items']) > 0) {
			foreach ($cart['Items'] as $item) {
				$cartTotal += $item['subtotal'];
				$cartQuantity += $item['quantity'];
				$cartWeight += $item['totalweight'];

				$this->Session->write('Shop.Cart.Shipping.' . $item['User']['id'] . '.Zip', $item['User']['zip']);
				$this->Session->write('Shop.Cart.Shipping.' . $item['User']['id'] . '.State', $item['User']['state']);
			}
			$d['cartTotal'] = sprintf('%01.2f', $cartTotal);
			$d['cartQuantity'] = $cartQuantity;
			$d['cartWeight'] = $cartWeight;
			$this->Session->write('Shop.Cart.Property', $d);
			return true;
		}
		else {
			$this->Session->delete('Shop.Cart');
			return false;
		}
	}

//////////////////////////////////////////////////

}
