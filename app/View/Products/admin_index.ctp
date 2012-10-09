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

	$('.serving_suggestions').editable({
		type: 'textarea',
		name: 'serving_suggestions',
		url: '/admin/products/editable',
		title: 'Serving Suggestions',
		placement: 'left',
	});

	$('.price').editable({
		type: 'text',
		name: 'price',
		url: '/admin/products/editable',
		title: 'Price',
		placement: 'right',
	});

	$('.ustradition').editable({
		type: 'select',
		name: 'ustradition_id',
		url: '/admin/products/editable',
		title: 'Domestic Tradition',
		source: <?php echo json_encode($ustraditions); ?>,
		placement: 'left',
	});

	$('.country').editable({
		type: 'select',
		name: 'country',
		url: '/admin/products/editable',
		title: 'Country',
		source: <?php echo json_encode($countries); ?>,
		placement: 'left',
	});

});
</script>


<h2>Products</h2>

<br />

<div class="row">

	<?php echo $this->Form->create('Product', array()); ?>
	<?php echo $this->Form->hidden('search', array('value' => 1)); ?>

	<div class="span3">
		<?php echo $this->Form->input('user_id', array('label' => false, 'empty' => 'Vendor', 'selected' => $all['user_id'])); ?>

	</div>

	<div class="span3">
		<?php echo $this->Form->input('filter', array(
			'label' => false,
			'options' => array(
				'name' => 'Name',
				'id' => 'ID',
				'brand' => 'Brand',
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

	</div>

	<?php echo $this->Form->end(); ?>

</div>

<br />
<br />

<?php echo $this->element('pagination-counter'); ?>

<?php echo $this->element('pagination'); ?>

<br />

<table class="table table-striped table-bordered table-condensed table-hover">
	<tr>
		<th><?php echo $this->Paginator->sort('id'); ?></th>
		<th><?php echo $this->Paginator->sort('user_id'); ?></th>
		<th><?php echo $this->Paginator->sort('category_id'); ?></th>
		<th><?php echo $this->Paginator->sort('category_name'); ?></th>
		<th><?php echo $this->Paginator->sort('subcategory_id'); ?></th>
		<th><?php echo $this->Paginator->sort('subcategory_name'); ?></th>
		<th><?php echo $this->Paginator->sort('subsubcategory_id'); ?></th>
		<th><?php echo $this->Paginator->sort('subsubcategory_name'); ?></th>
		<th><?php echo $this->Paginator->sort('vendor_sku'); ?></th>
		<th><?php echo $this->Paginator->sort('brand'); ?></th>
		<th><?php echo $this->Paginator->sort('name'); ?></th>
		<th><?php echo $this->Paginator->sort('slug'); ?></th>
		<th><?php echo $this->Paginator->sort('image'); ?></th>
		<th><?php echo $this->Paginator->sort('price'); ?></th>
		<th><?php echo $this->Paginator->sort('description'); ?></th>
		<th><?php echo $this->Paginator->sort('serving_suggestions'); ?></th>
		<th><?php echo $this->Paginator->sort('traditions'); ?></th>
		<th><?php echo $this->Paginator->sort('ustradition_id'); ?></th>
		<th><?php echo $this->Paginator->sort('weight_unit'); ?></th>
		<th><?php echo $this->Paginator->sort('weight'); ?></th>
		<th><?php echo $this->Paginator->sort('shipping_weight'); ?></th>
		<th><?php echo $this->Paginator->sort('country'); ?></th>
		<th><?php echo $this->Paginator->sort('active'); ?></th>
	</tr>
	<?php foreach ($products as $product): ?>
	<tr>
		<td class="actions">
			<?php echo h($product['Product']['id']); ?>
			<br />
			<?php echo $this->Html->link('View', array('action' => 'view', $product['Product']['id']), array('class' => 'btn btn-mini')); ?>
			<br />
			<?php echo $this->Html->link('Edit', array('action' => 'edit', $product['Product']['id']), array('class' => 'btn btn-mini')); ?>
			<br />
			<?php echo $this->Form->postLink('Delete', array('action' => 'delete', $product['Product']['id']), array('class' => 'btn btn-danger btn-mini') , __('Are you sure you want to delete # %s?', $product['Product']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($product['User']['name'], array('controller' => 'users', 'action' => 'view', $product['User']['id'])); ?>
			<br />
			<?php echo $product['User']['level']; ?>
		</td>
		<td><?php echo $this->Html->link($product['Category']['name'], array('controller' => 'categories', 'action' => 'view', $product['Category']['id'])); ?></td>
		<td><?php echo h($product['Product']['category_name']); ?></td>
		<td><?php echo $this->Html->link($product['Subcategory']['name'], array('controller' => 'subcategories', 'action' => 'view', $product['Subcategory']['id'])); ?></td>
		<td><?php echo h($product['Product']['subcategory_name']); ?></td>
		<td><?php echo $this->Html->link($product['Subsubcategory']['name'], array('controller' => 'subsubcategories', 'action' => 'view', $product['Subsubcategory']['id'])); ?></td>
		<td><?php echo h($product['Product']['subsubcategory_name']); ?></td>
		<td><?php echo h($product['Product']['vendor_sku']); ?></td>
		<td><?php echo h($product['Product']['brand']); ?></td>
		<td><?php echo h($product['Product']['name']); ?></td>
		<td><?php echo h($product['Product']['slug']); ?></td>
		<td><?php echo $this->Html->image('products/image/' . $product['Product']['image'], array('class' => 'img100')); ?></td>
		<td><span class="price" data-value="<?php echo $product['Product']['price']; ?>" data-pk="<?php echo $product['Product']['id']; ?>"><?php echo h($product['Product']['price']); ?></span></td>
		<td><span class="description" data-value="<?php echo $product['Product']['description']; ?>" data-pk="<?php echo $product['Product']['id']; ?>"><?php echo h($product['Product']['description']); ?></span></td>
		<td><span class="serving_suggestions" data-value="<?php echo $product['Product']['serving_suggestions']; ?>" data-pk="<?php echo $product['Product']['id']; ?>"><?php echo h($product['Product']['serving_suggestions']); ?></span></td>
		<td><?php echo h($product['Product']['traditions']); ?></td>
		<td><span class="ustradition" data-value="<?php echo $product['Ustradition']['id']; ?>" data-pk="<?php echo $product['Product']['id']; ?>"><?php echo h($product['Ustradition']['name']); ?></span></td>
		<td><?php echo h($product['Product']['weight_unit']); ?></td>
		<td><?php echo h($product['Product']['weight']); ?></td>
		<td><?php echo h($product['Product']['shipping_weight']); ?></td>
		<td><span class="country" data-value="<?php echo $product['Product']['country']; ?>" data-pk="<?php echo $product['Product']['id']; ?>"><?php echo h($product['Product']['country']); ?></span></td>
		<td><a href="/admin/products/switch/active/<?php echo $product['Product']['id']; ?>" class="status"><img src="/img/icon_<?php echo $product['Product']['active']; ?>.png" alt="" /></a></td>
	</tr>
	<?php endforeach; ?>
</table>


<?php echo $this->element('pagination-counter'); ?>

<?php echo $this->element('pagination'); ?>

<br />
<br />

