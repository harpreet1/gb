<h2>Add Client</h2>

<?php echo $this->Form->create('Project');?>
<?php

echo $this->Form->input('projectcategory_id', array('label' => 'Status'));
echo $this->Form->input('source', array('label' => 'Source')); 

echo $this->Form->input('body');
echo $this->Form->input('active', array('type' => 'checkbox', 'label' => 'Active'));
?>

<br />
<?php echo $this->Form->button('Submit', array('class' => 'btn')); ?>
<?php echo $this->Form->end(); ?>

<br />
<br />
<br />
<br />
