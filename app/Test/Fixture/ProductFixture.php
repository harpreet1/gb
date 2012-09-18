<?php
/**
 * ProductFixture
 *
 */
class ProductFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'category_id' => array('type' => 'integer', 'null' => true, 'default' => '0'),
		'sku' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'upc' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'name' => array('type' => 'string', 'null' => true, 'default' => null, 'key' => 'index', 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'slug' => array('type' => 'string', 'null' => true, 'default' => null, 'key' => 'index', 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'brand_id' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'brand' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'category_name' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'subcategory' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'sub_subcategory' => array('type' => 'string', 'null' => true, 'default' => null, 'key' => 'index', 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'image_original' => array('type' => 'string', 'null' => true, 'default' => null, 'key' => 'index', 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'image' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'list_price' => array('type' => 'string', 'null' => true, 'default' => null, 'key' => 'index', 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'cost' => array('type' => 'string', 'null' => true, 'default' => null, 'key' => 'index', 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'selling_price' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'new' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'width' => array('type' => 'string', 'null' => true, 'default' => '0', 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'height' => array('type' => 'string', 'null' => true, 'default' => '0', 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'weight' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'weight_unit' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'price' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 8, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'volume' => array('type' => 'string', 'null' => true, 'default' => '0', 'key' => 'index', 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'volume_unit' => array('type' => 'string', 'null' => true, 'default' => '0', 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'nutrition' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => null, 'key' => 'index'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'manufacturer' => array('column' => 'sub_subcategory', 'unique' => 0),
			'advertisercategory' => array('column' => 'list_price', 'unique' => 0),
			'manufacturer_slug' => array('column' => 'image_original', 'unique' => 0),
			'advertisercategory_slug' => array('column' => 'cost', 'unique' => 0),
			'name' => array('column' => 'name', 'unique' => 0),
			'modified' => array('column' => 'modified', 'unique' => 0),
			'name_slug' => array('column' => 'slug', 'unique' => 0),
			'views' => array('column' => 'volume', 'unique' => 0)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_unicode_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'category_id' => 1,
			'sku' => 'Lorem ipsum dolor sit amet',
			'upc' => 'Lorem ipsum dolor sit amet',
			'name' => 'Lorem ipsum dolor sit amet',
			'slug' => 'Lorem ipsum dolor sit amet',
			'brand_id' => 'Lorem ipsum dolor sit amet',
			'brand' => 'Lorem ipsum dolor sit amet',
			'category_name' => 'Lorem ipsum dolor sit amet',
			'subcategory' => 'Lorem ipsum dolor sit amet',
			'sub_subcategory' => 'Lorem ipsum dolor sit amet',
			'image_original' => 'Lorem ipsum dolor sit amet',
			'image' => 'Lorem ipsum dolor sit amet',
			'list_price' => 'Lorem ipsum dolor sit amet',
			'cost' => 'Lorem ipsum dolor sit amet',
			'selling_price' => 'Lorem ipsum dolor sit amet',
			'new' => 'Lorem ipsum dolor sit amet',
			'width' => 'Lorem ipsum dolor sit amet',
			'height' => 'Lorem ipsum dolor sit amet',
			'weight' => 'Lorem ipsum dolor sit amet',
			'weight_unit' => 'Lorem ipsum dolor sit amet',
			'price' => 'Lorem ',
			'volume' => 'Lorem ipsum dolor sit amet',
			'volume_unit' => 'Lorem ipsum dolor sit amet',
			'nutrition' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-09-13 14:21:33',
			'modified' => '2012-09-13 14:21:33'
		),
	);

}
