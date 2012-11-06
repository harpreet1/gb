<br />

<ul class="breadcrumb">

	<?php if(!empty($category)) : ?>
		<li><?php echo $this->Html->link($user['User']['name'], '/'); ?> <span class="divider">/</span></li>
		<li><?php echo $this->Html->link($category['Category']['name'], array('controller' => 'products', 'action' => 'category', 'slug' => $category['Category']['slug'])); ?> <span class="divider">/</span></li>
	<?php endif; ?>

	<?php if(!empty($subcategory)) : ?>
		<li><?php echo $this->Html->link($subcategory['Subcategory']['name'], array('controller' => 'products', 'action' => 'subcategory', 'slug' => $subcategory['Subcategory']['id'])); ?> <span class="divider">/</span></li>
	<?php endif; ?>

	<?php if(!empty($subsubcategory)) : ?>
	<li><?php echo $this->Html->link($subsubcategory['Subsubcategory']['name'], array('controller' => 'products', 'action' => 'subsubcategory', 'slug' => $subsubcategory['Subsubcategory']['id'])); ?> <span class="divider">/</span></li>
	<?php endif; ?>

	<li class="active"><?php //echo $product['Product']['name']; ?></li>

</ul>

<div class="row">

	<div class="span4">
		<?php if(!empty($user)) : ?>

			<h5><?php echo $user['User']['name']; ?></h5>

			<br />

			<?php echo $this->Html->image('users/image/' . $user['User']['image'], array('class' => 'img-polaroid', 'width' =>'226px')); ?>

			<?php if(!empty($usercategories)) : ?>

			<br /><br />

			<h6>Our Categories</h6>

			<?php foreach ($usercategories as $usercategory): ?>
				<?php echo $this->Html->link($usercategory['Category']['name'], array('controller' => 'products', 'action' => 'category', 'slug' => $usercategory['Category']['slug'])); ?>

				<br />
			<?php endforeach; ?>
			<br /><br />
			<?php endif; ?>

			<?php if(!empty($usersubcategories)) : ?>

				<br /><br />

				<h6>Our Subcategories</h6>

				<?php foreach ($usersubcategories as $usersubcategory): ?>
					<?php echo $this->Html->link($usersubcategory['Subcategory']['name'], array('controller' => 'products', 'action' => 'subcategory', 'slug' => $usersubcategory['Subcategory']['id'])); ?>

					<br />
				<?php endforeach; ?>
			<br /><br />
			<?php endif; ?>

		<?php if(!empty($usersubsubcategories)) : ?>

			<br /><br />
			<strong><?php echo $subcategory['Subcategory']['name']; ?></strong>
			<br />
			<h6>Our Sub Sub Categories</h6>

			<?php foreach ($usersubsubcategories as $usersubsubcategory): ?>
				<?php echo $this->Html->link($usersubsubcategory['Subsubcategory']['name'], array('controller' => 'products', 'action' => 'subsubcategory', 'slug' => $usersubsubcategory['Subsubcategory']['id'])); ?>

				<br />
			<?php endforeach; ?>
			<br /><br />
		<?php endif; ?>

		<p><?php echo $user['User']['shop_quote']; ?></p>

		<br />


		<?php if(!empty($category['Category']['image_1'])) :
					echo $this->Html->image('users/image_1/' . $user['User']['image_1'], array('class' => 'img-polaroid'));
				endif ?>

		<?php if(!empty($category['Category']['image_2'])) :
					echo $this->Html->image('users/image_2/' . $user['User']['image_2'], array('class' => 'img-polaroid'));
				endif ?>

		<?php if(!empty($category['Category']['image_3'])) :
					echo $this->Html->image('users/image_3/' . $user['User']['image_3'], array('class' => 'img-polaroid'));
				endif ?>

		<?php if(!empty($category['Category']['image_4'])) :
				echo $this->Html->image('users/image_4/' . $user['User']['image_4'], array('class' => 'img-polaroid'));
				endif ?>

		<?php if(!empty($category['Category']['image_5'])) :
			echo $this->Html->image('users/image_5/' . $user['User']['image_5'], array('class' => 'img-polaroid'));
				endif ?>

		<?php if(!empty($category['Category']['image_6'])) :
				echo $this->Html->image('users/image_6/' . $user['User']['image_6'], array('class' => 'img-polaroid'));
				endif ?>


		<?php endif; ?>
	</div>



