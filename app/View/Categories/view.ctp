
<br />
<br />

	<?php foreach ($subcategories as $subcategory): ?>

		<?php echo $subcategory['Subcategory']['name']; ?>
		<br />
			<?php foreach ($subcategory['Subsubcategory'] as $subsubcategor): ?>
				-- <?php echo $subsubcategor['name']; ?><br />
			<?php endforeach; ?>

		<hr>

	<?php endforeach; ?>

<br />
<br />

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
			$<?php echo $product['Product']['price']; ?>

			<br />
			<br />

			<?php echo $this->Html->link($product['User']['name'], array('subdomain' => $product['User']['slug'], 'controller' => 'products', 'action' => 'index')); ?>

			<br />
			<br />
			<br />
			<br />
		</div>

	<?php
	if (($i % 4) == 0) { echo "</div>\n\n\t\t<div class=\"row\">\n\n";}
	endforeach;
	?>

	</div>

	<br />

<br />

<h2><?php echo h($category['Category']['name']); ?></h2>

<table class="table table-striped table-bordered table-condensed table-hover">
<tr>
<td><?php echo __('Id'); ?></td>
<td><?php echo h($category['Category']['id']); ?></td>
<tr>
</tr>
<td><?php echo __('Name'); ?></td>
<td><?php echo h($category['Category']['name']); ?></td>
<tr>
</tr>
<td><?php echo __('Slug'); ?></td>
<td><?php echo h($category['Category']['slug']); ?></td>
<tr>
</tr>
<td><?php echo __('Article'); ?></td>
<td><?php echo $category['Category']['article']; ?></td>
<tr>
</tr>
<td><?php echo __('Summary'); ?></td>
<td><?php echo $category['Category']['summary']; ?></td>
<tr>
</tr>
<td><?php echo __('Image'); ?></td>
<td><?php echo h($category['Category']['image']); ?></td>
<tr>
</tr>
<td><?php echo __('Image 1'); ?></td>
<td><?php echo h($category['Category']['image_1']); ?></td>
<tr>
</tr>
<td><?php echo __('Image 2'); ?></td>
<td><?php echo h($category['Category']['image_2']); ?></td>
<tr>
</tr>
<td><?php echo __('Image 3'); ?></td>
<td><?php echo h($category['Category']['image_3']); ?></td>
<tr>
</tr>
<td><?php echo __('Image 4'); ?></td>
<td><?php echo h($category['Category']['image_4']); ?></td>
<tr>
</tr>
<td><?php echo __('Image 5'); ?></td>
<td><?php echo h($category['Category']['image_5']); ?></td>
<tr>
</tr>
<td><?php echo __('Created'); ?></td>
<td><?php echo h($category['Category']['created']); ?></td>
<tr>
</tr>
<td><?php echo __('Modified'); ?></td>
<td><?php echo h($category['Category']['modified']); ?></td>
</tr>
</table>

<br />
<br />

