<div class="ustraditions index">
	<h2><?php echo __('Ustraditions'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('slug'); ?></th>
			<th><?php echo $this->Paginator->sort('states'); ?></th>
			<th><?php echo $this->Paginator->sort('summary'); ?></th>
			<th><?php echo $this->Paginator->sort('article'); ?></th>
			<th><?php echo $this->Paginator->sort('main_image'); ?></th>
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
	<?php foreach ($ustraditions as $ustradition): ?>
	<tr>
		<td><?php echo h($ustradition['Ustradition']['id']); ?>&nbsp;</td>
		<td><?php echo h($ustradition['Ustradition']['name']); ?>&nbsp;</td>
		<td><?php echo h($ustradition['Ustradition']['slug']); ?>&nbsp;</td>
		<td><?php echo h($ustradition['Ustradition']['states']); ?>&nbsp;</td>
		<td><?php echo h($ustradition['Ustradition']['summary']); ?>&nbsp;</td>
		<td><?php echo h($ustradition['Ustradition']['article']); ?>&nbsp;</td>
		<td><?php echo h($ustradition['Ustradition']['main_image']); ?>&nbsp;</td>
		<td><?php echo h($ustradition['Ustradition']['image_1']); ?>&nbsp;</td>
		<td><?php echo h($ustradition['Ustradition']['image_2']); ?>&nbsp;</td>
		<td><?php echo h($ustradition['Ustradition']['image_3']); ?>&nbsp;</td>
		<td><?php echo h($ustradition['Ustradition']['image_4']); ?>&nbsp;</td>
		<td><?php echo h($ustradition['Ustradition']['image_5']); ?>&nbsp;</td>
		<td><?php echo h($ustradition['Ustradition']['image_6']); ?>&nbsp;</td>
		<td><?php echo h($ustradition['Ustradition']['created']); ?>&nbsp;</td>
		<td><?php echo h($ustradition['Ustradition']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $ustradition['Ustradition']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $ustradition['Ustradition']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $ustradition['Ustradition']['id']), null, __('Are you sure you want to delete # %s?', $ustradition['Ustradition']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Ustradition'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Products'), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product'), array('controller' => 'products', 'action' => 'add')); ?> </li>
	</ul>
</div>