<div class="span8">

		Sort by:&nbsp;
		<?php echo $this->Html->link('Alphabetical', array('?' => array('sort'=>'name', 'direction'=>'asc')) + $this->passedArgs); ?>
		&nbsp;
		<?php echo $this->Html->link('Lowest Price', array('?' => array('sort'=>'price', 'direction'=>'asc')) + $this->passedArgs); ?>
		&nbsp;

		<?php echo $this->Html->link('Highest Price', array('?' => array('sort'=>'price', 'direction'=>'desc')) + $this->passedArgs); ?>&nbsp;
		<?php echo $this->Html->link('Brand', array('?' => array('sort'=>'brand', 'direction'=>'asc')) + $this->passedArgs); ?>


		<br /><br />

	<div class="awning">


	<?php //echo $this->Html->image('awning/awning-for-bg.png'); ?>

		<style>
		#awning1 {
			<?php echo $user['User']['awning_css']; ?>
		}
		</style>

		<img id="awning1" src="/img/awning/awning.png">


	</div>

	<div class="top-product-block">

		<br />

		<div class="row gb">

			<?php
				$i = 0;
				$count = 0;
				foreach ($products as $product):
				$i++;
				$count++;
				//if (($i % 4) == 0) { echo "\n<div class=\"row\">\n\n";}
			?>
			<div class="span2 gb">

				<div class="content-product">

					<div class="content-img">

						<?php echo $this->Html->image('products/image/' . $product['Product']['image'], array('url' => array('subdomain' => $product['User']['slug'], 'controller' => 'products', 'action' => 'view', 'id' => $product['Product']['id'], 'slug' => $product['Product']['slug']), 'alt' => $product['Product']['name'], 'class' => 'img-polaroid img180')); ?>

						<div class="product-name">
							<a href="/product/<?php echo ($product['Product']['id'].'-'.$product['Product']['slug']);?>">
								<?php echo $this->Text->truncate(
									$product['Product']['name'],40,	array('ellipsis' => '...','exact' => 'false')); ?>
							</a>

						</div>

					</div>

					<div class="price">$<?php echo $product['Product']['price']; ?></div>
					<div class="brand"><?php echo $product['Product']['brand']; ?></div>

				</div>

			</div>

			<?php

			if ($count == 9) :

				echo "</div><!--end row gb--></div><!--end top product block--></div><div class=\"row\"><div class=\"span12 bottom-block\">";

				if (($i % 6) == 0) { echo "\n\n\t\t<div class=\"row gb\">\n\n"; }


			else if (($i % 3) == 0) { echo "\n\n\t\t<div class=\"row gb\">\n\n"; }

			endif ;

			endforeach;
		?>





		</div>

		<div style="clear:both"></div>

		<?php echo $this->element('pagination-counter'); ?>

		<?php echo $this->element('pagination'); ?>

		<br />


	</div>

</div>

<?php if(!empty($user)) : ?>


<hr>

<br />
<br />

<div class="row">

	<div class="span12 vendor-block">


<div id="vendor-story-wrapper-shell">
	<div class="vendor-story-wrapper">
		<div class="pad">
			<div id="summary" class="vendor-title" >
				<?php echo $this->Html->image('users/image/' . $user['User']['image'], array('class' => 'img-polaroid')); ?>
			</div>
			<!--<h2>- <?php //echo $products[0]['u']['shop_name'] ?>-</h2>-->
			<br/>

			<div class="vendor-article-pic1-wrapper">
			</div>
			<div class="vendor-article-bottom-wrapper">
			</div>

			<div class="vendor-article-pic-box upper-left">

<?php
		if(!empty($category['User']['image_6'])) :
			echo $this->Html->image('users/image_6/' . $user['User']['image_6'], array('width' => '250px', 'border' => '0', 'class' =>'vendor-story-pic', 'alt' => 'Vendor', 'title' => 'Vendor Pic 3' ));?>
			<br /><span> attribution</span>
