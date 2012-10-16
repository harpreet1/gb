<h2>Recipes</h2>

<table class="table table-striped table-bordered table-condensed table-hover">
	<tr>
		<th><?php echo $this->Paginator->sort('id'); ?></th>
		<th><?php echo $this->Paginator->sort('user_id'); ?></th>
		<th><?php echo $this->Paginator->sort('category_id'); ?></th>
		<th><?php echo $this->Paginator->sort('subcategory_id'); ?></th>
		<th><?php echo $this->Paginator->sort('name'); ?></th>
		<th><?php echo $this->Paginator->sort('slug'); ?></th>
		<th><?php echo $this->Paginator->sort('description'); ?></th>
		<th><?php echo $this->Paginator->sort('tags'); ?></th>
		<th><?php echo $this->Paginator->sort('ingredients'); ?></th>
		<th><?php echo $this->Paginator->sort('preparation'); ?></th>
		<th><?php echo $this->Paginator->sort('comment'); ?></th>
		<th><?php echo $this->Paginator->sort('image_1'); ?></th>
		<th><?php echo $this->Paginator->sort('image_2'); ?></th>
		<th><?php echo $this->Paginator->sort('image_3'); ?></th>
		<th><?php echo $this->Paginator->sort('image_caption_1'); ?></th>
		<th><?php echo $this->Paginator->sort('image_caption_2'); ?></th>
		<th><?php echo $this->Paginator->sort('image_caption_3'); ?></th>
		<th><?php echo $this->Paginator->sort('active'); ?></th>
		<th><?php echo $this->Paginator->sort('created'); ?></th>
		<th><?php echo $this->Paginator->sort('modified'); ?></th>
		<th class="actions">Actions</th>
	</tr>
	<?php foreach ($recipes as $recipe): ?>
	<tr>
		<td><?php echo h($recipe['Recipe']['id']); ?></td>
		<td><?php echo $this->Html->link($recipe['User']['name'], array('controller' => 'users', 'action' => 'view', $recipe['User']['id'])); ?></td>
		<td><?php echo $this->Html->link($recipe['Category']['name'], array('controller' => 'categories', 'action' => 'view', $recipe['Category']['id'])); ?></td>
		<td><?php echo $this->Html->link($recipe['Subcategory']['name'], array('controller' => 'subcategories', 'action' => 'view', $recipe['Subcategory']['id'])); ?></td>
		<td><?php echo h($recipe['Recipe']['name']); ?></td>
		<td><?php echo h($recipe['Recipe']['slug']); ?></td>
		<td><div><?php echo h($recipe['Recipe']['description']); ?></div></td>
		<td><?php echo h($recipe['Recipe']['tags']); ?></td>
		<td><div><?php echo h($recipe['Recipe']['ingredients']); ?></div></td>
		<td><div><?php echo h($recipe['Recipe']['preparation']); ?></div></td>
		<td><div><?php echo h($recipe['Recipe']['comment']); ?></div></td>
		<td><?php echo h($recipe['Recipe']['image_1']); ?></td>
		<td><?php echo h($recipe['Recipe']['image_2']); ?></td>
		<td><?php echo h($recipe['Recipe']['image_3']); ?></td>
		<td><?php echo h($recipe['Recipe']['image_caption_1']); ?></td>
		<td><?php echo h($recipe['Recipe']['image_caption_2']); ?></td>
		<td><?php echo h($recipe['Recipe']['image_caption_3']); ?></td>
		<td><a href="/admin/recipes/switch/active/<?php echo $recipe['Recipe']['id']; ?>" class="status"><img src="/img/icon_<?php echo $recipe['Recipe']['active']; ?>.png" alt="" /></a></td>
		<td><?php echo h($recipe['Recipe']['created']); ?></td>
		<td><?php echo h($recipe['Recipe']['modified']); ?></td>
		<td class="actions">
			<?php echo $this->Html->link('View', array('action' => 'view', $recipe['Recipe']['id']), array('class' => 'btn btn-mini')); ?>
			<?php echo $this->Html->link('Edit', array('action' => 'edit', $recipe['Recipe']['id']), array('class' => 'btn btn-mini')); ?>
		</td>
	</tr>
	<?php endforeach; ?>
</table>

<?php echo $this->element('pagination-counter'); ?>

<?php echo $this->element('pagination'); ?>

