<?php
class CartComponent extends Component {

//////////////////////////////////////////////////

	public $components = array('Session');

//////////////////////////////////////////////////

	public $controller = null;

//////////////////////////////////////////////////

	public function startup(Controller $controller) {
		$this->controller = $controller;
	}

//////////////////////////////////////////////////

	public $maxQuantity = 100;
	public $product;

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

		$this->getProduct($id);

		$data['quantity'] = $quantity;
		$data['user_id'] = $this->product['Product']['user_id'];
		$data['product_id'] = $this->product['Product']['id'];
		$data['name'] = $this->product['Product']['name'];
		$data['weight'] = $this->product['Product']['weight'];
		$data['weight_total'] = sprintf('%01.2f', $this->product['Product']['weight'] * $quantity);
		$data['price'] = $this->product['Product']['price'];
		$data['subtotal'] = sprintf('%01.2f', $this->product['Product']['price'] * $quantity);
		$data['Product'] = $this->product['Product'];

		$this->Session->write('Shop.OrderItem.' . $id, $data);
		$this->Session->write('Shop.Users.' . $this->product['Product']['user_id'], $this->product['User']);

		$this->cart();

		return $this->product;
	}

//////////////////////////////////////////////////

	public function remove($id) {
		if($this->Session->check('Shop.OrderItem.' . $id)) {
			$product = $this->Session->read('Shop.OrderItem.' . $id);
			$this->Session->delete('Shop.OrderItem.' . $id);

			$this->cart();
			return $product;
		}
		return false;
	}

//////////////////////////////////////////////////

	public function cart() {
		$shop = $this->Session->read('Shop');
		$cartTotal = 0;
		$cartQuantity = 0;
		$cartWeight = 0;
		$order_item_count = 0;

		// $this->Session->delete('Shop.Order');
		$this->Session->delete('Shop.Users');
		$this->Session->delete('Shop.Shipping');
		$this->Session->delete('Shop.Shippingtotal');

		$property = array();
		$users = $shop['Users'];

		foreach ($users as & $user) {
			$user['weight'] = 0;
			$user['quantity'] = 0;
			$user['subtotal'] = 0;
		}

		if (count($shop['OrderItem']) > 0) {
			foreach ($shop['OrderItem'] as $item) {
				$cartWeight += $item['weight_total'];
				$cartQuantity += $item['quantity'];
				$cartTotal += $item['subtotal'];
				$order_item_count++;

				$users[$item['user_id']]['weight'] += $item['weight_total'];
				$users[$item['user_id']]['quantity'] += $item['quantity'];
				$users[$item['user_id']]['subtotal'] += sprintf('%.2f', $item['subtotal']);
			}

			foreach ($users as & $user) {
				if($user['flat_shipping'] == 1) {

					if($user['ship_determinant'] == 0) {
						$user['shipping'] = $this->calculateFlatShippingPrice($user);
					}
					if($user['ship_determinant'] == 1) {
						$user['shipping'] = $this->calculateFlatShippingQuantity($user);
					}

				} else {
					$user['shipping'] = 0;
				}

				$user['subtotal'] = sprintf('%.2f', $user['subtotal']);

				$user['shipping_selected'] = 0;

				if($user['quantity'] == 0) {
					unset($users[$user['id']]);
				}

			}

			$order['weight'] = $cartWeight;
			$order['order_item_count'] = $order_item_count;
			$order['quantity'] = $cartQuantity;
			$order['subtotal'] = sprintf('%.2f', $cartTotal);
			$order['shipping'] = 0;
			$order['total'] = sprintf('%.2f', $cartTotal);

			$this->Session->write('Shop.Order', $order );//+ $shop['Order']);

			$this->Session->write('Shop.Users', $users);

			return true;
		}
		else {
			$this->Session->delete('Shop');
			return false;
		}
	}

//////////////////////////////////////////////////

	public function clear() {
		$this->Session->delete('Shop');
	}

//////////////////////////////////////////////////

	protected function calculateFlatShippingPrice($user) {
		if (($user['flat_ship_level_1_low'] <= $user['subtotal']) && ($user['flat_ship_level_1_high'] >= $user['subtotal'])) {
			return $user['flat_ship_level_1_price'];
		} elseif (($user['flat_ship_level_2_low'] <= $user['subtotal']) && ($user['flat_ship_level_2_high'] >= $user['subtotal'])) {
			return $user['flat_ship_level_2_price'];
		} elseif (($user['flat_ship_level_3_low'] <= $user['subtotal']) && ($user['flat_ship_level_3_high'] >= $user['subtotal'])) {
			return $user['flat_ship_level_3_price'];
		} elseif (($user['flat_ship_level_4_low'] <= $user['subtotal']) && ($user['flat_ship_level_4_high'] >= $user['subtotal'])) {
			return $user['flat_ship_level_4_price'];
		} else {
			return 0;
		}
	}

//////////////////////////////////////////////////

	protected function calculateFlatShippingQuantity($user) {
		if (($user['flat_ship_level_1_low'] <= $user['quantity']) && ($user['flat_ship_level_1_high'] >= $user['quantity'])) {
			return $user['flat_ship_level_1_price'];
		} elseif (($user['flat_ship_level_2_low'] <= $user['quantity']) && ($user['flat_ship_level_2_high'] >= $user['quantity'])) {
			return $user['flat_ship_level_2_price'];
		} elseif (($user['flat_ship_level_3_low'] <= $user['quantity']) && ($user['flat_ship_level_3_high'] >= $user['quantity'])) {
			return $user['flat_ship_level_3_price'];
		} elseif (($user['flat_ship_level_4_low'] <= $user['quantity']) && ($user['flat_ship_level_4_high'] >= $user['quantity'])) {
			return $user['flat_ship_level_4_price'];
		} else {
			return 0;
		}
	}

//////////////////////////////////////////////////

	protected function getProduct($id) {
		$product = ClassRegistry::init('Product')->find('first', array(
			'recursive' => -1,
			'contain' => array('User'),
			'fields' => array(
				'Product.id',
				'Product.user_id',
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
				'User.name',
				'User.email',
				'User.phone',
				'User.zip',
				'User.state',
				'User.flat_ship_level_1_low',
				'User.flat_ship_level_1_high',
				'User.flat_ship_level_1_price',
				'User.flat_ship_level_2_low',
				'User.flat_ship_level_2_high',
				'User.flat_ship_level_2_price',
				'User.flat_ship_level_3_low',
				'User.flat_ship_level_3_high',
				'User.flat_ship_level_3_price',
				'User.flat_ship_level_4_low',
				'User.flat_ship_level_4_high',
				'User.flat_ship_level_4_price',
				'User.flat_shipping',
				'User.ship_determinant',
				'User.shipping_method',
			),
			'conditions' => array(
				'Product.id' => $id
			)
		));
		if(empty($product)) {
			return false;
		} else {
			$this->product = $product;
		}
	}

//////////////////////////////////////////////////

}