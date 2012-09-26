<div class="culinaryusregions view">
<h2><?php  echo __('Culinaryusregion'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($culinaryusregion['Culinaryusregion']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($culinaryusregion['Culinaryusregion']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Slug'); ?></dt>
		<dd>
			<?php echo h($culinaryusregion['Culinaryusregion']['slug']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('States'); ?></dt>
		<dd>
			<?php echo h($culinaryusregion['Culinaryusregion']['states']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Summary'); ?></dt>
		<dd>
			<?php echo h($culinaryusregion['Culinaryusregion']['summary']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Article'); ?></dt>
		<dd>
			<?php echo h($culinaryusregion['Culinaryusregion']['article']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Main Image'); ?></dt>
		<dd>
			<?php echo h($culinaryusregion['Culinaryusregion']['main_image']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Image 1'); ?></dt>
		<dd>
			<?php echo h($culinaryusregion['Culinaryusregion']['image_1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Image 2'); ?></dt>
		<dd>
			<?php echo h($culinaryusregion['Culinaryusregion']['image_2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Image 3'); ?></dt>
		<dd>
			<?php echo h($culinaryusregion['Culinaryusregion']['image_3']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Image 4'); ?></dt>
		<dd>
			<?php echo h($culinaryusregion['Culinaryusregion']['image_4']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Image 5'); ?></dt>
		<dd>
			<?php echo h($culinaryusregion['Culinaryusregion']['image_5']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Image 6'); ?></dt>
		<dd>
			<?php echo h($culinaryusregion['Culinaryusregion']['image_6']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($culinaryusregion['Culinaryusregion']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($culinaryusregion['Culinaryusregion']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Culinaryusregion'), array('action' => 'edit', $culinaryusregion['Culinaryusregion']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Culinaryusregion'), array('action' => 'delete', $culinaryusregion['Culinaryusregion']['id']), null, __('Are you sure you want to delete # %s?', $culinaryusregion['Culinaryusregion']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Culinaryusregions'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Culinaryusregion'), array('action' => 'add')); ?> </li>
	</ul>
</div>
