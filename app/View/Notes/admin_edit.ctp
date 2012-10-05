<h2>Admin Edit Note</h2>

<?php echo $this->Form->create('Note');?>
<?php
echo $this->Form->input('id');
echo $this->Form->input('name');
echo $this->Form->input('note');
echo $this->Form->input('active', array('type' => 'checkbox', 'label' => 'Active'));
?>

<br />
<?php echo $this->Form->button('Submit', array('class' => 'btn')); ?>
<?php echo $this->Form->end(); ?>

<br />
<br />

<h3>Actions</h3>

<br />

<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Note.id')), array('class' => 'btn btn-danger'), __('Are you sure you want to delete # %s?', $this->Form->value('Note.id'))); ?><br />

<br />
<br />

