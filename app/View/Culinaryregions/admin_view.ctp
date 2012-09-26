<div class="culinaryregions view">
<h2><?php  echo __('Culinaryregion'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($culinaryregion['Culinaryregion']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($culinaryregion['Culinaryregion']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Slug'); ?></dt>
		<dd>
			<?php echo h($culinaryregion['Culinaryregion']['slug']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Countries'); ?></dt>
		<dd>
			<?php echo h($culinaryregion['Culinaryregion']['countries']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Summary'); ?></dt>
		<dd>
			<?php echo h($culinaryregion['Culinaryregion']['summary']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Article'); ?></dt>
		<dd>
			<?php echo h($culinaryregion['Culinaryregion']['article']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Image'); ?></dt>
		<dd>
			<?php echo h($culinaryregion['Culinaryregion']['image']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Image 1'); ?></dt>
		<dd>
			<?php echo h($culinaryregion['Culinaryregion']['image_1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Image 2'); ?></dt>
		<dd>
			<?php echo h($culinaryregion['Culinaryregion']['image_2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Image 3'); ?></dt>
		<dd>
			<?php echo h($culinaryregion['Culinaryregion']['image_3']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Image 4'); ?></dt>
		<dd>
			<?php echo h($culinaryregion['Culinaryregion']['image_4']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Image 5'); ?></dt>
		<dd>
			<?php echo h($culinaryregion['Culinaryregion']['image_5']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Image 6'); ?></dt>
		<dd>
			<?php echo h($culinaryregion['Culinaryregion']['image_6']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($culinaryregion['Culinaryregion']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($culinaryregion['Culinaryregion']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Culinaryregion'), array('action' => 'edit', $culinaryregion['Culinaryregion']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Culinaryregion'), array('action' => 'delete', $culinaryregion['Culinaryregion']['id']), null, __('Are you sure you want to delete # %s?', $culinaryregion['Culinaryregion']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Culinaryregions'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Culinaryregion'), array('action' => 'add')); ?> </li>
	</ul>
</div>
