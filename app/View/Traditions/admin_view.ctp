<div class="traditions view">
<h2><?php  echo __('Tradition'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($tradition['Tradition']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($tradition['Tradition']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Slug'); ?></dt>
		<dd>
			<?php echo h($tradition['Tradition']['slug']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Countries'); ?></dt>
		<dd>
			<?php echo h($tradition['Tradition']['countries']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Summary'); ?></dt>
		<dd>
			<?php echo h($tradition['Tradition']['summary']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Article'); ?></dt>
		<dd>
			<?php echo h($tradition['Tradition']['article']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Image'); ?></dt>
		<dd>
			<?php echo h($tradition['Tradition']['image']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Image 1'); ?></dt>
		<dd>
			<?php echo h($tradition['Tradition']['image_1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Image 2'); ?></dt>
		<dd>
			<?php echo h($tradition['Tradition']['image_2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Image 3'); ?></dt>
		<dd>
			<?php echo h($tradition['Tradition']['image_3']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Image 4'); ?></dt>
		<dd>
			<?php echo h($tradition['Tradition']['image_4']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Image 5'); ?></dt>
		<dd>
			<?php echo h($tradition['Tradition']['image_5']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Image 6'); ?></dt>
		<dd>
			<?php echo h($tradition['Tradition']['image_6']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($tradition['Tradition']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($tradition['Tradition']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Tradition'), array('action' => 'edit', $tradition['Tradition']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Tradition'), array('action' => 'delete', $tradition['Tradition']['id']), null, __('Are you sure you want to delete # %s?', $tradition['Tradition']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Traditions'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tradition'), array('action' => 'add')); ?> </li>
	</ul>
</div>
