<div class="row">

	<div class="span3" style="width:270px">
    
		<div>
        
		<?php /*?><?php if(!empty($user)) : ?><?php */?>
        
			<div class="vendor-logo">
                <a href="/">
                <?php echo $this->Html->image('users/image/' . $user['User']['image'], array('class' => 'img-polaroid', 'width' =>'226px')); ?>
                </a>
                
                <div class="name"><?php echo $user['User']['name']; ?></div>
                <div class="plain"><?php echo $user['User']['city']; ?>, <?php echo $user['User']['state']; ?></div>
                
                <div class="quote"><?php echo $user['User']['shop_quote']; ?></div>
			</div>

			<a class="gb-nav" href="/">All Our Products</a>
			
			<p class="gb-nav "><?php if(!empty($category)) : ?><br />- -

				<?php echo $this->Html->link($category['Category']['name'], array('controller' => 'products', 'action' => 'category', 'slug' => $category['Category']['slug'])); ?>
			<?php endif; ?>

			<?php if(!empty($subcategory)) : ?>
				<br />- - - -<?php echo $this->Html->link($subcategory['Subcategory']['name'], array('controller' => 'products', 'action' => 'subcategory', 'slug' => $subcategory['Subcategory']['id'])); ?>
			<?php endif; ?></li>

			<?php if(!empty($subsubcategory)) : ?>
			<br />- - - - - - -<?php echo $this->Html->link($subsubcategory['Subsubcategory']['name'], array('controller' => 'products', 'action' => 'subsubcategory', 'slug' => $subsubcategory['Subsubcategory']['id'])); ?>
			<?php endif; ?>
			
			</p>



			<style>
				.navList li a {
					<?php echo $user['User']['awning_css']; ?>
				}
				.navList li ul.listTab li a, .navList li ul.listTab li {
					background-color:#fff;
				}
			</style>
            
            

			<div style="clear:both">

			<?php if(!empty($usercategories)) : ?>

						<ul>
							<?php foreach ($usercategories as $usercategory): ?>
							<li><span class="section-subheading small">
							<?php echo $this->Html->link($usercategory['Category']['name'], array('controller' => 'products', 'action' => 'category', 'slug' => $usercategory['Category']['slug'])); ?></span>
							</li>
							<?php endforeach; ?>
                        </ul>
                   
			<?php endif; ?>

			

			</div>

			<div style="clear:both">

						<?php //debug($usersubcategories); ?>

						<?php if(!empty($usersubcategories)) : ?>
                        
           
					
            

				<ul class="navList">
					<li><a href="#">Our Subcategories</a>
						 <!-- This is the sub nav -->
						 <ul class="listTab">
							<?php foreach ($usersubcategories as $usersubcategory): ?>
							<li><?php echo $this->Html->link($usersubcategory['Subcategory']['name'], array('controller' => 'products', 'action' => 'subcategory', 'slug' => $usersubcategory['Subcategory']['id'])); ?>
							</li>
							<?php endforeach; ?>
			<?php endif; ?>

				</ul>

			</div>


			<div style="clear:both">

		<?php if(!empty($usersubsubcategories)) : ?>
       
			<ul class="navList">
					<li><a href="#">Our Sub Sub Categories</a>
						<!-- This is the sub nav -->
						 <ul class="listTab">
						<?php foreach ($usersubsubcategories as $usersubsubcategory): ?>
						<li><?php echo $this->Html->link($usersubsubcategory['Subsubcategory']['name'], array('controller' => 'products', 'action' => 'subsubcategory', 'slug' => $usersubsubcategory['Subsubcategory']['id'])); ?>
						</li>
						<?php endforeach; ?>
						<?php endif; ?>

