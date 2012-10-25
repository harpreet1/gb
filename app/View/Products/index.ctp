<br />
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

		<?php echo $this->Html->image('users/image/' . $user['User']['image'], array('class' => 'img-polaroid')); ?>


		<?php if(!empty($usercategories)) : ?>

		<br />
		<br />
		<h6>Our Categories</h6>

		<?php foreach ($usercategories as $usercategory): ?>
			<?php echo $this->Html->link($usercategory['Category']['name'], array('controller' => 'products', 'action' => 'category', 'slug' => $usercategory['Category']['slug'])); ?>

			<br />
		<?php endforeach; ?>
		<br />
		<br />
		<?php endif; ?>


		<?php if(!empty($usersubcategories)) : ?>

		<br />
		<br />
		<h6>Our Subcategories</h6>

		<?php foreach ($usersubcategories as $usersubcategory): ?>
			<?php echo $this->Html->link($usersubcategory['Subcategory']['name'], array('controller' => 'products', 'action' => 'subcategory', 'slug' => $usersubcategory['Subcategory']['id'])); ?>

			<br />
		<?php endforeach; ?>
		<br />
		<br />
		<?php endif; ?>

		<?php if(!empty($usersubsubcategories)) : ?>

		<br />
		<br />
		<strong><?php echo $subcategory['Subcategory']['name']; ?></strong>
		<br />
		<h6>Our Sub SUB categories</h6>

		<?php foreach ($usersubsubcategories as $usersubsubcategory): ?>
			<?php echo $this->Html->link($usersubsubcategory['Subsubcategory']['name'], array('controller' => 'products', 'action' => 'subsubcategory', 'slug' => $usersubsubcategory['Subsubcategory']['id'])); ?>

			<br />
		<?php endforeach; ?>
		<br />
		<br />
		<?php endif; ?>


		<p><?php echo $user['User']['shop_quote']; ?></p>

		<br />
		<br />

		<?php echo $this->Html->image('users/image_1/' . $user['User']['image_1'], array('class' => 'img-polaroid')); ?>
		<br />
		<br />
		<?php echo $this->Html->image('users/image_2/' . $user['User']['image_2'], array('class' => 'img-polaroid')); ?>
		<br />
		<br />
		<?php echo $this->Html->image('users/image_3/' . $user['User']['image_3'], array('class' => 'img-polaroid')); ?>
		<br />
		<br />
		<?php echo $this->Html->image('users/image_4/' . $user['User']['image_4'], array('class' => 'img-polaroid')); ?>
		<br />
		<br />
		<?php echo $this->Html->image('users/image_5/' . $user['User']['image_5'], array('class' => 'img-polaroid')); ?>
		<br />
		<br />
		<?php echo $this->Html->image('users/image_6/' . $user['User']['image_6'], array('class' => 'img-polaroid')); ?>
		<br />
		<br />

		<?php endif; ?>
	</div>

	<div class="span8">

		<div class="row">

		<?php
		$i = 0;
		foreach ($products as $product):
		$i++;
		//if (($i % 4) == 0) { echo "\n<div class=\"row\">\n\n";}
		?>

			<div class="span2">
				<?php echo $this->Html->image('products/image/' . $product['Product']['image'], array('url' => array('subdomain' => $product['User']['slug'], 'controller' => 'products', 'action' => 'view', 'id' => $product['Product']['id'], 'slug' => $product['Product']['slug']), 'alt' => $product['Product']['name'], 'class' => 'img-polaroid img180')); ?>

				<br />
				<?php echo $this->Html->link($product['Product']['name'], array('subdomain' => $product['User']['slug'], 'controller' => 'products', 'action' => 'view', 'id' => $product['Product']['id'], 'slug' => $product['Product']['slug'])); ?>

				<br />
<<<<<<< HEAD
				$<?php echo $product['Product']['price_selling']; ?>
=======
				$<?php echo $product['Product']['price']; ?>
>>>>>>> a3f8805669d8187629adfedd294ca324abf97fbb

				<br />
				<br />
				<br />
			</div>

		<?php
		if (($i % 4) == 0) { echo "</div>\n\n\t\t<div class=\"row\">\n\n";}
		endforeach;
		?>

		</div>

		<?php echo $this->element('pagination-counter'); ?>

		<?php echo $this->element('pagination'); ?>

		<br />
		<br />

	</div>

</div>

<?php if(!empty($user)) : ?>

<br />
<br />
<br />

<hr>

<br />
<br />

<div class="row">

	<div class="span12">

		<?php echo $this->Html->image('users/image/' . $user['User']['image'], array('class' => 'img-polaroid')); ?>

		<br />
		<br />

		<h3><?php echo $user['User']['name']; ?></h3>

		<h5><?php echo $user['User']['shop_quote']; ?></h5>

	</div>

</div>



<div class="row">

	<div class="span2">
		<?php echo $this->Html->image('users/image_1/' . $user['User']['image_1'], array('class' => 'img-polaroid')); ?>
	</div>
	<div class="span2">
		<?php echo $this->Html->image('users/image_2/' . $user['User']['image_2'], array('class' => 'img-polaroid')); ?>
	</div>
	<div class="span2">
		<?php echo $this->Html->image('users/image_3/' . $user['User']['image_3'], array('class' => 'img-polaroid')); ?>
	</div>
	<div class="span2">
		<?php echo $this->Html->image('users/image_4/' . $user['User']['image_4'], array('class' => 'img-polaroid')); ?>
	</div>
	<div class="span2">
		<?php echo $this->Html->image('users/image_5/' . $user['User']['image_5'], array('class' => 'img-polaroid')); ?>
	</div>
	<div class="span2">
		<?php echo $this->Html->image('users/image_6/' . $user['User']['image_6'], array('class' => 'img-polaroid')); ?>
	</div>

</div>

<div class="row">
	<div class="span12">
		<?php echo $user['User']['shop_description']; ?>
	</div>
</div>


</div>
<?php endif; ?>

