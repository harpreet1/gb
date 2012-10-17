<?php
class CountShell extends Shell {

////////////////////////////////////////////////////////////

	public $uses = array('User', 'Product', 'Category', 'Subcategory', 'Subsubcategory');

////////////////////////////////////////////////////////////

	public function main() {

		$this->out('Start');

		$this->usersProductCount();

		$this->categoryProductCount();

		$this->subcategoryProductCount();

		$this->subsubcategoryProductCount();

		$this->out('End');

	}

////////////////////////////////////////////////////////////

	public function usersProductCount() {
		$users = $this->User->find('all');
		foreach($users as $user) {
			$product_count = $this->Product->find('count', array(
				'conditions' => array(
					//'Product.active' => 1,
					'Product.user_id' => $user['User']['id'],
				)
			));
			$this->out($user['User']['id']);
			$this->out($user['User']['name']);
			$this->out($product_count);
			$this->out('==========');
			$u['User']['id'] = $user['User']['id'];
			$u['User']['product_count'] = $product_count;
			$this->User->save($u, false);
		}
	}

////////////////////////////////////////////////////////////

	public function categoryProductCount() {
		$categories = $this->Category->find('all');
		foreach($categories as $category) {
			$product_count = $this->Product->find('count', array(
				'conditions' => array(
					//'Product.active' => 1,
					'Product.category_id' => $category['Category']['id'],
				)
			));
			$this->out($category['Category']['id']);
			$this->out($category['Category']['name']);
			$this->out($product_count);
			$this->out('==========');
			$c['Category']['id'] = $category['Category']['id'];
			$c['Category']['product_count'] = $product_count;
			$this->Category->save($c, false);
		}
	}

////////////////////////////////////////////////////////////

	public function subcategoryProductCount() {
		$subcategories = $this->Subcategory->find('all');
		foreach($subcategories as $subcategory) {
			$product_count = $this->Product->find('count', array(
				'conditions' => array(
					//'Product.active' => 1,
					'Product.subcategory_id' => $subcategory['Subcategory']['id'],
				)
			));
			$this->out($subcategory['Subcategory']['id']);
			$this->out($subcategory['Subcategory']['name']);
			$this->out($product_count);
			$this->out('==========');
			$s['Subcategory']['id'] = $subcategory['Subcategory']['id'];
			$s['Subcategory']['product_count'] = $product_count;
			$this->Subcategory->save($s, false);
		}
	}

////////////////////////////////////////////////////////////

	public function subsubcategoryProductCount() {
		$subsubcategories = $this->Subsubcategory->find('all');
		foreach($subsubcategories as $subsubcategory) {
			$product_count = $this->Product->find('count', array(
				'conditions' => array(
					//'Product.active' => 1,
					'Product.subsubcategory_id' => $subsubcategory['Subsubcategory']['id'],
				)
			));
			$this->out($subsubcategory['Subsubcategory']['id']);
			$this->out($subsubcategory['Subsubcategory']['name']);
			$this->out($product_count);
			$this->out('==========');
			$ss['Subsubcategory']['id'] = $subsubcategory['Subsubcategory']['id'];
			$ss['Subsubcategory']['product_count'] = $product_count;
			$this->Subsubcategory->save($ss, false);
		}
	}

////////////////////////////////////////////////////////////

}
