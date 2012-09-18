<div class="blogs view">
<h2><?php  echo __('Blog'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($blog['Blog']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($blog['Blog']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Slug'); ?></dt>
		<dd>
			<?php echo h($blog['Blog']['slug']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Body'); ?></dt>
		<dd>
			<?php echo h($blog['Blog']['body']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Active'); ?></dt>
		<dd>
			<?php echo h($blog['Blog']['active']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($blog['Blog']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($blog['Blog']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Blog'), array('action' => 'edit', $blog['Blog']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Blog'), array('action' => 'delete', $blog['Blog']['id']), null, __('Are you sure you want to delete # %s?', $blog['Blog']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Blogs'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Blog'), array('action' => 'add')); ?> </li>
	</ul>
</div>
