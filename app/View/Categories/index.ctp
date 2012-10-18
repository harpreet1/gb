<h2>Categories</h2>

<br />
<br />

<div class="row">

<?php
$i = 0;
foreach ($categories as $category):
$i++;
?>
	<div class="span2">
		<?php echo $this->Html->image('categories/image/' . $category['Category']['image'], array('class' => 'img-polaroid', 'url' => array('controller' => 'categories', 'action' => 'view', 'slug' => $category['Category']['slug']))); ?><br />
		<?php echo $this->Html->link($category['Category']['name'], array('action' => 'view', 'slug' => $category['Category']['slug'])); ?><br />
		<br />
		<br />
	</div>

<?php if (($i % 6) == 0) : ?>
</div>
<div class="row">
<?php endif; ?>

<?php endforeach; ?>

</div>

<br />
<br />

