<h2>View Awning</h2>


<div class="page-header">
	<h2>Vendor Awning Color Tool</h2>
</div>


<?php echo $this->Form->create('User'); ?>
<?php echo $this->Form->input('id'); ?>

<?php echo $this->Form->input('awning_css'); ?>

<?php echo $this->Form->button('Submit', array('class' => 'btn')); ?>
<?php echo $this->Form->end(); ?>


<div class="row">
	<div class="span9 columns">
		<h3>Button Hue <small id="hue_value"></small></h3>
		<div id="hue"></div>
		<h3>Button Saturation <small id="saturation_value"></small></h3>
		<div id="saturation"></div>
		<h3>Button Lightness <small id="lightness_value"></small></h3>
		<div id="lightness"></div>
		<h3>Button Puffiness <small id="delta_value"></small></h3>
		<div id="delta"></div>
		<br /><br />
		
		<div class="awning custom large">Gourmet Basket Awning Color &raquo;</div>
		
	<?php  			
		$css = $user['User']['awning_css']; 
		$awning = $user['User']['awning_image']; 
	?>
	
	

<div style="<?php echo $css;?>"><img src="/img/awning/<?php echo $awning; ?>"></div>
		
		<textarea name="tttt" id="ttt"> 123456789</textarea>
		
		<br />
		
		<?php echo $this->Form->input('shop_quote', array('class' => '4span')); ?>
	</div>
			
	<div id="instructions" class="span6 columns">
		<div style="padding:20px">
		<h2>How to Use The Awning Color Generator</h2>
		
		<h3>First, play with the sliders on the left.</h3>
		<p>Use your arrow keys for extra precision. (Button Puffiness might not affect all browsers.)</p>
		<h3>Second, copy the CSS in the box below.</h3>
		<p>You should be able to just pop it into your CSS file. Apply the class &ldquo;btn-custom&rdquo; to any button (or other element) on your site that you want to have these colors.</p>
		<div id="embedded_css"></div>
	</div>
	
</div>
	
  
   
<div class="row">



	<div class="span12 columns">
	
			

	
		<h2>Some Examples!</h2>
		<div class="row">
			<div class="span4">
			<button class="sample btn custom large a" data-h="193" data-s="32" data-l="64", data-p="15">Alpha</button>
			<button class="sample btn custom large b" data-h="36" data-s="100" data-l="50", data-p="10">Bravo</button>
			<button class="sample btn custom large c" data-h="86" data-s="79" data-l="64", data-p="20">Charlie</button>
			<button class="sample btn custom large d" data-h="312" data-s="80" data-l="48", data-p="5">Delta</button>
			<button class="sample btn custom large e" data-h="110" data-s="56" data-l="26", data-p="10">Echo</button>
			</div>
			<div class="span4">
			<button class="sample btn custom large f" data-h="0" data-s="69" data-l="32", data-p="10">Foxtrot</button>
			<button class="sample btn custom large g" data-h="195" data-s="79" data-l="53", data-p="10">Golf</button>
			<button class="sample btn custom large h" data-h="0" data-s="0" data-l="26", data-p="10">Hotel</button>
			<button class="sample btn custom large i" data-h="214" data-s="37" data-l="45", data-p="17">India</button>
			<button class="sample btn custom large j" data-h="41" data-s="85" data-l="47", data-p="12">Juliet</button>
			</div>
			<div class="span4">
			<button class="sample btn custom large k" data-h="0" data-s="0" data-l="100", data-p="21">Kilo</button>
			<button class="sample btn custom large l" data-h="145" data-s="62" data-l="78", data-p="10">Lima</button>
			<button class="sample btn custom large m" data-h="195" data-s="60" data-l="40", data-p="5">Mike</button>
			<button class="sample btn custom large n" data-h="0" data-s="100" data-l="86", data-p="4">November</button>
			<button class="sample btn custom large o" data-h="70" data-s="11" data-l="34", data-p="11">Oscar</button>
			</div>            
		</div>
	</div>

</div>




