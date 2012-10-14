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

<h2>Admin Edit User</h2>
<?php echo $this->Form->create('User'); ?>
<?php
echo $this->Form->input('level');
echo $this->Form->input('username');
echo $this->Form->input('password');
echo $this->Form->input('password_clear');
echo $this->Form->input('name');
echo $this->Form->input('slug');
echo $this->Form->input('business_name');
echo $this->Form->input('business_ownership');
echo $this->Form->input('business_established');
echo $this->Form->input('image');
echo $this->Form->input('image_1');
echo $this->Form->input('image_2');
echo $this->Form->input('image_3');
echo $this->Form->input('image_4');
echo $this->Form->input('image_5');
echo $this->Form->input('image_6');
echo $this->Form->input('image_featured');
echo $this->Form->input('shop_description');
echo $this->Form->input('shop_quote');
echo $this->Form->input('shop_signature');
echo $this->Form->input('address');
echo $this->Form->input('address2');
echo $this->Form->input('city');
echo $this->Form->input('state');
echo $this->Form->input('zip');
echo $this->Form->input('country');
echo $this->Form->input('country_id');
echo $this->Form->input('zone_id');
echo $this->Form->input('phone');
echo $this->Form->input('fax');
echo $this->Form->input('email');
echo $this->Form->input('website');
echo $this->Form->input('flat_shipping');
echo $this->Form->input('flat_price');
echo $this->Form->input('contact_first_name');
echo $this->Form->input('contact_last_name');
echo $this->Form->input('contact_title');
echo $this->Form->input('contact_phone');
echo $this->Form->input('contact_email');
echo $this->Form->input('contact_alt_first_name');
echo $this->Form->input('contact_alt_last_name');
echo $this->Form->input('contact_alt_title');
echo $this->Form->input('contact_alt_phone');
echo $this->Form->input('contact_alt_email');
echo $this->Form->input('customer_service_contact');
echo $this->Form->input('customer_service_phone');
echo $this->Form->input('customer_service_phone_ext');
echo $this->Form->input('customer_service_email');
echo $this->Form->input('contact_fin_first_name');
echo $this->Form->input('contact_fin_last_name');
echo $this->Form->input('contact_fin_title');
echo $this->Form->input('contact_fin_phone');
echo $this->Form->input('contact_fin_email');
echo $this->Form->input('ins_carrier');
echo $this->Form->input('ins_carrier_name');
echo $this->Form->input('ins_carrier_phone');
echo $this->Form->input('ins_policy_num');
echo $this->Form->input('ins_policy_exp');
echo $this->Form->input('ins_policy_coverage');
echo $this->Form->input('shipping_policy');
echo $this->Form->input('payment_biz_name');
echo $this->Form->input('payment_street_address');
echo $this->Form->input('payment_city');
echo $this->Form->input('payment_zone_id');
echo $this->Form->input('payment_zip');
echo $this->Form->input('vendor_type');
echo $this->Form->input('mycategories');
echo $this->Form->input('bd_image1');
echo $this->Form->input('bd_image2');
echo $this->Form->input('bd_image3');
echo $this->Form->input('bd_image4');
echo $this->Form->input('bd_image5');
echo $this->Form->input('bd_image6');
echo $this->Form->input('bd_category1');
echo $this->Form->input('bd_category2');
echo $this->Form->input('bd_category3');
echo $this->Form->input('bd_category4');
echo $this->Form->input('bd_category5');
echo $this->Form->input('bd_category6');
echo $this->Form->input('active', array('type' => 'checkbox', 'label' => 'Active'));
?>
<br />
<br />
<?php echo $this->Form->button('Submit', array('class' => 'btn')); ?>
<?php echo $this->Form->end(); ?>
