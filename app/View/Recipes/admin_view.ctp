<h2>Recipe</h2>

<table class="table-striped table-bordered table-condensed">
<tr>
<td>Id</td>
<td><?php echo h($recipe['Recipe']['id']); ?></td>
</tr>
<tr>
<td>User</td>
<td><?php echo $this->Html->link($recipe['User']['name'], array('controller' => 'users', 'action' => 'view', $recipe['User']['id'])); ?></td>
</tr>
<tr>
<td>Category</td>
<td><?php echo $this->Html->link($recipe['Category']['name'], array('controller' => 'categories', 'action' => 'view', $recipe['Category']['id'])); ?></td>
</tr>
<tr>
<td>Sub Category</td>
<td><?php echo $this->Html->link($recipe['Subcategory']['name'], array('controller' => 'subcategories', 'action' => 'view', $recipe['Subcategory']['id'])); ?></td>
</tr>
<tr>
<td>Name</td>
<td><?php echo h($recipe['Recipe']['name']); ?></td>
</tr>
<tr>
<td>Slug</td>
<td><?php echo h($recipe['Recipe']['slug']); ?></td>
</tr>
<tr>
<td>Description</td>
<td><?php echo $recipe['Recipe']['description']; ?></td>
</tr>
<tr>
<td>Tags</td>
<td><?php echo h($recipe['Recipe']['tags']); ?></td>
</tr>
<tr>
<td>Ingredients</td>
<td><?php echo $recipe['Recipe']['ingredients']; ?></td>
</tr>
<tr>
<td>Preparation</td>
<td><?php echo $recipe['Recipe']['preparation']; ?></td>
</tr>
<tr>
<td>Comment</td>
<td><?php echo h($recipe['Recipe']['comment']); ?></td>
</tr>
<tr>
<td>Image 1</td>
<td><?php echo h($recipe['Recipe']['image_1']); ?></td>
</tr>
<tr>
<td>Image 2</td>
<td><?php echo h($recipe['Recipe']['image_2']); ?></td>
</tr>
<tr>
<td>Image 3</td>
<td><?php echo h($recipe['Recipe']['image_3']); ?></td>
</tr>
<tr>
<td>Image Caption 1</td>
<td><?php echo h($recipe['Recipe']['image_caption_1']); ?></td>
</tr>
<tr>
<td>Image Caption 2</td>
<td><?php echo h($recipe['Recipe']['image_caption_2']); ?></td>
</tr>
<tr>
<td>Image Caption 3</td>
<td><?php echo h($recipe['Recipe']['image_caption_3']); ?></td>
</tr>
<tr>
<td>Active</td>
<td><?php echo h($recipe['Recipe']['active']); ?></td>
</tr>
<tr>
<td>Created</td>
<td><?php echo h($recipe['Recipe']['created']); ?></td>
</tr>
<tr>
<td>Modified</td>
<td><?php echo h($recipe['Recipe']['modified']); ?></td>
</tr>
</table>

<br />
<br />

<h3>Actions</h3>

<?php echo $this->Html->link('Edit Recipe', array('action' => 'edit', $recipe['Recipe']['id']), array('class' => 'btn')); ?>

<br />
<br />

<?php echo $this->Form->postLink('Delete Recipe', array('action' => 'delete', $recipe['Recipe']['id']), array('class' => 'btn btn-danger'), __('Are you sure you want to delete # %s?', $recipe['Recipe']['id'])); ?>

<br />
<br />