<table class="table-striped table-bordered table-condensed table-hover">
<tr>
<td>Id</td>
<td><?php echo h($user['User']['id']); ?></td>
</tr>
<tr>
<td>Level</td>
<td><?php echo h($user['User']['level']); ?></td>
</tr>
<tr>
<td>Username</td>
<td><?php echo h($user['User']['username']); ?></td>
</tr>
<tr>
<td>Password</td>
<td><?php echo h($user['User']['password']); ?></td>
</tr>
<tr>
<td>Password Clear</td>
<td><?php echo h($user['User']['password_clear']); ?></td>
</tr>
<tr>
<td>Name</td>
<td><?php echo h($user['User']['name']); ?></td>
</tr>
<tr>
<td>Slug</td>
<td><?php echo h($user['User']['slug']); ?></td>
</tr>
<tr>
<td>Business Name</td>
<td><?php echo h($user['User']['business_name']); ?></td>
</tr>
<tr>
<td>Business Ownership</td>
<td><?php echo h($user['User']['business_ownership']); ?></td>
</tr>
<tr>
<td>Business Established</td>
<td><?php echo h($user['User']['business_established']); ?></td>
</tr>
<tr>
<td>Image</td>
<td><?php echo h($user['User']['image']); ?></td>
</tr>
<tr>
<td>Image1</td>
<td><?php echo h($user['User']['image_1']); ?></td>
</tr>
<tr>
<td>Image2</td>
<td><?php echo h($user['User']['image_2']); ?></td>
</tr>
<tr>
<td>Image3</td>
<td><?php echo h($user['User']['image_3']); ?></td>
</tr>
<tr>
<td>Image4</td>
<td><?php echo h($user['User']['image_4']); ?></td>
</tr>
<tr>
<td>Image5</td>
<td><?php echo h($user['User']['image_5']); ?></td>
</tr>
<tr>
<td>Image6</td>
<td><?php echo h($user['User']['image_6']); ?></td>
</tr>
<tr>
<td>Image Featured</td>
<td><?php echo h($user['User']['image_featured']); ?></td>
</tr>
<tr>
<td>Shop Description</td>
<td><?php echo $user['User']['shop_description']; ?></td>
</tr>
<tr>
<td>Shop Quote</td>
<td><?php echo h($user['User']['shop_quote']); ?></td>
</tr>
<tr>
<td>Shop Signature</td>
<td><?php echo h($user['User']['shop_signature']); ?></td>
</tr>
<tr>
<td>Street Address</td>
<td><?php echo h($user['User']['address']); ?></td>
</tr>
<tr>
<td>Street Address2</td>
<td><?php echo h($user['User']['address2']); ?></td>
</tr>
<tr>
<td>City</td>
<td><?php echo h($user['User']['city']); ?></td>
</tr>
<tr>
<td>State</td>
<td><?php echo h($user['User']['state']); ?></td>
</tr>
<tr>
<td>Zip</td>
<td><?php echo h($user['User']['zip']); ?></td>
</tr>
<tr>
<td>Country</td>
<td><?php echo h($user['User']['country']); ?></td>
</tr>
<tr>
<td>Country Id</td>
<td><?php echo h($user['User']['country_id']); ?></td>
</tr>
<tr>
<td>Zone Id</td>
<td><?php echo h($user['User']['zone_id']); ?></td>
</tr>
<tr>
<td>Phone</td>
<td><?php echo h($user['User']['phone']); ?></td>
</tr>
<tr>
<td>Fax</td>
<td><?php echo h($user['User']['fax']); ?></td>
</tr>
<tr>
<td>Email</td>
<td><?php echo h($user['User']['email']); ?></td>
</tr>
<tr>
<td>Website</td>
<td><?php echo h($user['User']['website']); ?></td>
</tr>
<tr>
<td>Flat Shipping</td>
<td><?php echo h($user['User']['flat_shipping']); ?></td>
</tr>
<tr>
<td>Flat Price</td>
<td><?php echo h($user['User']['flat_price']); ?></td>
</tr>
<tr>
<td>Contact First Name</td>
<td><?php echo h($user['User']['contact_first_name']); ?>
</td>
</tr>
<tr>
<td>Contact Last Name</td>
<td><?php echo h($user['User']['contact_last_name']); ?></td>
</tr>
<tr>
<td>Contact Title</td>
<td><?php echo h($user['User']['contact_title']); ?></td>
</tr>
<tr>
<td>Contact Phone</td>
<td><?php echo h($user['User']['contact_phone']); ?></td>
</tr>
<tr>
<td>Contact Email</td>
<td><?php echo h($user['User']['contact_email']); ?></td>
</tr>
<tr>
<td>Contact Alt First Name</td>
<td><?php echo h($user['User']['contact_alt_first_name']); ?></td>
</tr>
<tr>
<td>Contact Alt Last Name</td>
<td><?php echo h($user['User']['contact_alt_last_name']); ?></td>
</tr>
<tr>
<td>Contact Alt Title</td>
<td><?php echo h($user['User']['contact_alt_title']); ?></td>
</tr>
<tr>
<td>Contact Alt Phone</td>
<td><?php echo h($user['User']['contact_alt_phone']); ?></td>
</tr>
<tr>
<td>Contact Alt Email</td>
<td><?php echo h($user['User']['contact_alt_email']); ?></td>
</tr>
<tr>
<td>Customer Service Contact</td>
<td><?php echo h($user['User']['customer_service_contact']); ?></td>
</tr>
<tr>
<td>Customer Service Phone</td>
<td><?php echo h($user['User']['customer_service_phone']); ?></td>
</tr>
<tr>
<td>Customer Service Phone Ext</td>
<td><?php echo h($user['User']['customer_service_phone_ext']); ?></td>
</tr>
<tr>
<td>Customer Service Email</td>
<td><?php echo h($user['User']['customer_service_email']); ?></td>
</tr>
<tr>
<td>Contact Fin First Name</td>
<td><?php echo h($user['User']['contact_fin_first_name']); ?></td>
</tr>
<tr>
<td>Contact Fin Last Name</td>
<td><?php echo h($user['User']['contact_fin_last_name']); ?></td>
</tr>
<tr>
<td>Contact Fin Title</td>
<td><?php echo h($user['User']['contact_fin_title']); ?></td>
</tr>
<tr>
<td>Contact Fin Phone</td>
<td><?php echo h($user['User']['contact_fin_phone']); ?></td>
</tr>
<tr>
<td>Contact Fin Email</td>
<td><?php echo h($user['User']['contact_fin_email']); ?></td>
</tr>
<tr>
<td>Ins Carrier</td>
<td><?php echo h($user['User']['ins_carrier']); ?></td>
</tr>
<tr>
<td>Ins Carrier Name</td>
<td><?php echo h($user['User']['ins_carrier_name']); ?></td>
</tr>
<tr>
<td>Ins Carrier Phone</td>
<td><?php echo h($user['User']['ins_carrier_phone']); ?></td>
</tr>
<tr>
<td>Ins Policy Num</td>
<td><?php echo h($user['User']['ins_policy_num']); ?></td>
</tr>
<tr>
<td>Ins Policy Exp</td>
<td><?php echo h($user['User']['ins_policy_exp']); ?></td>
</tr>
<tr>
<td>Ins Policy Coverage</td>
<td><?php echo h($user['User']['ins_policy_coverage']); ?></td>
</tr>
<tr>
<td>Shipping Policy</td>
<td><?php echo h($user['User']['shipping_policy']); ?></td>
</tr>
<tr>
<td>Payment Biz Name</td>
<td><?php echo h($user['User']['payment_biz_name']); ?></td>
</tr>
<tr>
<td>Payment Street Address</td>
<td><?php echo h($user['User']['payment_street_address']); ?></td>
</tr>
<tr>
<td>Payment City</td>
<td><?php echo h($user['User']['payment_city']); ?></td>
</tr>
<tr>
<td>Payment Zone Id</td>
<td><?php echo h($user['User']['payment_zone_id']); ?></td>
</tr>
<tr>
<td>Payment Zip</td>
<td><?php echo h($user['User']['payment_zip']); ?></td>
</tr>
<tr><td>Vendor Type</td>
<td><?php echo h($user['User']['vendor_type']); ?></td>
</tr>
<tr>
<td>Mycategories</td>
<td><?php echo h($user['User']['mycategories']); ?></td>
</tr>
<tr>
<td>Bd Image1</td>
<td><?php echo h($user['User']['bd_image1']); ?></td>
</tr>
<tr>
<td>Bd Image2</td>
<td><?php echo h($user['User']['bd_image2']); ?></td>
</tr>
<tr>
<td>Bd Image3</td>
<td><?php echo h($user['User']['bd_image3']); ?></td>
</tr>
<tr>
<td>Bd Image4</td>
<td><?php echo h($user['User']['bd_image4']); ?></td>
</tr>
<tr>
<td>Bd Image5</td>
<td><?php echo h($user['User']['bd_image5']); ?></td>
</tr>
<tr>
<td>Bd Image6</td>
<td><?php echo h($user['User']['bd_image6']); ?></td>
</tr>
<tr>
<td>Bd Category1</td>
<td><?php echo h($user['User']['bd_category1']); ?></td>
</tr>
<tr>
<td>Bd Category2</td>
<td><?php echo h($user['User']['bd_category2']); ?></td>
</tr>
<tr>
<td>Bd Category3</td>
<td><?php echo h($user['User']['bd_category3']); ?></td>
</tr>
<tr>
<td>Bd Category4</td>
<td><?php echo h($user['User']['bd_category4']); ?></td>
</tr>
<tr>
<td>Bd Category5</td>
<td><?php echo h($user['User']['bd_category5']); ?></td>
</tr>
<tr>
<td>Bd Category6</td>
<td><?php echo h($user['User']['bd_category6']); ?></td>
</tr>
<tr>
<td>Active</td>
<td><a href="/admin/users/switch/active/<?php echo $user['User']['id']; ?>" class="status"><img src="/img/icon_<?php echo $user['User']['active']; ?>.png" alt="" /></a></td>
</tr>
<tr>
<td>Product Count</td>
<td><?php echo h($user['User']['product_count']); ?></td>
</tr>
<tr>
<td>Created</td>
<td><?php echo h($user['User']['created']); ?></td>
</tr>
<tr>
<td>Modified</td>
<td><?php echo h($user['User']['modified']); ?></td>
</tr>
</table>

<br />
<br />

<h3>Actions</h3>

<br />

<?php echo $this->Html->link('Edit User', array('action' => 'edit', $user['User']['id']), array('class' => 'btn')); ?>

<br />
<br />

<?php echo $this->Form->postLink('Delete User', array('action' => 'delete', $user['User']['id']), array('class' => 'btn btn-danger'), __('Are you sure you want to delete # %s?', $user['User']['id'])); ?>

<br />
<br />
<br />
<br />

