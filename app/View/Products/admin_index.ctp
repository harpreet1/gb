<div class="products index">
	<h2><?php echo __('Products'); ?></h2>
	<table class="table table-striped table-bordered table-condensed table-hover">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('upc'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('category_id'); ?></th>
			<th><?php echo $this->Paginator->sort('category'); ?></th>
			<th><?php echo $this->Paginator->sort('subcategory_id'); ?></th>
			<th><?php echo $this->Paginator->sort('subcategory'); ?></th>
			<th><?php echo $this->Paginator->sort('sub_subcat_id'); ?></th>
			<th><?php echo $this->Paginator->sort('subsubcategory'); ?></th>
			<th><?php echo $this->Paginator->sort('aux_category_1'); ?></th>
			<th><?php echo $this->Paginator->sort('aux_category_2'); ?></th>
			<th><?php echo $this->Paginator->sort('aux_category_3'); ?></th>
			<th><?php echo $this->Paginator->sort('item'); ?></th>
			<th><?php echo $this->Paginator->sort('vendor_sku'); ?></th>
			<th><?php echo $this->Paginator->sort('brand'); ?></th>
			<th><?php echo $this->Paginator->sort('brand_id'); ?></th>
			<th><?php echo $this->Paginator->sort('in_stock'); ?></th>
			<th><?php echo $this->Paginator->sort('product_name'); ?></th>
			<th><?php echo $this->Paginator->sort('slug'); ?></th>
			<th><?php echo $this->Paginator->sort('description'); ?></th>
			<th><?php echo $this->Paginator->sort('long_description'); ?></th>
			<th><?php echo $this->Paginator->sort('tags'); ?></th>
			<th><?php echo $this->Paginator->sort('image_original'); ?></th>
			<th><?php echo $this->Paginator->sort('image'); ?></th>
			<th><?php echo $this->Paginator->sort('image_1'); ?></th>
			<th><?php echo $this->Paginator->sort('image_2'); ?></th>
			<th><?php echo $this->Paginator->sort('image_3'); ?></th>
			<th><?php echo $this->Paginator->sort('image_4'); ?></th>
			<th><?php echo $this->Paginator->sort('image_5'); ?></th>
			<th><?php echo $this->Paginator->sort('featured_product'); ?></th>
			<th><?php echo $this->Paginator->sort('gift_product'); ?></th>
			<th><?php echo $this->Paginator->sort('cost'); ?></th>
			<th><?php echo $this->Paginator->sort('list_price'); ?></th>
			<th><?php echo $this->Paginator->sort('selling_price'); ?></th>
			<th><?php echo $this->Paginator->sort('price'); ?></th>
			<th><?php echo $this->Paginator->sort('taxable'); ?></th>
			<th><?php echo $this->Paginator->sort('stock'); ?></th>
			<th><?php echo $this->Paginator->sort('ratings'); ?></th>
			<th><?php echo $this->Paginator->sort('tradition_ids'); ?></th>
			<th><?php echo $this->Paginator->sort('dom_tradition_ids'); ?></th>
			<th><?php echo $this->Paginator->sort('measurement'); ?></th>
			<th><?php echo $this->Paginator->sort('weight_unit'); ?></th>
			<th><?php echo $this->Paginator->sort('weight'); ?></th>
			<th><?php echo $this->Paginator->sort('shipping_weight'); ?></th>
			<th><?php echo $this->Paginator->sort('volume'); ?></th>
			<th><?php echo $this->Paginator->sort('volume_unit'); ?></th>
			<th><?php echo $this->Paginator->sort('dimension_unit'); ?></th>
			<th><?php echo $this->Paginator->sort('height'); ?></th>
			<th><?php echo $this->Paginator->sort('length'); ?></th>
			<th><?php echo $this->Paginator->sort('width'); ?></th>
			<th><?php echo $this->Paginator->sort('ingredients'); ?></th>
			<th><?php echo $this->Paginator->sort('nutrition'); ?></th>
			<th><?php echo $this->Paginator->sort('recipes'); ?></th>
			<th><?php echo $this->Paginator->sort('country_id'); ?></th>
			<th><?php echo $this->Paginator->sort('culinary_country_id'); ?></th>
			<th><?php echo $this->Paginator->sort('ethnicity_id'); ?></th>
			<th><?php echo $this->Paginator->sort('checked'); ?></th>
			<th><?php echo $this->Paginator->sort('allergen_free'); ?></th>
			<th><?php echo $this->Paginator->sort('gluten_free'); ?></th>
			<th><?php echo $this->Paginator->sort('vegan'); ?></th>
			<th><?php echo $this->Paginator->sort('fat_free'); ?></th>
			<th><?php echo $this->Paginator->sort('sugar_free'); ?></th>
			<th><?php echo $this->Paginator->sort('no_msg'); ?></th>
			<th><?php echo $this->Paginator->sort('lactose_free'); ?></th>
			<th><?php echo $this->Paginator->sort('low_carb'); ?></th>
			<th><?php echo $this->Paginator->sort('nut_free'); ?></th>
			<th><?php echo $this->Paginator->sort('heart_smart'); ?></th>
			<th><?php echo $this->Paginator->sort('no_preservatives'); ?></th>
			<th><?php echo $this->Paginator->sort('organic'); ?></th>
			<th><?php echo $this->Paginator->sort('kosher'); ?></th>
			<th><?php echo $this->Paginator->sort('halal'); ?></th>
			<th><?php echo $this->Paginator->sort('fair_traded'); ?></th>
			<th><?php echo $this->Paginator->sort('give_back'); ?></th>
			<th><?php echo $this->Paginator->sort('creation_id'); ?></th>
			<th><?php echo $this->Paginator->sort('heat_sensitivity'); ?></th>
			<th><?php echo $this->Paginator->sort('all_natural'); ?></th>
			<th><?php echo $this->Paginator->sort('related_products'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($products as $product): ?>
	<tr>
		<td><?php echo h($product['Product']['id']); ?>&nbsp;</td>
		<td><?php echo h($product['Product']['upc']); ?>&nbsp;</td>
		<td><?php echo h($product['Product']['user_id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($product['Category']['name'], array('controller' => 'categories', 'action' => 'view', $product['Category']['id'])); ?>
		</td>
		<td><?php echo h($product['Product']['category']); ?>&nbsp;</td>
		<td><?php echo h($product['Product']['subcategory_id']); ?>&nbsp;</td>
		<td><?php echo h($product['Product']['subcategory']); ?>&nbsp;</td>
		<td><?php echo h($product['Product']['sub_subcat_id']); ?>&nbsp;</td>
		<td><?php echo h($product['Product']['subsubcategory']); ?>&nbsp;</td>
		<td><?php echo h($product['Product']['aux_category_1']); ?>&nbsp;</td>
		<td><?php echo h($product['Product']['aux_category_2']); ?>&nbsp;</td>
		<td><?php echo h($product['Product']['aux_category_3']); ?>&nbsp;</td>
		<td><?php echo h($product['Product']['item']); ?>&nbsp;</td>
		<td><?php echo h($product['Product']['vendor_sku']); ?>&nbsp;</td>
		<td><?php echo h($product['Product']['brand']); ?>&nbsp;</td>
		<td><?php echo h($product['Product']['brand_id']); ?>&nbsp;</td>
		<td><?php echo h($product['Product']['in_stock']); ?>&nbsp;</td>
		<td><?php echo h($product['Product']['product_name']); ?>&nbsp;</td>
		<td><?php echo h($product['Product']['slug']); ?>&nbsp;</td>
		<td><?php echo h($product['Product']['description']); ?>&nbsp;</td>
		<td><?php echo h($product['Product']['long_description']); ?>&nbsp;</td>
		<td><?php echo h($product['Product']['tags']); ?>&nbsp;</td>
		<td><?php echo h($product['Product']['image_original']); ?>&nbsp;</td>
		<td><?php echo h($product['Product']['image']); ?>&nbsp;</td>
		<td><?php echo h($product['Product']['image_1']); ?>&nbsp;</td>
		<td><?php echo h($product['Product']['image_2']); ?>&nbsp;</td>
		<td><?php echo h($product['Product']['image_3']); ?>&nbsp;</td>
		<td><?php echo h($product['Product']['image_4']); ?>&nbsp;</td>
		<td><?php echo h($product['Product']['image_5']); ?>&nbsp;</td>
		<td><?php echo h($product['Product']['featured_product']); ?>&nbsp;</td>
		<td><?php echo h($product['Product']['gift_product']); ?>&nbsp;</td>
		<td><?php echo h($product['Product']['cost']); ?>&nbsp;</td>
		<td><?php echo h($product['Product']['list_price']); ?>&nbsp;</td>
		<td><?php echo h($product['Product']['selling_price']); ?>&nbsp;</td>
		<td><?php echo h($product['Product']['price']); ?>&nbsp;</td>
		<td><?php echo h($product['Product']['taxable']); ?>&nbsp;</td>
		<td><?php echo h($product['Product']['stock']); ?>&nbsp;</td>
		<td><?php echo h($product['Product']['ratings']); ?>&nbsp;</td>
		<td><?php echo h($product['Product']['tradition_ids']); ?>&nbsp;</td>
		<td><?php echo h($product['Product']['dom_tradition_ids']); ?>&nbsp;</td>
		<td><?php echo h($product['Product']['measurement']); ?>&nbsp;</td>
		<td><?php echo h($product['Product']['weight_unit']); ?>&nbsp;</td>
		<td><?php echo h($product['Product']['weight']); ?>&nbsp;</td>
		<td><?php echo h($product['Product']['shipping_weight']); ?>&nbsp;</td>
		<td><?php echo h($product['Product']['volume']); ?>&nbsp;</td>
		<td><?php echo h($product['Product']['volume_unit']); ?>&nbsp;</td>
		<td><?php echo h($product['Product']['dimension_unit']); ?>&nbsp;</td>
		<td><?php echo h($product['Product']['height']); ?>&nbsp;</td>
		<td><?php echo h($product['Product']['length']); ?>&nbsp;</td>
		<td><?php echo h($product['Product']['width']); ?>&nbsp;</td>
		<td><?php echo h($product['Product']['ingredients']); ?>&nbsp;</td>
		<td><?php echo h($product['Product']['nutrition']); ?>&nbsp;</td>
		<td><?php echo h($product['Product']['recipes']); ?>&nbsp;</td>
		<td><?php echo h($product['Product']['country_id']); ?>&nbsp;</td>
		<td><?php echo h($product['Product']['culinary_country_id']); ?>&nbsp;</td>
		<td><?php echo h($product['Product']['ethnicity_id']); ?>&nbsp;</td>
		<td><?php echo h($product['Product']['checked']); ?>&nbsp;</td>
		<td><?php echo h($product['Product']['allergen_free']); ?>&nbsp;</td>
		<td><?php echo h($product['Product']['gluten_free']); ?>&nbsp;</td>
		<td><?php echo h($product['Product']['vegan']); ?>&nbsp;</td>
		<td><?php echo h($product['Product']['fat_free']); ?>&nbsp;</td>
		<td><?php echo h($product['Product']['sugar_free']); ?>&nbsp;</td>
		<td><?php echo h($product['Product']['no_msg']); ?>&nbsp;</td>
		<td><?php echo h($product['Product']['lactose_free']); ?>&nbsp;</td>
		<td><?php echo h($product['Product']['low_carb']); ?>&nbsp;</td>
		<td><?php echo h($product['Product']['nut_free']); ?>&nbsp;</td>
		<td><?php echo h($product['Product']['heart_smart']); ?>&nbsp;</td>
		<td><?php echo h($product['Product']['no_preservatives']); ?>&nbsp;</td>
		<td><?php echo h($product['Product']['organic']); ?>&nbsp;</td>
		<td><?php echo h($product['Product']['kosher']); ?>&nbsp;</td>
		<td><?php echo h($product['Product']['halal']); ?>&nbsp;</td>
		<td><?php echo h($product['Product']['fair_traded']); ?>&nbsp;</td>
		<td><?php echo h($product['Product']['give_back']); ?>&nbsp;</td>
		<td><?php echo h($product['Product']['creation_id']); ?>&nbsp;</td>
		<td><?php echo h($product['Product']['heat_sensitivity']); ?>&nbsp;</td>
		<td><?php echo h($product['Product']['all_natural']); ?>&nbsp;</td>
		<td><?php echo h($product['Product']['related_products']); ?>&nbsp;</td>
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
		<li><?php echo $this->Html->link(__('List Categories'), array('controller' => 'categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Category'), array('controller' => 'categories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Nutritions'), array('controller' => 'nutritions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Nutrition'), array('controller' => 'nutritions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tags'), array('controller' => 'tags', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tag'), array('controller' => 'tags', 'action' => 'add')); ?> </li>
	</ul>
</div>
