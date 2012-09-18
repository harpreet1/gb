<div class="products form">
<?php echo $this->Form->create('Product'); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit Product'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('sku');
		echo $this->Form->input('upc');
		echo $this->Form->input('name');
		echo $this->Form->input('slug');
		echo $this->Form->input('brand_id');
		echo $this->Form->input('brand');
		echo $this->Form->input('category_name');
		echo $this->Form->input('subcategory');
		echo $this->Form->input('sub_subcategory');
		echo $this->Form->input('image_original');
		echo $this->Form->input('image');
		echo $this->Form->input('list_price');
		echo $this->Form->input('cost');
		echo $this->Form->input('selling_price');
		echo $this->Form->input('new');
		echo $this->Form->input('width');
		echo $this->Form->input('height');
		echo $this->Form->input('weight');
		echo $this->Form->input('weight_unit');
		echo $this->Form->input('price');
		echo $this->Form->input('volume');
		echo $this->Form->input('volume_unit');
		echo $this->Form->input('nutrition');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Product.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Product.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Products'), array('action' => 'index')); ?></li>
	</ul>
</div>
