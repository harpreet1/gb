<div class="products view">
<h2><?php  echo __('Product'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($product['Product']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sku'); ?></dt>
		<dd>
			<?php echo h($product['Product']['sku']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Upc'); ?></dt>
		<dd>
			<?php echo h($product['Product']['upc']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($product['Product']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Slug'); ?></dt>
		<dd>
			<?php echo h($product['Product']['slug']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Brand Id'); ?></dt>
		<dd>
			<?php echo h($product['Product']['brand_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Brand'); ?></dt>
		<dd>
			<?php echo h($product['Product']['brand']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Category Name'); ?></dt>
		<dd>
			<?php echo h($product['Product']['category_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Subcategory'); ?></dt>
		<dd>
			<?php echo h($product['Product']['subcategory']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sub Subcategory'); ?></dt>
		<dd>
			<?php echo h($product['Product']['sub_subcategory']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Image Original'); ?></dt>
		<dd>
			<?php echo h($product['Product']['image_original']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Image'); ?></dt>
		<dd>
			<?php echo h($product['Product']['image']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('List Price'); ?></dt>
		<dd>
			<?php echo h($product['Product']['list_price']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cost'); ?></dt>
		<dd>
			<?php echo h($product['Product']['cost']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Selling Price'); ?></dt>
		<dd>
			<?php echo h($product['Product']['selling_price']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('New'); ?></dt>
		<dd>
			<?php echo h($product['Product']['new']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Width'); ?></dt>
		<dd>
			<?php echo h($product['Product']['width']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Height'); ?></dt>
		<dd>
			<?php echo h($product['Product']['height']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Weight'); ?></dt>
		<dd>
			<?php echo h($product['Product']['weight']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Weight Unit'); ?></dt>
		<dd>
			<?php echo h($product['Product']['weight_unit']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Price'); ?></dt>
		<dd>
			<?php echo h($product['Product']['price']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Volume'); ?></dt>
		<dd>
			<?php echo h($product['Product']['volume']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Volume Unit'); ?></dt>
		<dd>
			<?php echo h($product['Product']['volume_unit']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nutrition'); ?></dt>
		<dd>
			<?php echo h($product['Product']['nutrition']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($product['Product']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($product['Product']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Product'), array('action' => 'edit', $product['Product']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Product'), array('action' => 'delete', $product['Product']['id']), null, __('Are you sure you want to delete # %s?', $product['Product']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Products'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product'), array('action' => 'add')); ?> </li>
	</ul>
</div>
