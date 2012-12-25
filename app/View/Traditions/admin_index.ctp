<h2>Traditions</h2>

<table class="table table-striped table-bordered table-condensed table-hover">
	<tr>
		<th><?php echo $this->Paginator->sort('id'); ?></th>
		<th><?php echo $this->Paginator->sort('name'); ?></th>
		<th><?php echo $this->Paginator->sort('slug'); ?></th>
		<th><?php echo $this->Paginator->sort('countries'); ?></th>
		<th><?php echo $this->Paginator->sort('summary'); ?></th>
		<th><?php echo $this->Paginator->sort('article'); ?></th>
		<th><?php echo $this->Paginator->sort('image'); ?></th>
		<th><?php echo $this->Paginator->sort('image_1'); ?></th>
		<th><?php echo $this->Paginator->sort('image_2'); ?></th>
		<th><?php echo $this->Paginator->sort('image_3'); ?></th>
		<th><?php echo $this->Paginator->sort('image_4'); ?></th>
		<th><?php echo $this->Paginator->sort('image_5'); ?></th>
		<th><?php echo $this->Paginator->sort('image_6'); ?></th>
		<th><?php echo $this->Paginator->sort('created'); ?></th>
		<th><?php echo $this->Paginator->sort('modified'); ?></th>
		<th class="actions">Actions</th>
	</tr>
	<?php foreach ($traditions as $tradition): ?>
	<tr>
		<td><?php echo h($tradition['Tradition']['id']); ?></td>
		<td><?php echo h($tradition['Tradition']['name']); ?></td>
		<td><?php echo h($tradition['Tradition']['slug']); ?></td>
		<td><?php echo h($tradition['Tradition']['countries']); ?></td>
		<td><div class="limit"><?php echo ($tradition['Tradition']['summary']); ?></div></td>
		<td><?php //echo h($tradition['Tradition']['article']); ?></td>
		<td><?php echo h($tradition['Tradition']['image']); ?></td>
		<td><?php echo h($tradition['Tradition']['image_1']); ?></td>
		<td><?php echo h($tradition['Tradition']['image_2']); ?></td>
		<td><?php echo h($tradition['Tradition']['image_3']); ?></td>
		<td><?php echo h($tradition['Tradition']['image_4']); ?></td>
		<td><?php echo h($tradition['Tradition']['image_5']); ?></td>
		<td><?php echo h($tradition['Tradition']['image_6']); ?></td>
		<td><?php echo h($tradition['Tradition']['created']); ?></td>
		<td><?php echo h($tradition['Tradition']['modified']); ?></td>
		<td class="actions">
			<?php echo $this->Html->link('View', array('action' => 'view', $tradition['Tradition']['id']), array('class' => 'btn btn-mini')); ?>
			<?php echo $this->Html->link('Edit', array('action' => 'edit', $tradition['Tradition']['id']), array('class' => 'btn btn-mini')); ?>
		</td>
	</tr>
	<?php endforeach; ?>
</table>

<br />
<br />

<?php echo $this->element('pagination-counter'); ?>

<?php echo $this->element('pagination'); ?>

<br />
<br />

<h3>Actions</h3>

<?php echo $this->Html->link('New Tradition', array('action' => 'add'), array('class' => 'btn')); ?>

<br />
<br />
