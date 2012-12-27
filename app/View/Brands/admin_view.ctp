<div class="brands view">



<h2>Brand</h2>
	<table class="table-striped table-bordered table-condensed table-hover">
        <tr>
            <td>ID</td>
            <td><?php echo h($brand['Brand']['id']); ?></td>
        </tr>
		<tr>
            <td>Name</td>
            <td><?php echo h($brand['Brand']['name']); ?></td>
        </tr>
		<tr>
            <td>Slug</td>
            <td>
                <?php echo h($brand['Brand']['slug']); ?>
            </td>
		</tr>
		<tr>
            <td>Description</td>
            <td>
                <?php echo h($brand['Brand']['description']); ?>
            </td>
		</tr>
		<tr>
            <td>Summary</td>
            <td>
                <?php echo h($brand['Brand']['summary']); ?>
            </td>
		</tr>
		<tr>
            <td>Article</td>
            <td>
                <?php echo h($brand['Brand']['article']); ?>
            </td>
		</tr>
		<tr>

            <td>Image</td>
            <td>
                <?php echo h($brand['Brand']['image']); ?>
            </td>
		</tr>
		<tr>

            <td>Created</td>
            <td>
                <?php echo h($brand['Brand']['created']); ?>
            </td>
		</tr>
		<tr>

            <td>Modified</td>
            <td>
                <?php echo h($brand['Brand']['modified']); ?>
            </td>
		</tr>
		<tr>

	</table>
</div>