<?php
	 	else : ?><img src="/img/user_image/default.png" alt="" />

<?php 	endif	?>


			</div>


			<div class="vendor-info">
				<div class="vendor-special">
		<?php echo $user['User']['shop_quote'] ?><br />
<div class="signature"><?php echo $user['User']['shop_signature'] ?></div>
				</div>


			</div>

			<div class="clear"></div>

				<div id="vendor-group">

					<div id="vendor-article">
<?php echo $user['User']['shop_description'] ?>
					</div>




					<div class ="vendor-group-pics">

					<div class="vendor-article-pic-box">
	<?php
			if(!empty($category['User']['image_5'])) :
				echo $this->Html->image('users/image_5/' . $user['User']['image_5'], array('width' => '250px', 'border' => '0', 'class' =>'vendor-story-pic', 'alt' => 'Vendor', 'title' => 'Vendor Pic 5' ));?>
				<br /><span> attribution</span>
	<?php
	 		else : ?><img src="/img/user_image/default.png" alt="" />

	<?php 	endif	?>
					</div>

					<div class="vendor-article-pic-box">

<?php
		if(!empty($category['User']['image_6'])) :
			echo $this->Html->image('users/image_6/' . $user['User']['image_6'], array('width' => '250px', 'border' => '0', 'class' =>'vendor-story-pic', 'alt' => 'Vendor', 'title' => 'Vendor Pic 3' ));?>
			<br /><span> attribution</span>
<?php
	 	else : ?><img src="/img/user_image/default.png" alt="" />

<?php 	endif	?>

					</div>

					<div class="vendor-article-pic-box" style="padding-right:0">

<?php if( $user['User']['image6'] != ""){
	echo $html->image('logos/'.$user['User']['image6'], array('width' => '250px', 'border' => '0', 'class' =>'vendor-story-pic', 'alt' => 'Vendor', 'title' => 'Vendor Pic 6' ));?> <br /><span> attribution</span><?php
} else {
?>

<img src="/admin/images/default.png" alt="" />

<?php }	?>




					</div>


				</div>



				</div>



			</div>
		</div>
	</div>

































		<?php echo $this->Html->image('users/image/' . $user['User']['image'], array('class' => 'img-polaroid')); ?>

		<br />
		<br />

		<h3><?php echo $user['User']['name']; ?></h3>

		<h5><?php echo $user['User']['shop_quote']; ?></h5>

	</div>

</div>



<div class="row">

	<div class="span2">
		<?php if(!empty($category['Category']['image_1'])) : echo $this->Html->image('users/image_1/' . $user['User']['image_1'], array('class' => 'img-polaroid')); endif ?>
	</div>
	<div class="span2">
		<?php if(!empty($category['Category']['image_2'])) : echo $this->Html->image('users/image_2/' . $user['User']['image_2'], array('class' => 'img-polaroid')); endif ?>
	</div>
	<div class="span2">
		<?php if(!empty($category['Category']['image_3'])) : echo $this->Html->image('users/image_3/' . $user['User']['image_3'], array('class' => 'img-polaroid')); endif ?>
	</div>
	<div class="span2">
		<?php if(!empty($category['Category']['image_4'])) : echo $this->Html->image('users/image_4/' . $user['User']['image_4'], array('class' => 'img-polaroid')); endif ?>
	</div>
	<div class="span2">
		<?php if(!empty($category['Category']['image_5'])) : echo $this->Html->image('users/image_5/' . $user['User']['image_5'], array('class' => 'img-polaroid')); endif ?>
	</div>
	<div class="span2">
		<?php if(!empty($category['Category']['image_6'])) : echo $this->Html->image('users/image_6/' . $user['User']['image_6'], array('class' => 'img-polaroid')); endif ?>
	</div>

</div>

<div class="row">
	<div class="span12">
		<?php echo $user['User']['shop_description']; ?>
	</div>
</div>


</div>
<?php endif; ?>

