<?php echo $this->Html->script(array('switch.js'), array('inline' => false)); ?>

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
<?php foreach ($notes as $note): ?>
<tr>
<td><?php echo h($note['Note']['id']); ?></td>
<td><?php echo h($note['Note']['name']); ?></td>
<td><?php echo h($note['Note']['note']); ?></td>
<td><a href="/admin/notes/switch/active/<?php echo $note['Note']['id']; ?>" class="status"><img src="/img/icon_<?php echo $note['Note']['active']; ?>.png" alt="" /></a></td>
<td><?php echo h($note['Note']['created']); ?></td>
<td><?php echo h($note['Note']['modified']); ?></td>
<td class="actions">
<?php echo $this->Html->link('View', array('action' => 'view', $note['Note']['id']), array('class' => 'btn btn-mini')); ?>&nbsp;
<?php echo $this->Html->link('Edit', array('action' => 'edit', $note['Note']['id']), array('class' => 'btn btn-mini')); ?>&nbsp;
<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $note['Note']['id']), array('class' => 'btn btn-mini') , __('Are you sure you want to delete # %s?', $note['Note']['id'])); ?>
</td>
</tr>
<?php endforeach; ?>
</table>

<br />
<br />

<?php echo $this->element('pagination-counter'); ?>

<?php echo $this->element('pagination'); ?>

