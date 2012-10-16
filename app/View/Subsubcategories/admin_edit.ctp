<div class="subsubcategories form">
<?php echo $this->Form->create('Subsubcategory'); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit Subsubcategory'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('subcategory_id');
		echo $this->Form->input('subcategory_name');
		echo $this->Form->input('name');
		echo $this->Form->input('slug');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Subsubcategory.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Subsubcategory.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Subsubcategories'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Subcategories'), array('controller' => 'subcategories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Subcategory'), array('controller' => 'subcategories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Products'), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product'), array('controller' => 'products', 'action' => 'add')); ?> </li>
	</ul>
</div>
