<h2>test</h2>

<br />
<br />

<table class="table-striped table-bordered table-condensed">
	<tr>
		<td>Id</td>
		<td><?php echo $test['test']['id']; ?></td>
	</tr>
	<tr>
		<td>Name</td>
		<td><?php echo $test['test']['name']; ?></td>
	</tr>
	<tr>
		<td>test</td>
		<td><?php echo $test['test']['test']; ?></td>
	</tr>
	<tr>
		<td>Active</td>
		<td><?php echo $test['test']['active']; ?></td>
	</tr>
	<tr>
		<td>Created</td>
		<td><?php echo $test['test']['created']; ?></td>
	</tr>
	<tr>
		<td>Modified</td>
		<td><?php echo $test['test']['modified']; ?></td>
	</tr>
</table>

<br />
<br />

<h3>Actions</h3>

<br />

<?php echo $this->Html->link('Edit test', array('action' => 'edit', $test['test']['id']), array('class' => 'btn')); ?>

<br />
<br />

<?php echo $this->Form->postLink('Delete test', array('action' => 'delete', $test['test']['id']), array('class' => 'btn btn-danger'), __('Are you sure you want to delete # %s?', $test['test']['id'])); ?><br />

<br />
<br />