</ul>

		</div>
        <hr />

		<ul class="navList">
					<li><a href="#" id="story">Our Story</a></li>

		</ul>
        
		<?php if(!empty($user)) : ?>
        
                <style>
                        .vendor-css {
                            <?php echo $user['User']['awning_css']; ?>
                        }
                </style>
        
        
        <!-- Vendor Story -->
        <div id="story_content" style="display:none;color:#000;width:960px;background-color:#fff;padding:20px;">
            
            <div class="row">
                <div class="span4 left-corner-air">
                    <?php echo $this->Html->image('users/image/' . $user['User']['image'], array('class' =>'frame vendor-article-logo')); ?>
                </div>
                
                <div class="span6 quote-air">
        
                        <div class="vendor-special vendor-css">
                            <blockquote>
                                <?php echo $user['User']['shop_quote'] ?>
        
                                <div class="signature"><?php echo $user['User']['shop_signature'] ?></div>
                            </blockquote>
                        </div>
        
                </div>
            </div>
        
            <div class="row">
        
                <div class="span8 vendor-block">
        
                    <div id="vendor-group">
        
                        <div id="vendor-article">
                            <?php echo $user['User']['shop_description'] ?>
                        </div>
                        
        
                    </div>
        
                </div>
                
        <!-- Vendor Story Pics -->
                <div class="span4">
                    <div class="span4 air">
                    <?php if(!empty($user['User']['image_1'])) : echo $this->Html->image('users/image_1/' . $user['User']['image_1'], array('class' =>'vendor-pic')); endif ?>
                    </div>
                    <div class="span4 air">
                    <?php if(!empty($user['User']['image_2'])) : echo $this->Html->image('users/image_2/' . $user['User']['image_2'], array('class' =>'vendor-pic')); endif ?>
                    </div>
                    <div class="span4 air">
                    <?php if(!empty($user['User']['image_3'])) : echo $this->Html->image('users/image_3/' . $user['User']['image_3'], array('class' =>'vendor-pic')); endif ?>
                    </div>
                    <div class="span4 air">
                    <?php if(!empty($user['User']['image_4'])) : echo $this->Html->image('users/image_4/' . $user['User']['image_4'], array('class' =>'vendor-pic')); endif ?>
                    </div>
                    <div class="span4 air">
                    <?php if(!empty($user['User']['image_5'])) : echo $this->Html->image('users/image_5/' . $user['User']['image_5'], array('class' =>'vendor-pic')); endif ?>
                    </div>
                     <div class="span4 air">
                    <?php if(!empty($user['User']['image_6'])) : echo $this->Html->image('users/image_5/' . $user['User']['image_6'], array('class' =>'vendor-pic')); endif ?>
                    </div>
                     <div class="span4 air">
                    <?php if(!empty($user['User']['image_7'])) : echo $this->Html->image('users/image_5/' . $user['User']['image_7'], array('class' =>'vendor-pic')); endif ?>
                    </div>
                </div>
        
        
            </div>
        
        
        </div>
        
        
     
        
        
        
        

		<ul class="navList">
					<li><?php echo $this->Html->link('Our Recipes', array('controller' => 'recipes', 'action' => 'index')); ?></li>

		</ul>

		<!--<ul class="navList">
					<li><a href="#vendor-unit">Our Regions</a></li>
		</ul>-->

		

		</div>
        
        
        <div>
			<?php $vendor_policy = $user['User']['shipping_policy']; ?>
			<br />
       
        	<a href="#" id="policies" class="btn btn-gb">SHIPPING & CUSTOMER SERVICE</a>
        
        <!--<span><img class="hand" src="/img/global/hand.png" width="40px"/></span>-->
        </div>
        
        
      
            <!-- Element to pop up -->
            <div id="policy_content">
            <div class="policy-heading ">Customer Satisfaction, Shipping and Return Policy</div>
             <hr />
				<div class="pad"><?php echo ($vendor_policy); ?>
				</div>
			</div>
            <br />
           
            
        <!-- Vendor Sidebar Pics -->
        
        <div class="vendor-sidebar-pics">


			<?php if(!empty($user['User']['image_1'])) :
                        echo $this->Html->image('users/image_1/' . $user['User']['image_1'], array('class' => 'img-polaroid'));
                    endif ?>
    
            <?php if(!empty($user['User']['image_2'])) :
                        echo $this->Html->image('users/image_2/' . $user['User']['image_2'], array('class' => 'img-polaroid'));
                    endif ?>
    
          
    
            <?php endif; ?>
		</div>

