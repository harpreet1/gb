<h2>Admin Add Note</h2>

<?php echo $this->Form->create('Note');?>
<?php
echo $this->Form->input('name');
echo $this->Form->input('note');
echo $this->Form->input('active', array('type' => 'checkbox', 'label' => 'Active'));
?>

<br />
<?php echo $this->Form->button('Submit', array('class' => 'btn')); ?>
<?php echo $this->Form->end(); ?>

<br />
<br />
<br />
<br />
