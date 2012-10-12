<h2>View User</h2>

<br />
<br />



<br />
<br />

<hr>

<br />
<br />

<div class="row">
<div class="span5">

<span class="label label-warning">
 &nbsp; Image : no watermark, square image size </span>

<br />
<br />

<?php echo $this->Form->create('User', array('type' => 'file', 'url' => array('controller' => 'users', 'action' => 'view', 'admin' => true)));?>
<?php echo $this->Form->hidden('id', array('value' => $user['User']['id'])); ?>
<?php echo $this->Form->hidden('slug', array('value' => $user['User']['slug'])); ?>
<table class="table table-striped table-bordered table-condensed">
	<tbody>
		<tr>
			<td>Upload Image</td>
			<td><?php echo $this->Form->file('image'); ?></td>
		</tr>
		<tr>
			<td>Image Type</td>
			<td>

			<?php echo $this->Form->input('image_type', array('type' => 'select', 'label' => false, 'options' => array(
				'image' => 'Main',
				'image_1' => 'image 1',
				'image_2' => 'image 2',
				'image_3' => 'image 3',
				'image_4' => 'image 4',
				'image_5' => 'image 5',
				'image_6' => 'image 6',
			))); ?>

			</td>
		</tr>
		<tr>
			<td></td>
			<td><?php echo $this->Form->button('Submit', array('class' => 'btn'));?></td>
		</tr>
	</tbody>
</table>
<?php echo $this->Form->end(); ?>
</div>
</div>

<br />
<br />

<?php echo $this->Html->image('users/image/'. $user['User']['image'] . '?date=' . time(), array('class' => 'gb')); ?>
<br />
<a href="/admin/images/crop?src_dir=users/image&src_file=<?php echo $user['User']['image']; ?>&dst_dir=users/image&dst_file=<?php echo $user['User']['image']; ?>&width=400&height=133" class="btn">crop 400 x 133 image</a>

<br />
<br />
<br />
<br />

<?php echo $this->Html->image('users/image_1/'. $user['User']['image_1'] . '?date=' . time(), array('class' => 'gb')); ?>
<br />
<a href="/admin/images/crop?src_dir=users/image_1&src_file=<?php echo $user['User']['image_1']; ?>&dst_dir=users/image_1&dst_file=<?php echo $user['User']['image_1']; ?>&width=300&height=300" class="btn">crop image</a>

<br />
<br />

<?php echo $this->Html->image('users/image_2/'. $user['User']['image_2'] . '?date=' . time(), array('class' => 'gb')); ?>
<br />
<a href="/admin/images/crop?src_dir=users/image_2&src_file=<?php echo $user['User']['image_2']; ?>&dst_dir=users/image_2&dst_file=<?php echo $user['User']['image_2']; ?>&width=300&height=300" class="btn">crop image</a>

<br />
<br />

<?php echo $this->Html->image('users/image_3/'. $user['User']['image_3'] . '?date=' . time(), array('class' => 'gb')); ?>
<br />
<a href="/admin/images/crop?src_dir=users/image_3&src_file=<?php echo $user['User']['image_3']; ?>&dst_dir=users/image_3&dst_file=<?php echo $user['User']['image_3']; ?>&width=300&height=300" class="btn">crop image</a>

<br />
<br />

<?php echo $this->Html->image('users/image_4/'. $user['User']['image_4'] . '?date=' . time(), array('class' => 'gb')); ?>
<br />
<a href="/admin/images/crop?src_dir=users/image_4&src_file=<?php echo $user['User']['image_4']; ?>&dst_dir=users/image_4&dst_file=<?php echo $user['User']['image_4']; ?>&width=300&height=300" class="btn">crop image</a>

<br />
<br />

<?php echo $this->Html->image('users/image_5/'. $user['User']['image_5'] . '?date=' . time(), array('class' => 'gb')); ?>
<br />
<a href="/admin/images/crop?src_dir=users/image_5&src_file=<?php echo $user['User']['image_5']; ?>&dst_dir=users/image_5&dst_file=<?php echo $user['User']['image_5']; ?>&width=300&height=300" class="btn">crop image</a>

<br />
<br />

