<h2>Admin Add Note</h2>

<?php echo $this->Form->create('Note');?>
<?php
echo $this->Form->input('name');
echo $this->Form->input('note');
echo $this->Form->checkbox('active');
?>
<br />
<?php echo $this->Form->end('Submit');?>

<br />
<br />
<br />
<br />
