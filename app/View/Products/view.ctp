<h2><?php  echo __('Product'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($product['Product']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Upc'); ?></dt>
		<dd>
			<?php echo h($product['Product']['upc']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User Id'); ?></dt>
		<dd>
			<?php echo h($product['Product']['user_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Category'); ?></dt>
		<dd>
			<?php echo $this->Html->link($product['Category']['name'], array('controller' => 'categories', 'action' => 'view', $product['Category']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Category'); ?></dt>
		<dd>
			<?php echo h($product['Product']['category']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Subcategory Id'); ?></dt>
		<dd>
			<?php echo h($product['Product']['subcategory_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Subcategory'); ?></dt>
		<dd>
			<?php echo h($product['Product']['subcategory']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sub Subcat Id'); ?></dt>
		<dd>
			<?php echo h($product['Product']['sub_subcat_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Subsubcategory'); ?></dt>
		<dd>
			<?php echo h($product['Product']['subsubcategory']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Aux Category 1'); ?></dt>
		<dd>
			<?php echo h($product['Product']['aux_category_1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Aux Category 2'); ?></dt>
		<dd>
			<?php echo h($product['Product']['aux_category_2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Aux Category 3'); ?></dt>
		<dd>
			<?php echo h($product['Product']['aux_category_3']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Item'); ?></dt>
		<dd>
			<?php echo h($product['Product']['item']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Vendor Sku'); ?></dt>
		<dd>
			<?php echo h($product['Product']['vendor_sku']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Brand'); ?></dt>
		<dd>
			<?php echo h($product['Product']['brand']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Brand Id'); ?></dt>
		<dd>
			<?php echo h($product['Product']['brand_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('In Stock'); ?></dt>
		<dd>
			<?php echo h($product['Product']['in_stock']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Product Name'); ?></dt>
		<dd>
			<?php echo h($product['Product']['product_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Slug'); ?></dt>
		<dd>
			<?php echo h($product['Product']['slug']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($product['Product']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Long Description'); ?></dt>
		<dd>
			<?php echo h($product['Product']['long_description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tags'); ?></dt>
		<dd>
			<?php echo h($product['Product']['tags']); ?>
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
		<dt><?php echo __('Image 1'); ?></dt>
		<dd>
			<?php echo h($product['Product']['image_1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Image 2'); ?></dt>
		<dd>
			<?php echo h($product['Product']['image_2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Image 3'); ?></dt>
		<dd>
			<?php echo h($product['Product']['image_3']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Image 4'); ?></dt>
		<dd>
			<?php echo h($product['Product']['image_4']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Image 5'); ?></dt>
		<dd>
			<?php echo h($product['Product']['image_5']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Featured Product'); ?></dt>
		<dd>
			<?php echo h($product['Product']['featured_product']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Gift Product'); ?></dt>
		<dd>
			<?php echo h($product['Product']['gift_product']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cost'); ?></dt>
		<dd>
			<?php echo h($product['Product']['cost']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('List Price'); ?></dt>
		<dd>
			<?php echo h($product['Product']['list_price']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Selling Price'); ?></dt>
		<dd>
			<?php echo h($product['Product']['selling_price']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Price'); ?></dt>
		<dd>
			<?php echo h($product['Product']['price']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Taxable'); ?></dt>
		<dd>
			<?php echo h($product['Product']['taxable']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Stock'); ?></dt>
		<dd>
			<?php echo h($product['Product']['stock']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ratings'); ?></dt>
		<dd>
			<?php echo h($product['Product']['ratings']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tradition Ids'); ?></dt>
		<dd>
			<?php echo h($product['Product']['tradition_ids']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dom Tradition Ids'); ?></dt>
		<dd>
			<?php echo h($product['Product']['dom_tradition_ids']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Measurement'); ?></dt>
		<dd>
			<?php echo h($product['Product']['measurement']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Weight Unit'); ?></dt>
		<dd>
			<?php echo h($product['Product']['weight_unit']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Weight'); ?></dt>
		<dd>
			<?php echo h($product['Product']['weight']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Shipping Weight'); ?></dt>
		<dd>
			<?php echo h($product['Product']['shipping_weight']); ?>
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
		<dt><?php echo __('Dimension Unit'); ?></dt>
		<dd>
			<?php echo h($product['Product']['dimension_unit']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Height'); ?></dt>
		<dd>
			<?php echo h($product['Product']['height']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Length'); ?></dt>
		<dd>
			<?php echo h($product['Product']['length']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Width'); ?></dt>
		<dd>
			<?php echo h($product['Product']['width']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ingredients'); ?></dt>
		<dd>
			<?php echo h($product['Product']['ingredients']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nutrition'); ?></dt>
		<dd>
			<?php echo h($product['Product']['nutrition']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Recipes'); ?></dt>
		<dd>
			<?php echo h($product['Product']['recipes']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Country Id'); ?></dt>
		<dd>
			<?php echo h($product['Product']['country_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Culinary Country Id'); ?></dt>
		<dd>
			<?php echo h($product['Product']['culinary_country_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ethnicity Id'); ?></dt>
		<dd>
			<?php echo h($product['Product']['ethnicity_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Checked'); ?></dt>
		<dd>
			<?php echo h($product['Product']['checked']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Allergen Free'); ?></dt>
		<dd>
			<?php echo h($product['Product']['allergen_free']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Gluten Free'); ?></dt>
		<dd>
			<?php echo h($product['Product']['gluten_free']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Vegan'); ?></dt>
		<dd>
			<?php echo h($product['Product']['vegan']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fat Free'); ?></dt>
		<dd>
			<?php echo h($product['Product']['fat_free']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sugar Free'); ?></dt>
		<dd>
			<?php echo h($product['Product']['sugar_free']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('No Msg'); ?></dt>
		<dd>
			<?php echo h($product['Product']['no_msg']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Lactose Free'); ?></dt>
		<dd>
			<?php echo h($product['Product']['lactose_free']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Low Carb'); ?></dt>
		<dd>
			<?php echo h($product['Product']['low_carb']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nut Free'); ?></dt>
		<dd>
			<?php echo h($product['Product']['nut_free']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Heart Smart'); ?></dt>
		<dd>
			<?php echo h($product['Product']['heart_smart']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('No Preservatives'); ?></dt>
		<dd>
			<?php echo h($product['Product']['no_preservatives']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Organic'); ?></dt>
		<dd>
			<?php echo h($product['Product']['organic']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Kosher'); ?></dt>
		<dd>
			<?php echo h($product['Product']['kosher']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Halal'); ?></dt>
		<dd>
			<?php echo h($product['Product']['halal']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fair Traded'); ?></dt>
		<dd>
			<?php echo h($product['Product']['fair_traded']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Give Back'); ?></dt>
		<dd>
			<?php echo h($product['Product']['give_back']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Creation Id'); ?></dt>
		<dd>
			<?php echo h($product['Product']['creation_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Heat Sensitivity'); ?></dt>
		<dd>
			<?php echo h($product['Product']['heat_sensitivity']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('All Natural'); ?></dt>
		<dd>
			<?php echo h($product['Product']['all_natural']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Related Products'); ?></dt>
		<dd>
			<?php echo h($product['Product']['related_products']); ?>
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

<br />
<br />
<br />

<div class="related">
	<h3><?php echo __('Related Nutritions'); ?></h3>
	<?php if (!empty($product['Nutrition'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Nutrition Id'); ?></th>
		<th><?php echo __('Product Id'); ?></th>
		<th><?php echo __('Serv Size'); ?></th>
		<th><?php echo __('Serv Per Cont'); ?></th>
		<th><?php echo __('Cal'); ?></th>
		<th><?php echo __('Cal Fat'); ?></th>
		<th><?php echo __('Total Fat'); ?></th>
		<th><?php echo __('Sat Fat'); ?></th>
		<th><?php echo __('Trans Fat'); ?></th>
		<th><?php echo __('Chol'); ?></th>
		<th><?php echo __('Sodium'); ?></th>
		<th><?php echo __('Carbo'); ?></th>
		<th><?php echo __('Fiber'); ?></th>
		<th><?php echo __('Sugar'); ?></th>
		<th><?php echo __('Protein'); ?></th>
		<th><?php echo __('Vit A'); ?></th>
		<th><?php echo __('Vit C'); ?></th>
		<th><?php echo __('Calcium'); ?></th>
		<th><?php echo __('Iron'); ?></th>
		<th><?php echo __('Daily Value'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($product['Nutrition'] as $nutrition): ?>
		<tr>
			<td><?php echo $nutrition['nutrition_id']; ?></td>
			<td><?php echo $nutrition['product_id']; ?></td>
			<td><?php echo $nutrition['serv_size']; ?></td>
			<td><?php echo $nutrition['serv_per_cont']; ?></td>
			<td><?php echo $nutrition['cal']; ?></td>
			<td><?php echo $nutrition['cal_fat']; ?></td>
			<td><?php echo $nutrition['total_fat']; ?></td>
			<td><?php echo $nutrition['sat_fat']; ?></td>
			<td><?php echo $nutrition['trans_fat']; ?></td>
			<td><?php echo $nutrition['chol']; ?></td>
			<td><?php echo $nutrition['sodium']; ?></td>
			<td><?php echo $nutrition['carbo']; ?></td>
			<td><?php echo $nutrition['fiber']; ?></td>
			<td><?php echo $nutrition['sugar']; ?></td>
			<td><?php echo $nutrition['protein']; ?></td>
			<td><?php echo $nutrition['vit_A']; ?></td>
			<td><?php echo $nutrition['vit_C']; ?></td>
			<td><?php echo $nutrition['calcium']; ?></td>
			<td><?php echo $nutrition['iron']; ?></td>
			<td><?php echo $nutrition['daily_value']; ?></td>
			<td class="actions">
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>
</div>

<br />
<br />

<div class="related">
	<h3><?php echo __('Related Tags'); ?></h3>
	<?php if (!empty($product['Tag'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($product['Tag'] as $tag): ?>
		<tr>
			<td><?php echo $tag['id']; ?></td>
			<td><?php echo $tag['name']; ?></td>
			<td><?php echo $tag['created']; ?></td>
			<td><?php echo $tag['modified']; ?></td>
			<td class="actions">
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>
</div>
