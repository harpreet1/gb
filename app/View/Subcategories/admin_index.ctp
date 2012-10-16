<h2>Subcategories</h2>

<br />
<br />

<table class="table table-striped table-bordered table-condensed table-hover">
	<tr>
		<th><?php echo $this->Paginator->sort('id'); ?></th>
		<th><?php echo $this->Paginator->sort('category_id'); ?></th>
		<th><?php echo $this->Paginator->sort('name'); ?></th>
		<th><?php echo $this->Paginator->sort('slug'); ?></th>
		<th><?php echo $this->Paginator->sort('subsubcategory_count'); ?></th>
		<th><?php echo $this->Paginator->sort('created'); ?></th>
		<th><?php echo $this->Paginator->sort('modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($subcategories as $subcategory): ?>
	<tr>
		<td><?php echo h($subcategory['Subcategory']['id']); ?></td>
		<td><?php echo $this->Html->link($subcategory['Category']['name'], array('controller' => 'categories', 'action' => 'view', $subcategory['Category']['id'])); ?></td>
		<td><?php echo h($subcategory['Subcategory']['name']); ?></td>
		<td><?php echo h($subcategory['Subcategory']['slug']); ?></td>
		<td><?php echo h($subcategory['Subcategory']['subsubcategory_count']); ?></td>
		<td><?php echo h($subcategory['Subcategory']['created']); ?></td>
		<td><?php echo h($subcategory['Subcategory']['modified']); ?></td>
		<td class="actions">
			<?php echo $this->Html->link('View', array('action' => 'view', $subcategory['Subcategory']['id']), array('class' => 'btn btn-mini')); ?>
			<?php echo $this->Html->link('Edit', array('action' => 'edit', $subcategory['Subcategory']['id']), array('class' => 'btn btn-mini')); ?>
		</td>
	</tr>
	<?php endforeach; ?>
</table>

<?php echo $this->element('pagination-counter'); ?>

<?php echo $this->element('pagination'); ?>

<br />
<br />

