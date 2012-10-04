<h2>Admin Edit Article</h2>

<?php echo $this->Form->create('Article'); ?>
<?php
echo $this->Form->input('id');
echo $this->Form->input('name');
echo $this->Form->input('slug');
echo $this->Form->input('body');
echo $this->Form->input('active');
?>
<br />
<?php echo $this->Form->end(__('Submit')); ?>

<br />
<br />

<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Article.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Article.id'))); ?></li>
	</ul>
</div>




