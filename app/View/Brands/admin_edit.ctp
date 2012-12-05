<div class="brands form">
<?php echo $this->Form->create('Brand'); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit Brand'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('slug');
		echo $this->Form->input('description');
		echo $this->Form->input('summary');
		echo $this->Form->input('article');
		echo $this->Form->input('image');
	?>
	</fieldset>
<?php echo $this->Form->end('Submit'); ?>
</div>
<div class="actions">
	<h3>Actions</h3>
	<ul>

		<li><?php echo $this->Form->postLink('Delete', array('action' => 'delete', $this->Form->value('Brand.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Brand.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Brands'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Products'), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product'), array('controller' => 'products', 'action' => 'add')); ?> </li>
	</ul>
</div>
