<h2>Category</h2>

<table class="table-striped table-bordered table-condensed table-hover">
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
		<td>Product Count</td>
		<td><?php echo $category['Category']['product_count']; ?></td>
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

<br />
<br />


<span class="label label-warning">
 &nbsp; Image : no watermark, square image size </span>

<br />
<br />

<?php echo $this->Form->create('Category', array('type' => 'file', 'url' => array('controller' => 'categories', 'action' => 'view', 'admin' => true)));?>
<?php echo $this->Form->hidden('id', array('value' => $category['Category']['id'])); ?>
<?php echo $this->Form->hidden('slug', array('value' => $category['Category']['slug'])); ?>
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

<br />
<br />

<?php echo $this->Html->image('categories/image/'. $category['Category']['image'] . '?date=' . time(), array('class' => 'gb')); ?>
<br />
<a href="/admin/images/crop?src_dir=categories/image&src_file=<?php echo $category['Category']['image']; ?>&dst_dir=categories/image&dst_file=<?php echo $category['Category']['image']; ?>&width=300&height=300" class="btn">crop 300 x 300 image</a>

<br />
<br />
<br />
<br />

<?php echo $this->Html->image('categories/image_1/'. $category['Category']['image_1'] . '?date=' . time(), array('class' => 'gb')); ?>
<br />
<a href="/admin/images/crop?src_dir=categories/image_1&src_file=<?php echo $category['Category']['image_1']; ?>&dst_dir=categories/image_1&dst_file=<?php echo $category['Category']['image_1']; ?>&width=300&height=300" class="btn">crop image</a>

<br />
<br />

<br />
<br />


<h3>Actions</h3>

<?php echo $this->Html->link('Edit Category', array('action' => 'edit', $category['Category']['id']), array('class' => 'btn')); ?>

<br />
<br />

<?php echo $this->Form->postLink('Delete Category', array('action' => 'delete', $category['Category']['id']), array('class' => 'btn btn-danger'), __('Are you sure you want to delete # %s?', $category['Category']['id'])); ?>

<br />
<br />

