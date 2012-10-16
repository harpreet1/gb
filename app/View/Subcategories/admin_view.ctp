<h2>Subcategory</h2>


<table class="table table-striped table-bordered table-condensed table-hover">
	<tr>
		<td>Id</td>
		<td><?php echo h($subcategory['Subcategory']['id']); ?></td>
	</tr>
	<tr>
		<td>Category</td>
		<td><?php echo $this->Html->link($subcategory['Category']['name'], array('controller' => 'categories', 'action' => 'view', $subcategory['Category']['id'])); ?></td>
	</tr>
	<tr>
		<td>Name</td>
		<td><?php echo h($subcategory['Subcategory']['name']); ?></td>
	</tr>
	<tr>
		<td>Slug</td>
		<td><?php echo h($subcategory['Subcategory']['slug']); ?></td>
	</tr>
	<tr>
		<td>Subsubcategory Count</td>
		<td><?php echo h($subcategory['Subcategory']['subsubcategory_count']); ?></td>
	</tr>
	<tr>
		<td>Created</td>
		<td><?php echo h($subcategory['Subcategory']['created']); ?></td>
	</tr>
	<tr>
		<td>Modified</td>
		<td><?php echo h($subcategory['Subcategory']['modified']); ?></td>
	</tr>
</table>

<br />
<br />

<h3>Actions</h3>

<?php echo $this->Html->link('Edit Subcategory', array('action' => 'edit', $subcategory['Subcategory']['id']), array('class' => 'btn')); ?>

<br />
<br />

<?php echo $this->Form->postLink('Delete Subcategory', array('action' => 'delete', $subcategory['Subcategory']['id']), array('class' => 'btn btn-danger'), __('Are you sure you want to delete # %s?', $subcategory['Subcategory']['id'])); ?>

<br />
<br />

