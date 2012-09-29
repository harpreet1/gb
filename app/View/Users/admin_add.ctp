<div class="users form">
<?php echo $this->Form->create('User'); ?>
	<fieldset>
		<legend><?php echo __('Admin Add User'); ?></legend>
	<?php
		echo $this->Form->input('level');
		echo $this->Form->input('username');
		echo $this->Form->input('password');
		echo $this->Form->input('password_clear');
		echo $this->Form->input('shop_name');
		echo $this->Form->input('slug');
		echo $this->Form->input('business_name');
		echo $this->Form->input('business_ownership');
		echo $this->Form->input('business_established');
		echo $this->Form->input('image');
		echo $this->Form->input('image1');
		echo $this->Form->input('image2');
		echo $this->Form->input('image3');
		echo $this->Form->input('image4');
		echo $this->Form->input('image5');
		echo $this->Form->input('image6');
		echo $this->Form->input('image_featured');
		echo $this->Form->input('shop_description');
		echo $this->Form->input('shop_quote');
		echo $this->Form->input('shop_signature');
		echo $this->Form->input('street_address');
		echo $this->Form->input('street_address2');
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
		echo $this->Form->input('active');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Products'), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product'), array('controller' => 'products', 'action' => 'add')); ?> </li>
	</ul>
</div>
