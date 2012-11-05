<?php echo $this->Html->script(array('jquery.chained.js'), array('inline' => false)); ?>

<?php echo $this->Html->script('/tiny_mce/tiny_mce.js', array('inline' => false)); ?>

<script type="text/javascript">
	tinyMCE.init({
		mode : "textareas",
		theme : "advanced",
		skin: "thebigreason",
		plugins : "inlinepopups",
		plugins : "paste",
		// Theme options
		theme_advanced_buttons1 : "bold,italic,underline,|,link,unlink,|,bullist,numlist,|,pastetext,pasteword,selectall,|,cleanup,removeformat,code",
		theme_advanced_resizing : true,
	});
</script>

<script type="text/javascript">

$(document).ready(function(){

	$("#ProductSubcategoryId").chained("#ProductCategoryId");
	$("#ProductSubsubcategoryId").chained("#ProductSubcategoryId");

});

</script>


<h2>Admin Edit Product</h2>

<?php echo $this->Form->create('Product'); ?>
<?php echo $this->Form->input('id'); ?>


<div class="row">

	<div class="span3">
		<?php echo $this->Form->input('user_id'); ?>
	</div>

</div>

<div class="row">

		<div class="span3">
			<?php echo $this->Form->input('name'); ?>
		</div>
		<div class="span3">
			<?php echo $this->Form->input('category_id', array('empty' => '-')); ?>
		</div>
		<div class="span3">
			<?php echo $this->Form->input('subcategory_id', array('empty' => '-')); ?>
		</div>
		<div class="span3">
			<?php echo $this->Form->input('subsubcategory_id', array('empty' => '-')); ?>
		</div>

</div>

<div class="row">

	<div class="span3">
		<?php echo $this->Form->input('slug'); ?>
	</div>

	<div class="span3">
		<?php echo $this->Form->input('brand'); ?>
	</div>

	<div class="span3">
		<?php echo $this->Form->input('upc'); ?>
	</div>

	<div class="span3">
		<?php echo $this->Form->input('vendor_sku'); ?>
	</div>

</div>

<br />
<br />

<div class="row">

	<div class="span5">
		<?php echo $this->Form->input('description', array('rows' => 10, 'class' => 'field span5')); ?>
	</div>

	<div class="span5">
		<?php echo $this->Form->input('brand_description', array('rows' => 10, 'cols' => 10)); ?>
	</div>

	<div class="span2">
		<?php echo $this->Form->input('tags', array('class' => '4span')); ?>
		<br />
		<?php echo $this->Form->input('featured_product', array('type' => 'checkbox', 'label' => 'Featured Product'));?>
		<?php echo $this->Form->input('gift_product', array('type' => 'checkbox', 'label' => 'Gift Product'));?>
	</div>

</div>

<br />
<br />

<div class="row">

	<div class="span5">
		<div><?php echo $this->Form->input('long_description', array('rows' => 20, 'class' => '4span')); ?></div>
		<div><?php echo $this->Form->input('generic_description', array('rows' => 20, 'class' => '4span')); ?></div>
	</div>

	<div class="span3">
		<?php echo $this->Form->input('traditions', array('type' => 'select', 'multiple' => 'checkbox', 'options' => $traditions, 'selected' => $traditionsselected)); ?>
		<br />
		<br />
		<?php echo $this->Form->input('ustradition_id', array('empty' => '--')); ?>
		<?php echo $this->Form->input('country'); ?>
		<?php echo $this->Form->input('creation'); ?>
	</div>

	<div class="span2">
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
	</div>

</div>

<br />
<br />

<div class="row">

	<div class="span5">
		<?php echo $this->Form->input('ingredients', array('rows' => 10, 'class' => '4span')); ?>
		<?php echo $this->Form->input('nutrition', array('rows' => 10, 'class' => '4span')); ?>
		<?php echo $this->Form->input('recipes', array('rows' => 10, 'class' => '4span')); ?>
		<div><?php echo $this->Form->input('serving_suggestions', array('rows' => 10, 'class' => '4span')); ?></div>
		<?php echo $this->Form->input('attribution', array('rows' => 4, 'class' => '4span')); ?>
	</div>

	<div class="span3">
		<div class="emphasize">Commission: <?php echo h($product['User']['commission']); ?>%</div>
		<?php echo $this->Form->input('price_wholesale');?>
		<?php echo $this->Form->input('price_list');?>
		<div class="emphasize">Markup: <?php echo h($product['Product']['markup']); ?>%</div>
		<?php echo $this->Form->input('price');?>
		<?php echo $this->Form->input('taxable', array('type' => 'checkbox'));?><br />
		<?php echo $this->Form->input('measurement');?>
		<?php echo $this->Form->input('weight_unit');?>
		<?php echo $this->Form->input('weight');?>
		<?php echo $this->Form->input('shipping_weight');?>
		<?php echo $this->Form->input('volume');?>
		<?php echo $this->Form->input('volume_unit');?>
		<?php echo $this->Form->input('dimension_unit');?>
		<?php echo $this->Form->input('height');?>
		<?php echo $this->Form->input('length');?>
		<?php echo $this->Form->input('width');?>
		<?php echo $this->Form->input('related_products'); ?>
	</div>

</div>

<br />
<br />

<div class="row">

	<div class="span3">
		<?php echo $this->Form->input('active', array('type' => 'checkbox', 'label' => 'Active')); ?>
		<br />
		<?php echo $this->Form->button('Submit', array('class' => 'btn')); ?>
		<?php echo $this->Form->end(); ?>

	</div>

</div>

<br />
<br />

<h3>Actions</h3>

<br />

<?php echo $this->Html->link('View', array('action' => 'view', $product['Product']['id']), array('class' => 'btn')); ?>

<br />
<br />

<?php echo $this->Form->postLink('Delete', array('action' => 'delete', $this->Form->value('Product.id')), array('class' => 'btn btn-danger'), __('Are you sure you want to delete # %s?', $this->Form->value('Product.id'))); ?>

<br />
<br />

