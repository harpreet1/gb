<h2>Edit Client</h2>

<?php echo $this->Form->create('Project');?>
<?php
echo $this->Form->input('id');
echo $this->Form->input('projectcategory_id', array('label' => 'Status'));
echo $this->Form->input('body');
echo $this->Form->input('active', array('type' => 'checkbox', 'label' => 'Active'));
?>

<br />
<?php echo $this->Form->button('Submit', array('class' => 'btn')); ?>
<?php echo $this->Form->end(); ?>

<br />
<br />

<h3>Actions</h3>

<br />

<?php echo $this->Form->postLink('Delete', array('action' => 'delete', $this->Form->value('Project.id')), array('class' => 'btn btn-danger'), __('Are you sure you want to delete # %s?', $this->Form->value('Project.id'))); ?><br />

<br />
<br />