<?php echo $this->Html->image('users/image_6/'. $user['User']['image_6'] . '?date=' . time(), array('class' => 'gb')); ?>
<br />
<a href="/admin/images/crop?src_dir=users/image_6&src_file=<?php echo $user['User']['image_6']; ?>&dst_dir=users/image_6&dst_file=<?php echo $user['User']['image_6']; ?>&width=300&height=300" class="btn">crop image</a>

<br />
<br />


<hr>

<br />
<br />

<dl>
<dt><?php echo __('Id'); ?></dt>
<dd>
<?php echo h($user['User']['id']); ?>
</dd>
<dt><?php echo __('Level'); ?></dt>
<dd>
<?php echo h($user['User']['level']); ?>
</dd>
<dt><?php echo __('Username'); ?></dt>
<dd>
<?php echo h($user['User']['username']); ?>
</dd>
<dt><?php echo __('Password'); ?></dt>
<dd>
<?php echo h($user['User']['password']); ?>
</dd>
<dt><?php echo __('Password Clear'); ?></dt>
<dd>
<?php echo h($user['User']['password_clear']); ?>
</dd>
<dt><?php echo __('Name'); ?></dt>
<dd>
<?php echo h($user['User']['name']); ?>
</dd>
<dt><?php echo __('Slug'); ?></dt>
<dd>
<?php echo h($user['User']['slug']); ?>
</dd>
<dt><?php echo __('Business Name'); ?></dt>
<dd>
<?php echo h($user['User']['business_name']); ?>
</dd>
<dt><?php echo __('Business Ownership'); ?></dt>
<dd>
<?php echo h($user['User']['business_ownership']); ?>
</dd>
<dt><?php echo __('Business Established'); ?></dt>
<dd>
<?php echo h($user['User']['business_established']); ?>
</dd>
<dt><?php echo __('Image'); ?></dt>
<dd>
<?php echo h($user['User']['image']); ?>
</dd>
<dt><?php echo __('Image1'); ?></dt>
<dd>
<?php echo h($user['User']['image_1']); ?>
</dd>
<dt><?php echo __('Image2'); ?></dt>
<dd>
<?php echo h($user['User']['image_2']); ?>
</dd>
<dt><?php echo __('Image3'); ?></dt>
<dd>
<?php echo h($user['User']['image_3']); ?>
</dd>
<dt><?php echo __('Image4'); ?></dt>
<dd>
<?php echo h($user['User']['image_4']); ?>
</dd>
<dt><?php echo __('Image5'); ?></dt>
<dd>
<?php echo h($user['User']['image_5']); ?>
</dd>
<dt><?php echo __('Image6'); ?></dt>
<dd>
<?php echo h($user['User']['image_6']); ?>
</dd>
<dt><?php echo __('Image Featured'); ?></dt>
<dd>
<?php echo h($user['User']['image_featured']); ?>
</dd>
<dt><?php echo __('Shop Description'); ?></dt>
<dd>
<?php echo h($user['User']['shop_description']); ?>
</dd>
<dt><?php echo __('Shop Quote'); ?></dt>
<dd>
<?php echo h($user['User']['shop_quote']); ?>
</dd>
<dt><?php echo __('Shop Signature'); ?></dt>
<dd>
<?php echo h($user['User']['shop_signature']); ?>
</dd>
<dt><?php echo __('Street Address'); ?></dt>
<dd>
<?php echo h($user['User']['address']); ?>
</dd>
<dt><?php echo __('Street Address2'); ?></dt>
<dd>
<?php echo h($user['User']['address2']); ?>
</dd>
<dt><?php echo __('City'); ?></dt>
<dd>
<?php echo h($user['User']['city']); ?>
</dd>
<dt><?php echo __('State'); ?></dt>
<dd>
<?php echo h($user['User']['state']); ?>
</dd>
<dt><?php echo __('Zip'); ?></dt>
<dd>
<?php echo h($user['User']['zip']); ?>
</dd>
<dt><?php echo __('Country'); ?></dt>
<dd>
<?php echo h($user['User']['country']); ?>
</dd>
<dt><?php echo __('Country Id'); ?></dt>
<dd>
<?php echo h($user['User']['country_id']); ?>
</dd>
<dt><?php echo __('Zone Id'); ?></dt>
<dd>
<?php echo h($user['User']['zone_id']); ?>
</dd>
<dt><?php echo __('Phone'); ?></dt>
<dd>
<?php echo h($user['User']['phone']); ?>
</dd>
<dt><?php echo __('Fax'); ?></dt>
<dd>
<?php echo h($user['User']['fax']); ?>
</dd>
<dt><?php echo __('Email'); ?></dt>
<dd>
<?php echo h($user['User']['email']); ?>
</dd>
<dt><?php echo __('Website'); ?></dt>
<dd>
<?php echo h($user['User']['website']); ?>
</dd>
<dt><?php echo __('Flat Shipping'); ?></dt>
<dd>
<?php echo h($user['User']['flat_shipping']); ?>
</dd>
<dt><?php echo __('Flat Price'); ?></dt>
<dd>
<?php echo h($user['User']['flat_price']); ?>
</dd>
<dt><?php echo __('Contact First Name'); ?></dt>
<dd>
<?php echo h($user['User']['contact_first_name']); ?>
</dd>
<dt><?php echo __('Contact Last Name'); ?></dt>
<dd>
<?php echo h($user['User']['contact_last_name']); ?>
</dd>
<dt><?php echo __('Contact Title'); ?></dt>
<dd>
<?php echo h($user['User']['contact_title']); ?>
</dd>
<dt><?php echo __('Contact Phone'); ?></dt>
<dd>
<?php echo h($user['User']['contact_phone']); ?>
</dd>
<dt><?php echo __('Contact Email'); ?></dt>
<dd>
<?php echo h($user['User']['contact_email']); ?>
</dd>
<dt><?php echo __('Contact Alt First Name'); ?></dt>
<dd>
<?php echo h($user['User']['contact_alt_first_name']); ?>
</dd>
<dt><?php echo __('Contact Alt Last Name'); ?></dt>
<dd>
<?php echo h($user['User']['contact_alt_last_name']); ?>
</dd>
<dt><?php echo __('Contact Alt Title'); ?></dt>
<dd>
<?php echo h($user['User']['contact_alt_title']); ?>
</dd>
<dt><?php echo __('Contact Alt Phone'); ?></dt>
<dd>
<?php echo h($user['User']['contact_alt_phone']); ?>
</dd>
<dt><?php echo __('Contact Alt Email'); ?></dt>
<dd>
<?php echo h($user['User']['contact_alt_email']); ?>
</dd>
<dt><?php echo __('Customer Service Contact'); ?></dt>
<dd>
<?php echo h($user['User']['customer_service_contact']); ?>
</dd>
<dt><?php echo __('Customer Service Phone'); ?></dt>
<dd>
<?php echo h($user['User']['customer_service_phone']); ?>
</dd>
<dt><?php echo __('Customer Service Phone Ext'); ?></dt>
<dd>
<?php echo h($user['User']['customer_service_phone_ext']); ?>
</dd>
<dt><?php echo __('Customer Service Email'); ?></dt>
<dd>
<?php echo h($user['User']['customer_service_email']); ?>
</dd>
<dt><?php echo __('Contact Fin First Name'); ?></dt>
<dd>
<?php echo h($user['User']['contact_fin_first_name']); ?>
</dd>
<dt><?php echo __('Contact Fin Last Name'); ?></dt>
<dd>
<?php echo h($user['User']['contact_fin_last_name']); ?>
</dd>
<dt><?php echo __('Contact Fin Title'); ?></dt>
<dd>
<?php echo h($user['User']['contact_fin_title']); ?>
</dd>
<dt><?php echo __('Contact Fin Phone'); ?></dt>
<dd>
<?php echo h($user['User']['contact_fin_phone']); ?>
</dd>
<dt><?php echo __('Contact Fin Email'); ?></dt>
<dd>
<?php echo h($user['User']['contact_fin_email']); ?>
</dd>
<dt><?php echo __('Ins Carrier'); ?></dt>
<dd>
<?php echo h($user['User']['ins_carrier']); ?>
</dd>
<dt><?php echo __('Ins Carrier Name'); ?></dt>
<dd>
<?php echo h($user['User']['ins_carrier_name']); ?>
</dd>
<dt><?php echo __('Ins Carrier Phone'); ?></dt>
<dd>
<?php echo h($user['User']['ins_carrier_phone']); ?>
</dd>
<dt><?php echo __('Ins Policy Num'); ?></dt>
<dd>
<?php echo h($user['User']['ins_policy_num']); ?>
</dd>
<dt><?php echo __('Ins Policy Exp'); ?></dt>
<dd>
<?php echo h($user['User']['ins_policy_exp']); ?>
</dd>
<dt><?php echo __('Ins Policy Coverage'); ?></dt>
<dd>
<?php echo h($user['User']['ins_policy_coverage']); ?>
</dd>
<dt><?php echo __('Shipping Policy'); ?></dt>
<dd>
<?php echo h($user['User']['shipping_policy']); ?>
</dd>
<dt><?php echo __('Payment Biz Name'); ?></dt>
<dd>
<?php echo h($user['User']['payment_biz_name']); ?>
</dd>
<dt><?php echo __('Payment Street Address'); ?></dt>
<dd>
<?php echo h($user['User']['payment_street_address']); ?>
</dd>
<dt><?php echo __('Payment City'); ?></dt>
<dd>
<?php echo h($user['User']['payment_city']); ?>
</dd>
<dt><?php echo __('Payment Zone Id'); ?></dt>
<dd>
<?php echo h($user['User']['payment_zone_id']); ?>
</dd>
<dt><?php echo __('Payment Zip'); ?></dt>
<dd>
<?php echo h($user['User']['payment_zip']); ?>
</dd>
<dt><?php echo __('Vendor Type'); ?></dt>
<dd>
<?php echo h($user['User']['vendor_type']); ?>
</dd>
<dt><?php echo __('Mycategories'); ?></dt>
<dd>
<?php echo h($user['User']['mycategories']); ?>
</dd>
<dt><?php echo __('Bd Image1'); ?></dt>
<dd>
<?php echo h($user['User']['bd_image1']); ?>
</dd>
<dt><?php echo __('Bd Image2'); ?></dt>
<dd>
<?php echo h($user['User']['bd_image2']); ?>
</dd>
<dt><?php echo __('Bd Image3'); ?></dt>
<dd>
<?php echo h($user['User']['bd_image3']); ?>
</dd>
<dt><?php echo __('Bd Image4'); ?></dt>
<dd>
<?php echo h($user['User']['bd_image4']); ?>
</dd>
<dt><?php echo __('Bd Image5'); ?></dt>
<dd>
<?php echo h($user['User']['bd_image5']); ?>
</dd>
<dt><?php echo __('Bd Image6'); ?></dt>
<dd>
<?php echo h($user['User']['bd_image6']); ?>
</dd>
<dt><?php echo __('Bd Category1'); ?></dt>
<dd>
<?php echo h($user['User']['bd_category1']); ?>
</dd>
<dt><?php echo __('Bd Category2'); ?></dt>
<dd>
<?php echo h($user['User']['bd_category2']); ?>
</dd>
<dt><?php echo __('Bd Category3'); ?></dt>
<dd>
<?php echo h($user['User']['bd_category3']); ?>
</dd>
<dt><?php echo __('Bd Category4'); ?></dt>
<dd>
<?php echo h($user['User']['bd_category4']); ?>
</dd>
<dt><?php echo __('Bd Category5'); ?></dt>
<dd>
<?php echo h($user['User']['bd_category5']); ?>
</dd>
<dt><?php echo __('Bd Category6'); ?></dt>
<dd>
<?php echo h($user['User']['bd_category6']); ?>
</dd>
<dt><?php echo __('Active'); ?></dt>
<dd>
<?php echo h($user['User']['active']); ?>
</dd>
<dt><?php echo __('Created'); ?></dt>
<dd>
<?php echo h($user['User']['created']); ?>
</dd>
<dt><?php echo __('Modified'); ?></dt>
<dd>
<?php echo h($user['User']['modified']); ?>
</dd>
</dl>










<div class="actions">
	<h3>Actions</h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit User'), array('action' => 'edit', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete User'), array('action' => 'delete', $user['User']['id']), null, __('Are you sure you want to delete # %s?', $user['User']['id'])); ?> </li>
	</ul>
</div>

<br />
<br />

