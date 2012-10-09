<?php echo $this->Html->script('/tiny_mce/tiny_mce.js'); ?>

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

<h2>Admin Edit Product</h2>

<?php echo $this->Form->create('Product'); ?>
<?php echo $this->Form->input('id'); ?>

<div class="row-fluid">
	<?php echo $this->Form->input('user_id');?>

	<div class="span12">
	
		<div class="span2">
			<?php echo $this->Form->input('name');?>
		</div>
		<div class="span2">
			<?php echo $this->Form->input('category_id');?>	
		</div>
		<!--<div class="span2">
			<?php //echo $this->Form->input('category_name');?>
		</div>-->
		<div class="span2">
			<?php echo $this->Form->input('subcategory_id');?>
		</div>	
		<!--<div class="span2">
			<?php //echo $this->Form->input('subcategory_name');?>
		</div>-->
		<div class="span2">
			<?php echo $this->Form->input('subsubcategory_id');?>
		</div>				
		<!--<div class="span2">
			<?php //echo $this->Form->input('subsubcategory_name');?>
		</div>-->
</div>

	<div class="span12">
		<div class="span2">
			<?php echo $this->Form->input('slug');?>
		</div>				
		<div class="span2">
			<?php echo $this->Form->input('brand');?>
		</div>			
		<div class="span2">
			<?php echo $this->Form->input('upc');?>
		</div>				
		<div class="span2">
			<?php echo $this->Form->input('vendor_sku');?>
		</div>				
		
	</div>
	
	
	<div class="span12">
		<div class="span4">
			<?php echo $this->Form->input('description', array('rows' => 10, 'cols' => 10)); ?>
		</div>				
		<div class="span4">
			<?php echo $this->Form->input('tags', array('class' => '4span')); ?>
			<br />
			<?php echo $this->Form->input('featured_product', array('type' => 'checkbox', 'label' => 'Featured Product'));?>
			<?php echo $this->Form->input('gift_product', array('type' => 'checkbox', 'label' => 'Gift Product'));?>

		</div>			
		
	</div>

	<div class="span12">
		<div class="span4">
			<?php echo $this->Form->input('long_description', array('rows' => 20, 'class' => '4span')); ?>
		</div>

		<div class="span2">
			<?php echo $this->Form->input('traditions');?>
			<?php echo $this->Form->input('ustradition_id', array('empty' => ''));?>
			<?php echo $this->Form->input('country');?>
			<?php echo $this->Form->input('creation');?>


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
	<div class="span12">
		<div class="span4">
			<?php echo $this->Form->input('ingredients', array('rows' => 10, 'class' => '4span')); ?>
			<?php echo $this->Form->input('nutrition', array('rows' => 10, 'class' => '4span')); ?>
			<?php echo $this->Form->input('recipes', array('rows' => 10, 'class' => '4span')); ?>
			<?php echo $this->Form->input('serving_suggestions', array('rows' => 10, 'class' => '4span')); ?>
		</div>
	
	
		<div class="span2">
			<?php echo $this->Form->input('cost');?>
			<?php echo $this->Form->input('price');?>
			<?php echo $this->Form->input('list_price');?>
			<?php echo $this->Form->input('selling_price');?><br />
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


		</div>				
	</div>
	
</div>	
	
<br />





<br />
<br />

<?php echo $this->Html->image('products/image/' . $product['Product']['image']); ?>

<br />
<br />

<div class="row"><h3>PICTURE UPLOADS:</h3>
<div class="span5">

<span class="label label-warning">
 &nbsp; Image : no watermark, square image size &nbsp;
</span>

<br />
<br />

<?php echo $this->Form->create('Product', array('type' => 'file', 'url' => array('controller' => 'products', 'action' => 'view', 'admin' => true)));?>
<?php echo $this->Form->hidden('id', array('value' => $product['Product']['id'])); ?>
<table class="table table-striped table-bordered table-condensed">
	<tbody>
		<tr>
			<td>Upload Image</td>
			<td><?php echo $this->Form->file('image'); ?></td>
		</tr>
		<tr>
			<td>Image Rtpe</td>
			<td>

			<?php echo $this->Form->input('image_type', array('type' => 'select', 'label' => false, 'options' => array(
				'image' => 'Main',
				'image_1' => 'image 1',
				'image_2' => 'image 2',
				'image_3' => 'image 3',
				'image_4' => 'image 4',
				'image_5' => 'image 5',
			))); ?>

			</td>
		</tr>
		<tr>
			<td></td>
			<td><?php echo $this->Form->button('Submit', array('class' => 'btn'));?></td>
		</tr>
	</tbody>
</table>
<?php echo $this->Form->end(); ?>
</div>
</div>








<?php
echo $this->Form->input('related_products');
echo $this->Form->input('active', array('type' => 'checkbox', 'label' => 'Active'));
?>
<br />
<?php echo $this->Form->button('Submit', array('class' => 'btn')); ?>
<?php echo $this->Form->end(); ?>

<h3>Actions</h3>
<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Product.id')), array('class' => 'btn btn-danger'), __('Are you sure you want to delete # %s?', $this->Form->value('Product.id'))); ?>

