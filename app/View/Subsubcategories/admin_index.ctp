<h2>Subsubcategories</h2>

<table class="table table-striped table-bordered table-condensed table-hover">
	<tr>
		<th><?php echo $this->Paginator->sort('id'); ?></th>
		<th><?php echo $this->Paginator->sort('subcategory_id'); ?></th>
		<th><?php echo $this->Paginator->sort('subcategory_name'); ?></th>
		<th><?php echo $this->Paginator->sort('name'); ?></th>
		<th><?php echo $this->Paginator->sort('slug'); ?></th>
		<th><?php echo $this->Paginator->sort('product_count'); ?></th>
		<th><?php echo $this->Paginator->sort('created'); ?></th>
		<th><?php echo $this->Paginator->sort('modified'); ?></th>
		<th class="actions">Actions</th>
	</tr>
	<?php foreach ($subsubcategories as $subsubcategory): ?>
	<tr>
		<td><?php echo $subsubcategory['Subsubcategory']['id']; ?></td>
		<td><?php echo $this->Html->link($subsubcategory['Subcategory']['name'], array('controller' => 'subcategories', 'action' => 'view', $subsubcategory['Subcategory']['id'])); ?></td>
		<td><?php echo $subsubcategory['Subsubcategory']['subcategory_name']; ?></td>
		<td><?php echo $subsubcategory['Subsubcategory']['name']; ?></td>
		<td><?php echo $subsubcategory['Subsubcategory']['slug']; ?></td>
		<td><?php echo $subsubcategory['Subsubcategory']['product_count']; ?></td>
		<td><?php echo $subsubcategory['Subsubcategory']['created']; ?></td>
		<td><?php echo $subsubcategory['Subsubcategory']['modified']; ?></td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $subsubcategory['Subsubcategory']['id']), array('class' => 'btn btn-mini')); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $subsubcategory['Subsubcategory']['id']), array('class' => 'btn btn-mini')); ?>
		</td>
	</tr>
	<?php endforeach; ?>
</table>

<?php echo $this->element('pagination-counter'); ?>

<?php echo $this->element('pagination'); ?>

<br />
<br />

