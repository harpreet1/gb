<div class="culinaryregions index">
	<h2><?php echo __('Culinaryregions'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('slug'); ?></th>
			<th><?php echo $this->Paginator->sort('countries'); ?></th>
			<th><?php echo $this->Paginator->sort('summary'); ?></th>
			<th><?php echo $this->Paginator->sort('article'); ?></th>
			<th><?php echo $this->Paginator->sort('image'); ?></th>
			<th><?php echo $this->Paginator->sort('image_1'); ?></th>
			<th><?php echo $this->Paginator->sort('image_2'); ?></th>
			<th><?php echo $this->Paginator->sort('image_3'); ?></th>
			<th><?php echo $this->Paginator->sort('image_4'); ?></th>
			<th><?php echo $this->Paginator->sort('image_5'); ?></th>
			<th><?php echo $this->Paginator->sort('image_6'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($culinaryregions as $culinaryregion): ?>
	<tr>
		<td><?php echo h($culinaryregion['Culinaryregion']['id']); ?>&nbsp;</td>
		<td><?php echo h($culinaryregion['Culinaryregion']['name']); ?>&nbsp;</td>
		<td><?php echo h($culinaryregion['Culinaryregion']['slug']); ?>&nbsp;</td>
		<td><?php echo h($culinaryregion['Culinaryregion']['countries']); ?>&nbsp;</td>
		<td><?php echo h($culinaryregion['Culinaryregion']['summary']); ?>&nbsp;</td>
		<td><?php echo h($culinaryregion['Culinaryregion']['article']); ?>&nbsp;</td>
		<td><?php echo h($culinaryregion['Culinaryregion']['image']); ?>&nbsp;</td>
		<td><?php echo h($culinaryregion['Culinaryregion']['image_1']); ?>&nbsp;</td>
		<td><?php echo h($culinaryregion['Culinaryregion']['image_2']); ?>&nbsp;</td>
		<td><?php echo h($culinaryregion['Culinaryregion']['image_3']); ?>&nbsp;</td>
		<td><?php echo h($culinaryregion['Culinaryregion']['image_4']); ?>&nbsp;</td>
		<td><?php echo h($culinaryregion['Culinaryregion']['image_5']); ?>&nbsp;</td>
		<td><?php echo h($culinaryregion['Culinaryregion']['image_6']); ?>&nbsp;</td>
		<td><?php echo h($culinaryregion['Culinaryregion']['created']); ?>&nbsp;</td>
		<td><?php echo h($culinaryregion['Culinaryregion']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $culinaryregion['Culinaryregion']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $culinaryregion['Culinaryregion']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $culinaryregion['Culinaryregion']['id']), null, __('Are you sure you want to delete # %s?', $culinaryregion['Culinaryregion']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>

	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Culinaryregion'), array('action' => 'add')); ?></li>
	</ul>
</div>
