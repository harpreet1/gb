<?php echo $this->Html->css(array('bootstrap-editable.css'), 'stylesheet', array('inline' => false)); ?>

<?php echo $this->Html->script(array('switch.js', 'bootstrap-editable.js'), array('inline' => false)); ?>

<script>
$(document).ready(function() {

	$('.level').editable({
		type:  'select',
		source: "{'admin': 'admin', 'vendor': 'vendor', 'inactive': 'inactive'}",
		name:  'level',
		url:   '/admin/users/editable',
		title: 'Level',
		placement: 'right',
	});

});
</script>

<h2>Users</h2>

<table class="table table-striped table-bordered table-condensed table-hover">
	<tr>
		<th><?php echo $this->Paginator->sort('id'); ?></th>
		<th><?php echo $this->Paginator->sort('level'); ?></th>
		<th><?php echo $this->Paginator->sort('username'); ?></th>
		<th><?php echo $this->Paginator->sort('shop_name'); ?></th>
		<th><?php echo $this->Paginator->sort('slug'); ?></th>
		<th><?php echo $this->Paginator->sort('business_name'); ?></th>
		<th><?php echo $this->Paginator->sort('business_established'); ?></th>
		<th><?php echo $this->Paginator->sort('image'); ?></th>
		<th><?php echo $this->Paginator->sort('street_address'); ?></th>
		<th><?php echo $this->Paginator->sort('street_address2'); ?></th>
		<th><?php echo $this->Paginator->sort('city'); ?></th>
		<th><?php echo $this->Paginator->sort('state'); ?></th>
		<th><?php echo $this->Paginator->sort('zip'); ?></th>
		<th><?php echo $this->Paginator->sort('active'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($users as $user): ?>
	<tr>
		<td><?php echo $user['User']['id']; ?></td>
		<td><span class="level" data-value="<?php echo $user['User']['level']; ?>" data-pk="<?php echo $user['User']['id']; ?>"><?php echo $user['User']['level']; ?></span></td>
		<td><?php echo h($user['User']['username']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['shop_name']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['slug']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['business_name']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['business_established']); ?>&nbsp;</td>
		<td><?php echo $this->Html->image('user_image/' . $user['User']['image']); ?></td>
		<td><?php echo h($user['User']['street_address']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['street_address2']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['city']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['state']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['zip']); ?>&nbsp;</td>
		<td><a href="/admin/users/switch/active/<?php echo $user['User']['id']; ?>" class="status"><img src="/img/icon_<?php echo $user['User']['active']; ?>.png" alt="" /></a></td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $user['User']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $user['User']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $user['User']['id']), null, __('Are you sure you want to delete # %s?', $user['User']['id'])); ?>
		</td>
	</tr>
	<?php endforeach; ?>
</table>

<?php echo $this->element('pagination-counter'); ?>

<?php echo $this->element('pagination'); ?>

<br />
<br />

<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New User'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Products'), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product'), array('controller' => 'products', 'action' => 'add')); ?> </li>
	</ul>
</div>
