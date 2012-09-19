<h2>Notes</h2>

<table class="table table-striped table-bordered table-condensed table-hover">
<tr>
<th><?php echo $this->Paginator->sort('id');?></th>
<th><?php echo $this->Paginator->sort('name');?></th>
<th><?php echo $this->Paginator->sort('note');?></th>
<th><?php echo $this->Paginator->sort('active');?></th>
<th><?php echo $this->Paginator->sort('created');?></th>
<th><?php echo $this->Paginator->sort('modified');?></th>
<th class="actions"><?php echo __('Actions');?></th>
</tr>
<?php
foreach ($notes as $note): ?>
<tr>
<td><?php echo h($note['Note']['id']); ?></td>
<td><?php echo h($note['Note']['name']); ?></td>
<td><?php echo h($note['Note']['note']); ?></td>
<td><?php echo h($note['Note']['active']); ?></td>
<td><?php echo h($note['Note']['created']); ?></td>
<td><?php echo h($note['Note']['modified']); ?></td>
<td class="actions">
<?php echo $this->Html->link('View', array('action' => 'view', $note['Note']['id'])); ?>&nbsp;
<?php echo $this->Html->link('Edit', array('action' => 'edit', $note['Note']['id'])); ?>&nbsp;
<?php //echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $note['Note']['id']), null, __('Are you sure you want to delete # %s?', $note['Note']['id'])); ?>
</td>
</tr>
<?php endforeach; ?>
</table>

<br />
<br />

<p><?php echo $this->Paginator->counter(array('format' => 'Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')); ?></p>

<br />
<br />

 <?php echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled')); ?>
 <?php echo $this->Paginator->numbers(array('separator' => '')); ?>
 <?php echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled')); ?>

<br />
<br />

<h3>Actions</h3>

<?php echo $this->Html->link(__('New Note'), array('action' => 'add')); ?><br />

<br />
<br />

