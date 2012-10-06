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

<h2>Admin Add Product</h2>

<?php echo $this->Form->create('Product'); ?>
<?php
echo $this->Form->input('user_id');
echo $this->Form->input('category_id');
echo $this->Form->input('category_name');
echo $this->Form->input('subcategory_id');
echo $this->Form->input('subcategory_name');
echo $this->Form->input('subsubcategory_id');
echo $this->Form->input('subsubcategory_name');
echo $this->Form->input('upc');
echo $this->Form->input('vendor_sku');
echo $this->Form->input('brand');
echo $this->Form->input('name');
echo $this->Form->input('slug');
echo $this->Form->input('description');
echo $this->Form->input('long_description', array('rows' => 20, 'class' => 'input-xxlarge'));
echo $this->Form->input('tags');
echo $this->Form->input('featured_product', array('type' => 'checkbox', 'label' => 'Featured Product'));
echo $this->Form->input('gift_product', array('type' => 'checkbox', 'label' => 'Gift Product'));
echo $this->Form->input('cost');
echo $this->Form->input('list_price');
echo $this->Form->input('selling_price');
echo $this->Form->input('price');
echo $this->Form->input('taxable', array('type' => 'checkbox'));
echo $this->Form->input('traditions');
echo $this->Form->input('ustradition_id', array('empty' => ''));
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
echo $this->Form->input('country');
echo $this->Form->input('creation');
?>
<br />
<?php
echo $this->Form->input('allergen_free', array('type' => 'checkbox'));
echo $this->Form->input('gluten_free', array('type' => 'checkbox'));
echo $this->Form->input('vegetarian', array('type' => 'checkbox'));
echo $this->Form->input('fat_free', array('type' => 'checkbox'));
echo $this->Form->input('sugar_free', array('type' => 'checkbox'));
echo $this->Form->input('no_msg', array('type' => 'checkbox'));
echo $this->Form->input('lactose_free', array('type' => 'checkbox'));
echo $this->Form->input('low_carb', array('type' => 'checkbox'));
echo $this->Form->input('nut_free', array('type' => 'checkbox'));
echo $this->Form->input('heart_smart', array('type' => 'checkbox'));
echo $this->Form->input('no_preservatives', array('type' => 'checkbox'));
echo $this->Form->input('organic', array('type' => 'checkbox'));
echo $this->Form->input('kosher', array('type' => 'checkbox'));
echo $this->Form->input('halal', array('type' => 'checkbox'));
echo $this->Form->input('fair_traded', array('type' => 'checkbox'));
echo $this->Form->input('give_back', array('type' => 'checkbox'));
echo $this->Form->input('heat_sensitivity', array('type' => 'checkbox'));
echo $this->Form->input('all_natural', array('type' => 'checkbox'));
echo $this->Form->input('award_winning', array('type' => 'checkbox'));
?>
<br />
<?php
echo $this->Form->input('related_products');
echo $this->Form->input('active', array('type' => 'checkbox', 'label' => 'Active'));
?>
<br />
<?php echo $this->Form->button('Submit', array('class' => 'btn')); ?>
<?php echo $this->Form->end(); ?>

