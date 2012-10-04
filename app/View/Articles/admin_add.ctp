<h2>Admin Add Article</h2>

<?php echo $this->Form->create('Article'); ?>
<?php
echo $this->Form->input('name');
echo $this->Form->input('slug');
echo $this->Form->input('body');
echo $this->Form->input('active');
?>
<br />
<?php echo $this->Form->end(__('Submit')); ?>

