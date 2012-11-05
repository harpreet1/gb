
<?php echo $this->Html->script(array('jquery.gallerific.js', 'jquery.opacityrollover.js'), array('inline' => false)); ?>

<br />
<br />

<div class="row">

	<div class="span3">
		<?php if(!empty($user)) : ?>
		<h5><?php echo $user['User']['name']; ?></h5>

		<br />
		<br />

		<p><?php echo $user['User']['shop_quote']; ?></p>

		<br />

		<?php if(!empty($usercategories)) : ?>

		<br />
		<h6>Our Categories</h6>

		<?php foreach ($usercategories as $usercategory): ?>
			<?php echo $this->Html->link($usercategory['Category']['name'], array('controller' => 'products', 'action' => 'category', 'slug' => $usercategory['Category']['slug'])); ?>

			<br />
		<?php endforeach; ?>
		<br />
		<br />
		<?php endif; ?>

		<br />

		<?php if(!empty($product['Product']['image_1'])) :
				echo $this->Html->image('products/image_1/' . $product['Product']['image_1'], array('url' => array('controller' => 'products', 'action' => 'view', 'id' => $product['Product']['id'], 'slug' => $product['Product']['slug']), 'alt' => $product['Product']['name'], 'class' => 'img-polaroid'));
				endif; ?>
		<br />
		<br />

		<?php if(!empty($product['Product']['image_2'])) :
				echo $this->Html->image('products/image_2/' . $product['Product']['image_2'], array('url' => array('controller' => 'products', 'action' => 'view', 'id' => $product['Product']['id'], 'slug' => $product['Product']['slug']), 'alt' => $product['Product']['name'], 'class' => 'img-polaroid'));
				endif; ?>

		<br />
		<br />

		<?php if(!empty($product['Product']['image_4'])) :
				echo $this->Html->image('products/image_3/' . $product['Product']['image_3'], array('url' => array('controller' => 'products', 'action' => 'view', 'id' => $product['Product']['id'], 'slug' => $product['Product']['slug']), 'alt' => $product['Product']['name'], 'class' => 'img-polaroid'));
				endif; ?>

		<br />
		<br />

		<?php if(!empty($product['Product']['image_5'])) :
			 	echo $this->Html->image('products/image_4/' . $product['Product']['image_4'], array('url' => array('controller' => 'products', 'action' => 'view', 'id' => $product['Product']['id'], 'slug' => $product['Product']['slug']), 'alt' => $product['Product']['name'], 'class' => 'img-polaroid'));
				endif; ?>

		<br />
		<br />

		<?php if(!empty($product['Product']['image_6'])) :
				 echo $this->Html->image('products/image_5/' . $product['Product']['image_5'], array('url' => array('controller' => 'products', 'action' => 'view', 'id' => $product['Product']['id'], 'slug' => $product['Product']['slug']), 'alt' => $product['Product']['name'], 'class' => 'img-polaroid'));
				endif; ?>
		<br />
		<br />

		<?php endif; ?>
	</div>

	<div class="span9">

		<div class="row">
			<div class="span9">

				<ul class="breadcrumb">
					<li><?php echo $this->Html->link($user['User']['name'], '/'); ?> <span class="divider">/</span></li>
					<li><?php echo $this->Html->link($product['Category']['name'], array('controller' => 'products', 'action' => 'category', 'slug' => $product['Category']['slug'])); ?> <span class="divider">/</span></li>
					<li><?php echo $this->Html->link($product['Subcategory']['name'], array('controller' => 'products', 'action' => 'subcategory', 'slug' => $product['Subcategory']['id'])); ?> <span class="divider">/</span></li>
					<li><?php echo $this->Html->link($product['Subsubcategory']['name'], array('controller' => 'products', 'action' => 'subsubcategory', 'slug' => $product['Subsubcategory']['id'])); ?> <span class="divider">/</span></li>
					<li class="active"><?php echo $product['Product']['name']; ?></li>
				</ul>

				<br />
				<br />
			</div>
		</div>

		<div class="row">
			<div class="span4">
				<?php echo $this->Html->image('products/image/' . $product['Product']['image'], array('url' => array('controller' => 'products', 'action' => 'view', 'id' => $product['Product']['id'], 'slug' => $product['Product']['slug']), 'alt' => $product['Product']['name'], 'class' => 'img-polaroid')); ?>
				<br />
		
				<?php if(!empty($product['Product']['generic_description'])) : ?>
				
					<div class="pop"><a href="#" class="btn" rel="popover" data-placement="top" data-original-title="Generic Description"  data-content="<?php echo $product['Product']['generic_description'];?>">Click for  more info!</a>
					</div>
					
				<?php endif ?>	
					
				
	
				<br />
				<br />
				<h3>Serving Suggestions:</h3>

				<p><?php echo $product['Product']['serving_suggestions']; ?></p>

				<br />
				<br />
				<h3>Here's a recipe:</h3>
				<p><?php echo $product['Product']['recipes']; ?></p>

				<h4>Sources:</h4>
				<p><?php echo $product['Product']['attribution']; ?></p>

			</div>

			<div class="span5 product-description">

				<h3><?php echo $product['Product']['name']; ?></h3>

				<p><?php echo $product['Product']['description']; ?></p>

				<p><?php echo $product['Product']['long_description']; ?></p>

				<p>Ingredients: <?php echo $product['Product']['ingredients']; ?></p>

				<br />
				$<?php echo $product['Product']['price']; ?>

				<br />
				<br />

				<?php echo $this->Form->create(NULL, array('url' => array('controller' => 'shops', 'action' => 'add'))); ?>
				<?php echo $this->Form->input('id', array('type' => 'hidden', 'value' => $product['Product']['id'])); ?>
				<?php echo $this->Form->button('<i class="icon-shopping-cart icon-white"></i> Add to Cart', array('class' => 'btn btn-primary', 'escape' => false));?>
				<?php echo $this->Form->end(); ?>

			</div>
		</div>

	</div>

</div>

<br />
<br />

<!--Facebook -->
<div id="fb-root">
</div>
<script type="text/javascript">(function(d, s, id) {
		var js, fjs = d.getElementsByTagName(s)[0];
		if (d.getElementById(id)) return;
		js = d.createElement(s); js.id = id;
		js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=214123048679188";
		fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));
</script>

<div class="fb-comment">
	<div class="fb-comments" data-href="http://gourmet-basket.com" data-num-posts="3" data-width="440"></div>
</div>
<!--Facebook -->

<br />
<br />

