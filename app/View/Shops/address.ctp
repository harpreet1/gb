<?php echo $this->set('title_for_layout', 'Address'); ?>

<?php echo $this->Html->script(array('shops_address.js'), array('inline' => false)); ?>

<h1>Please fill in your address details</h1>

<?php echo $this->Form->create('Order'); ?>

<hr>

<div class="row">
    <div class="span4">
    
    <?php echo $this->Form->input('first_name', array('class' => 'span3')); ?>
    
    <?php echo $this->Form->input('last_name', array('class' => 'span3')); ?>
    
    <?php echo $this->Form->input('email', array('class' => 'span3')); ?>
    
    <?php echo $this->Form->input('phone', array('class' => 'span3')); ?>
    
    <br />
    
    </div>
    <div class="span4">
    
    <?php echo $this->Form->input('billing_address', array('class' => 'span3')); ?>
    
    <?php echo $this->Form->input('billing_address2', array('class' => 'span3','label' => 'Room/ Apt/ Building/ Floor')); ?>
    
    <?php echo $this->Form->input('billing_city', array('class' => 'span3')); ?>
    
    <?php echo $this->Form->input('billing_state', array('options' => $states, 'empty' => '', 'class' => 'span3')); ?>
    
    <?php echo $this->Form->input('billing_zip', array('class' => 'span3')); ?>
    
    <br />
    
    
    </div>
    <div class="span4">
    
    <?php echo $this->Form->input('shipping_address', array('class' => 'span3')); ?>
    
    <?php echo $this->Form->input('shipping_address2', array('class' => 'span3','label' => 'Room/ Apt/ Building/ Floor')); ?>
    
    <?php echo $this->Form->input('shipping_city', array('class' => 'span3')); ?>
    
    <?php echo $this->Form->input('shipping_state', array('options' => $states, 'empty' => '', 'class' => 'span3')); ?>
    
    <?php echo $this->Form->input('shipping_zip', array('class' => 'span3')); ?>
    
    <br />
    
	<?php echo $this->Form->input('sameaddress', array('type' => 'checkbox', 'label' => 'Copy Billing Address to Shipping')); ?>
	<br />
    <br />

    <?php echo $this->Form->input('residential', array('type' => 'checkbox', 'label' => 'Is this a Business Address?'));?>
    <br />
    <br />
    <?php echo $this->Form->button('<i class="icon-arrow-right icon-white"></i> Continue', array('class' => 'btn btn-primary', 'escape' => false));?>
    <?php echo $this->Form->end(); ?>
    
    </div>
</div>

