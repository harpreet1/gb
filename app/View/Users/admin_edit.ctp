<?php echo $this->Html->script('/tiny_mce/tiny_mce.js'); ?>


<script type="text/javascript">
	tinyMCE.init({
		mode : "textareas",
		theme : "advanced",
		theme_advanced_styles:'',
		editor_deselector : "mceNoEditor",
		skin: "thebigreason",
		plugins : "inlinepopups",
		plugins : "paste",
		// Theme options
		theme_advanced_buttons1 : "styleselect,bold,italic,underline,hr,|,justifyleft,justifycenter,justifyright,justifyfull,|,link,unlink,|,bullist,numlist,|,pastetext,pasteword,selectall,|,removeformat,code",
		theme_advanced_resizing : true,	});
</script>

<script>
	$(function() {
		$( "#datepicker" ).datepicker();
		$( "#datepicker" ).datepicker({ changeYear: true });
		// getter
		var changeYear = $( ".selector" ).datepicker( "option", "changeYear" );
		// setter
		$( "#datepicker" ).datepicker( "option", "changeYear", true );
		$( "#datepicker" ).datepicker({ gotoCurrent: true });
		// getter
		var gotoCurrent = $( ".selector" ).datepicker( "option", "gotoCurrent" );
		// setter
		$( "#datepicker" ).datepicker( "option", "gotoCurrent", true );
	});
  </script>

	<script>  
  	// Format phone number script
function doFormatPhone(A){var B=document.getElementById(A);B.onblur=function(){formatPhone(this)}}function formatPhone(A){A.value=formatPhoneStr(A.value)}function formatPhoneStr(A){var C=A.replace(/[^0-9xX]/g,"");C=C.replace(/[xX]/g,"x");var B="";if(C.indexOf("x")>-1){B=" "+C.substr(C.indexOf("x"));C=C.substr(0,C.indexOf("x"))}switch(C.length){case (10):return C.replace(/(...)(...)(....)/g,"($1) $2-$3")+B;case (11):if(C.substr(0,1)=="1"){return C.substr(1).replace(/(...)(...)(....)/g,"($1) $2-$3")+B}break;default:}return A}window.onload=function(){doFormatPhone("phone")};

  </script>
  

