<div class="categories view">
<h2><?php  echo __('Category'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($category['Category']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($category['Category']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Slug'); ?></dt>
		<dd>
			<?php echo h($category['Category']['slug']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Image'); ?></dt>
		<dd>
			<?php echo h($category['Category']['image']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Other'); ?></dt>
		<dd>
			<?php echo h($category['Category']['other']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($category['User']['id'], array('controller' => 'users', 'action' => 'view', $category['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Article'); ?></dt>
		<dd>
			<?php echo h($category['Category']['article']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Summary'); ?></dt>
		<dd>
			<?php echo h($category['Category']['summary']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Image 1'); ?></dt>
		<dd>
			<?php echo h($category['Category']['image_1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Image 2'); ?></dt>
		<dd>
			<?php echo h($category['Category']['image_2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Image 3'); ?></dt>
		<dd>
			<?php echo h($category['Category']['image_3']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Image 4'); ?></dt>
		<dd>
			<?php echo h($category['Category']['image_4']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Image 5'); ?></dt>
		<dd>
			<?php echo h($category['Category']['image_5']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Image 6'); ?></dt>
		<dd>
			<?php echo h($category['Category']['image_6']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($category['Category']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($category['Category']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>


<div class="related">
	<h3><?php echo __('Related Products'); ?></h3>
	<?php if (!empty($category['Product'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Upc'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Category Id'); ?></th>
		<th><?php echo __('Category'); ?></th>
		<th><?php echo __('Subcategory Id'); ?></th>
		<th><?php echo __('Subcategory'); ?></th>
		<th><?php echo __('Sub Subcat Id'); ?></th>
		<th><?php echo __('Subsubcategory'); ?></th>
		<th><?php echo __('Aux Category 1'); ?></th>
		<th><?php echo __('Aux Category 2'); ?></th>
		<th><?php echo __('Aux Category 3'); ?></th>
		<th><?php echo __('Item'); ?></th>
		<th><?php echo __('Vendor Sku'); ?></th>
		<th><?php echo __('Brand'); ?></th>
		<th><?php echo __('Brand Id'); ?></th>
		<th><?php echo __('In Stock'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Slug'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Long Description'); ?></th>
		<th><?php echo __('Tags'); ?></th>
		<th><?php echo __('Image Original'); ?></th>
		<th><?php echo __('Image'); ?></th>
		<th><?php echo __('Image 1'); ?></th>
		<th><?php echo __('Image 2'); ?></th>
		<th><?php echo __('Image 3'); ?></th>
		<th><?php echo __('Image 4'); ?></th>
		<th><?php echo __('Image 5'); ?></th>
		<th><?php echo __('Featured Product'); ?></th>
		<th><?php echo __('Gift Product'); ?></th>
		<th><?php echo __('Cost'); ?></th>
		<th><?php echo __('List Price'); ?></th>
		<th><?php echo __('Selling Price'); ?></th>
		<th><?php echo __('Price'); ?></th>
		<th><?php echo __('Taxable'); ?></th>
		<th><?php echo __('Stock'); ?></th>
		<th><?php echo __('Ratings'); ?></th>
		<th><?php echo __('Tradition Ids'); ?></th>
		<th><?php echo __('Dom Tradition Ids'); ?></th>
		<th><?php echo __('Measurement'); ?></th>
		<th><?php echo __('Weight Unit'); ?></th>
		<th><?php echo __('Weight'); ?></th>
		<th><?php echo __('Shipping Weight'); ?></th>
		<th><?php echo __('Volume'); ?></th>
		<th><?php echo __('Volume Unit'); ?></th>
		<th><?php echo __('Dimension Unit'); ?></th>
		<th><?php echo __('Height'); ?></th>
		<th><?php echo __('Length'); ?></th>
		<th><?php echo __('Width'); ?></th>
		<th><?php echo __('Ingredients'); ?></th>
		<th><?php echo __('Nutrition'); ?></th>
		<th><?php echo __('Recipes'); ?></th>
		<th><?php echo __('Country Id'); ?></th>
		<th><?php echo __('Culinary Country Id'); ?></th>
		<th><?php echo __('Ethnicity Id'); ?></th>
		<th><?php echo __('Checked'); ?></th>
		<th><?php echo __('Allergen Free'); ?></th>
		<th><?php echo __('Gluten Free'); ?></th>
		<th><?php echo __('Vegan'); ?></th>
		<th><?php echo __('Fat Free'); ?></th>
		<th><?php echo __('Sugar Free'); ?></th>
		<th><?php echo __('No Msg'); ?></th>
		<th><?php echo __('Lactose Free'); ?></th>
		<th><?php echo __('Low Carb'); ?></th>
		<th><?php echo __('Nut Free'); ?></th>
		<th><?php echo __('Heart Smart'); ?></th>
		<th><?php echo __('No Preservatives'); ?></th>
		<th><?php echo __('Organic'); ?></th>
		<th><?php echo __('Kosher'); ?></th>
		<th><?php echo __('Halal'); ?></th>
		<th><?php echo __('Fair Traded'); ?></th>
		<th><?php echo __('Give Back'); ?></th>
		<th><?php echo __('Creation Id'); ?></th>
		<th><?php echo __('Heat Sensitivity'); ?></th>
		<th><?php echo __('All Natural'); ?></th>
		<th><?php echo __('Related Products'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($category['Product'] as $product): ?>
		<tr>
			<td><?php echo $product['id']; ?></td>
			<td><?php echo $product['upc']; ?></td>
			<td><?php echo $product['user_id']; ?></td>
			<td><?php echo $product['category_id']; ?></td>
			<td><?php echo $product['category']; ?></td>
			<td><?php echo $product['subcategory_id']; ?></td>
			<td><?php echo $product['subcategory']; ?></td>
			<td><?php echo $product['sub_subcat_id']; ?></td>
			<td><?php echo $product['subsubcategory']; ?></td>
			<td><?php echo $product['aux_category_1']; ?></td>
			<td><?php echo $product['aux_category_2']; ?></td>
			<td><?php echo $product['aux_category_3']; ?></td>
			<td><?php echo $product['item']; ?></td>
			<td><?php echo $product['vendor_sku']; ?></td>
			<td><?php echo $product['brand']; ?></td>
			<td><?php echo $product['brand_id']; ?></td>
			<td><?php echo $product['in_stock']; ?></td>
			<td><?php echo $product['name']; ?></td>
			<td><?php echo $product['slug']; ?></td>
			<td><?php echo $product['description']; ?></td>
			<td><?php echo $product['long_description']; ?></td>
			<td><?php echo $product['tags']; ?></td>
			<td><?php echo $product['image_original']; ?></td>
			<td><?php echo $product['image']; ?></td>
			<td><?php echo $product['image_1']; ?></td>
			<td><?php echo $product['image_2']; ?></td>
			<td><?php echo $product['image_3']; ?></td>
			<td><?php echo $product['image_4']; ?></td>
			<td><?php echo $product['image_5']; ?></td>
			<td><?php echo $product['featured_product']; ?></td>
			<td><?php echo $product['gift_product']; ?></td>
			<td><?php echo $product['cost']; ?></td>
			<td><?php echo $product['list_price']; ?></td>
			<td><?php echo $product['selling_price']; ?></td>
			<td><?php echo $product['price']; ?></td>
			<td><?php echo $product['taxable']; ?></td>
			<td><?php echo $product['stock']; ?></td>
			<td><?php echo $product['ratings']; ?></td>
			<td><?php echo $product['tradition_ids']; ?></td>
			<td><?php echo $product['dom_tradition_ids']; ?></td>
			<td><?php echo $product['measurement']; ?></td>
			<td><?php echo $product['weight_unit']; ?></td>
			<td><?php echo $product['weight']; ?></td>
			<td><?php echo $product['shipping_weight']; ?></td>
			<td><?php echo $product['volume']; ?></td>
			<td><?php echo $product['volume_unit']; ?></td>
			<td><?php echo $product['dimension_unit']; ?></td>
			<td><?php echo $product['height']; ?></td>
			<td><?php echo $product['length']; ?></td>
			<td><?php echo $product['width']; ?></td>
			<td><?php echo $product['ingredients']; ?></td>
			<td><?php echo $product['nutrition']; ?></td>
			<td><?php echo $product['recipes']; ?></td>
			<td><?php echo $product['country_id']; ?></td>
			<td><?php echo $product['culinary_country_id']; ?></td>
			<td><?php echo $product['ethnicity_id']; ?></td>
			<td><?php echo $product['checked']; ?></td>
			<td><?php echo $product['allergen_free']; ?></td>
			<td><?php echo $product['gluten_free']; ?></td>
			<td><?php echo $product['vegan']; ?></td>
			<td><?php echo $product['fat_free']; ?></td>
			<td><?php echo $product['sugar_free']; ?></td>
			<td><?php echo $product['no_msg']; ?></td>
			<td><?php echo $product['lactose_free']; ?></td>
			<td><?php echo $product['low_carb']; ?></td>
			<td><?php echo $product['nut_free']; ?></td>
			<td><?php echo $product['heart_smart']; ?></td>
			<td><?php echo $product['no_preservatives']; ?></td>
			<td><?php echo $product['organic']; ?></td>
			<td><?php echo $product['kosher']; ?></td>
			<td><?php echo $product['halal']; ?></td>
			<td><?php echo $product['fair_traded']; ?></td>
			<td><?php echo $product['give_back']; ?></td>
			<td><?php echo $product['creation_id']; ?></td>
			<td><?php echo $product['heat_sensitivity']; ?></td>
			<td><?php echo $product['all_natural']; ?></td>
			<td><?php echo $product['related_products']; ?></td>
			<td><?php echo $product['created']; ?></td>
			<td><?php echo $product['modified']; ?></td>
			<td class="actions">
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

</div>
<div class="related">
	<h3><?php echo __('Related Subcategories'); ?></h3>
	<?php if (!empty($category['Subcategory'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Category Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Slug'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($category['Subcategory'] as $subcategory): ?>
		<tr>
			<td><?php echo $subcategory['id']; ?></td>
			<td><?php echo $subcategory['category_id']; ?></td>
			<td><?php echo $subcategory['name']; ?></td>
			<td><?php echo $subcategory['slug']; ?></td>
			<td><?php echo $subcategory['created']; ?></td>
			<td><?php echo $subcategory['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'subcategories', 'action' => 'view', $subcategory['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'subcategories', 'action' => 'edit', $subcategory['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'subcategories', 'action' => 'delete', $subcategory['id']), null, __('Are you sure you want to delete # %s?', $subcategory['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

</div>
