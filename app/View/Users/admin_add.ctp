<?php echo $this->Html->script('/tiny_mce/tiny_mce.js'); ?>

<script type="text/javascript">
	tinyMCE.init({
		mode : "textareas",
		theme : "advanced",
		skin: "thebigreason",
		plugins : "inlinepopups",
		plugins : "paste",
		// Theme options
		theme_advanced_buttons1 : "bold,italic,underline,|,link,unlink,|,bullist,|,pastetext,pasteword,selectall,|,cleanup,removeformat,code",
		theme_advanced_resizing : true,
	});
</script>

<h2>Admin Add User</h2>

<?php echo $this->Form->create('User'); ?>
<?php echo $this->Form->input('level', array('label' => 'User Level' , 'options' => array( 'admin' => 'Admin','vendor' => 'Vendor'))); ?>
<?php echo $this->Form->input('username'); ?>
<?php echo $this->Form->input('password'); ?>
<?php echo $this->Form->input('password_clear'); ?>
<?php echo $this->Form->input('name'); ?>
<?php echo $this->Form->input('slug'); ?>
<?php echo $this->Form->input('business_name'); ?>
<?php echo $this->Form->input('business_ownership'); ?>
<?php echo $this->Form->input('business_established'); ?>
<?php echo $this->Form->input('image'); ?>
<?php echo $this->Form->input('image_1'); ?>
<?php echo $this->Form->input('image_2'); ?>
<?php echo $this->Form->input('image_3'); ?>
<?php echo $this->Form->input('image_4'); ?>
<?php echo $this->Form->input('image_5'); ?>
<?php echo $this->Form->input('image_6'); ?>
<?php echo $this->Form->input('image_featured'); ?>
<?php echo $this->Form->input('shop_description'); ?>
<?php echo $this->Form->input('shop_quote'); ?>
<?php echo $this->Form->input('shop_signature'); ?>
<?php echo $this->Form->input('address'); ?>
<?php echo $this->Form->input('address2'); ?>
<?php echo $this->Form->input('city'); ?>
<?php echo $this->Form->input('state'); ?>
<?php echo $this->Form->input('zip'); ?>
<?php echo $this->Form->input('country'); ?>
<?php echo $this->Form->input('country_id'); ?>
<?php echo $this->Form->input('zone_id'); ?>
<?php echo $this->Form->input('phone'); ?>
<?php echo $this->Form->input('fax'); ?>
<?php echo $this->Form->input('email'); ?>
<?php echo $this->Form->input('website'); ?>
<?php echo $this->Form->input('flat_shipping'); ?>
<?php echo $this->Form->input('flat_price'); ?>
<?php echo $this->Form->input('contact_first_name'); ?>
<?php echo $this->Form->input('contact_last_name'); ?>
<?php echo $this->Form->input('contact_title'); ?>
<?php echo $this->Form->input('contact_phone'); ?>
<?php echo $this->Form->input('contact_email'); ?>
<?php echo $this->Form->input('contact_alt_first_name'); ?>
<?php echo $this->Form->input('contact_alt_last_name'); ?>
<?php echo $this->Form->input('contact_alt_title'); ?>
<?php echo $this->Form->input('contact_alt_phone'); ?>
<?php echo $this->Form->input('contact_alt_email'); ?>
<?php echo $this->Form->input('customer_service_contact'); ?>
<?php echo $this->Form->input('customer_service_phone'); ?>
<?php echo $this->Form->input('customer_service_phone_ext'); ?>
<?php echo $this->Form->input('customer_service_email'); ?>
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
<?php echo $this->Form->input('ins_policy_coverage'); ?>
<?php echo $this->Form->input('shipping_policy'); ?>
<?php echo $this->Form->input('payment_biz_name'); ?>
<?php echo $this->Form->input('payment_street_address'); ?>
<?php echo $this->Form->input('payment_city'); ?>
<?php echo $this->Form->input('payment_zone_id'); ?>
<?php echo $this->Form->input('payment_zip'); ?>
<?php echo $this->Form->input('vendor_type'); ?>
<?php echo $this->Form->input('mycategories'); ?>
<?php echo $this->Form->input('active', array('type' => 'checkbox', 'label' => 'Active')); ?>

<?php echo $this->Form->input('Tax.state_sales_tax_in_state', array('class' => 'span1')); ?>
<?php echo $this->Form->input('Tax.state_sales_tax_out_state', array('class' => 'span1')); ?>
<?php echo $this->Form->input('Tax.local_sales_tax_in_state', array('class' => 'span1')); ?>
<?php echo $this->Form->input('Tax.local_sales_tax_out_state', array('class' => 'span1')); ?>
<?php echo $this->Form->input('Tax.state_use_tax_in_state',array('class' => 'span1')); ?>
<?php echo $this->Form->input('Tax.state_use_tax_out_state',array('class' => 'span1')); ?>
<?php echo $this->Form->input('Tax.local_use_tax_in_state',array('class' => 'span1')); ?>
<?php echo $this->Form->input('Tax.local_use_tax_out_state',array('class' => 'span1')); ?>

<br />
<br />

<?php echo $this->Form->button('Submit', array('class' => 'btn')); ?>
<?php echo $this->Form->end(); ?>

<br />
<br />

