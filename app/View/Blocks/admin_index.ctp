<?php echo $this->Html->css(array('bootstrap-editable.css'), 'stylesheet', array('inline' => false)); ?>

<?php echo $this->Html->script(array('bootstrap-editable.js'), array('inline' => false)); ?>


<h2>Blocks</h2>
<table class="table table-striped table-bordered table-condensed table-hover">


	<tr>
		<th><?php echo $this->Paginator->sort('id'); ?></th>
      
		<th><?php echo $this->Paginator->sort('name'); ?></th>
        <th><?php echo $this->Paginator->sort('slug'); ?></th>
        <th><?php echo $this->Paginator->sort('subtitle'); ?></th>
        <th><?php echo $this->Paginator->sort('description'); ?></th>
        <th><?php echo $this->Paginator->sort('writeup'); ?></th>
		
		<th><?php echo $this->Paginator->sort('modified'); ?></th>
        <th><?php echo $this->Paginator->sort('active'); ?></th>
		<th class="actions">Actions</th>
	</tr>
	<?php foreach ($blocks as $block): ?>
	<tr>
		<td><?php echo h($block['Block']['id']); ?></td>
        

		<td><?php echo h($block['Block']['name']); ?></td>
        <td><?php echo h($block['Block']['slug']); ?></td>
        <td><?php echo h($block['Block']['subtitle']); ?></td>
        <td><?php echo h($block['Block']['description']); ?></td>
        <td><?php echo h($block['Block']['writeup']); ?></td>
		
		<td><?php echo h($block['Block']['modified']); ?></td>
        <td><a href="/admin/tests/switch/active/<?php echo $block['Block']['id']; ?>" class="status"><img src="/img/icon_<?php echo $block['Block']['active']; ?>.png" alt="" /></a></td>
		<td class="actions">
		<?php //echo $this->Html->link('View', array('action' => 'view', $test['test']['id']), array('class' => 'btn btn-mini')); ?>&nbsp;
		<?php echo $this->Html->link('Edit', array('action' => 'edit', $block['Block']['id']), array('class' => 'btn btn-mini')); ?>&nbsp;
		<?php echo $this->Form->postLink('Delete', array('action' => 'delete', $block['Block']['id']), array('class' => 'btn btn-mini') , __('Are you sure you want to delete # %s?', $block['Block']['id'])); ?>
		</td>
	</tr>
	<?php endforeach; ?>
</table>

<br />
<br />

<?php echo $this->element('pagination-counter'); ?>

<?php echo $this->element('pagination'); ?>


