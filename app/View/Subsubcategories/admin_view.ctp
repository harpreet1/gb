<h2>Subsubcategory</h2>


<table class="table-striped table-bordered table-condensed table-hover">
	<tr>
		<td>Id</td>
		<td><?php echo h($subsubcategory['Subsubcategory']['id']); ?></td>
	</tr>
	<tr>
		<td>Subcategory</td>
		<td><?php echo $this->Html->link($subsubcategory['Subcategory']['name'], array('controller' => 'subcategories', 'action' => 'view', $subsubcategory['Subcategory']['id'])); ?></td>
	</tr>
	<tr>
		<td>Subcategory Name</td>
		<td><?php echo h($subsubcategory['Subsubcategory']['subcategory_name']); ?></td>
	</tr>
	<tr>
		<td>Name</td>
		<td><?php echo h($subsubcategory['Subsubcategory']['name']); ?></td>
	</tr>
	<tr>
		<td>Slug</td>
		<td><?php echo h($subsubcategory['Subsubcategory']['slug']); ?></td>
	</tr>
	<tr>
		<td>Created</td>
		<td><?php echo h($subsubcategory['Subsubcategory']['created']); ?></td>
	</tr>
	<tr>
		<td>Modified</td>
		<td><?php echo h($subsubcategory['Subsubcategory']['modified']); ?></td>
	</tr>
</table>

<br />
<br />

<h3>Actions</h3>

<?php echo $this->Html->link('Edit Subsubcategory', array('action' => 'edit', $subsubcategory['Subsubcategory']['id']), array('class' => 'btn')); ?>

<br />
<br />

<?php echo $this->Form->postLink('Delete Subsubcategory', array('action' => 'delete', $subsubcategory['Subsubcategory']['id']), array('class' => 'btn btn-danger'), __('Are you sure you want to delete # %s?', $subsubcategory['Subsubcategory']['id'])); ?>

<br />
<br />

