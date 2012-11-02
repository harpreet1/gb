<br />

<ul class="breadcrumb">

	<?php if(!empty($category)) : ?>
		<li><?php //echo $this->Html->link($user['User']['name'], '/'); ?> <span class="divider">/</span></li>
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
	
		

			<?php foreach ($subcategories as $subcategory): ?>

				<?php echo $this->Html->link($subcategory['Subcategory']['name'], array('controller' => 'products', 'action' => 'subcategory', 'slug' => $subcategory['Subcategory']['id'])); ?>
				<br />
					<?php foreach ($subcategory['Subsubcategory'] as $subsubcategory          ): ?>
					-- <?php echo $subsubcategory['name']; ?><br />
					<?php endforeach; ?>

			<hr>

			<?php endforeach; ?>
		
		
	</div>

</div>
	
	<div class="span8">
		<div class="row">

			<?php
			$i = 0;
			foreach ($products as $product):
			$i++;
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
			</div>

			<?php if (($i % 4) == 0) : ?>
			</div>
			<div class="row">
			<?php endif; ?>
			<?php endforeach; ?>

		</div>
	</div>
</div>

<br />
<br />

<h2><?php echo h($category['Category']['name']); ?></h2>

<table class="table table-striped table-bordered table-condensed table-hover">
<tr>
<td>Id</td>
<td><?php echo h($category['Category']['id']); ?></td>
<tr>
</tr>
<td>Name</td>
<td><?php echo h($category['Category']['name']); ?></td>
<tr>
</tr>
<td>Slug</td>
<td><?php echo h($category['Category']['slug']); ?></td>
<tr>
</tr>
<td>Article</td>
<td><?php echo $category['Category']['article']; ?></td>
<tr>
</tr>
<td>Summary</td>
<td><?php echo $category['Category']['summary']; ?></td>
<tr>
</tr>
<td>Image</td>
<td><?php echo h($category['Category']['image']); ?></td>
<tr>
</tr>
<td>Image 1</td>
<td><?php echo h($category['Category']['image_1']); ?></td>
<tr>
</tr>
<td>Image 2</td>
<td><?php echo h($category['Category']['image_2']); ?></td>
<tr>
</tr>
<td>Image 3</td>
<td><?php echo h($category['Category']['image_3']); ?></td>
<tr>
</tr>
<td>Image 4</td>
<td><?php echo h($category['Category']['image_4']); ?></td>
<tr>
</tr>
<td>Image 5</td>
<td><?php echo h($category['Category']['image_5']); ?></td>
<tr>
</tr>
<td>Created</td>
<td><?php echo h($category['Category']['created']); ?></td>
<tr>
</tr>
<td>Modified</td>
<td><?php echo h($category['Category']['modified']); ?></td>
</tr>
</table>

<br />

