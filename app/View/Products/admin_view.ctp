<div class="products view">
<h2><?php  echo __('Product'); ?></h2>
	<dl>
			<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($product['Product']['id']); ?>
			
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($product['User']['name'], array('controller' => 'users', 'action' => 'view', $product['User']['id'])); ?>
			
		</dd>
		<dt><?php echo __('Category'); ?></dt>
		<dd>
			<?php echo $this->Html->link($product['Category']['name'], array('controller' => 'categories', 'action' => 'view', $product['Category']['id'])); ?>
			
		</dd>
		<dt><?php echo __('Category Name'); ?></dt>
		<dd>
			<?php echo h($product['Product']['category_name']); ?>
			
		</dd>
		<dt><?php echo __('Subcategory'); ?></dt>
		<dd>
			<?php echo $this->Html->link($product['Subcategory']['name'], array('controller' => 'subcategories', 'action' => 'view', $product['Subcategory']['id'])); ?>
			
		</dd>
		<dt><?php echo __('Subcategory Name'); ?></dt>
		<dd>
			<?php echo h($product['Product']['subcategory_name']); ?>
			
		</dd>
		<dt><?php echo __('Subsubcategory'); ?></dt>
		<dd>
			<?php echo $this->Html->link($product['Subsubcategory']['name'], array('controller' => 'subsubcategories', 'action' => 'view', $product['Subsubcategory']['id'])); ?>
			
		</dd>
		<dt><?php echo __('Subsubcategory Name'); ?></dt>
		<dd>
			<?php echo h($product['Product']['subsubcategory_name']); ?>
			
		</dd>
		<dt><?php echo __('Upc'); ?></dt>
		<dd>
			<?php echo h($product['Product']['upc']); ?>
			
		</dd>
		<dt><?php echo __('Vendor Sku'); ?></dt>
		<dd>
			<?php echo h($product['Product']['vendor_sku']); ?>
			
		</dd>
		<dt><?php echo __('Brand'); ?></dt>
		<dd>
			<?php echo h($product['Product']['brand']); ?>
			
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($product['Product']['name']); ?>
			
		</dd>
		<dt><?php echo __('Slug'); ?></dt>
		<dd>
			<?php echo h($product['Product']['slug']); ?>
			
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($product['Product']['description']); ?>
			
		</dd>
		<dt><?php echo __('Long Description'); ?></dt>
		<dd>
			<?php echo h($product['Product']['long_description']); ?>
			
		</dd>
		<dt><?php echo __('Tags'); ?></dt>
		<dd>
			<?php echo h($product['Product']['tags']); ?>
			
		</dd>
		<dt><?php echo __('Image Original'); ?></dt>
		<dd>
			<?php echo h($product['Product']['image_original']); ?>
			
		</dd>
		<dt><?php echo __('Image'); ?></dt>
		<dd>
			<?php echo h($product['Product']['image']); ?>
			
		</dd>
		<dt><?php echo __('Imageold'); ?></dt>
		<dd>
			<?php echo h($product['Product']['imageold']); ?>
			
		</dd>
		<dt><?php echo __('Image 1'); ?></dt>
		<dd>
			<?php echo h($product['Product']['image_1']); ?>
			
		</dd>
		<dt><?php echo __('Image 2'); ?></dt>
		<dd>
			<?php echo h($product['Product']['image_2']); ?>
			
		</dd>
		<dt><?php echo __('Image 3'); ?></dt>
		<dd>
			<?php echo h($product['Product']['image_3']); ?>
			
		</dd>
		<dt><?php echo __('Image 4'); ?></dt>
		<dd>
			<?php echo h($product['Product']['image_4']); ?>
			
		</dd>
		<dt><?php echo __('Image 5'); ?></dt>
		<dd>
			<?php echo h($product['Product']['image_5']); ?>
			
		</dd>
		<dt><?php echo __('Featured Product'); ?></dt>
		<dd>
			<?php echo h($product['Product']['featured_product']); ?>
			
		</dd>
		<dt><?php echo __('Gift Product'); ?></dt>
		<dd>
			<?php echo h($product['Product']['gift_product']); ?>
			
		</dd>
		<dt><?php echo __('Cost'); ?></dt>
		<dd>
			<?php echo h($product['Product']['cost']); ?>
			
		</dd>
		<dt><?php echo __('List Price'); ?></dt>
		<dd>
			<?php echo h($product['Product']['list_price']); ?>
			
		</dd>
		<dt><?php echo __('Selling Price'); ?></dt>
		<dd>
			<?php echo h($product['Product']['selling_price']); ?>
			
		</dd>
		<dt><?php echo __('Price'); ?></dt>
		<dd>
			<?php echo h($product['Product']['price']); ?>
			
		</dd>
		<dt><?php echo __('Taxable'); ?></dt>
		<dd>
			<?php echo h($product['Product']['taxable']); ?>
			
		</dd>
		<dt><?php echo __('Traditions'); ?></dt>
		<dd>
			<?php echo h($product['Product']['traditions']); ?>
			
		</dd>
		<dt><?php echo __('Ustradition'); ?></dt>
		<dd>
			<?php echo $this->Html->link($product['Ustradition']['name'], array('controller' => 'ustraditions', 'action' => 'view', $product['Ustradition']['id'])); ?>
			
		</dd>
		<dt><?php echo __('Measurement'); ?></dt>
		<dd>
			<?php echo h($product['Product']['measurement']); ?>
			
		</dd>
		<dt><?php echo __('Weight Unit'); ?></dt>
		<dd>
			<?php echo h($product['Product']['weight_unit']); ?>
			
		</dd>
		<dt><?php echo __('Weight'); ?></dt>
		<dd>
			<?php echo h($product['Product']['weight']); ?>
			
		</dd>
		<dt><?php echo __('Shipping Weight'); ?></dt>
		<dd>
			<?php echo h($product['Product']['shipping_weight']); ?>
			
		</dd>
		<dt><?php echo __('Volume'); ?></dt>
		<dd>
			<?php echo h($product['Product']['volume']); ?>
			
		</dd>
		<dt><?php echo __('Volume Unit'); ?></dt>
		<dd>
			<?php echo h($product['Product']['volume_unit']); ?>
			
		</dd>
		<dt><?php echo __('Dimension Unit'); ?></dt>
		<dd>
			<?php echo h($product['Product']['dimension_unit']); ?>
			
		</dd>
		<dt><?php echo __('Height'); ?></dt>
		<dd>
			<?php echo h($product['Product']['height']); ?>
			
		</dd>
		<dt><?php echo __('Length'); ?></dt>
		<dd>
			<?php echo h($product['Product']['length']); ?>
			
		</dd>
		<dt><?php echo __('Width'); ?></dt>
		<dd>
			<?php echo h($product['Product']['width']); ?>
			
		</dd>
		<dt><?php echo __('Ingredients'); ?></dt>
		<dd>
			<?php echo h($product['Product']['ingredients']); ?>
			
		</dd>
		<dt><?php echo __('Nutrition'); ?></dt>
		<dd>
			<?php echo h($product['Product']['nutrition']); ?>
			
		</dd>
		<dt><?php echo __('Recipes'); ?></dt>
		<dd>
			<?php echo h($product['Product']['recipes']); ?>
			
		</dd>
		<dt><?php echo __('Serving Suggestions'); ?></dt>
		<dd>
			<?php echo h($product['Product']['serving_suggestions']); ?>
			
		</dd>
		<dt><?php echo __('Country'); ?></dt>
		<dd>
			<?php echo h($product['Product']['country']); ?>
			
		</dd>
		<dt><?php echo __('Creation'); ?></dt>
		<dd>
			<?php echo h($product['Product']['creation']); ?>
			
		</dd>
		<dt><?php echo __('Allergen Free'); ?></dt>
		<dd>
			<?php echo h($product['Product']['allergen_free']); ?>
			
		</dd>
		<dt><?php echo __('Gluten Free'); ?></dt>
		<dd>
			<?php echo h($product['Product']['gluten_free']); ?>
			
		</dd>
		<dt><?php echo __('Vegetarian'); ?></dt>
		<dd>
			<?php echo h($product['Product']['vegetarian']); ?>
			
		</dd>
		<dt><?php echo __('Fat Free'); ?></dt>
		<dd>
			<?php echo h($product['Product']['fat_free']); ?>
			
		</dd>
		<dt><?php echo __('Sugar Free'); ?></dt>
		<dd>
			<?php echo h($product['Product']['sugar_free']); ?>
			
		</dd>
		<dt><?php echo __('No Msg'); ?></dt>
		<dd>
			<?php echo h($product['Product']['no_msg']); ?>
			
		</dd>
		<dt><?php echo __('Lactose Free'); ?></dt>
		<dd>
			<?php echo h($product['Product']['lactose_free']); ?>
			
		</dd>
		<dt><?php echo __('Low Carb'); ?></dt>
		<dd>
			<?php echo h($product['Product']['low_carb']); ?>
			
		</dd>
		<dt><?php echo __('Nut Free'); ?></dt>
		<dd>
			<?php echo h($product['Product']['nut_free']); ?>
			
		</dd>
		<dt><?php echo __('Heart Smart'); ?></dt>
		<dd>
			<?php echo h($product['Product']['heart_smart']); ?>
			
		</dd>
		<dt><?php echo __('No Preservatives'); ?></dt>
		<dd>
			<?php echo h($product['Product']['no_preservatives']); ?>
			
		</dd>
		<dt><?php echo __('Organic'); ?></dt>
		<dd>
			<?php echo h($product['Product']['organic']); ?>
			
		</dd>
		<dt><?php echo __('Kosher'); ?></dt>
		<dd>
			<?php echo h($product['Product']['kosher']); ?>
			
		</dd>
		<dt><?php echo __('Halal'); ?></dt>
		<dd>
			<?php echo h($product['Product']['halal']); ?>
			
		</dd>
		<dt><?php echo __('Fair Traded'); ?></dt>
		<dd>
			<?php echo h($product['Product']['fair_traded']); ?>
			
		</dd>
		<dt><?php echo __('Give Back'); ?></dt>
		<dd>
			<?php echo h($product['Product']['give_back']); ?>
			
		</dd>
		<dt><?php echo __('Heat Sensitivity'); ?></dt>
		<dd>
			<?php echo h($product['Product']['heat_sensitivity']); ?>
			
		</dd>
		<dt><?php echo __('All Natural'); ?></dt>
		<dd>
			<?php echo h($product['Product']['all_natural']); ?>
			
		</dd>
		<dt><?php echo __('Award Winning'); ?></dt>
		<dd>
			<?php echo h($product['Product']['award_winning']); ?>
			
		</dd>
		<dt><?php echo __('Related Products'); ?></dt>
		<dd>
			<?php echo h($product['Product']['related_products']); ?>
			
		</dd>
		<dt><?php echo __('Active'); ?></dt>
		<dd>
			<?php echo h($product['Product']['active']); ?>
			
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($product['Product']['created']); ?>
			
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($product['Product']['modified']); ?>
			
		</dd>
	</dl>
