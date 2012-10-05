<?php echo $this->Html->css(array('bootstrap-editable.css'), 'stylesheet', array('inline' => false)); ?>

<?php echo $this->Html->script(array('switch.js', 'bootstrap-editable.js'), array('inline' => false)); ?>

<script>
$(document).ready(function() {

	$('.description').editable({
		type: 'textarea',
		name: 'description',
		url: '/admin/products/editable',
		title: 'Description',
		placement: 'right',
	});

	$('.price').editable({
		type: 'text',
		name: 'price',
		url: '/admin/products/editable',
		title: 'Price',
		placement: 'right',
	});

	$('.domestic_traditions').editable({
		type: 'select',
		name: 'domestic_traditions',
		url: '/admin/products/editable',
		title: 'Domestic Traditions',
		source: <?php echo json_encode($domestic_traditions); ?>,
		placement: 'right',
	});

	$('.country').editable({
		type: 'select',
		name: 'country',
		url: '/admin/products/editable',
		title: 'Country',
		source: <?php echo json_encode($countries); ?>,
		placement: 'right',
	});

});
</script>


<h2>Products</h2>

<br />

<div class="row">

	<?php echo $this->Form->create('Product'); ?>
	<?php echo $this->Form->hidden('search', array('value' => 1)); ?>

	<div class="span3">
		<?php echo $this->Form->input('user_id', array('label' => false, 'empty' => 'Vendor')); ?>
	</div>

	<div class="span3">
		<?php echo $this->Form->input('filter', array(
			'label' => false,
			'options' => array(
				'name' => 'Name',
				'price' => 'Price',
				'item' => 'Item',
			),
			'selected' => $all['filter']
		)); ?>
	</div>

	<div class="span3">
		<?php echo $this->Form->input('name', array('label' => false, 'id' => false, 'class' => false, 'value' => $all['name'])); ?>
	</div>

	<div class="span4">
		<?php echo $this->Form->button('Search', array('class' => 'btn')); ?>
		&nbsp; &nbsp;
		<?php echo $this->Html->link('Reset Search', array('controller' => 'products', 'action' => 'reset', 'admin' => true), array('class' => 'btn')); ?>
		<?php echo $this->Form->end(); ?>
	</div>

</div>

<br />
<br />

<?php echo $this->element('pagination-counter'); ?>

<?php echo $this->element('pagination'); ?>

<br />

