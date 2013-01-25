<h2>Edit Client</h2>

<div class="row">
	<div class="span4">

		<?php echo $this->Form->create('Project');?>
		<?php
		echo $this->Form->input('id');
		echo $this->Form->input('projectcategory_id', array('label' => 'Status'));
		echo $this->Form->input('source', array('label' => 'Source'));
		echo $this->Form->input('client_firstname');
		echo $this->Form->input('client_lastname');?>
		<br />
		<?php echo $this->Form->input('active', array('type' => 'checkbox', 'label' => 'Active')); ?>
		
		<br />
		<?php echo $this->Form->button('Submit', array('class' => 'btn')); ?>
		
		
		<br />
		<br />
		
		<h3>Actions</h3>
		
		<br />
		
		<?php echo $this->Form->postLink('Delete', array('action' => 'delete', $this->Form->value('Project.id')), array('class' => 'btn btn-danger'), __('Are you sure you want to delete # %s?', $this->Form->value('Project.id'))); ?><br />
		
		<br />
		<br />

	</div>
	
	<div class="span3">
		<?php echo $this->Form->input('address');
		echo $this->Form->input('city');
		echo $this->Form->input('state');
		echo $this->Form->input('zip');
		echo $this->Form->input('phone');
		echo $this->Form->input('phone');
		echo $this->Form->input('email', array('label' => 'eMail')); ?>
	
	</div>
	
	<div class="span5">
	

		<?php echo $this->Form->input('body', array('rows' => 10, 'class' => 'field span6')); ?>
		<?php echo $this->Form->end(); ?>
	</div>

</div>

