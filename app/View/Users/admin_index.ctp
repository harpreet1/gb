<?php echo $this->Html->css(array('bootstrap-editable.css'), 'stylesheet', array('inline' => false)); ?>

<?php echo $this->Html->script(array('switch.js', 'bootstrap-editable.js'), array('inline' => false)); ?>

<script>
$(document).ready(function() {

	$('.level').editable({
		type:  'select',
		source: {"admin": "admin", "vendor": "vendor", "inactive": "inactive"},
		name:  'level',
		url:   '/admin/users/editable',
		title: 'Level',
		placement: 'right',
	});

	$('.business_established').editable({
		type:  'text',
		name: 'business_established',
		url:   '/admin/users/editable',
		title: 'Business Established',
		placement: 'right',
		validate: function(value) {
			if($.trim(value) < 1900 || $.trim(value) > 2013) {
				return 'Invalid Data';
			}
		}
	});

});
</script>

<h2>Users</h2>

<table class="table table-striped table-bordered table-condensed table-hover">
	<tr>
		<th><?php echo $this->Paginator->sort('id'); ?></th>
		<th><?php echo $this->Paginator->sort('level'); ?></th>
		<th><?php echo $this->Paginator->sort('username'); ?></th>
		<th><?php echo $this->Paginator->sort('name'); ?></th>
		<th><?php echo $this->Paginator->sort('slug'); ?></th>
		<th><?php echo $this->Paginator->sort('business_name'); ?></th>
		<th><?php echo $this->Paginator->sort('business_established'); ?></th>
		<th><?php echo $this->Paginator->sort('image'); ?></th>
		<th><?php echo $this->Paginator->sort('address'); ?></th>
		<th><?php echo $this->Paginator->sort('address2'); ?></th>
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
		<td><?php echo h($user['User']['name']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['slug']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['business_name']); ?>&nbsp;</td>
		<td><span class="business_established" data-value="<?php echo $user['User']['business_established']; ?>" data-pk="<?php echo $user['User']['id']; ?>"><?php echo h($user['User']['business_established']); ?></span></td>
		<td><?php echo $this->Html->image('user_image/' . $user['User']['image']); ?></td>
		<td><?php echo h($user['User']['address']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['address2']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['city']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['state']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['zip']); ?>&nbsp;</td>
		<td><a href="/admin/users/switch/active/<?php echo $user['User']['id']; ?>" class="status"><img src="/img/icon_<?php echo $user['User']['active']; ?>.png" alt="" /></a></td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $user['User']['id']), array('class' => 'btn btn-mini')); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $user['User']['id']), array('class' => 'btn btn-mini')); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $user['User']['id']), array('class' => 'btn btn-mini'), __('Are you sure you want to delete # %s?', $user['User']['id'])); ?>
		</td>
	</tr>
	<?php endforeach; ?>
</table>

<?php echo $this->element('pagination-counter'); ?>

<?php echo $this->element('pagination'); ?>

<br />
<br />

