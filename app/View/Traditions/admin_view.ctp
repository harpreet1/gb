<h2>Tradition</h2>

<br />

<table class="table-striped table-bordered table-condensed table-hover">
<tr>
<td>Id</td>
<td><?php echo h($tradition['Tradition']['id']); ?></td>
</tr>
<tr>
<td>Name</td>
<td><?php echo h($tradition['Tradition']['name']); ?></td>
</tr>
<tr>
<td>Slug</td>
<td><?php echo h($tradition['Tradition']['slug']); ?></td>
</tr>
<tr>
<td>Countries</td>
<td><?php echo $tradition['Tradition']['countries']; ?></td>
</tr>
<tr>
<td>Summary</td>
<td><?php echo $tradition['Tradition']['summary']; ?></td>
</tr>
<tr>
<td>Article</td>
<td><?php echo $tradition['Tradition']['article']; ?></td>
</tr>
<tr>
<td>Image</td>
<td><?php echo h($tradition['Tradition']['image']); ?></td>
</tr>
<tr>
<td>Image 1</td>
<td><?php echo h($tradition['Tradition']['image_1']); ?></td>
</tr>
<tr>
<td>Image 2</td>
<td><?php echo h($tradition['Tradition']['image_2']); ?></td>
</tr>
<tr>
<td>Image 3</td>
<td><?php echo h($tradition['Tradition']['image_3']); ?></td>
</tr>
<tr>
<td>Image 4</td>
<td><?php echo h($tradition['Tradition']['image_4']); ?></td>
</tr>
<tr>
<td>Image 5</td>
<td><?php echo h($tradition['Tradition']['image_5']); ?></td>
</tr>
<tr>
<td>Image 6</td>
<td><?php echo h($tradition['Tradition']['image_6']); ?></td>
</tr>
<tr>
<td>Created</td>
<td><?php echo h($tradition['Tradition']['created']); ?></td>
</tr>
<tr>
<td>Modified</td>
<td><?php echo h($tradition['Tradition']['modified']); ?></td>
</tr>
</table>

<br />
<br />

<h3>Actions</h3>

<br />

<?php echo $this->Html->link('Edit Tradition', array('action' => 'edit', $tradition['Tradition']['id']), array('class' => 'btn')); ?>

<br />
<br />

<?php echo $this->Form->postLink('Delete Tradition', array('action' => 'delete', $tradition['Tradition']['id']), array('class' => 'btn btn-danger'), __('Are you sure you want to delete # %s?', $tradition['Tradition']['id'])); ?>

<br />
<br />