<div id="wrapper">

	<div class="title">VENDOR PROFILE</div>
	
	<h4>Admin Info Edit</h4>
	
	<?php echo $this->Form->create('User'); ?>
	<?php echo $this->Form->input('id'); ?>
	
	<div class="row">
		<div class="span12">
			<?php echo $this->Form->button('Submit', array('class' => 'btn btn-primary')); ?><br />
		</div>
	
		<div class="span16">
	
	
			<div class="span4">
				<?php echo $this->Form->input('level', array('label' => 'User Level' , 'options' => array( 'admin' => 'Admin','vendor' => 'Vendor'))); ?>
				<?php echo $this->Form->input('username'); ?>
				<?php echo $this->Form->input('name', array('label' => 'Shoppe Name')); ?>
				<?php echo $this->Form->input('slug', array('label' => 'Domain Prefix <br />do NOT use hyphens here - only one word, no spaces')); ?>
				<?php echo $this->Form->input('business_name', array('label' => 'Business Name')); ?>
				<?php echo $this->Form->input('business_name_dba', array('label' => 'DBA - List all' , 'rows'=> '3', 'cols' => '3', 'class' => 'mceNoEditor')); ?>
				
				<hr />
				
				<?php echo $this->Form->input('phone', array('label' => 'Phone - General')); ?>
                <?php echo $this->Form->input('cell', array('label' => 'Cell - General')); ?>
				<?php echo $this->Form->input('fax', array('label' => 'Fax - General')); ?>
				<?php echo $this->Form->input('email', array('label' => 'email - General', 'class' => 'span4')); ?>
				<?php echo $this->Form->input('address', array('label' => 'Address - Line 1')); ?>
				<?php echo $this->Form->input('address2', array('label' => 'Address - Line 2')); ?>
				<?php echo $this->Form->input('city'); ?>
				<?php echo $this->Form->input('state'); ?>
				<?php echo $this->Form->input('zip', array('class' => 'span1')); ?>
				
				<hr />
				
				<?php echo $this->Form->input('website'); ?>
								
				<?php //echo $this->Form->input('contact_name'); ?>
				<?php //echo $this->Form->input('vendor_type'); ?>
								
				<?php //echo $this->Form->input('mycategories'); ?>
                
                
				<?php echo $this->Form->input('business_ownership', array('empty' => '--','label' => 'Type of Business Ownership' , 'options' => array( 'family owned' => 'Family Owned','individual' => 'Individual', 'small corporation' => 'Small Corporation', 'large corporation' => 'Large Corporation', 'other' => 'Other'))); ?>
				<?php echo $this->Form->input('business_established', array('class' => 'span1','label' => 'Year the business was established')); ?>
				
				<hr />
				<h3>CONTACT INFO</h3>
				<?php echo $this->Form->input('contact_name'); ?>
				<?php echo $this->Form->input('contact_title'); ?>
				<?php echo $this->Form->input('contact_phone'); ?>
                <?php echo $this->Form->input('contact_cell'); ?>
				<?php echo $this->Form->input('contact_email', array('class' => 'span4')); ?>
				
				<hr />
				<?php echo $this->Form->input('contact_alt_name', array('label' => 'Alternate Contact Name')); ?>
				<?php echo $this->Form->input('contact_alt_title', array('label' => 'Alternate Contact Title')); ?>
				<?php echo $this->Form->input('contact_alt_phone', array('label' => 'Alternate Contact Phone')); ?>
                <?php echo $this->Form->input('contact_alt_cell', array('label' => 'Alternate Contact Cell')); ?>
				<?php echo $this->Form->input('contact_alt_email', array('label' => 'Alternate Contact eMail', 'class' => 'span4')); ?>
	
			
                
                
                
                
	
			</div>
            
            
            
            
            
            
            
			<div class="span4">
            
               
			<h3>SHIPPING</h3>
				
				<?php echo $this->Form->input('shipping_method', array('label' => 'Preferred Shipping Method','empty' => '--', 'options' => array('ups' => 'UPS', 'fedex' => 'FEDEX', 'usps' => 'US Postal Service'))); ?>
				<?php echo $this->Form->input('shipping_method_2', array('label' => 'Alternate Shipping Method' ,'empty' => '--', 'options' => array('ups' => 'UPS', 'fedex' => 'FEDEX', 'usps' => 'US Postal Service'))); ?>
				<?php echo $this->Form->input('shipping_method_3', array('label' => '2nd Alternate Shipping Method' ,'empty' => '--', 'options' => array('ups' => 'UPS', 'fedex' => 'FEDEX', 'usps' => 'US Postal Service'))); ?>
                
                <br />
                
               <div class="inline"> We ship in&nbsp;<?php echo $this->Form->input('ship_time', array('label' => false, 'class' => 'span1')); ?> days from receipt of order.</div>
              
               <br />
				<?php echo $this->Form->input('shipping_policy', array('rows' => 10, 'class' => '4span', 'label' => 'Shipping/ Return/ Customer Satisfaction Policies')); ?>
                <br />
				<?php echo $this->Form->input('min_shipping_check', array('type' => 'checkbox','label' =>'Check if there is a minimum shipping charge.')); ?>
				<br />
				 <?php echo $this->Form->input('min_shipping', array('class' => 'span1','label' =>'Minimum shipping charge')); ?>
				<br />
                <hr />
                <h4>FLAT SHIPPING LEVELS</h4>
                <?php echo $this->Form->input('flat_shipping', array('type' => 'checkbox','label' =>'Check if flat rate shipping will be offered.')); ?>
               
                <?php echo $this->Form->input('ship_determinant', array('empty' => '--','label' => 'Shipping Determinant' , 'options' => array('0' => 'Dollars', '1' => 'Tins/ Bags/ Containers',))); ?>
               
                <div class="row">
                	<div class="span1 horiz-label">Level 1:</div>
                    <div class="span1 shipping">
                        <?php echo $this->Form->input('flat_ship_level_1_low', array('class' => 'span1','label' => 'From:')); ?>
                    </div>
                    <div class="span1 shipping">
                        <?php echo $this->Form->input('flat_ship_level_1_high', array('class' => 'span1','label' => 'To:')); ?>
                    </div>
                    <div class="span1 shipping">
                       <?php echo $this->Form->input('flat_ship_level_1_price', array('class' => 'span1','label' =>'Price')); ?>
                    </div>
				</div>

                <div class="row">
                	<div class="span1 horiz-label">Level 2:</div>
                    <div class="span1 shipping">
                        <?php echo $this->Form->input('flat_ship_level_2_low', array('class' => 'span1','label' => 'From:')); ?>
                    </div>
                    <div class="span1 shipping">
                        <?php echo $this->Form->input('flat_ship_level_2_high', array('class' => 'span1','label' => 'To:')); ?>
                    </div>
                    <div class="span1 shipping">
                       <?php echo $this->Form->input('flat_ship_level_2_price', array('class' => 'span1','label' =>'Price')); ?>
                    </div>
				</div>

                <div class="row">
                	<div class="span1 horiz-label">Level 3:</div>
                    <div class="span1 shipping">
                        <?php echo $this->Form->input('flat_ship_level_3_low', array('class' => 'span1','label' => 'From:')); ?>
                    </div>
                    <div class="span1 shipping">
                        <?php echo $this->Form->input('flat_ship_level_3_high', array('class' => 'span1','label' => 'To:')); ?>
                    </div>
                    <div class="span1 shipping">
                       <?php echo $this->Form->input('flat_ship_level_3_price', array('class' => 'span1','label' =>'Price')); ?>
                    </div>
				</div>

                <div class="row">
                	<div class="span1 horiz-label">Level 4:</div>
                    <div class="span1 shipping">
                        <?php echo $this->Form->input('flat_ship_level_4_low', array('class' => 'span1','label' => 'From:')); ?>
                    </div>
                    <div class="span1 shipping">
                        <?php echo $this->Form->input('flat_ship_level_4_high', array('class' => 'span1','label' => 'To:')); ?>
                    </div>
                    <div class="span1 shipping">
                       <?php echo $this->Form->input('flat_ship_level_4_price', array('class' => 'span1','label' =>'Price')); ?>
                    </div>
				</div>

               
				
				<?php echo $this->Form->input('flat_shipping_weight_threshold', array('class' => 'span1')); ?>
                
                <hr />
                
                
                <div class="row">
                	
                    <div class="span2 shipping">
                        <?php echo $this->Form->input('free_shipping', array('type' => 'checkbox')); ?>
                    </div>
                    
                    <div class="span2 shipping">
                        <?php echo $this->Form->input('free_shipping_price_threshold', array('class' => 'span1','label' => 'Price')); ?>
                        
                    </div>
                  
				</div>
				

				<hr />
				<h3>WAREHOUSE</h3>
				<?php echo $this->Form->input('warehouse_manager'); ?>
				<?php echo $this->Form->input('warehouse_phone'); ?>
				<?php echo $this->Form->input('warehouse_ext', array('class' => 'span1','label' =>'Warehouse Extension')); ?>
				<?php echo $this->Form->input('warehouse_email', array('class' => 'span4')); ?>
				
				<hr />
				<h3>CUSTOMER SERVICE</h3>
				<?php echo $this->Form->input('customer_service_contact', array('label' =>'Customer Service Name')); ?>
				<?php echo $this->Form->input('customer_service_phone'); ?>
				<?php echo $this->Form->input('customer_service_email', array('class' => 'span4')); ?>
				
				<hr />
				<h3>SHOPPE DESCRIPTION</h3>
				<?php echo $this->Form->input('shop_description', array('rows' => 20, 'class' => '4span')); ?><br />
				<?php echo $this->Form->input('shop_quote', array('class' => '4span')); ?>
				<?php echo $this->Form->input('shop_signature'); ?>
                <?php echo $this->Form->input('min_purchase', array('label' =>'Minimum Purchase','class' => 'span1')); ?>
                <?php echo $this->Form->input('mini_shipping_policy', array('label' =>'Shipping Info','class' => 'span2')); ?>
	
			</div>
            
            <div class="span6">
            <div style="background-color:#FFC;; border:#CCC thin dotted;padding:10px;">
                  <h3>VENDOR SITE APPROVAL</h3>
                      <?php echo $this->Form->input('Approval.id', array('type' => 'hidden')); ?>
                      <?php echo $this->Form->input('Approval.status', array('label' => 'Approval Status','empty' => '--', 'options' => array('1' => 'Approve as is', '2' => 'Approve with modifications', ))); ?>
                      
                      <?php echo $this->Form->input('Approval.comments', array('label' => 'Modifications')); ?>
               </div>       
            
            
            </div>
            
            
            
            
			
			<div class="span3 offset3">
				<h3>FINANCIAL INFO</h3>
				<?php echo $this->Form->input('fin_contact_name', array('label' => 'Financial Contact Name')); ?>
				<?php echo $this->Form->input('fin_contact_title', array('label' => 'Financial Contact Title')); ?>
				<?php echo $this->Form->input('fin_contact_phone', array('label' => 'Financial Contact Phone')); ?>
                <?php echo $this->Form->input('fin_contact_cell', array('label' => 'Financial Contact Cell')); ?>
				<?php echo $this->Form->input('fin_contact_email', array('label' => 'Financial Contact eMail','class' => 'span4')); ?>
				<?php echo $this->Form->input('payment_biz_name', array('label' => 'Payment Business Name')); ?>
				<?php echo $this->Form->input('payment_street_address'); ?>
				<?php echo $this->Form->input('payment_city'); ?>
				<?php echo $this->Form->input('payment_state', array('options' => $states,'empty' => '--')); ?>
				<?php echo $this->Form->input('payment_zip'); ?>
				<?php echo $this->Form->input('email_orders', array('label' => 'email - Orders','class' => 'span4')); ?>

				<hr />
				<h3>INSURANCE</h3>
				<?php echo $this->Form->input('ins_carrier', array('label' => 'Insurance Company')); ?>
                <?php echo $this->Form->input('ins_agent_name', array('label' => 'Insurance Agent Name')); ?>
				<?php echo $this->Form->input('ins_agent_phone', array('label' => 'Insurance Agent Phone')); ?>
                <?php echo $this->Form->input('ins_agent_email', array('label' => 'Insurance Agent Email', 'class' => 'span4')); ?>
                <?php echo $this->Form->input('ins_company', array('label' => 'Insuring Company')); ?>
				<?php echo $this->Form->input('ins_policy_num', array('label' => 'Policy Number')); ?>
				<?php echo $this->Form->input('ins_policy_exp', array('id' => 'datepicker', 'label' => 'Policy Expiration Date','class' => 'mceNoEditor')); ?>
                <h4>Policy Coverage:</h4>
				<?php echo $this->Form->input('ins_coverage_each', array('label' => 'Each Occurence')); ?>
                <?php echo $this->Form->input('ins_coverage_aggr', array('label' => 'Aggregate Amount')); ?>
				
				<hr />
				<h3>COMPENSATION</h3>
				<?php echo $this->Form->input('wholesale', array('type' => 'checkbox','label' => 'Check if you will offer GB wholesale prices.')); ?>
				<?php echo $this->Form->input('commission_full', array('class' => 'span1','label' => ' % Commission for Retail Prices')); ?>
				<?php echo $this->Form->input('commission_discount', array('class' => 'span1','label' => '% Commission for Discount Prices')); ?>
				
				<hr />
				
				<h3>TAXES</h3>
				<?php //echo $this->Form->input('check', array('type' => 'checkbox','label' => 'Do you charge tax?')); ?>
				<h5>Please indicate tax as %</h5>
				<?php echo $this->Form->input('Tax.id', array('type' => 'hidden')); ?>
				<?php echo $this->Form->input('Tax.total_food_tax_in_state', array('class' => 'span1','label' => 'Food Tax Shipping In-State')); ?>
				<?php echo $this->Form->input('Tax.total_food_tax_out_state', array('class' => 'span1','label' => 'Food Tax Shipping Out of State')); ?>
				<?php echo $this->Form->input('Tax.total_non_food_tax_in_state',array('class' => 'span1','label' => 'Non Food Tax Shipping In-State')); ?>
				<?php echo $this->Form->input('Tax.total_non_food_tax_out_state',array('class' => 'span1','label' => 'Non Food Tax Shipping Out of State')); ?>

			</div>
			<!--<div class="span2">
	
			</div>-->
		</div>
	</div>
    
    
