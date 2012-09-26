<div class="culinaryusregions form">
<?php echo $this->Form->create('Culinaryusregion'); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit Culinaryusregion'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('slug');
		echo $this->Form->input('states');
		echo $this->Form->input('summary');
		echo $this->Form->input('article');
		echo $this->Form->input('main_image');
		echo $this->Form->input('image_1');
		echo $this->Form->input('image_2');
		echo $this->Form->input('image_3');
		echo $this->Form->input('image_4');
		echo $this->Form->input('image_5');
		echo $this->Form->input('image_6');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Culinaryusregion.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Culinaryusregion.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Culinaryusregions'), array('action' => 'index')); ?></li>
	</ul>
</div>
