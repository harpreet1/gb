<?php echo $this->Html->script('/tiny_mce/tiny_mce.js'); ?>

<script type="text/javascript">
	tinyMCE.init({
		mode : "textareas",
		theme : "advanced",
		skin: "thebigreason",
		plugins : "inlinepopups",
		// Theme options
		theme_advanced_buttons1 : "bold,italic,underline,|,link,unlink,|,cleanup,removeformat,code",
		theme_advanced_resizing : true,
	});
</script>

<h2>Admin Edit Product</h2>

<?php echo $this->Form->create('Product'); ?>
<?php
echo $this->Form->input('id');
echo $this->Form->input('user_id');
echo $this->Form->input('category_id');
echo $this->Form->input('category');
echo $this->Form->input('subcategory_id');
echo $this->Form->input('subcategory');
echo $this->Form->input('subsubcategory_id');
echo $this->Form->input('subsubcategory');
echo $this->Form->input('upc');
echo $this->Form->input('item');
echo $this->Form->input('vendor_sku');
echo $this->Form->input('brand');
echo $this->Form->input('brand_id');
echo $this->Form->input('name');
echo $this->Form->input('slug');
echo $this->Form->input('description');
echo $this->Form->input('long_description', array('rows' => 20, 'class' => 'input-xxlarge'));
echo $this->Form->input('tags');
echo $this->Form->input('image_original');
echo $this->Form->input('image');
echo $this->Form->input('image_1');
echo $this->Form->input('image_2');
echo $this->Form->input('image_3');
echo $this->Form->input('image_4');
echo $this->Form->input('image_5');
?>
<br />
Featured Product <?php echo $this->Form->checkbox('featured_product'); ?>
<br />
Gift Product <?php echo $this->Form->checkbox('gift_product'); ?>
<br />
<?php
echo $this->Form->input('cost');
echo $this->Form->input('list_price');
echo $this->Form->input('selling_price');
echo $this->Form->input('price');
echo $this->Form->input('taxable');
echo $this->Form->input('stock');
echo $this->Form->input('ratings');
echo $this->Form->input('tradition_ids');
echo $this->Form->input('dom_tradition_ids');
echo $this->Form->input('measurement');
echo $this->Form->input('weight_unit');
echo $this->Form->input('weight');
echo $this->Form->input('shipping_weight');
echo $this->Form->input('volume');
echo $this->Form->input('volume_unit');
echo $this->Form->input('dimension_unit');
echo $this->Form->input('height');
echo $this->Form->input('length');
echo $this->Form->input('width');
echo $this->Form->input('ingredients');
echo $this->Form->input('nutrition');
echo $this->Form->input('recipes');
echo $this->Form->input('country_id');
echo $this->Form->input('culinary_country_id');
echo $this->Form->input('ethnicity_id');
echo $this->Form->input('checked');
echo $this->Form->input('allergen_free');
echo $this->Form->input('gluten_free');
echo $this->Form->input('vegetarian');
echo $this->Form->input('fat_free');
echo $this->Form->input('sugar_free');
echo $this->Form->input('no_msg');
echo $this->Form->input('lactose_free');
echo $this->Form->input('low_carb');
echo $this->Form->input('nut_free');
echo $this->Form->input('heart_smart');
echo $this->Form->input('no_preservatives');
echo $this->Form->input('organic');
echo $this->Form->input('kosher');
echo $this->Form->input('halal');
echo $this->Form->input('fair_traded');
echo $this->Form->input('give_back');
echo $this->Form->input('creation_id');
echo $this->Form->input('heat_sensitivity');
echo $this->Form->input('all_natural');
echo $this->Form->input('award_winning');
echo $this->Form->input('related_products');
echo $this->Form->input('Tag');
?>
<br />
Active <?php echo $this->Form->checkbox('active'); ?>
<br />

<br />
<br />
<?php echo $this->Form->button('Submit', array('class' => 'btn')); ?>
<?php echo $this->Form->end(); ?>

<h3>Actions</h3>
<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Product.id')),  array('class' => 'btn btn-danger'), __('Are you sure you want to delete # %s?', $this->Form->value('Product.id'))); ?>

