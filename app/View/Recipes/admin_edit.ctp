<div class="recipes form">
<?php echo $this->Form->create('Recipe'); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit Recipe'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('user_id');
		echo $this->Form->input('sub_category_id');
		echo $this->Form->input('category_id');
		echo $this->Form->input('name');
		echo $this->Form->input('slug');
		echo $this->Form->input('description');
		echo $this->Form->input('tags');
		echo $this->Form->input('ingredients');
		echo $this->Form->input('preparation');
		echo $this->Form->input('comment');
		echo $this->Form->input('image_1');
		echo $this->Form->input('image_2');
		echo $this->Form->input('image_3');
		echo $this->Form->input('image_caption_1');
		echo $this->Form->input('image_caption_2');
		echo $this->Form->input('image_caption_3');
		echo $this->Form->input('active');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Recipe.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Recipe.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Recipes'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sub Categories'), array('controller' => 'sub_categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sub Category'), array('controller' => 'sub_categories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Categories'), array('controller' => 'categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Category'), array('controller' => 'categories', 'action' => 'add')); ?> </li>
	</ul>
</div>
