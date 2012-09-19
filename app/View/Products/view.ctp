<br />
<br />

<div class="row">

	<div class="span4">
		<?php if(!empty($user)) : ?>
		<h5><?php echo $user['User']['shop_name']; ?></h5>

		<br />

		<?php echo $this->Html->image('logos/' . $user['User']['logo'], array('class' => 'img-polaroid')); ?>

		<br />
		<br />

		<p><?php echo $user['User']['shop_quote']; ?></p>

		<br />
		<br />

		<?php echo $this->Html->image('logos/' . $user['User']['image1'], array('class' => 'img-polaroid')); ?>
		<br />
		<br />
		<?php echo $this->Html->image('logos/' . $user['User']['image2'], array('class' => 'img-polaroid')); ?>
		<br />
		<br />
		<?php echo $this->Html->image('logos/' . $user['User']['image3'], array('class' => 'img-polaroid')); ?>
		<br />
		<br />
		<?php echo $this->Html->image('logos/' . $user['User']['image4'], array('class' => 'img-polaroid')); ?>
		<br />
		<br />
		<?php echo $this->Html->image('logos/' . $user['User']['image5'], array('class' => 'img-polaroid')); ?>
		<br />
		<br />

		<?php endif; ?>
	</div>

	<div class="span8">

		<div class="row">
			<div class="span5">
				<?php echo $this->Html->image('products/' . $product['Product']['image'], array('url' => array('controller' => 'products', 'action' => 'view', 'id' => $product['Product']['id'], 'slug' => $product['Product']['slug']), 'alt' => $product['Product']['name'], 'class' => 'img-polaroid')); ?>
			</div>
			<div class="span3">

				<h3><?php echo $product['Product']['name']; ?></h3>

				<p><?php echo $product['Product']['description']; ?></p>

				<p><?php echo $product['Product']['long_description']; ?></p>

				<p>Ingredients: <?php echo $product['Product']['ingredients']; ?></p>

				<br />
				$<?php echo $product['Product']['price']; ?>
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

<br />
<br />

