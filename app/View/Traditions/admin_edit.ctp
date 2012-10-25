<h2>Admin Edit Tradition</h2>

<br />

<?php echo $this->Form->create('Tradition'); ?>
<?php
echo $this->Form->input('id');
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
<?php echo $this->Form->button('Submit', array('class' => 'btn')); ?>
<?php echo $this->Form->end(); ?>

<br />
<br />

<h3>Actions</h3>

<br />
<br />

<?php echo $this->Form->postLink('Delete', array('action' => 'delete', $this->Form->value('Tradition.id')), array('class' => 'btn btn-danger'), __('Are you sure you want to delete # %s?', $this->Form->value('Tradition.id'))); ?>

<br />
<br />