<div class="row">


	<?php if($this->Form->value('User.image_1') !== '') : ?>
        <div class="span4">
            <div style="height:300px">       
                <img class="user-img" src="/img/users/image_1/<?php echo $this->Form->value('User.image_1'); ?>" />
             </div>   
            <?php echo $this->Form->input('pic_title_1', array('class' => 'span4')); ?>
            <?php echo $this->Form->input('attr_1', array('class' => 'span4')); ?>
           

        </div>  
	<?php endif; ?>
                  
        
	<?php if($this->Form->value('User.image_2') !== '') : ?>
        <div class="span4">
            <div style="height:300px">       
                <img class="user-img" src="/img/users/image_2/<?php echo $this->Form->value('User.image_2'); ?>" />
             </div>   
            <?php echo $this->Form->input('pic_title_2', array('class' => 'span4')); ?>
            <?php echo $this->Form->input('attr_2', array('class' => 'span4')); ?>
           
         </div>       
	<?php endif; ?>
        
        
	<?php if($this->Form->value('User.image_3') !== '') : ?>
        <div class="span4">
            <div style="height:300px">       
                <img class="user-img" src="/img/users/image_3/<?php echo $this->Form->value('User.image_3'); ?>" />
             </div>   
            <?php echo $this->Form->input('pic_title_3', array('class' => 'span4')); ?>
            <?php echo $this->Form->input('attr_3', array('class' => 'span4')); ?>
           

          </div>               
	<?php endif; ?>
       

	<?php if($this->Form->value('User.image_4') !== '') : ?>
        <div class="span4">
            <div style="height:300px">       
                <img class="user-img" src="/img/users/image_4/<?php echo $this->Form->value('User.image_4'); ?>" />
             </div>   
            <?php echo $this->Form->input('pic_title_4', array('class' => 'span4')); ?>
            <?php echo $this->Form->input('attr_4', array('class' => 'span4')); ?>
            
          </div>         
	<?php endif; ?>
        
        
	<?php if($this->Form->value('User.image_5') !== '') : ?>
        <div class="span4">
            <div style="height:300px">       
                <img class="user-img" src="/img/users/image_5/<?php echo $this->Form->value('User.image_5'); ?>" />
             </div>   
                <?php echo $this->Form->input('pic_title_5', array('class' => 'span4')); ?>
                <?php echo $this->Form->input('attr_5', array('class' => 'span4')); ?>
              
			</div>
            
         </div>    
   <?php endif; ?>
   
   <?php if($this->Form->value('User.image_6') !== '') : ?>
        <div class="span4">
            <div style="height:300px">       
                <img class="user-img" src="/img/users/image_6/<?php echo $this->Form->value('User.image_6'); ?>" />
             </div>   
                <?php echo $this->Form->input('pic_title_6', array('class' => 'span4')); ?>
                <?php echo $this->Form->input('attr_6', array('class' => 'span4')); ?>
              
			</div>
            
         </div>    
   <?php endif; ?>
         
    
	<br />   
	<br />   
	<br />   
    
	<div class="row">
		<div class="span12">
	
			<div class="span4">
            <hr />
				<?php echo $this->Form->input('active', array('type' => 'checkbox', 'label' => 'Active')); ?>
                <?php echo $this->Form->input('show', array('type' => 'checkbox', 'label' => 'Show')); ?><br />
                <?php echo $this->Form->input('more', array('type' => 'checkbox', 'label' => 'More products coming?')); ?>
	
				<br />
				<?php echo $this->Form->button('Submit', array('class' => 'btn')); ?>
				<?php echo $this->Form->end(); ?>
				<br />
				
				<h3>Actions</h3>
				<?php echo $this->Html->link('View User', array('action' => 'view', $user['User']['id']), array('class' => 'btn')); ?>
				<br />
				<br />
                <br />
                <br />
				<br />
				<?php echo $this->Form->postLink('Delete', array('action' => 'delete', $this->Form->value('User.id')), array('class' => 'btn btn-danger'), __('Are you sure you want to delete # %s?', $this->Form->value('User.id'))); ?>
			</div>
		</div>
	</div>
	
	<br />
	<br />
	