<table class="table table-striped table-bordered table-condensed table-hover">
	<tr>
		<th class="actions">Actions</th>
		<th><?php echo $this->Paginator->sort('id'); ?></th>
		<th><?php echo $this->Paginator->sort('user_id'); ?></th>
		<th><?php echo $this->Paginator->sort('category_id'); ?></th>
		<th><?php echo $this->Paginator->sort('category'); ?></th>
		<th><?php echo $this->Paginator->sort('subcategory_id'); ?></th>
		<th><?php echo $this->Paginator->sort('subcategory'); ?></th>
		<th><?php echo $this->Paginator->sort('subsubcategory_id'); ?></th>
		<th><?php echo $this->Paginator->sort('subsubcategory'); ?></th>
		<th><?php echo $this->Paginator->sort('item'); ?></th>
		<th><?php echo $this->Paginator->sort('vendor_sku'); ?></th>
		<th><?php echo $this->Paginator->sort('brand'); ?></th>
		<th><?php echo $this->Paginator->sort('brand_id'); ?></th>
		<th><?php echo $this->Paginator->sort('name'); ?></th>
		<th><?php echo $this->Paginator->sort('slug'); ?></th>
		<th><?php echo $this->Paginator->sort('description'); ?></th>
		<th><?php echo $this->Paginator->sort('tags'); ?></th>
		<th><?php echo $this->Paginator->sort('image'); ?></th>
		<th><?php echo $this->Paginator->sort('price'); ?></th>
		<th><?php echo $this->Paginator->sort('stock'); ?></th>
		<th><?php echo $this->Paginator->sort('ratings'); ?></th>
		<th><?php echo $this->Paginator->sort('traditions'); ?></th>
		<th><?php echo $this->Paginator->sort('domestic_traditions'); ?></th>
		<th><?php echo $this->Paginator->sort('weight_unit'); ?></th>
		<th><?php echo $this->Paginator->sort('weight'); ?></th>
		<th><?php echo $this->Paginator->sort('shipping_weight'); ?></th>
		<th><?php echo $this->Paginator->sort('country'); ?></th>
		<th><?php echo $this->Paginator->sort('culinary_country_id'); ?></th>
		<th><?php echo $this->Paginator->sort('active'); ?></th>
	</tr>
	<?php foreach ($products as $product): ?>
	<tr>

		<td class="actions">
			<?php echo $this->Html->link('View', array('action' => 'view', $product['Product']['id']), array('class' => 'btn btn-mini')); ?>
			<?php echo $this->Html->link('Edit', array('action' => 'edit', $product['Product']['id']), array('class' => 'btn btn-mini')); ?>
			<?php echo $this->Form->postLink('Delete', array('action' => 'delete', $product['Product']['id']), array('class' => 'btn btn-danger btn-mini') , __('Are you sure you want to delete # %s?', $product['Product']['id'])); ?>
		</td>

		<td><?php echo h($product['Product']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($product['User']['name'], array('controller' => 'users', 'action' => 'view', $product['User']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($product['Category']['name'], array('controller' => 'categories', 'action' => 'view', $product['Category']['id'])); ?>
		</td>
		<td><?php echo h($product['Product']['category']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($product['Subcategory']['name'], array('controller' => 'subcategories', 'action' => 'view', $product['Subcategory']['id'])); ?>
		</td>
		<td><?php echo h($product['Product']['subcategory']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($product['Subsubcategory']['name'], array('controller' => 'subsubcategories', 'action' => 'view', $product['Subsubcategory']['id'])); ?>
		</td>
		<td><?php echo h($product['Product']['subsubcategory']); ?>&nbsp;</td>
		<td><?php echo h($product['Product']['item']); ?>&nbsp;</td>
		<td><?php echo h($product['Product']['vendor_sku']); ?>&nbsp;</td>
		<td><?php echo h($product['Product']['brand']); ?>&nbsp;</td>
		<td><?php echo h($product['Product']['brand_id']); ?>&nbsp;</td>
		<td><?php echo h($product['Product']['name']); ?>&nbsp;</td>
		<td><?php echo h($product['Product']['slug']); ?>&nbsp;</td>
		<td><span class="description" data-value="<?php echo $product['Product']['description']; ?>" data-pk="<?php echo $product['Product']['id']; ?>"><?php echo h($product['Product']['description']); ?></span></td>
		<td><?php echo h($product['Product']['tags']); ?>&nbsp;</td>

		<td><?php echo $this->Html->image('http://www.gourmetdev.com/img/products/' . $product['Product']['image'], array('class' => 'img100')); ?></td>

		<td><span class="price" data-value="<?php echo $product['Product']['price']; ?>" data-pk="<?php echo $product['Product']['id']; ?>"><?php echo h($product['Product']['price']); ?></span></td>
		<td><?php echo h($product['Product']['stock']); ?>&nbsp;</td>
		<td><?php echo h($product['Product']['ratings']); ?>&nbsp;</td>
		<td><?php echo h($product['Product']['traditions']); ?>&nbsp;</td>
		<td><span class="domestic_traditions" data-value="<?php echo $product['Product']['domestic_traditions']; ?>" data-pk="<?php echo $product['Product']['id']; ?>"><?php echo h($product['Product']['domestic_traditions']); ?></span></td>
		<td><?php echo h($product['Product']['weight_unit']); ?>&nbsp;</td>
		<td><?php echo h($product['Product']['weight']); ?>&nbsp;</td>
		<td><?php echo h($product['Product']['shipping_weight']); ?>&nbsp;</td>
		<td><span class="country" data-value="<?php echo $product['Product']['country']; ?>" data-pk="<?php echo $product['Product']['id']; ?>"><?php echo h($product['Product']['country']); ?></span></td>
		<td><?php echo h($product['Product']['culinary_country_id']); ?>&nbsp;</td>
		<td><a href="/admin/products/switch/active/<?php echo $product['Product']['id']; ?>" class="status"><img src="/img/icon_<?php echo $product['Product']['active']; ?>.png" alt="" /></a></td>
	</tr>
	<?php endforeach; ?>
</table>


<?php echo $this->element('pagination-counter'); ?>

<?php echo $this->element('pagination'); ?>

<br />
<br />

