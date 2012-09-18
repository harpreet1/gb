<div class="products index">
	<h2><?php echo __('Products'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('sku'); ?></th>
			<th><?php echo $this->Paginator->sort('upc'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('slug'); ?></th>
			<th><?php echo $this->Paginator->sort('brand_id'); ?></th>
			<th><?php echo $this->Paginator->sort('brand'); ?></th>
			<th><?php echo $this->Paginator->sort('category_name'); ?></th>
			<th><?php echo $this->Paginator->sort('subcategory'); ?></th>
			<th><?php echo $this->Paginator->sort('sub_subcategory'); ?></th>
			<th><?php echo $this->Paginator->sort('image_original'); ?></th>
			<th><?php echo $this->Paginator->sort('image'); ?></th>
			<th><?php echo $this->Paginator->sort('list_price'); ?></th>
			<th><?php echo $this->Paginator->sort('cost'); ?></th>
			<th><?php echo $this->Paginator->sort('selling_price'); ?></th>
			<th><?php echo $this->Paginator->sort('new'); ?></th>
			<th><?php echo $this->Paginator->sort('width'); ?></th>
			<th><?php echo $this->Paginator->sort('height'); ?></th>
			<th><?php echo $this->Paginator->sort('weight'); ?></th>
			<th><?php echo $this->Paginator->sort('weight_unit'); ?></th>
			<th><?php echo $this->Paginator->sort('price'); ?></th>
			<th><?php echo $this->Paginator->sort('volume'); ?></th>
			<th><?php echo $this->Paginator->sort('volume_unit'); ?></th>
			<th><?php echo $this->Paginator->sort('nutrition'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($products as $product): ?>
	<tr>
		<td><?php echo h($product['Product']['id']); ?>&nbsp;</td>
		<td><?php echo h($product['Product']['sku']); ?>&nbsp;</td>
		<td><?php echo h($product['Product']['upc']); ?>&nbsp;</td>
		<td><?php echo h($product['Product']['name']); ?>&nbsp;</td>
		<td><?php echo h($product['Product']['slug']); ?>&nbsp;</td>
		<td><?php echo h($product['Product']['brand_id']); ?>&nbsp;</td>
		<td><?php echo h($product['Product']['brand']); ?>&nbsp;</td>
		<td><?php echo h($product['Product']['category_name']); ?>&nbsp;</td>
		<td><?php echo h($product['Product']['subcategory']); ?>&nbsp;</td>
		<td><?php echo h($product['Product']['sub_subcategory']); ?>&nbsp;</td>
		<td><?php echo h($product['Product']['image_original']); ?>&nbsp;</td>
		<td><?php echo h($product['Product']['image']); ?>&nbsp;</td>
		<td><?php echo h($product['Product']['list_price']); ?>&nbsp;</td>
		<td><?php echo h($product['Product']['cost']); ?>&nbsp;</td>
		<td><?php echo h($product['Product']['selling_price']); ?>&nbsp;</td>
		<td><?php echo h($product['Product']['new']); ?>&nbsp;</td>
		<td><?php echo h($product['Product']['width']); ?>&nbsp;</td>
		<td><?php echo h($product['Product']['height']); ?>&nbsp;</td>
		<td><?php echo h($product['Product']['weight']); ?>&nbsp;</td>
		<td><?php echo h($product['Product']['weight_unit']); ?>&nbsp;</td>
		<td><?php echo h($product['Product']['price']); ?>&nbsp;</td>
		<td><?php echo h($product['Product']['volume']); ?>&nbsp;</td>
		<td><?php echo h($product['Product']['volume_unit']); ?>&nbsp;</td>
		<td><?php echo h($product['Product']['nutrition']); ?>&nbsp;</td>
		<td><?php echo h($product['Product']['created']); ?>&nbsp;</td>
		<td><?php echo h($product['Product']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $product['Product']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $product['Product']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $product['Product']['id']), null, __('Are you sure you want to delete # %s?', $product['Product']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>

	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Product'), array('action' => 'add')); ?></li>
	</ul>
</div>
