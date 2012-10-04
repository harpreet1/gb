<h2><?php echo __('Recipes'); ?></h2>

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
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($recipes as $recipe): ?>
	<tr>
		<td><?php echo h($recipe['Recipe']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($recipe['User']['id'], array('controller' => 'users', 'action' => 'view', $recipe['User']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($recipe['Category']['name'], array('controller' => 'categories', 'action' => 'view', $recipe['Category']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($recipe['Subcategory']['name'], array('controller' => 'subcategories', 'action' => 'view', $recipe['Subcategory']['id'])); ?>
		</td>
		<td><?php echo h($recipe['Recipe']['name']); ?>&nbsp;</td>
		<td><?php echo h($recipe['Recipe']['slug']); ?>&nbsp;</td>
		<td><?php echo h($recipe['Recipe']['description']); ?>&nbsp;</td>
		<td><?php echo h($recipe['Recipe']['tags']); ?>&nbsp;</td>
		<td><?php echo h($recipe['Recipe']['ingredients']); ?>&nbsp;</td>
		<td><?php echo h($recipe['Recipe']['preparation']); ?>&nbsp;</td>
		<td><?php echo h($recipe['Recipe']['comment']); ?>&nbsp;</td>
		<td><?php echo h($recipe['Recipe']['image_1']); ?>&nbsp;</td>
		<td><?php echo h($recipe['Recipe']['image_2']); ?>&nbsp;</td>
		<td><?php echo h($recipe['Recipe']['image_3']); ?>&nbsp;</td>
		<td><?php echo h($recipe['Recipe']['image_caption_1']); ?>&nbsp;</td>
		<td><?php echo h($recipe['Recipe']['image_caption_2']); ?>&nbsp;</td>
		<td><?php echo h($recipe['Recipe']['image_caption_3']); ?>&nbsp;</td>
		<td><?php echo h($recipe['Recipe']['active']); ?>&nbsp;</td>
		<td><?php echo h($recipe['Recipe']['created']); ?>&nbsp;</td>
		<td><?php echo h($recipe['Recipe']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $recipe['Recipe']['id']), array('class' => 'btn btn-mini')); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $recipe['Recipe']['id']), array('class' => 'btn btn-mini')); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $recipe['Recipe']['id']), array('class' => 'btn btn-mini') , __('Are you sure you want to delete # %s?', $recipe['Recipe']['id'])); ?>
		</td>
	</tr>
	<?php endforeach; ?>
</table>

<?php echo $this->element('pagination-counter'); ?>

<?php echo $this->element('pagination'); ?>

