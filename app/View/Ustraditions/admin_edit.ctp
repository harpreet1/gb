<h2>Admin Edit US Tradition</h2>

<?php echo $this->Form->create('Ustradition'); ?>
<?php
echo $this->Form->input('id');
echo $this->Form->input('name');
echo $this->Form->input('slug');
echo $this->Form->input('states');
echo $this->Form->input('summary');
echo $this->Form->input('article');
echo $this->Form->input('main_image');
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

<?php echo $this->Form->postLink('Delete', array('action' => 'delete', $this->Form->value('Ustradition.id')), array('class' => 'btn btn-danger'), __('Are you sure you want to delete # %s?', $this->Form->value('Ustradition.id'))); ?></li>

<br />
<br />

