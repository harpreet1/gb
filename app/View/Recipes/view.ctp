<div class="recipes view">
<h2><?php  echo __('Recipe'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($recipe['Recipe']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($recipe['User']['id'], array('controller' => 'users', 'action' => 'view', $recipe['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sub Category'); ?></dt>
		<dd>
			<?php echo $this->Html->link($recipe['SubCategory']['name'], array('controller' => 'sub_categories', 'action' => 'view', $recipe['SubCategory']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Category'); ?></dt>
		<dd>
			<?php echo $this->Html->link($recipe['Category']['name'], array('controller' => 'categories', 'action' => 'view', $recipe['Category']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($recipe['Recipe']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Slug'); ?></dt>
		<dd>
			<?php echo h($recipe['Recipe']['slug']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($recipe['Recipe']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tags'); ?></dt>
		<dd>
			<?php echo h($recipe['Recipe']['tags']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ingredients'); ?></dt>
		<dd>
			<?php echo h($recipe['Recipe']['ingredients']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Preparation'); ?></dt>
		<dd>
			<?php echo h($recipe['Recipe']['preparation']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Comment'); ?></dt>
		<dd>
			<?php echo h($recipe['Recipe']['comment']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Image 1'); ?></dt>
		<dd>
			<?php echo h($recipe['Recipe']['image_1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Image 2'); ?></dt>
		<dd>
			<?php echo h($recipe['Recipe']['image_2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Image 3'); ?></dt>
		<dd>
			<?php echo h($recipe['Recipe']['image_3']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Image Caption 1'); ?></dt>
		<dd>
			<?php echo h($recipe['Recipe']['image_caption_1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Image Caption 2'); ?></dt>
		<dd>
			<?php echo h($recipe['Recipe']['image_caption_2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Image Caption 3'); ?></dt>
		<dd>
			<?php echo h($recipe['Recipe']['image_caption_3']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Active'); ?></dt>
		<dd>
			<?php echo h($recipe['Recipe']['active']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($recipe['Recipe']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($recipe['Recipe']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Recipe'), array('action' => 'edit', $recipe['Recipe']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Recipe'), array('action' => 'delete', $recipe['Recipe']['id']), null, __('Are you sure you want to delete # %s?', $recipe['Recipe']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Recipes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Recipe'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sub Categories'), array('controller' => 'sub_categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sub Category'), array('controller' => 'sub_categories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Categories'), array('controller' => 'categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Category'), array('controller' => 'categories', 'action' => 'add')); ?> </li>
	</ul>
</div>
