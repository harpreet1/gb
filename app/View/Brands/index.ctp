<h2>Brands Index</h2>



<div style="overflow:auto;height:400px;width:250px;">
	<?php foreach($brands as $brand): ?>
	<?php echo $this->Html->link($brand['Brand']['name'], array('action' => 'view', $brand['Brand']['slug'])); ?><br />
	<?php endforeach; ?>
</div>




<ul class="meganizr mzr-slide mzr-responsive">
		<!-- 4 Columns Mega Dropdown -->
		<!-- Portfolio -->
		<li class="mzr-drop brands"> <a class ="brands-link" href="http://www.<?php echo Configure::read('Settings.DOMAIN'); ?>/categories">BRANDS<b class="caret"></b></a>
			<div class="mzr-content drop-six-columns popover-content">
				<div class="wide">
					
					

				</div>
			</div>
		</li>
			
</ul>


<!-- Include Products element -->
			<?php //echo $this->element('products'); ?>
			
			
			
<?php ////////////////////////////////////////////////////////////////////////////////////////////////// ?>


<div class="row">

	<div class="span3" style="width:270px">

		<div class="gb-nav-container">

		<?php /*?><?php if(!empty($user)) : ?><?php */?>

			<div class="vendor-logo">
				<a href="/">
				<?php //echo $this->Html->image('users/image/' . $user['User']['image'], array('class' => 'img-polaroid', 'width' =>'226')); ?>
				</a>

				<div class="name"><?php //echo $user['User']['name']; ?></div>
				<div class="plain"><?php //echo $user['User']['city']; ?>, <?php echo $user['User']['state']; ?></div>

				<div class="quote"><?php //echo $user['User']['shop_quote']; ?></div>
			</div>

<hr />

			<a class="gb-nav" href="/">All Brand Categories</a>


			<?php if(!empty($category)) : ?><br /><span class="gb-nav"><img src="/img/global/dash-2.png"></span>

				<?php echo $this->Html->link($category['Category']['name'], array('controller' => 'products', 'action' => 'category', $category['Category']['slug'])); ?>

				<?php $cat_crumb = $category['Category']['name']?>


			<?php endif; ?>

			<?php if(!empty($subcategory)) : ?>
				<br /><span class="gb-nav"><img src="/img/global/dash-4.png"></span><?php echo $this->Html->link($subcategory['Subcategory']['name'], array('controller' => 'products', 'action' => 'category', $category['Category']['slug'], $subcategory['Subcategory']['slug'])); ?>

				<?php $subcat_crumb = $subcategory['Subcategory']['name']?>

			<?php endif; ?>

			<?php if(!empty($subsubcategory)) : ?>
				<br /><span class="gb-nav"><img src="/img/global/dash-7.png"></span><?php echo $this->Html->link($subsubcategory['Subsubcategory']['name'], array('controller' => 'products', 'action' => 'category', $category['Category']['slug'], $subcategory['Subcategory']['slug'], $subsubcategory['Subsubcategory']['slug'])); ?>

				<?php $subsubcat_crumb = $subsubcategory['Subsubcategory']['name']?>

			<?php endif; ?>


			<div style="clear:both">

				<!-- Sub Sub Category Loop -->

				<?php if(!empty($subsubcategories)) : ?>

				<?php foreach ($subsubcategories as $subsubcategory): ?>

					<?php if ($subsubcat_crumb !== $subsubcategory['Subsubcategory']['name']) : ?>


						<span class="gb-nav"><img src="/img/global/dash-7.png"></span><?php echo $this->Html->link($subsubcategory['Subsubcategory']['name'], array('controller' => 'products', 'action' => 'category', $subsubcategory['Category']['slug'], $subsubcategory['Subcategory']['slug'], $subsubcategory['Subsubcategory']['slug'])); ?><br />

				   <?php endif ; ?>

				<?php endforeach; ?>
			<?php endif; ?>



				<!-- Sub Category Loop -->

			<?php if(!empty($subcategories)) : ?>

				<?php foreach ($subcategories as $subcategory): ?>

					<?php //echo 'subcat_crumb:' . ($subcat_crumb)  .  '----subcategory:' . ($subcategory['Subcategory']['name']) .'<br />';?>

						<?php //if(!empty($subcat_crumb)) : ?>
							<?php if ($subcat_crumb !== $subcategory['Subcategory']['name']) : ?>
						<?php //endif; ?>

							<span class="gb-nav"><img src="/img/global/dash-4.png"></span><?php echo $this->Html->link($subcategory['Subcategory']['name'], array('controller' => 'products', 'action' => 'category', $category['Category']['slug'], $subcategory['Subcategory']['slug'])); ?><br />

						<?php //if(!empty($subcat_crumb)) : ?>
							<?php endif; ?>
						<?php //endif; ?>


				<?php endforeach; ?>

			<?php endif; ?>


				<!-- Category Loop -->

				<?php if(!empty($usercategories)) : ?>

					<?php foreach ($usercategories as $usercategory): ?>
					<span class="gb-nav"><img src="/img/global/dash-2.png"></span>


					<?php echo $this->Html->link($usercategory['Category']['name'], array('controller' => 'products', 'action' => 'category', $usercategory['Category']['slug'])); ?><br />

					<?php endforeach; ?>

				<?php endif; ?>

				
			</div>





		
<hr />

		<ul class="navList">
					<li><a class="vendor-css" href="#" id="story">Our Story</a></li>

		</ul>



		
		

	</div>

		

</div>


	<div class="span8" style="width:690px;margin-left:0px;">


		<div class="awning">

			<!--<div id="div1">
				<div id="div2">
					<?php //echo $this->Html->image('users/image/'. $user['User']['image']); ?>
				</div>​
			</div>
-->
			<style>
			#awning1 {
				<?php //echo $user['User']['awning_css']; ?>
			}
			</style>

			<img id="awning1" src="/img/users/awning/default.png" />

			<div id="awning-text-wrapper">

				<div id="awning-text"><?php //echo $user['User']['name']; ?></div>

			</div>

		<div class="top-product-block">


			<div class="section-subheading vendor-category">

				<!--Logic to show where we are -->

			<?php if(!empty($subsubcat_crumb)) : ?>
				<?php echo ($subsubcat_crumb); ?>

			<?php elseif (!empty($subcat_crumb)) : ?>
				<?php echo ($subcat_crumb); ?>

			<?php elseif (!empty($cat_crumb)) : ?>
				<?php echo ($cat_crumb); ?>
			<?php endif; ?>


			</div>
			
			<?php $product = 0 ?>

			<!-- Include Products element -->
			<?php echo $this->element('products'); ?>



			<div style="clear:both" id="vendor-unit"></div>

			<div class="row">
				<div class="span12 pagination-block">

					<!--<span class="pagination-counter"<?php //echo $this->element('pagination-counter'); ?></span>-->
					<?php echo $this->element('pagination'); ?>

				</div>
			</div>

		</div>

	</div>

	</div>

</div>
			
			
			
			
			