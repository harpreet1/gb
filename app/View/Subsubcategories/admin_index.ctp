<h2>Subsubcategories</h2>

<table class="table table-striped table-bordered table-condensed table-hover">
	<tr>
		<th><?php echo $this->Paginator->sort('id'); ?></th>
		<th><?php echo $this->Paginator->sort('subcategory_id'); ?></th>
		<th><?php echo $this->Paginator->sort('subcategory_name'); ?></th>
		<th><?php echo $this->Paginator->sort('name'); ?></th>
		<th><?php echo $this->Paginator->sort('slug'); ?></th>
		<th><?php echo $this->Paginator->sort('created'); ?></th>
		<th><?php echo $this->Paginator->sort('modified'); ?></th>
		<th class="actions">Actions</th>
	</tr>
	<?php foreach ($subsubcategories as $subsubcategory): ?>
	<tr>
		<td><?php echo h($subsubcategory['Subsubcategory']['id']); ?>&nbsp;</td>
		<td><?php echo $this->Html->link($subsubcategory['Subcategory']['name'], array('controller' => 'subcategories', 'action' => 'view', $subsubcategory['Subcategory']['id'])); ?></td>
		<td><?php echo h($subsubcategory['Subsubcategory']['subcategory_name']); ?>&nbsp;</td>
		<td><?php echo h($subsubcategory['Subsubcategory']['name']); ?>&nbsp;</td>
		<td><?php echo h($subsubcategory['Subsubcategory']['slug']); ?>&nbsp;</td>
		<td><?php echo h($subsubcategory['Subsubcategory']['created']); ?>&nbsp;</td>
		<td><?php echo h($subsubcategory['Subsubcategory']['modified']); ?>&nbsp;</td>
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

