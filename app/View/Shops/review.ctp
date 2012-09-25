<?php echo $this->set('title_for_layout', 'Order Review'); ?>

<h1>Order Review</h1>

<hr>

<div class="row">
<div class="span4">

Name: <?php echo $shop['Data']['name'];?><br />
Email: <?php echo $shop['Data']['email'];?><br />
Phone: <?php echo $shop['Data']['phone'];?><br />

<br />

</div>
<div class="span4">

Billing Address: <?php echo $shop['Data']['billing_address'];?><br />
Billing Address 2: <?php echo $shop['Data']['billing_address2'];?><br />
Billing City: <?php echo $shop['Data']['billing_city'];?><br />
Billing State: <?php echo $shop['Data']['billing_state'];?><br />

<br />

</div>
<div class="span4">

Shipping Address: <?php echo $shop['Data']['shipping_address'];?><br />
Shipping Address 2: <?php echo $shop['Data']['shipping_address2'];?><br />
Shipping City: <?php echo $shop['Data']['shipping_city'];?><br />
Shipping State: <?php echo $shop['Data']['shipping_state'];?><br />

<br />

</div>
</div>

<hr>

<div class="row">
<div class="span1">#</div>
<div class="span8">ITEM</div>
<div class="span1">PRICE</div>
<div class="span1">QUANTITY</div>
<div class="span1">SUBTOTAL</div>
</div>

<br />
<br />

<?php foreach ($shop['Cart']['Items'] as $item): ?>
<div class="row">
<div class="span1"><?php echo $this->Html->image('products/' . $item['Product']['image'], array('height' => 60, 'class' => 'px60')); ?></div>
<div class="span8"><?php echo $item['Product']['name']; ?></div>
<div class="span1">$<?php echo $item['Product']['price']; ?></div>
<div class="span1"><?php echo $item['quantity']; ?></div>
<div class="span1">$<?php echo $item['subtotal']; ?></div>
</div>
<?php endforeach; ?>

<hr>

<div class="row">
	<div class="span2 offset8">Items: <?php echo $shop['Cart']['Property']['cartQuantity']; ?></div>
	<div class="span2">Order Total: <span class="bold red">$<?php echo $shop['Cart']['Property']['cartTotal']; ?></span></div>
</div>

<br />
<br />

<hr>

<div class="row">
<div class="span1">ServiceCode</div>
<div class="span3">ServiceName</div>
<div class="span2">TotalCharges</div>
</div>

<?php foreach ($shop['Ship']['0'] as $ship): ?>
<div class="row">
<div class="span1"><?php echo $ship['ServiceCode']; ?></div>
<div class="span3"><?php echo $ship['ServiceName']; ?></div>
<div class="span2">$<?php echo $ship['TotalCharges']; ?></div>
</div>
<?php endforeach; ?>

<hr>

<br />
<br />


<?php echo $this->Form->create('Order'); ?>

<?php echo $this->Form->input('creditcard_type', array(
	'class' => 'span2',
	'options' => array(
		'Visa' => 'Visa',
		'MasterCard' => 'MasterCard',
		'American Express' => 'American Express',
		'Discover' => 'Discover'
	)
)); ?>

<?php echo $this->Form->input('creditcard_number', array('class' => 'span2', 'maxLength' => 16, 'autocomplete' => 'off')); ?>


<?php echo $this->Form->input('creditcard_month', array(
	'label' => 'Expiration Month',
	'class' => 'span2',
	'options' => array(
		'01' => '01 - January',
		'02' => '02 - February',
		'03' => '03 - March',
		'04' => '04 - April',
		'05' => '05 - May',
		'06' => '06 - June',
		'07' => '07 - July',
		'08' => '08 - August',
		'09' => '09 - September',
		'10' => '10 - October',
		'11' => '11 - November',
		'12' => '12 - December'
	)
)); ?>

<?php echo $this->Form->input('creditcard_year', array(
	'label' => 'Expiration Year',
	'class' => 'span2',
	'options' => array(
		'2012' => '2012',
		'2013' => '2013',
		'2014' => '2014',
		'2015' => '2015',
		'2016' => '2016',
		'2017' => '2017',
		'2018' => '2018',
		'2019' => '2019',
		'2020' => '2020',
		'2021' => '2021',
		'2022' => '2022',
	)
));?>

<?php echo $this->Form->input('creditcard_csc', array('label' => 'Card Security Code', 'class' => 'span1', 'maxLength' => 4)); ?>

<br />

<?php echo $this->Form->button('<i class="icon-thumbs-up icon-white"></i> Submit Order', array('class' => 'btn btn-primary', 'ecape' => false)); ?>

<?php echo $this->Form->end(); ?>

<br />
<br />

