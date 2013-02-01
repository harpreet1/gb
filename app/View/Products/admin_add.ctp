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

<h2>Admin Add Product</h2>

<div class="row">

	<div class="span4">
        
        <?php echo $this->Form->create('Product'); ?>
        <?php
        echo $this->Form->input('user_id');
        echo $this->Form->input('category_id', array('empty' => '---choose--'));
        //echo $this->Form->input('category_name');
        echo $this->Form->input('subcategory_id', array('empty' => '---choose--'));
        //echo $this->Form->input('subcategory_name');
        echo $this->Form->input('subsubcategory_id', array('empty' => '---choose ( not required )'));
        //echo $this->Form->input('subsubcategory_name');
        echo $this->Form->input('upc');
        echo $this->Form->input('vendor_sku');
        echo $this->Form->input('brand_id');
        echo $this->Form->input('name');
        echo $this->Form->input('slug');
        echo $this->Form->input('description');
        echo $this->Form->input('long_description', array('rows' => 20, 'class' => 'input-xxlarge'));
		echo $this->Form->input('generic_description', array('rows' => 20, 'class' => 'input-xxlarge'));
        echo $this->Form->input('tags');
        echo $this->Form->input('featured_product', array('type' => 'checkbox', 'label' => 'Featured Product'));
        echo $this->Form->input('gift_product', array('type' => 'checkbox', 'label' => 'Gift Product'));
        echo $this->Form->input('price_wholesale');
        echo $this->Form->input('price_list');
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
        echo $this->Form->input('nutrition', array('rows' => 10));
        echo $this->Form->input('recipes');
        echo $this->Form->input('serving_suggestions', array('rows' => 20, 'class' => 'input-xlarge'));
        echo $this->Form->input('country');
        echo $this->Form->input('creation');
        ?>

	</div>

</div>


<br />
<?php
echo $this->Form->input('attr_allergen_free', array('type' => 'checkbox'));
echo $this->Form->input('attr_gluten_free', array('type' => 'checkbox'));
echo $this->Form->input('attr_vegetarian', array('type' => 'checkbox'));
echo $this->Form->input('attr_fat_free', array('type' => 'checkbox'));
echo $this->Form->input('attr_sugar_free', array('type' => 'checkbox'));
echo $this->Form->input('attr_no_msg', array('type' => 'checkbox'));
echo $this->Form->input('attr_lactose_free', array('type' => 'checkbox'));
echo $this->Form->input('attr_low_carb', array('type' => 'checkbox'));
echo $this->Form->input('attr_nut_free', array('type' => 'checkbox'));
echo $this->Form->input('attr_heart_smart', array('type' => 'checkbox'));
echo $this->Form->input('attr_no_preservatives', array('type' => 'checkbox'));
echo $this->Form->input('attr_organic', array('type' => 'checkbox'));
echo $this->Form->input('attr_kosher', array('type' => 'checkbox'));
echo $this->Form->input('attr_halal', array('type' => 'checkbox'));
echo $this->Form->input('attr_fair_traded', array('type' => 'checkbox'));
echo $this->Form->input('attr_give_back', array('type' => 'checkbox'));
echo $this->Form->input('attr_heat_sensitivity', array('type' => 'checkbox'));
echo $this->Form->input('attr_all_natural', array('type' => 'checkbox'));
echo $this->Form->input('attr_award_winning', array('type' => 'checkbox'));
?>
<br />

<div class="row">

	<div class="span1 nutrition">
		<?php echo $this->Form->input('nut_calories', array('class' => 'span1','label' => 'Calories')); ?>
	</div>
	<div class="span2 nutrition">
		<?php echo $this->Form->input('nut_calories_from_fat', array('class' => 'span1','label' => 'Cal from Fat')); ?>
	</div>
	<div class="span1 nutrition">
		<?php echo $this->Form->input('nut_total_fat', array('class' => 'span1','label' => 'Total Fat')); ?>
	</div>

	<div class="span2 nutrition">
		<?php echo $this->Form->input('nut_saturated_fat', array('class' => 'span1','label' => 'Saturated Fat')); ?>
	</div>
	<div class="span1 nutrition">
		<?php echo $this->Form->input('nut_cholesterol', array('class' => 'span1','label' => 'Cholesterol')); ?>
	</div>

</div>

<div class="row">

	<div class="span1 nutrition">
		<?php echo $this->Form->input('nut_sodium', array('class' => 'span1','label' => 'Sodium')); ?>
	</div>
	<div class="span1 nutrition">
		<?php echo $this->Form->input('nut_sodium_p', array('class' => 'span1','label' => 'Daily %')); ?>
	</div>
	<div class="span1 nutrition">
		<?php echo $this->Form->input('nut_carbs', array('class' => 'span1','label' => 'Calories')); ?>
	</div>
	<div class="span1 nutrition">
		<?php echo $this->Form->input('nut_carbs_p', array('class' => 'span1','label' => 'Daily %')); ?>
	</div>
	<div class="span1 nutrition">
		<?php echo $this->Form->input('nut_fiber', array('class' => 'span1','label' => 'Fiber')); ?>
	</div>
		<div class="span1 nutrition">
		<?php echo $this->Form->input('nut_fiber_p', array('class' => 'span1','label' => 'Daily %')); ?>
	</div>

</div>


<div class="row">

	<div class="span1 nutrition">
		<?php echo $this->Form->input('nut_sugar', array('class' => 'span1','label' => 'Sugar')); ?>
	</div>
	<div class="span1 nutrition">
		<?php echo $this->Form->input('nut_sugar_p', array('class' => 'span1','label' => 'Daily %')); ?>
	</div>
	<div class="span1 nutrition">
		<?php echo $this->Form->input('nut_protein', array('class' => 'span1','label' => 'Protein')); ?>
	</div>
	<div class="span1 nutrition">
		<?php echo $this->Form->input('nut_protein_p', array('class' => 'span1','label' => 'Daily %')); ?>
	</div>

	<div class="span1 nutrition">
		<?php echo $this->Form->input('nut_vitamin_a', array('class' => 'span1','label' => 'Vitamin A')); ?>
	</div>
	<div class="span1 nutrition">
		<?php echo $this->Form->input('nut_vitamin_a_p', array('class' => 'span1','label' => 'Daily %')); ?>
	</div>

</div>

<div class="row">

	<div class="span1 nutrition">
		<?php echo $this->Form->input('nut_vitamin_c', array('class' => 'span1','label' => 'Vitamin C')); ?>
	</div>
	<div class="span1 nutrition">
		<?php echo $this->Form->input('nut_vitamin_c_p', array('class' => 'span1','label' => 'Daily %')); ?>
	</div>

	<div class="span1 nutrition">
		<?php echo $this->Form->input('nut_calcium', array('class' => 'span1','label' => 'Calcium')); ?>
	</div>
	<div class="span1 nutrition">
		<?php echo $this->Form->input('nut_calcium_p', array('class' => 'span1','label' => 'Daily %')); ?>
	</div>

	<div class="span1 nutrition">
		<?php echo $this->Form->input('nut_iron', array('class' => 'span1','label' => 'Iron')); ?>
	</div>
	<div class="span1 nutrition">
		<?php echo $this->Form->input('nut_iron_p', array('class' => 'span1','label' => 'Daily %')); ?>
	</div>


</div>




<br />
<br />



<?php
echo $this->Form->input('related_products');
echo $this->Form->input('active', array('type' => 'checkbox', 'label' => 'Active'));
?>
<br />
<?php echo $this->Form->button('Submit', array('class' => 'btn')); ?>
<?php echo $this->Form->end(); ?>
