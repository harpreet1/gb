<div class="row">
	<div class="span12">

		<ul class="breadcrumb">

		<?php if(empty($category)) : ?>
				<li><?php echo $user['User']['name']; ?> Shoppe</li>
		<?php else : ?>
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
		<?php endif; ?>
	</div>
</div>

<div class="row">

	<div class="span4">

		<?php if(!empty($user)) : ?>

			<?php echo $this->Html->image('users/image/' . $user['User']['image'], array('class' => 'img-polaroid', 'width' =>'226px')); ?>

			<p><?php echo $user['User']['shop_quote']; ?></p>



			<strong><?php if(!empty($category)) : ?><br />- -

				<?php echo $this->Html->link($category['Category']['name'], array('controller' => 'products', 'action' => 'category', 'slug' => $category['Category']['slug'])); ?>
			<?php endif; ?>

			<?php if(!empty($subcategory)) : ?>
				<br />- - -<?php echo $this->Html->link($subcategory['Subcategory']['name'], array('controller' => 'products', 'action' => 'subcategory', 'slug' => $subcategory['Subcategory']['id'])); ?>
			<?php endif; ?></li>

			<?php if(!empty($subsubcategory)) : ?>
			<br />- - - - -<?php echo $this->Html->link($subsubcategory['Subsubcategory']['name'], array('controller' => 'products', 'action' => 'subsubcategory', 'slug' => $subsubcategory['Subsubcategory']['id'])); ?>
			<?php endif; ?>
			</strong>



			<div style="clear:both">

			<?php if(!empty($usercategories)) : ?>

			<ul class="navList">
					<li><a href="#">Our Products</a>
						<!-- This is the sub nav -->
						<ul class="listTab">
							<?php foreach ($usercategories as $usercategory): ?>
							<li><?php echo $this->Html->link($usercategory['Category']['name'], array('controller' => 'products', 'action' => 'category', 'slug' => $usercategory['Category']['slug'])); ?>
							</li>
							<?php endforeach; ?>
                        </ul>
                    </li>
			<?php endif; ?>

			</ul>

			</div>

			<br />

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

			<br />

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

		<ul class="navList">
					<li><a href="#vendor-unit">Our Story</a></li>

		</ul>

		<ul class="navList">
					<li><?php echo $this->Html->link('Our Recipes', array('controller' => 'recipes', 'action' => 'index')); ?></li>

		</ul>

		<!--<ul class="navList">
					<li><a href="#vendor-unit">Our Regions</a></li>
		</ul>-->

		<ul class="navList">
					<li><a href="#">Our Shoppe Policies</a></li>

		</ul>

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
						<div class="brand"><?php echo $product['Product']['brand_name']; ?></div>

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

	<?php if(!empty($user)) : ?>

	<hr>

	<div class="row">
		<div class="span4 offset4">
			<?php echo $this->Html->image('users/image/' . $user['User']['image'], array('class' =>'vendor-article-logo')); ?>
		</div>
	</div>

	<div class="row">

		<div class="span12 air">

				<div class="vendor-special">
					<blockquote>
						<?php echo $user['User']['shop_quote'] ?>

						<div class="signature"><?php echo $user['User']['shop_signature'] ?></div>
					</blockquote>
				</div>

		</div>


		<div class="span8 vendor-block">

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

						<?php endif	?>
					</div>

					<div class="vendor-article-pic-box">

						<?php
						if(!empty($category['User']['image_6'])) :
							echo $this->Html->image('users/image_6/' . $user['User']['image_6'], array('width' => '250px', 'border' => '0', 'class' =>'vendor-story-pic', 'alt' => 'Vendor', 'title' => 'Vendor Pic 3' ));?>
							<br /><span> attribution</span>
						<?php
						else : ?><img src="/img/user_image/default.png" alt="" />

						<?php endif	?>

					</div>


				</div>

			</div>

		</div>


		<div class="span4">
			<div class="span4 air">
			<?php if(!empty($user['User']['image_2'])) : echo $this->Html->image('users/image_1/' . $user['User']['image_1'], array('class' =>'vendor-pic')); endif ?>
			</div>
			<div class="span4 air">
			<?php if(!empty($user['User']['image_3'])) : echo $this->Html->image('users/image_2/' . $user['User']['image_2'], array('class' =>'vendor-pic')); endif ?>
			</div>
			<div class="span4 air">
			<?php if(!empty($user['User']['image_4'])) : echo $this->Html->image('users/image_3/' . $user['User']['image_3'], array('class' =>'vendor-pic')); endif ?>
			</div>
			<div class="span4 air">
			<?php if(!empty($user['User']['image_5'])) : echo $this->Html->image('users/image_4/' . $user['User']['image_4'], array('class' =>'vendor-pic')); endif ?>
			</div>
			<div class="span4 air">
			<?php if(!empty($user['User']['image_6'])) : echo $this->Html->image('users/image_5/' . $user['User']['image_5'], array('class' =>'vendor-pic')); endif ?>
			</div>
		</div>


	</div>


</div>




	<div class="row">




	</div>
	<?php endif; ?>