</div>

<br />
<br />

<h3><?php echo __('Actions'); ?></h3>
<?php echo $this->Html->link('Edit Product', array('action' => 'edit', $product['Product']['id']), array('class' => 'btn')); ?>
<br />
<br />
<?php echo $this->Form->postLink('Delete Product', array('action' => 'delete', $product['Product']['id']), array('class' => 'btn btn-danger'), __('Are you sure you want to delete # %s?', $product['Product']['id'])); ?>
<br />

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
				<?php echo $this->Html->link(__('View'), array('controller' => 'tags', 'action' => 'view', $tag['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'tags', 'action' => 'edit', $tag['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'tags', 'action' => 'delete', $tag['id']), null, __('Are you sure you want to delete # %s?', $tag['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Tag'), array('controller' => 'tags', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>


<br />
<br />

<?php echo $this->Html->image('products/image/' . $product['Product']['image']); ?>

<br />
<br />

<div class="row">
<div class="span5">

<span class="label label-warning">
  Image : no watermark, square image size 
</span>

<br />
<br />

<?php echo $this->Form->create('Product', array('type' => 'file', 'url' => array('controller' => 'products', 'action' => 'view', 'admin' => true)));?>
<?php echo $this->Form->hidden('id', array('value' => $product['Product']['id'])); ?>
<table class="table table-striped table-bordered table-condensed">
	<tbody>
		<tr>
			<td>Upload Image</td>
			<td><?php echo $this->Form->file('image'); ?></td>
		</tr>
		<tr>
			<td>Image Rtpe</td>
			<td>

			<?php echo $this->Form->input('image_type', array('type' => 'select', 'label' => false, 'options' => array(
				'image' => 'Main',
				'image_1' => 'image 1',
				'image_2' => 'image 2',
				'image_3' => 'image 3',
				'image_4' => 'image 4',
				'image_5' => 'image 5',
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
</div>
</div>
