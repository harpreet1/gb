<h2>Admin Add Project</h2>

<?php echo $this->Form->create('Project');?>
<?php

echo $this->Form->input('projectcategory_id');
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
