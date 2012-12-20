<?php

echo ini_get("memory_limit")."\n";
ini_set("memory_limit","1024M");
echo ini_get("memory_limit")."\n";
//die;

class ProductupdateShell extends Shell {

	public $uses = array('Product');

	public function main() {

		App::uses('Sanitize', 'Utility');
		App::uses('Xml', 'Utility');

		$filename = TMP . 'Products117_20121220.xml';

		$itemsTemp = Xml::toArray(Xml::build($filename));

		echo count($itemsTemp['maestro']['product']);

		$changed = '';
		$tmrow = '';

		foreach($itemsTemp['maestro']['product'] as $maestro) {

			//print_r($maestro);

			$product = $this->Product->find('first', array(
				'recursive' => -1,
				'fields' => array(
					'Product.id',
					'Product.vendor_sku',
					'Product.name',
					'Product.price',
					'Product.price_wholesale',
					'Product.price_list',
				),
				'conditions' => array(
					'Product.user_id' => 11,
					'Product.vendor_sku' => $maestro['productid']
				),
			));

			if(!empty($product)) {

				if($maestro['cost'] != $product['Product']['price_wholesale']) {

					// echo "\n\n";
					// echo '####################################################################';
					// echo "\n\n";
					// echo $maestro['productname'] . "\n";
					// echo $maestro['cost'] . "\n";
					// echo "\n\n";
					// print_r($product);
					// echo '####################################################################';
					// echo "\n\n";

					$row = "\n MAESTRO NAME: " . urldecode($maestro['productname']) . ' - MAESTRO COST: ' . $maestro['cost'] . ' === GB ID: ' . $product['Product']['id'] . ' GB NAME: ' . $product['Product']['name'] . ' - GB WHOLESALE: ' . $product['Product']['price_wholesale'] . ' GB PRICE: ' . $product['Product']['price'];

					if($row != $tmrow) {
						$changed .= $row;
						echo $row;
					}

					$tmrow = $row;

				}

			}

		}

		//mail('info@gourmet-basket.com', 'Maestro price changes script', $changed);
		echo "\n\n\n";
		echo $changed;

	}

}
