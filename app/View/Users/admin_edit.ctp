<?php echo $this->Html->script('/tiny_mce/tiny_mce.js'); ?>

<script type="text/javascript">
	tinyMCE.init({
		mode : "textareas",
		theme : "advanced",
		skin: "thebigreason",
		plugins : "inlinepopups",
		plugins : "paste",
		// Theme options
		theme_advanced_buttons1 : "bold,italic,underline,|,link,unlink,|,bullist,numlist,|,pastetext,pasteword,selectall,|,cleanup,removeformat,code",
		theme_advanced_resizing : true,
	});
</script>

<h2>Admin Edit User</h2>

<?php echo $this->Form->create('User'); ?>
<?php echo $this->Form->input('id'); ?>


<div class="row">
	<div class="span12">
		<?php echo $this->Form->button('Submit', array('class' => 'btn btn-primary')); ?><br />
	</div>

	<div class="span16">


		<div class="span3">
			<?php echo $this->Form->input('level'); ?>
			<?php echo $this->Form->input('username'); ?>
			<?php echo $this->Form->input('password'); ?>
			<?php echo $this->Form->input('password_clear'); ?>
			<?php echo $this->Form->input('name', array('label' => 'Shoppe Name')); ?>
			<?php echo $this->Form->input('slug'); ?>
			<?php echo $this->Form->input('business_name', array('label' => 'Business Name')); ?>
            <?php echo $this->Form->input('business_name_dba', array('label' => 'DBA')); ?>
			<?php echo $this->Form->input('vendor_type'); ?>
			<?php //echo $this->Form->input('country'); ?>
			<?php //echo $this->Form->input('country_id'); ?>
			<?php //echo $this->Form->input('zone_id'); ?>
			<?php echo $this->Form->input('phone'); ?>
			<?php echo $this->Form->input('fax'); ?>
			<?php echo $this->Form->input('email', array('label' => 'email - General')); ?>
			<?php echo $this->Form->input('email_orders', array('label' => 'email - Orders')); ?>
			<?php echo $this->Form->input('website'); ?>
			<?php echo $this->Form->input('payment_biz_name'); ?>
			<?php echo $this->Form->input('payment_street_address'); ?>
			<?php echo $this->Form->input('payment_city'); ?>
			<?php //echo $this->Form->input('payment_zone_id'); ?>
			<?php echo $this->Form->input('payment_zip'); ?>
			<?php //echo $this->Form->input('mycategories'); ?>

		</div>
		<div class="span5">
			<?php echo $this->Form->input('shop_description', array('rows' => 20, 'class' => '4span')); ?><br />
			<?php echo $this->Form->input('shop_quote', array('class' => '4span')); ?>
			<?php echo $this->Form->input('shop_signature'); ?>
			<?php echo $this->Form->input('address', array('label' => 'Address - Line 1')); ?>
			<?php echo $this->Form->input('address2', array('label' => 'Address - Line 2')); ?>
			<?php echo $this->Form->input('city'); ?>
			<?php echo $this->Form->input('state'); ?>
            <?php echo $this->Form->input('zip'); ?>


			<?php echo $this->Form->input('shipping_policy', array('rows' => 10, 'class' => '4span', 'label' => 'Shipping Policy in your Shoppe')); ?><br />



		</div>
		<div class="span3">
			<?php echo $this->Form->input('business_ownership'); ?>
			<?php echo $this->Form->input('business_established', array('class' => 'span1','label' => 'Year the business was established')); ?>
			<?php echo $this->Form->input('flat_shipping', array('type' => 'checkbox','label' =>'Check if flat shipping offered in shoppe')); ?>
            <?php echo $this->Form->input('flat_shipping_price', array('class' => 'span1','label' =>'Flat Shipping Price')); ?>
			<?php echo $this->Form->input('flat_shipping_weight_threshold', array('class' => 'span1')); ?>
			<?php echo $this->Form->input('wholesale', array('type' => 'checkbox','label' => 'Check if wholesale vendor')); ?>
			<?php echo $this->Form->input('commission', array('class' => 'span1','label' => 'Commision %')); ?>
            <?php echo $this->Form->input('contact_name'); ?>
			<?php echo $this->Form->input('free_shipping', array('type' => 'checkbox')); ?>
			<?php echo $this->Form->input('free_shipping_price_threshold', array('class' => 'span1','label' => 'Free Shipping Price')); ?>
			<?php echo $this->Form->input('shipping_method', array('label' => 'Preferred Shipping Method' , 'options' => array('ups' => 'UPS', 'fedex' => 'FEDEX', 'usps' => 'US Postal Service'))); ?>
			<?php echo $this->Form->input('shipping_method', array('label' => 'Alternate Shipping Method' , 'options' => array('ups' => 'UPS', 'fedex' => 'FEDEX', 'usps' => 'US Postal Service'))); ?>
			<?php echo $this->Form->input('shipping_method', array('label' => '2nd Alternate Shipping Method' , 'options' => array('ups' => 'UPS', 'fedex' => 'FEDEX', 'usps' => 'US Postal Service'))); ?>
			<br />
			<br />
			<?php echo $this->Form->input('check', array('type' => 'checkbox','label' => 'Do you charge tax?')); ?>
			<?php echo $this->Form->input('state_sales_tax_in_state', array('class' => 'span1')); ?>
			<?php echo $this->Form->input('state_sales_tax_out_state', array('class' => 'span1')); ?>
			<?php echo $this->Form->input('local_sales_tax_in_state', array('class' => 'span1')); ?>
			<?php echo $this->Form->input('local_sales_tax_out_state', array('class' => 'span1')); ?>
			<?php echo $this->Form->input('state_use_tax_in_state',array('class' => 'span1')); ?>
			<?php echo $this->Form->input('state_use_tax_out_state',array('class' => 'span1')); ?>
			<?php echo $this->Form->input('local_use_tax_in_state',array('class' => 'span1')); ?>
			<?php echo $this->Form->input('local_use_tax_out_state',array('class' => 'span1')); ?>

			<br />
			<br />
			
			<?php echo $this->Form->input('contact_first_name'); ?>
			<?php echo $this->Form->input('contact_last_name'); ?>
            <?php echo $this->Form->input('contact_first_name'); ?>
			<?php echo $this->Form->input('contact_title'); ?>
			<?php echo $this->Form->input('contact_phone'); ?>
			<?php echo $this->Form->input('contact_email'); ?>


		</div>
		<div class="span3">
			<h3>FINANCIAL</h3>
            <?php echo $this->Form->input('contact_fin_name'); ?>
			<?php echo $this->Form->input('contact_fin_first_name'); ?>
			<?php echo $this->Form->input('contact_fin_last_name'); ?>
			<?php echo $this->Form->input('contact_fin_title'); ?>
			<?php echo $this->Form->input('contact_fin_phone'); ?>
			<?php echo $this->Form->input('contact_fin_email'); ?>
			<?php echo $this->Form->input('ins_carrier'); ?>
			<?php echo $this->Form->input('ins_carrier_name'); ?>
			<?php echo $this->Form->input('ins_carrier_phone'); ?>
			<?php echo $this->Form->input('ins_policy_num'); ?>
			<?php echo $this->Form->input('ins_policy_exp'); ?>
			<?php echo $this->Form->input('ins_policy_coverage'); ?><br /><br />
			<?php echo $this->Form->input('contact_alt_first_name'); ?>
			<?php echo $this->Form->input('contact_alt_last_name'); ?>
			<?php echo $this->Form->input('contact_alt_title'); ?>
			<?php echo $this->Form->input('contact_alt_phone'); ?>
			<?php echo $this->Form->input('contact_alt_email'); ?>
			<?php echo $this->Form->input('customer_service_contact'); ?>
			<?php echo $this->Form->input('customer_service_phone'); ?>
			<?php echo $this->Form->input('customer_service_phone_ext'); ?>
			<?php echo $this->Form->input('customer_service_email'); ?>


		</div>
		<!--<div class="span2">

			<?php //echo $this->Form->input('bd_image1'); ?>
			<?php //echo $this->Form->input('bd_image2'); ?>
			<?php //echo $this->Form->input('bd_image3'); ?>
			<?php //echo $this->Form->input('bd_image4'); ?>
			<?php //echo $this->Form->input('bd_image5'); ?>
			<?php //echo $this->Form->input('bd_image6'); ?>
			<?php //echo $this->Form->input('bd_category1'); ?>
			<?php //echo $this->Form->input('bd_category2'); ?>
			<?php //echo $this->Form->input('bd_category3'); ?>
			<?php //echo $this->Form->input('bd_category4'); ?>
			<?php //echo $this->Form->input('bd_category5'); ?>
			<?php //echo $this->Form->input('bd_category6'); ?>
		</div>-->
	</div>
</div>
<div class="row">
	<div class="span12">

		<div class="span4">
			<?php echo $this->Form->input('active', array('type' => 'checkbox', 'label' => 'Active')); ?>


			<br />
			<br />
			<?php echo $this->Form->button('Submit', array('class' => 'btn')); ?>
			<?php echo $this->Form->end(); ?>

			<h3>Actions</h3>
			<?php echo $this->Html->link('View User', array('action' => 'view', $user['User']['id']), array('class' => 'btn')); ?>
			<br />
			<br />
			<?php echo $this->Form->postLink('Delete', array('action' => 'delete', $this->Form->value('User.id')), array('class' => 'btn btn-danger'), __('Are you sure you want to delete # %s?', $this->Form->value('User.id'))); ?>
		</div>
	</div>
</div>

<br />
<br />

