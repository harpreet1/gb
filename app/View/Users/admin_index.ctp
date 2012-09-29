<?php echo $this->Html->script(array('switch.js'), array('inline' => false)); ?>

<div class="users index">
	<h2><?php echo __('Users'); ?></h2>
	<table class="table table-striped table-bordered table-condensed table-hover">
		<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('level'); ?></th>
			<th><?php echo $this->Paginator->sort('username'); ?></th>
			<th><?php echo $this->Paginator->sort('password'); ?></th>
			<th><?php echo $this->Paginator->sort('password_clear'); ?></th>
			<th><?php echo $this->Paginator->sort('shop_name'); ?></th>
			<th><?php echo $this->Paginator->sort('slug'); ?></th>
			<th><?php echo $this->Paginator->sort('business_name'); ?></th>
			<th><?php echo $this->Paginator->sort('business_ownership'); ?></th>
			<th><?php echo $this->Paginator->sort('business_established'); ?></th>
			<th><?php echo $this->Paginator->sort('image'); ?></th>
			<th><?php echo $this->Paginator->sort('image1'); ?></th>
			<th><?php echo $this->Paginator->sort('image2'); ?></th>
			<th><?php echo $this->Paginator->sort('image3'); ?></th>
			<th><?php echo $this->Paginator->sort('image4'); ?></th>
			<th><?php echo $this->Paginator->sort('image5'); ?></th>
			<th><?php echo $this->Paginator->sort('image6'); ?></th>
			<th><?php echo $this->Paginator->sort('image_featured'); ?></th>
			<th><?php echo $this->Paginator->sort('shop_description'); ?></th>
			<th><?php echo $this->Paginator->sort('shop_quote'); ?></th>
			<th><?php echo $this->Paginator->sort('shop_signature'); ?></th>
			<th><?php echo $this->Paginator->sort('street_address'); ?></th>
			<th><?php echo $this->Paginator->sort('street_address2'); ?></th>
			<th><?php echo $this->Paginator->sort('city'); ?></th>
			<th><?php echo $this->Paginator->sort('state'); ?></th>
			<th><?php echo $this->Paginator->sort('zip'); ?></th>
			<th><?php echo $this->Paginator->sort('country'); ?></th>
			<th><?php echo $this->Paginator->sort('country_id'); ?></th>
			<th><?php echo $this->Paginator->sort('zone_id'); ?></th>
			<th><?php echo $this->Paginator->sort('phone'); ?></th>
			<th><?php echo $this->Paginator->sort('fax'); ?></th>
			<th><?php echo $this->Paginator->sort('email'); ?></th>
			<th><?php echo $this->Paginator->sort('website'); ?></th>
			<th><?php echo $this->Paginator->sort('flat_shipping'); ?></th>
			<th><?php echo $this->Paginator->sort('flat_price'); ?></th>
			<th><?php echo $this->Paginator->sort('contact_first_name'); ?></th>
			<th><?php echo $this->Paginator->sort('contact_last_name'); ?></th>
			<th><?php echo $this->Paginator->sort('contact_title'); ?></th>
			<th><?php echo $this->Paginator->sort('contact_phone'); ?></th>
			<th><?php echo $this->Paginator->sort('contact_email'); ?></th>
			<th><?php echo $this->Paginator->sort('contact_alt_first_name'); ?></th>
			<th><?php echo $this->Paginator->sort('contact_alt_last_name'); ?></th>
			<th><?php echo $this->Paginator->sort('contact_alt_title'); ?></th>
			<th><?php echo $this->Paginator->sort('contact_alt_phone'); ?></th>
			<th><?php echo $this->Paginator->sort('contact_alt_email'); ?></th>
			<th><?php echo $this->Paginator->sort('customer_service_contact'); ?></th>
			<th><?php echo $this->Paginator->sort('customer_service_phone'); ?></th>
			<th><?php echo $this->Paginator->sort('customer_service_phone_ext'); ?></th>
			<th><?php echo $this->Paginator->sort('customer_service_email'); ?></th>
			<th><?php echo $this->Paginator->sort('contact_fin_first_name'); ?></th>
			<th><?php echo $this->Paginator->sort('contact_fin_last_name'); ?></th>
			<th><?php echo $this->Paginator->sort('contact_fin_title'); ?></th>
			<th><?php echo $this->Paginator->sort('contact_fin_phone'); ?></th>
			<th><?php echo $this->Paginator->sort('contact_fin_email'); ?></th>
			<th><?php echo $this->Paginator->sort('ins_carrier'); ?></th>
			<th><?php echo $this->Paginator->sort('ins_carrier_name'); ?></th>
			<th><?php echo $this->Paginator->sort('ins_carrier_phone'); ?></th>
			<th><?php echo $this->Paginator->sort('ins_policy_num'); ?></th>
			<th><?php echo $this->Paginator->sort('ins_policy_exp'); ?></th>
			<th><?php echo $this->Paginator->sort('ins_policy_coverage'); ?></th>
			<th><?php echo $this->Paginator->sort('shipping_policy'); ?></th>
			<th><?php echo $this->Paginator->sort('payment_biz_name'); ?></th>
			<th><?php echo $this->Paginator->sort('payment_street_address'); ?></th>
			<th><?php echo $this->Paginator->sort('payment_city'); ?></th>
			<th><?php echo $this->Paginator->sort('payment_zone_id'); ?></th>
			<th><?php echo $this->Paginator->sort('payment_zip'); ?></th>
			<th><?php echo $this->Paginator->sort('vendor_type'); ?></th>
			<th><?php echo $this->Paginator->sort('mycategories'); ?></th>
			<th><?php echo $this->Paginator->sort('bd_image1'); ?></th>
			<th><?php echo $this->Paginator->sort('bd_image2'); ?></th>
			<th><?php echo $this->Paginator->sort('bd_image3'); ?></th>
			<th><?php echo $this->Paginator->sort('bd_image4'); ?></th>
			<th><?php echo $this->Paginator->sort('bd_image5'); ?></th>
			<th><?php echo $this->Paginator->sort('bd_image6'); ?></th>
			<th><?php echo $this->Paginator->sort('bd_category1'); ?></th>
			<th><?php echo $this->Paginator->sort('bd_category2'); ?></th>
			<th><?php echo $this->Paginator->sort('bd_category3'); ?></th>
			<th><?php echo $this->Paginator->sort('bd_category4'); ?></th>
			<th><?php echo $this->Paginator->sort('bd_category5'); ?></th>
			<th><?php echo $this->Paginator->sort('bd_category6'); ?></th>
			<th><?php echo $this->Paginator->sort('active'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($users as $user): ?>
	<tr>
		<td><?php echo h($user['User']['id']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['level']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['username']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['password']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['password_clear']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['shop_name']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['slug']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['business_name']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['business_ownership']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['business_established']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['image']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['image1']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['image2']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['image3']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['image4']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['image5']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['image6']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['image_featured']); ?>&nbsp;</td>
		<td><?php echo $user['User']['shop_description']; ?>&nbsp;</td>
		<td><?php echo h($user['User']['shop_quote']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['shop_signature']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['street_address']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['street_address2']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['city']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['state']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['zip']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['country']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['country_id']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['zone_id']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['phone']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['fax']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['email']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['website']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['flat_shipping']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['flat_price']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['contact_first_name']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['contact_last_name']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['contact_title']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['contact_phone']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['contact_email']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['contact_alt_first_name']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['contact_alt_last_name']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['contact_alt_title']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['contact_alt_phone']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['contact_alt_email']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['customer_service_contact']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['customer_service_phone']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['customer_service_phone_ext']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['customer_service_email']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['contact_fin_first_name']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['contact_fin_last_name']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['contact_fin_title']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['contact_fin_phone']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['contact_fin_email']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['ins_carrier']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['ins_carrier_name']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['ins_carrier_phone']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['ins_policy_num']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['ins_policy_exp']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['ins_policy_coverage']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['shipping_policy']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['payment_biz_name']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['payment_street_address']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['payment_city']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['payment_zone_id']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['payment_zip']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['vendor_type']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['mycategories']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['bd_image1']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['bd_image2']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['bd_image3']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['bd_image4']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['bd_image5']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['bd_image6']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['bd_category1']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['bd_category2']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['bd_category3']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['bd_category4']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['bd_category5']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['bd_category6']); ?>&nbsp;</td>
		<td><a href="/admin/users/switch/active/<?php echo $user['User']['id']; ?>" class="status"><img src="/img/icon_<?php echo $user['User']['active']; ?>.png" alt="" /></a></td>
		<td><?php echo h($user['User']['created']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $user['User']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $user['User']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $user['User']['id']), null, __('Are you sure you want to delete # %s?', $user['User']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>

	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New User'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Products'), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product'), array('controller' => 'products', 'action' => 'add')); ?> </li>
	</ul>
</div>
