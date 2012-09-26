<div class="culinaryregions form">
<?php echo $this->Form->create('Culinaryregion'); ?>
	<fieldset>
		<legend><?php echo __('Admin Add Culinaryregion'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('slug');
		echo $this->Form->input('countries');
		echo $this->Form->input('summary');
		echo $this->Form->input('article');
		echo $this->Form->input('image');
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

		<li><?php echo $this->Html->link(__('List Culinaryregions'), array('action' => 'index')); ?></li>
	</ul>
</div>
