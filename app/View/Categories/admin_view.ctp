<h2>Category</h2>

<table class="table table-striped table-bordered table-condensed table-hover">
	<tr>
		<td>Id</td>
		<td><?php echo h($category['Category']['id']); ?></td>
	</tr>
	<tr>
		<td>Name</td>
		<td><?php echo h($category['Category']['name']); ?></td>
	</tr>
	<tr>
		<td>Slug</td>
		<td><?php echo h($category['Category']['slug']); ?></td>
	</tr>
	<tr>
		<td>Article</td>
		<td><?php echo $category['Category']['article']; ?></td>
	</tr>
	<tr>
		<td>Summary</td>
		<td><?php echo $category['Category']['summary']; ?></td>
	</tr>
	<tr>
		<td>Image</td>
		<td>
			<?php echo h($category['Category']['image']); ?>
			<br />
			<br />
			<?php echo $this->Html->image('categories/image/' . $category['Category']['image']); ?>
		</td>
	</tr>
	<tr>
		<td>Image 1</td>
		<td><?php echo h($category['Category']['image_1']); ?></td>
	</tr>
	<tr>
		<td>Image 2</td>
		<td><?php echo h($category['Category']['image_2']); ?></td>
	</tr>
	<tr>
		<td>Image 3</td>
		<td><?php echo h($category['Category']['image_3']); ?></td>
	</tr>
	<tr>
		<td>Image 4</td>
		<td><?php echo h($category['Category']['image_4']); ?></td>
	</tr>
	<tr>
		<td>Image 5</td>
		<td><?php echo h($category['Category']['image_5']); ?></td>
	</tr>
	<tr>
		<td>Subcategory Count</td>
		<td><?php echo h($category['Category']['subcategory_count']); ?></td>
	</tr>
	<tr>
		<td>Created</td>
		<td><?php echo h($category['Category']['created']); ?></td>
	</tr>
	<tr>
		<td>Modified</td>
		<td><?php echo h($category['Category']['modified']); ?></td>
	</tr>
</table>

<br />
<br />

<h3>Actions</h3>

<?php echo $this->Html->link('Edit Category', array('action' => 'edit', $category['Category']['id']), array('class' => 'btn')); ?>

<br />
<br />

<?php echo $this->Form->postLink('Delete Category', array('action' => 'delete', $category['Category']['id']), array('class' => 'btn btn-danger'), __('Are you sure you want to delete # %s?', $category['Category']['id'])); ?>

<br />
<br />

