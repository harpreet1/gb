
<?php echo $this->Html->script(array('jquery.flexslider-min.js', 'product_view.js'), array('inline' => false)); ?>

<br />

<br />

<div class="row">

	<div class="span3">
		<?php if(!empty($user)) : ?>
			<h5><?php echo $user['User']['name']; ?></h5>

			<p><?php echo $user['User']['shop_quote']; ?></p>

				<?php if(!empty($usercategories)) : ?>

					<br />
					<h6>Our Categories</h6>

					<?php foreach ($usercategories as $usercategory): ?>
						<?php echo $this->Html->link($usercategory['Category']['name'], array('controller' => 'products', 'action' => 'category', 'slug' => $usercategory['Category']['slug'])); ?>
					<br />
					<?php endforeach; ?>
					<br />
				<?php endif; ?>

		<?php endif; ?>
	</div>

	<div class="span9">

		<div class="row">
			<div class="span9">

				<ul class="breadcrumb">
					<li><?php echo $this->Html->link($user['User']['name'], '/'); ?> <span class="divider">/</span></li>
					<li><?php echo $this->Html->link($product['Category']['name'], array('controller' => 'products', 'action' => 'category', 'slug' => $product['Category']['slug'])); ?> <span class="divider">/</span></li>
					<li><?php echo $this->Html->link($product['Subcategory']['name'], array('controller' => 'products', 'action' => 'subcategory', 'slug' => $product['Subcategory']['id'])); ?> <span class="divider">/</span></li>
					<?php if(!empty($subsubcategories)) : ?>
					<li><?php echo $this->Html->link($product['Subsubcategory']['name'], array('controller' => 'products', 'action' => 'subsubcategory', 'slug' => $product['Subsubcategory']['id'])); ?> <span class="divider">/</span></li>
					<?php endif; ?>
					<li class="active"><?php echo $product['Product']['name']; ?></li>
				</ul>

			</div>
		</div>

		<div class="row products">

			<div class="span4">

					<div id="slider" class="flexslider">
						<ul class="slides">

						<?php if(!empty($product['Product']['image'])) : ?>
							<li><?php echo $this->Html->image('products/image/' .$product['Product']['image']); ?></li>
						<?php endif ; ?>

						<?php if(!empty($product['Product']['image_1'])) : ?>
							<li><?php echo $this->Html->image('products/image_1/' .$product['Product']['image_1']); ?></li>
						<?php endif ; ?>

						<?php if(!empty($product['Product']['image_2'])) : ?>
							<li><?php echo $this->Html->image('products/image_2/' .$product['Product']['image_2']); ?></li>
						<?php endif ; ?>

						<?php if(!empty($product['Product']['image_3'])) : ?>
							<li><?php echo $this->Html->image('products/image_3/' .$product['Product']['image_3']); ?></li>
						<?php endif ; ?>

						<?php if(!empty($product['Product']['image_4'])) : ?>
							<li><?php echo $this->Html->image('products/image_4/' .$product['Product']['image_4']); ?></li>
						<?php endif ; ?>

						<?php if(!empty($product['Product']['image_5'])) : ?>
							<li><?php echo $this->Html->image('products/image_5/' .$product['Product']['image_5']); ?></li>
						<?php endif ; ?>

					  </ul>

					</div>

					<div id="carousel" class="flexslider">
						<ul class="slides">
							<?php if(!empty($product['Product']['image'])) : ?>
								<li><?php echo $this->Html->image('products/image/' .$product['Product']['image'], array('class' => 'pic-thumbnail')); ?></li>
							<?php endif ; ?>

							<?php if(!empty($product['Product']['image_1'])) : ?>
								<li><?php echo $this->Html->image('products/image_1/' .$product['Product']['image_1'], array('class' => 'pic-thumbnail')); ?></li>
							<?php endif ; ?>

							<?php if(!empty($product['Product']['image_2'])) : ?>
								<li><?php echo $this->Html->image('products/image_2/' .$product['Product']['image_2'], array('class' => 'pic-thumbnail')); ?></li>
							<?php endif ; ?>

							<?php if(!empty($product['Product']['image_3'])) : ?>
								<li><?php echo $this->Html->image('products/image_3/' .$product['Product']['image_3'], array('class' => 'pic-thumbnail')); ?></li>
							<?php endif ; ?>

							<?php if(!empty($product['Product']['image_4'])) : ?>
								<li><?php echo $this->Html->image('products/image_4/' .$product['Product']['image_4'], array('class' => 'pic-thumbnail')); ?></li>
							<?php endif ; ?>

							<?php if(!empty($product['Product']['image_5'])) : ?>
								<li><?php echo $this->Html->image('products/image_5/' .$product['Product']['image_5'], array('class' => 'pic-thumbnail')); ?></li>
							<?php endif ; ?>
						</ul>

					</div>
					

					<ul class="nav nav-tabs" id="myTab">
						<li class="active"><a href="#more" data-toggle="tab">More...</a></li>
						<li><a href="#serving" data-toggle="tab">Serving Ideas</a></li>
						<li><a href="#recipes" data-toggle="tab">Recipes</a></li>
						<li><a href="#nutrition" data-toggle="tab">Nutrition</a></li>
					</ul>
						
					<div class="tab-content">
						<div class="tab-pane active" id="more">
							<?php if(!empty($product['Product']['generic_description'])) : 
								echo ($product['Product']['generic_description']);
								endif
							?>
						</div>
						<div class="tab-pane" id="serving">
							<?php if(!empty($product['Product']['serving_suggestions'])) :
								echo $product['Product']['serving_suggestions'];
								endif
							?>
						</div>

						<div class="tab-pane" id="recipes">
							<?php if(!empty($product['Product']['recipes'])) :
								echo $product['Product']['recipes'];
								endif
							?>

						</div>
						<div class="tab-pane" id="nutrition">

							<?php /*?><?php if(!empty($nuts)) : ?>
								<?php foreach($nuts as $nkey => $nvalue): ?>
											<?php echo $nkey; ?> = <?php echo ucfirst(str_replace('_', ' ', $nkey)); ?> = <?php echo $nvalue; ?>
									<br />
								<?php endforeach;?>
							<?php endif; ?>

							<hr />
							<?php //debug($nuts); ?><?php */?>


							<?php if(!empty($nuts)) : ?>

							<table class="NutritionFacts">
								<tr>
									<td>
										<table class="" cellpadding="0" cellspacing="0" width="100%" style="">
											<tr>
												<td class="nf_Center nf_PaddingB5 nf_Header" colspan="2">Nutrition Facts</td>
											</tr>
											<tr>
												<td class="nf_BorderT10" colspan="2"><b class="nf_TextSmall nf_Bold">Amount Per Serving</b></td>
											</tr>
											<tr>
												<td class="nf_Right nf_PaddingT5 nf_BorderT5" colspan="2"><b class="nf_TextSmall nf_Bold">% Daily Value*</b></td>
											</tr>
											<?php foreach($nuts as $nkey => $nvalue): ?>
											<?php $nkey = str_replace('_p', '_%', $nkey); ?>
											<tr>
												<td class="nf_Cell nf_Text"><?php echo ucfirst(str_replace('_', ' ', $nkey)); ?> |<?php echo $nvalue; ?>g &nbsp; &nbsp; </td>
												<td class="nf_Cell nf_Right nf_Text">%</td>
											</tr>
											<?php endforeach;?>

										</table>
									</td>
								</tr>
							</table>

							<?php endif; ?>


						</div>
						</div>




				<br />


				<br />
				<br />


				<?php if(!empty($product['Product']['attribution'])) : ?>
					<h4>Sources:</h4>
					<p><?php echo $product['Product']['attribution']; ?></p>
				<?php endif ?>

			</div>

			<div class="span5 product-description">

				<?php if(!empty($product['Brand']['description'])) : ?>
					<!--<a href="#" class="btn" rel="pop_brand" data-placement="bottom" data-original-title="Some info about the brand:"  data-content="<?php //echo $product['Product']['brand_description'];?>">xxxx</a>-->
					<a href="#" class="btn btn-custom" rel="pop_brand" data-placement="bottom" data-original-title="Some info about the brand:"  data-content="<?php echo ($product['Brand']['description']);?>"><?php echo $product['Brand']['name']; ?></a>
				<?php elseif(empty($product['Brand']['name'])) : ?>
					<a class="btn btn-custom"><?php echo $user['User']['name']; ?></a>
				<?php else : ?>
					<a class="btn btn-custom"><?php echo $product['Brand']['name']; ?></a>
				<?php endif; ?>

				<h3><?php echo $product['Product']['name']; ?></h3>

				<p><?php echo $product['Product']['description']; ?></p>

				<p><?php echo $product['Product']['long_description']; ?></p>


				<?php if(!empty($product['Product']['ingredients'])) : ?>
					<p>Ingredients: <?php echo $product['Product']['ingredients']; ?></p>
				<?php endif; ?>
				<br />

				$<?php echo $product['Product']['price']; ?>

				<br />

				<?php echo $this->Form->create(NULL, array('url' => array('controller' => 'shops', 'action' => 'add'))); ?>
				<?php echo $this->Form->input('id', array('type' => 'hidden', 'value' => $product['Product']['id'])); ?>
					<?php echo $this->Form->button('<i class="icon-shopping-cart icon-white"></i> Add to Cart', array('class' => 'btn btn-primary', 'escape' => false));?>
					<?php echo $this->Form->end(); ?>

				</div>
			</div>


	<div class="row">
		<div class="span9">

			<br />

			<div>
				<?php if(!empty($attributes)) : ?>
					<?php foreach($attributes as $akey => $avalue): ?>
						<div class="attr-icon-set">
							<div class="attr-icons">
								<img src="/img/attributes/<?php echo $akey;?>.png" width="50" height="50" />
							</div>
							<div class="attr-icon-caption"><?php echo str_replace('_', ' ', $akey); ?></div>
						</div>
					<?php endforeach;?>
				<?php endif; ?>

			</div>

			<br />
			<br />
			<br />

			<?php if(!empty($related_products)) : ?>

				<h2>PAIRINGS & RELATED PRODUCTS</h2>

				<div id="carousel-image-and-text" class="touchcarousel grey-blue">

					<ul class="touchcarousel-container">

						<?php foreach($related_products as $rproduct): ?>

							<?php echo $rproduct['Product']['name']; ?>
							<br />

						<?php endforeach; ?>
					</ul>

				</div>

			<?php endif; ?>

			<br />
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

		</div>
	</div>

</div>
</div>

<br />
<br />
<br />
<br />

