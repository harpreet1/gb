<?php echo $this->Html->script('/tiny_mce/tiny_mce.js'); ?>

<script type="text/javascript">
	tinyMCE.init({
		mode : "textareas",
		theme : "advanced",
		skin: "thebigreason",
		plugins : "inlinepopups",
		// Theme options
		theme_advanced_buttons1 : "bold,italic,underline,|,link,unlink,|,cleanup,removeformat,code",
		theme_advanced_resizing : true,
	});
</script>
<h2>Admin Edit User</h2>

<?php echo $this->Form->create('User'); ?>

<div class="row-fluid">	
	<h3><?php echo $this->Form->input('name'); ?></h3>

	<div class="span12">
		<div class="span2">
			<?php echo $this->Form->input('level'); ?>
			<?php echo $this->Form->input('username'); ?>
			<?php echo $this->Form->input('password'); ?>
			<?php echo $this->Form->input('password_clear'); ?>
			<?php echo $this->Form->input('name'); ?>
			<?php echo $this->Form->input('slug'); ?>
			<?php echo $this->Form->input('business_name'); ?>
			<?php echo $this->Form->input('vendor_type'); ?>
			<?php echo $this->Form->input('zip'); ?>
			<?php echo $this->Form->input('country'); ?>
			<?php echo $this->Form->input('country_id'); ?>
			<?php echo $this->Form->input('zone_id'); ?>
			<?php echo $this->Form->input('phone'); ?>
			<?php echo $this->Form->input('fax'); ?>
			<?php echo $this->Form->input('email'); ?>
			<?php echo $this->Form->input('website'); ?>
			<?php echo $this->Form->input('payment_biz_name'); ?>
			<?php echo $this->Form->input('payment_street_address'); ?>
			<?php echo $this->Form->input('payment_city'); ?>
			<?php echo $this->Form->input('payment_zone_id'); ?>
			<?php echo $this->Form->input('payment_zip'); ?>
			<?php echo $this->Form->input('mycategories'); ?>

		</div>
		<div class="span4">
			<?php echo $this->Form->input('shop_description', array('rows' => 20, 'class' => '4span')); ?><br />
			<?php echo $this->Form->input('shop_quote', array('class' => '4span')); ?>
			<?php echo $this->Form->input('shop_signature'); ?>
			<?php echo $this->Form->input('address'); ?>
			<?php echo $this->Form->input('address2'); ?>
			<?php echo $this->Form->input('city'); ?>
			<?php echo $this->Form->input('state'); ?>
			<div class="span4">
				<?php echo $this->Form->input('shipping_policy', array('rows' => 10, 'class' => '4span')); ?><br />
			</div>
			
		</div>
		<div class="span2">
			<?php echo $this->Form->input('business_ownership'); ?>
			<?php echo $this->Form->input('business_established'); ?>
			<?php echo $this->Form->input('flat_shipping'); ?>
			<?php echo $this->Form->input('flat_price'); ?>
			<?php echo $this->Form->input('contact_first_name'); ?>
			<?php echo $this->Form->input('contact_last_name'); ?>
			<?php echo $this->Form->input('contact_title'); ?>
			<?php echo $this->Form->input('contact_phone'); ?>
			<?php echo $this->Form->input('contact_email'); ?>
			<h3>FINANCIAL</h3>
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

		</div>
		<div class="span2">
			<?php echo $this->Form->input('contact_alt_first_name'); ?>
			<?php echo $this->Form->input('contact_alt_last_name'); ?>
			<?php echo $this->Form->input('contact_alt_title'); ?>
			<?php echo $this->Form->input('contact_alt_phone'); ?>
			<?php echo $this->Form->input('contact_alt_email'); ?>
			<?php echo $this->Form->input('customer_service_contact'); ?>
			<?php echo $this->Form->input('customer_service_phone'); ?>
			<?php echo $this->Form->input('customer_service_phone_ext'); ?>
			<?php echo $this->Form->input('customer_service_email'); ?>
			<h3>IMAGES</h3>
			<?php echo $this->Form->input('image'); ?>
			<?php echo $this->Form->input('image_featured'); ?>
			<?php echo $this->Form->input('image1'); ?>
			<?php echo $this->Form->input('image2'); ?>
			<?php echo $this->Form->input('image3'); ?>
			<?php echo $this->Form->input('image4'); ?>
			<?php echo $this->Form->input('image5'); ?>
			<?php echo $this->Form->input('image6'); ?>

		</div>
		<div class="span2">
			<?php echo $this->Form->input('bd_image1'); ?>
			<?php echo $this->Form->input('bd_image2'); ?>
			<?php echo $this->Form->input('bd_image3'); ?>
			<?php echo $this->Form->input('bd_image4'); ?>
			<?php echo $this->Form->input('bd_image5'); ?>
			<?php echo $this->Form->input('bd_image6'); ?>
			<?php echo $this->Form->input('bd_category1'); ?>
			<?php echo $this->Form->input('bd_category2'); ?>
			<?php echo $this->Form->input('bd_category3'); ?>
			<?php echo $this->Form->input('bd_category4'); ?>
			<?php echo $this->Form->input('bd_category5'); ?>
			<?php echo $this->Form->input('bd_category6'); ?>
		</div>
	</div>
	<div class="span12">

		<div class="span4">
			<?php echo $this->Form->input('active', array('type' => 'checkbox', 'label' => 'Active')); ?>

			
			<br />
			<br />
			<?php echo $this->Form->button('Submit', array('class' => 'btn')); ?>
			<?php echo $this->Form->end(); ?>

			<h3>Actions</h3>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('User.id')), array('class' => 'btn btn-danger'), __('Are you sure you want to delete # %s?', $this->Form->value('User.id'))); ?>
		</div>
	</div>
</div>