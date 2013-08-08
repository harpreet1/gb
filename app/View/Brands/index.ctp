<h2>brands index</h2>

<?php foreach($brands as $brand): ?>
<?php echo $this->Html->link($brand['Brand']['name'], array('action' => 'view', $brand['Brand']['slug'])); ?><br />

<?php endforeach; ?>