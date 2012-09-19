<h2>Products</h2>

<div class="row">

	<div class="span4">
		LEFT SIDE
	</div>

	<div class="span8">

<div class="row">

<?php
$i = 0;
foreach ($products as $product):
$i++;
if (($i % 4) == 0) { echo "\n<div class=\"row\">\n\n";}
?>
<div class="span2">
<?php echo $this->Html->image('products/' . $product['Product']['image'], array('url' => array('controller' => 'products', 'action' => 'view', 'slug' => $product['Product']['id'] . '-' . $product['Product']['slug']), 'alt' => $product['Product']['name'], 'class' => 'img-polaroid img180')); ?>
<br />
<?php echo $this->Html->link($product['Product']['name'], array('controller' => 'products', 'action' => 'view', 'slug' => $product['Product']['id'] . '-' . $product['Product']['slug'])); ?>
<br />
$<?php echo $product['Product']['price']; ?>
<br />
<br />
<br />
</div>
<?php
if (($i % 4) == 0) { echo "\n</div>\n\n";}
endforeach;
?>

</div>


		<?php echo $this->element('pagination-counter'); ?>

		<?php echo $this->element('pagination'); ?>

		<br />
		<br />

	</div>

</div>

