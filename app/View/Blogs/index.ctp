<h1>Blog</h1>

<br />
<br />

<?php foreach ($blogs as $blog): ?>

<h3><?php echo $this->Html->link( $blog['Blog']['name'], array('action' => 'view', 'year' => substr($blog['Blog']['created'], 0, 4), 'month' => substr($blog['Blog']['created'], 5, 2), 'day' => substr($blog['Blog']['created'], 8, 2),  'slug' => $blog['Blog']['slug'])); ?></h3>
<br />

<?php endforeach; ?>

<?php echo $this->element('paginator'); ?>