</div>

	
	<div class="span8" style="width:690px;margin-left:0px;">
    
    


		<?php /*?><ul class="breadcrumb vendor-index">

		
				<li><?php //echo $user['User']['name']; ?></li>
			
			<div style="float:right">
				Your path:&nbsp;
                
                <?php //echo $this->Html->link($category['Category']['name'], array('controller' => 'products', 'action' => 'category', 'slug' => $category['Category']['slug'])); ?>

					<?php if(!empty($subcategory)) : ?>&nbsp;/&nbsp;
				<?php echo $this->Html->link($subcategory['Subcategory']['name'], array('controller' => 'products', 'action' => 'subcategory', 'slug' => $subcategory['Subcategory']['id'])); ?>
                <?php endif; ?>&nbsp;
				<?php if(!empty($subsubcategory)) : ?>&nbsp;/&nbsp;
					<?php echo $this->Html->link($subsubcategory['Subsubcategory']['name'], array('controller' => 'products', 'action' => 'subsubcategory', 'slug' => $subsubcategory['Subsubcategory']['id'])); ?>
                <?php endif; ?>
			</div>
				
				
		</ul><?php */?>
		

    
    
    
		<div class="awning">

			<!--<div id="div1">
				<div id="div2">
					<?php echo $this->Html->image('users/image/'. $user['User']['image']); ?>
				</div>​
			</div>
-->
			<style>
			#awning1 {
				<?php echo $user['User']['awning_css']; ?>
			}
			</style>

			<img id="awning1" src="/img/users/awning/default.png" />
            
            <div id="awning-text-wrapper">
            
            	<div id="awning-text"><?php echo $user['User']['name']; ?></div>
            
            </div>

		<div class="top-product-block">

		
			<div class="section-subheading vendor-category">
		
				<!--Logic to show where we are -->
				
				<?php if(!empty($subsubcategory)) : ?>
					<?php echo $subsubcategory['Subsubcategory']['name']; ?>
						  
				<?php elseif(!empty($subcategory)) : ?>
					<?php echo $subcategory['Subcategory']['name']; ?>
					
				<?php  elseif(!empty($category)) : ?>
					<?php echo $category['Category']['name']; ?>
					
				<?php endif; ?>
			
			</div>

			<div class="row product">

				<?php
				  $i = 0;
				  foreach ($products as $product):
				  $i++;
				  //if (($i % 4) == 0) { echo "\n<div class=\"row\">\n\n";}
				?>
				<div class="span2">

					<div class="content-product">

						<div class="content-img">

							<?php echo $this->Html->image('products/image/' . $product['Product']['image'], array('url' => array('subdomain' => $product['User']['slug'], 'controller' => 'products', 'action' => 'view', 'id' => $product['Product']['id'], 'slug' => $product['Product']['slug']), 'alt' => $product['Product']['name'], 'class' => 'img-polaroid img180')); ?>

							<div class="product-name">
								<a href="/product/<?php echo ($product['Product']['id'].'-'.$product['Product']['slug']);?>">
                            	<?php echo $this->Text->truncate($product['Product']['name'], 40, array('ellipsis' => '...', 'exact' => 'false')); ?>
                            	</a>

							</div>

						</div>
                        
                    

						<div class="price">$<?php echo $product['Product']['price']; ?></div>
                        
                        
                       <?php if(!empty($product['Product']['brand_id'])) : ?> 
                        
							<div class="brand"><?php echo $product['Product']['brand_id']; ?> / <?php echo $product['Product']['brand_name']; ?></div>
                        
                        <?php elseif(empty($product['Product']['brand_id'])) : ?> 
                        
                        	<div class="brand"><?php echo $user['User']['name']; ?></div>
                        
                        <?php endif; ?>

					</div>

				</div>

				<?php
				  if (($i % 4) == 0) { echo "</div>\n\n\t\t<div class=\"row product\">\n\n";}
				  endforeach;
				?>





			</div>

			<div style="clear:both" id="vendor-unit"></div>

			<div class="row">
				<div class="span12">

					<?php echo $this->element('pagination-counter'); ?>
					<?php echo $this->element('pagination'); ?>

				</div>
			</div>



		</div>

	</div>

	</div>

</div> 
