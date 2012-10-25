<h2>Tradition</h2>

<br />

<dl>
	<dt><?php echo __('Id'); ?></dt>
	<dd>
		<?php echo h($tradition['Tradition']['id']); ?>
	</dd>
	<dt><?php echo __('Name'); ?></dt>
	<dd>
		<?php echo h($tradition['Tradition']['name']); ?>
	</dd>
	<dt><?php echo __('Slug'); ?></dt>
	<dd>
		<?php echo h($tradition['Tradition']['slug']); ?>
	</dd>
	<dt><?php echo __('Countries'); ?></dt>
	<dd>
		<?php echo h($tradition['Tradition']['countries']); ?>
	</dd>
	<dt><?php echo __('Summary'); ?></dt>
	<dd>
		<?php echo h($tradition['Tradition']['summary']); ?>
	</dd>
	<dt><?php echo __('Article'); ?></dt>
	<dd>
		<?php echo h($tradition['Tradition']['article']); ?>
	</dd>
	<dt><?php echo __('Image'); ?></dt>
	<dd>
		<?php echo h($tradition['Tradition']['image']); ?>
	</dd>
	<dt><?php echo __('Image 1'); ?></dt>
	<dd>
		<?php echo h($tradition['Tradition']['image_1']); ?>
	</dd>
	<dt><?php echo __('Image 2'); ?></dt>
	<dd>
		<?php echo h($tradition['Tradition']['image_2']); ?>
	</dd>
	<dt><?php echo __('Image 3'); ?></dt>
	<dd>
		<?php echo h($tradition['Tradition']['image_3']); ?>
	</dd>
	<dt><?php echo __('Image 4'); ?></dt>
	<dd>
		<?php echo h($tradition['Tradition']['image_4']); ?>
	</dd>
	<dt><?php echo __('Image 5'); ?></dt>
	<dd>
		<?php echo h($tradition['Tradition']['image_5']); ?>
	</dd>
	<dt><?php echo __('Image 6'); ?></dt>
	<dd>
		<?php echo h($tradition['Tradition']['image_6']); ?>
	</dd>
	<dt><?php echo __('Created'); ?></dt>
	<dd>
		<?php echo h($tradition['Tradition']['created']); ?>
	</dd>
	<dt><?php echo __('Modified'); ?></dt>
	<dd>
		<?php echo h($tradition['Tradition']['modified']); ?>
	</dd>
</dl>

<br />
<br />

<h3>Actions</h3>

<br />

<?php echo $this->Html->link('Edit Tradition', array('action' => 'edit', $tradition['Tradition']['id']), array('class' => 'btn')); ?>

<br />
<br />

<?php echo $this->Form->postLink('Delete Tradition', array('action' => 'delete', $tradition['Tradition']['id']), array('class' => 'btn btn-danger'), __('Are you sure you want to delete # %s?', $tradition['Tradition']['id'])); ?>

<br />
<br />