<div class="actions">
	<h3>Actions</h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Brand'), array('action' => 'edit', $brand['Brand']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Brand'), array('action' => 'delete', $brand['Brand']['id']), null, __('Are you sure you want to delete # %s?', $brand['Brand']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Brands'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Brand'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Products'), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product'), array('controller' => 'products', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Products'); ?></h3>
	<?php if (!empty($brand['Product'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Price Wholesale'); ?></th>
		<th><?php echo __('Price'); ?></th>
		<th><?php echo __('Markup'); ?></th>
		<th><?php echo __('Price List'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th>Name</th>
		<th><?php echo __('Category Id'); ?></th>
		<th><?php echo __('Subcategory Id'); ?></th>
		<th><?php echo __('Subsubcategory Id'); ?></th>
		<th><?php echo __('Aux Category 1'); ?></th>
		<th><?php echo __('Aux Category 2'); ?></th>
		<th><?php echo __('Aux Category 3'); ?></th>
		<th><?php echo __('Upc'); ?></th>
		<th><?php echo __('Vendor Sku'); ?></th>
		<th><?php echo __('Brand Id'); ?></th>
		<th><?php echo __('Brand Name'); ?></th>
		<th><?php echo __('Brand Description'); ?></th>
		<th>Slug</th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Long Description'); ?></th>
		<th><?php echo __('Generic Description'); ?></th>
		<th><?php echo __('Tags'); ?></th>
		<th><?php echo __('Image Original'); ?></th>
		<th><?php echo __('Image'); ?></th>
		<th><?php echo __('Imageold'); ?></th>
		<th><?php echo __('Image 1'); ?></th>
		<th><?php echo __('Image 2'); ?></th>
		<th><?php echo __('Image 3'); ?></th>
		<th><?php echo __('Image 4'); ?></th>
		<th><?php echo __('Image 5'); ?></th>
		<th><?php echo __('Featured Product'); ?></th>
		<th><?php echo __('Gift Product'); ?></th>
		<th><?php echo __('Taxable'); ?></th>
		<th><?php echo __('Traditions'); ?></th>
		<th><?php echo __('Ustradition Id'); ?></th>
		<th><?php echo __('Measurement'); ?></th>
		<th><?php echo __('Weight Unit'); ?></th>
		<th><?php echo __('Weight'); ?></th>
		<th><?php echo __('Shipping Weight'); ?></th>
		<th><?php echo __('Volume'); ?></th>
		<th><?php echo __('Volume Unit'); ?></th>
		<th><?php echo __('Dimension Unit'); ?></th>
		<th><?php echo __('Height'); ?></th>
		<th><?php echo __('Length'); ?></th>
		<th><?php echo __('Witdh'); ?></th>
		<th><?php echo __('Ingredients'); ?></th>
		<th><?php echo __('Nutrition'); ?></th>
		<th><?php echo __('Nut Calories'); ?></th>
		<th><?php echo __('Nut Calories From Fat'); ?></th>
		<th><?php echo __('Nut Total Fat'); ?></th>
		<th><?php echo __('Nut Saturated Fat'); ?></th>
		<th><?php echo __('Nut Cholesterol'); ?></th>
		<th><?php echo __('Nut Sodium'); ?></th>
		<th><?php echo __('Nut Sodium P'); ?></th>
		<th><?php echo __('Nut Carbs'); ?></th>
		<th><?php echo __('Nut Carbs P'); ?></th>
		<th><?php echo __('Nut Fiber'); ?></th>
		<th><?php echo __('Nut Fiber P'); ?></th>
		<th><?php echo __('Nut Sugar'); ?></th>
		<th><?php echo __('Nut Sugar P'); ?></th>
		<th><?php echo __('Nut Protein'); ?></th>
		<th><?php echo __('Nut Protein P'); ?></th>
		<th><?php echo __('Nut Vitamin A'); ?></th>
		<th><?php echo __('Nut Vitamin A P'); ?></th>
		<th><?php echo __('Nut Vitamin C'); ?></th>
		<th><?php echo __('Nut Vitamin C P'); ?></th>
		<th><?php echo __('Nut Calcium'); ?></th>
		<th><?php echo __('Nut Calcium P'); ?></th>
		<th><?php echo __('Nut Iron'); ?></th>
		<th><?php echo __('Nut Iron P'); ?></th>
		<th><?php echo __('Recipes'); ?></th>
		<th><?php echo __('Serving Suggestions'); ?></th>
		<th><?php echo __('Country'); ?></th>
		<th><?php echo __('Creation'); ?></th>
		<th><?php echo __('Attr Allergen Free'); ?></th>
		<th><?php echo __('Attr Gluten Free'); ?></th>
		<th><?php echo __('Attr Vegetarian'); ?></th>
		<th><?php echo __('Attr Fat Free'); ?></th>
		<th><?php echo __('Attr Sugar Free'); ?></th>
		<th><?php echo __('Attr No Msg'); ?></th>
		<th><?php echo __('Attr Lactose Free'); ?></th>
		<th><?php echo __('Attr Low Carb'); ?></th>
		<th><?php echo __('Attr Nut Free'); ?></th>
		<th><?php echo __('Attr Heart Smart'); ?></th>
		<th><?php echo __('Attr No Preservatives'); ?></th>
		<th><?php echo __('Attr Organic'); ?></th>
		<th><?php echo __('Attr Kosher'); ?></th>
		<th><?php echo __('Attr Halal'); ?></th>
		<th><?php echo __('Attr Fair Traded'); ?></th>
		<th><?php echo __('Attr Give Back'); ?></th>
		<th><?php echo __('Attr Heat Sensitivity'); ?></th>
		<th><?php echo __('Attr All Natural'); ?></th>
		<th><?php echo __('Attr Award Winning'); ?></th>
		<th><?php echo __('Related Products'); ?></th>
		<th><?php echo __('In Stock'); ?></th>
		<th><?php echo __('Attribution'); ?></th>
		<th><?php echo __('Viewed'); ?></th>
		<th><?php echo __('Last Viewed'); ?></th>
		<th>Active</th>
		<th>Created</th>
		<th>Modified</th>
		<th class="actions">Actions</th>
	</tr>
	<?php
		$i = 0;
		foreach ($brand['Product'] as $product): ?>
		<tr>
			<td><?php echo $product['id']; ?></td>
			<td><?php echo $product['price_wholesale']; ?></td>
			<td><?php echo $product['price']; ?></td>
			<td><?php echo $product['markup']; ?></td>
			<td><?php echo $product['price_list']; ?></td>
			<td><?php echo $product['user_id']; ?></td>
			<td><?php echo $product['name']; ?></td>
			<td><?php echo $product['category_id']; ?></td>
			<td><?php echo $product['subcategory_id']; ?></td>
			<td><?php echo $product['subsubcategory_id']; ?></td>
			<td><?php echo $product['aux_category_1']; ?></td>
			<td><?php echo $product['aux_category_2']; ?></td>
			<td><?php echo $product['aux_category_3']; ?></td>
			<td><?php echo $product['upc']; ?></td>
			<td><?php echo $product['vendor_sku']; ?></td>
			<td><?php echo $product['brand_id']; ?></td>
			<td><?php echo $product['brand_name']; ?></td>
			<td><?php echo $product['brand_description']; ?></td>
			<td><?php echo $product['slug']; ?></td>
			<td><?php echo $product['description']; ?></td>
			<td><?php echo $product['long_description']; ?></td>
			<td><?php echo $product['generic_description']; ?></td>
			<td><?php echo $product['tags']; ?></td>
			<td><?php echo $product['image_original']; ?></td>
			<td><?php echo $product['image']; ?></td>
			<td><?php echo $product['imageold']; ?></td>
			<td><?php echo $product['image_1']; ?></td>
			<td><?php echo $product['image_2']; ?></td>
			<td><?php echo $product['image_3']; ?></td>
			<td><?php echo $product['image_4']; ?></td>
			<td><?php echo $product['image_5']; ?></td>
			<td><?php echo $product['featured_product']; ?></td>
			<td><?php echo $product['gift_product']; ?></td>
			<td><?php echo $product['taxable']; ?></td>
			<td><?php echo $product['traditions']; ?></td>
			<td><?php echo $product['ustradition_id']; ?></td>
			<td><?php echo $product['measurement']; ?></td>
			<td><?php echo $product['weight_unit']; ?></td>
			<td><?php echo $product['weight']; ?></td>
			<td><?php echo $product['shipping_weight']; ?></td>
			<td><?php echo $product['volume']; ?></td>
			<td><?php echo $product['volume_unit']; ?></td>
			<td><?php echo $product['dimension_unit']; ?></td>
			<td><?php echo $product['height']; ?></td>
			<td><?php echo $product['length']; ?></td>
			<td><?php echo $product['witdh']; ?></td>
			<td><?php echo $product['ingredients']; ?></td>
			<td><?php echo $product['nutrition']; ?></td>
			<td><?php echo $product['nut_calories']; ?></td>
			<td><?php echo $product['nut_calories_from_fat']; ?></td>
			<td><?php echo $product['nut_total_fat']; ?></td>
			<td><?php echo $product['nut_saturated_fat']; ?></td>
			<td><?php echo $product['nut_cholesterol']; ?></td>
			<td><?php echo $product['nut_sodium']; ?></td>
			<td><?php echo $product['nut_sodium_p']; ?></td>
			<td><?php echo $product['nut_carbs']; ?></td>
			<td><?php echo $product['nut_carbs_p']; ?></td>
			<td><?php echo $product['nut_fiber']; ?></td>
			<td><?php echo $product['nut_fiber_p']; ?></td>
			<td><?php echo $product['nut_sugar']; ?></td>
			<td><?php echo $product['nut_sugar_p']; ?></td>
			<td><?php echo $product['nut_protein']; ?></td>
			<td><?php echo $product['nut_protein_p']; ?></td>
			<td><?php echo $product['nut_vitamin_a']; ?></td>
			<td><?php echo $product['nut_vitamin_a_p']; ?></td>
			<td><?php echo $product['nut_vitamin_c']; ?></td>
			<td><?php echo $product['nut_vitamin_c_p']; ?></td>
			<td><?php echo $product['nut_calcium']; ?></td>
			<td><?php echo $product['nut_calcium_p']; ?></td>
			<td><?php echo $product['nut_iron']; ?></td>
			<td><?php echo $product['nut_iron_p']; ?></td>
			<td><?php echo $product['recipes']; ?></td>
			<td><?php echo $product['serving_suggestions']; ?></td>
			<td><?php echo $product['country']; ?></td>
			<td><?php echo $product['creation']; ?></td>
			<td><?php echo $product['attr_allergen_free']; ?></td>
			<td><?php echo $product['attr_gluten_free']; ?></td>
			<td><?php echo $product['attr_vegetarian']; ?></td>
			<td><?php echo $product['attr_fat_free']; ?></td>
			<td><?php echo $product['attr_sugar_free']; ?></td>
			<td><?php echo $product['attr_no_msg']; ?></td>
			<td><?php echo $product['attr_lactose_free']; ?></td>
			<td><?php echo $product['attr_low_carb']; ?></td>
			<td><?php echo $product['attr_nut_free']; ?></td>
			<td><?php echo $product['attr_heart_smart']; ?></td>
			<td><?php echo $product['attr_no_preservatives']; ?></td>
			<td><?php echo $product['attr_organic']; ?></td>
			<td><?php echo $product['attr_kosher']; ?></td>
			<td><?php echo $product['attr_halal']; ?></td>
			<td><?php echo $product['attr_fair_traded']; ?></td>
			<td><?php echo $product['attr_give_back']; ?></td>
			<td><?php echo $product['attr_heat_sensitivity']; ?></td>
			<td><?php echo $product['attr_all_natural']; ?></td>
			<td><?php echo $product['attr_award_winning']; ?></td>
			<td><?php echo $product['related_products']; ?></td>
			<td><?php echo $product['in_stock']; ?></td>
			<td><?php echo $product['attribution']; ?></td>
			<td><?php echo $product['viewed']; ?></td>
			<td><?php echo $product['last_viewed']; ?></td>
			<td><?php echo $product['active']; ?></td>
			<td><?php echo $product['created']; ?></td>
			<td><?php echo $product['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link('View', array('controller' => 'products', 'action' => 'view', $product['id'])); ?>
				<?php echo $this->Html->link('Edit', array('controller' => 'products', 'action' => 'edit', $product['id'])); ?>
				<?php echo $this->Form->postLink('Delete', array('controller' => 'products', 'action' => 'delete', $product['id']), null, __('Are you sure you want to delete # %s?', $product['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>
<br />
<br />
	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Product'), array('controller' => 'products', 'action' => 'add')); ?> </li>
		</ul>
	</div>
    
    
    
<?php echo $this->Html->image('brands/image/' . $brand['Brand']['image']); ?>



<br />Brand

<span class="label label-warning">
 &nbsp; Image : no watermark, square image size </span>

<br />
<br />

<?php echo $this->Form->create('Brand', array('type' => 'file', 'url' => array('controller' => 'brands', 'action' => 'view', 'admin' => true)));?>
<?php echo $this->Form->hidden('id', array('value' => $brand['Brand']['id'])); ?>
<?php echo $this->Form->hidden('slug', array('value' => $brand['Brand']['slug'])); ?>
<table class="table-striped table-bordered table-condensed">
	<tbody>
		<tr>
			<td>Upload Image</td>
			<td><?php echo $this->Form->file('image'); ?></td>
		</tr>
		<tr>
			<td>Image Type</td>
			<td>

			<?php echo $this->Form->input('image_type', array('type' => 'select', 'label' => false, 'options' => array(
				'image' => 'image',
			))); ?>

			</td>
		</tr>
		<tr>
			<td></td>
			<td><?php echo $this->Form->button('Submit', array('class' => 'btn'));?></td>
		</tr>
	</tbody>
</table>
<?php echo $this->Form->end(); ?>

<br />
<br />    
    
    
    
</div>
