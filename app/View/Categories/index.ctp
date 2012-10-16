<h2>Categories</h2>

<?php foreach ($categories as $category): ?>
<?php echo h($category['Category']['name']); ?><br />
<?php echo h($category['Category']['slug']); ?><br />
<?php echo $this->Html->image('categories/' . $category['Category']['image'], array('class' => 'img-polaroid', 'url' => array('controller' => 'categories', 'action' => 'view', 'slug' => $category['Category']['slug']))); ?><br />
<?php echo $this->Html->link('View', array('action' => 'view', 'slug' => $category['Category']['slug'])); ?><br />
<hr>
<?php endforeach; ?>

