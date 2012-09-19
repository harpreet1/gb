<h2><?php  echo __('Note');?></h2>

<br />
<br />

<div class="row">
<div class="span6">
<table class="table table-striped table-bordered table-condensed">
	<tbody>
		<tr>
			<td>Id</td>
			<td><?php echo h($note['Note']['id']); ?></td>
		</tr>
		<tr>
			<td>Name</td>
			<td><?php echo h($note['Note']['name']); ?></td>
		</tr>
		<tr>
			<td>Note</td>
			<td><?php echo h($note['Note']['note']); ?></td>
		</tr>
		<tr>
			<td>Active</td>
			<td><?php echo h($note['Note']['active']); ?></td>
		</tr>
		<tr>
			<td>Created</td>
			<td><?php echo h($note['Note']['created']); ?></td>
		</tr>
		<tr>
			<td>Modified</td>
			<td><?php echo h($note['Note']['modified']); ?></td>
		</tr>
	</tbody>
</table>
</div>
</div>

<br />
<br />

<h3>Actions</h3>

<br />
<br />

<?php echo $this->Html->link(__('Edit Note'), array('action' => 'edit', $note['Note']['id'])); ?><br />
<?php echo $this->Form->postLink(__('Delete Note'), array('action' => 'delete', $note['Note']['id']), null, __('Are you sure you want to delete # %s?', $note['Note']['id'])); ?><br />
<?php echo $this->Html->link(__('List Notes'), array('action' => 'index')); ?><br />
<?php echo $this->Html->link(__('New Note'), array('action' => 'add')); ?><br />

<br />
<br />

