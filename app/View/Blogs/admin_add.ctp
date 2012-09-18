<div class="blogs form">
<?php echo $this->Form->create('Blog'); ?>
	<fieldset>
		<legend><?php echo __('Admin Add Blog'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('slug');
		echo $this->Form->input('body');
		echo $this->Form->input('active');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Blogs'), array('action' => 'index')); ?></li>
	</ul>
</div>
