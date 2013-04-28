<div class="row">

	<div class="span3" style="width:240px;">

	<h3 class="gb-heading uppercase category"><?php echo $category['Category']['name'] ?>

	</h3>
	<hr class="category">

	<span class="cat-quote"><?php echo $category['Category']['quote'] ?></span>
	<div class="category-summary"><?php echo $this->Html->image('categories/image/' . $category['Category']['image'], array('class' => 'category-pic-small')); ?>
		<?php echo $category['Category']['summary'] ?>
		 <a href="#" id="story">Read more of this story...</a>
	</div>

		<h2 class="gb-heading"><span class="section-subheading">Showing:</span></h2>
		<p class="gb-heading"><?php echo $category['Category']['name'] ?></p>

		<?php if(!empty($subcategories)) : ?>
			<?php foreach ($subcategories as $subcategories1): ?>
				- - - <?php echo $this->Html->link($subcategories1['Subcategory']['name'], array('controller' => 'categories', 'action' => 'view', $category['Category']['slug'], $subcategories1['Subcategory']['slug'])); ?>
				<br />
			<?php endforeach; ?>

		<?php endif; ?>

		<?php if(!empty($subsubcategories)) : ?>

			<br />
			<br />

			<?php foreach ($subsubcategories as $subsubcategories1): ?>
				- - - - -<?php echo $this->Html->link($subsubcategories1['Subsubcategory']['name'], array('controller' => 'categories', 'action' => 'view', $category['Category']['slug'], $subcategory['Subcategory']['slug'], $subsubcategories1['Subsubcategory']['slug'])); ?>
				<br />
			<?php endforeach; ?>

		<?php endif; ?>

	</div>

	<div class="span9">

		<ul class="breadcrumb categories">

			<li><?php echo $this->Html->link('Categories', array('controller' => 'categories', 'action' => 'index')); ?></li>
			<span class="divider">/</span>

			<?php if(!empty($category)) : ?>
				<li><?php echo $this->Html->link($category['Category']['name'], array('controller' => 'categories', 'action' => 'view', $category['Category']['slug'])); ?></li>
				<span class="divider">/</span>
			<?php endif; ?>

			<?php if(!empty($subcategory)) : ?>
				<li><?php echo $this->Html->link($subcategory['Subcategory']['name'], array('controller' => 'categories', 'action' => 'view', $category['Category']['slug'], $subcategory['Subcategory']['slug'])); ?></li>
				<span class="divider">/</span>
			<?php endif; ?>

			<?php if(!empty($subsubcategory)) : ?>
				<li><?php echo $this->Html->link($subsubcategory['Subsubcategory']['name'], array('controller' => 'categories', 'action' => 'view', $category['Category']['slug'], $subcategory['Subcategory']['slug'], $subsubcategory['Subsubcategory']['slug'])); ?></li>
				<span class="divider">/</span>
			<?php endif; ?>

		</ul>

		<h3 class="gb-heading dark">

	<?php
		if(!empty($subsubcategory)) :
			echo $subsubcategory['Subsubcategory']['name'];

		elseif (!empty($subcategory)) :
			echo $subcategory['Subcategory']['name'];

		elseif 	(!empty($category)) :
			echo $category['Category']['name'];

		endif;

	?>

	</h3>

		<div class="cat-product-block">

			<div class="row">
				<?php
					$i = 0;
					foreach ($products as $product):
					$i++;
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

						<div class="brand">
						<?php echo $this->Html->link($product['User']['name'], array('subdomain' => $product['User']['slug'], 'controller' => 'products', 'action' => 'index')); ?>
						</div>

					</div>

				</div>

				<?php if (($i % 4) == 0) : ?>

			</div>
		</div>

		<div class="cat-product-block">

			<div class="row">

				<?php endif; ?>
				<?php endforeach; ?>

			</div>
		</div>

	</div>

</div>

<div class="row">



<!-- Category Story -->
<div id="story_content" style="display:none;color:#000;width:960px;background-color:#fff;padding:20px;">

		<div class="span8 air">
			<h2 class="gb-heading"><?php echo $category['Category']['name'] ?>
		   <?php echo $this->Html->image('categories/image/' . $category['Category']['image'], array('class' => 'category-pic-small')); ?>
		   </h2>
			<hr />
				<?php echo $category['Category']['article'] ?>
		</div>
        
       
        
        
    			<?php if(!empty($category['Category']['image_1'] )) : ?>
                <div class="span4 air">
                    <?php echo $this->Html->image('categories/image_1/' . $category['Category']['slug'] .'.jpg', array('class'=>'img-polaroid')); ?>
                </div>
                <?php endif; ?>
    			<?php if(!empty($category['Category']['image_2'] )) : ?>
                <div class="span4 air">
                    <?php echo $this->Html->image('categories/image_2/' . $category['Category']['slug'] .'.jpg', array('class'=>'img-polaroid')); ?>
                </div>
         		<?php endif; ?>
    			<?php if(!empty($category['Category']['image_3'] )) : ?>
                <div class="span4 air">
                    <?php echo $this->Html->image('categories/image_3/' . $category['Category']['slug'] .'.jpg', array('class'=>'img-polaroid')); ?>
                </div>
         		<?php endif; ?>
    			<?php if(!empty($category['Category']['image_4'] )) : ?>
                <div class="span4 air">
                    <?php echo $this->Html->image('categories/image_4/' . $category['Category']['slug'] .'.jpg', array('class'=>'img-polaroid')); ?>
                </div>
         		<?php endif; ?>
    			<?php if(!empty($category['Category']['image_5'] )) : ?>
                <div class="span4 air">
                    <?php echo $this->Html->image('categories/image_5/' . $category['Category']['slug'] .'.jpg', array('class'=>'img-polaroid')); ?>
                </div>
         		<?php endif; ?>          

</div>

</div>