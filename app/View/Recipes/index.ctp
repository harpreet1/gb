<style>
.recipescontainer {
	overflow: hidden;
	background: #FFFFFF;
	margin: 0 auto;
	color: #444;
}
.recipes {
	display: inline-block;
	width: 160px;
	padding: 5px;
	margin: 5px;
	vertical-align: top;
}
.recipes img {
	margin-top: 5px;
	margin-bottom: 5px;
	border: 1px #CCC solid;
}
</style>

<div id="tea_shoppe">
    <div id="shop-info"><?php echo $user['User']['name'] . (isset($name) ? ": ".$name : '') ?></div>
</div>

<br />
<br />

<h2>Recipes</h2>

<br />

<div class="recipescontainer">
	<?php foreach ($recipes as $recipe): ?>

	<div class="recipes">
		<?php //echo $recipe['Recipe']['name']; ?>
		<br />
		<?php echo $this->Html->image('/img/recipes/image_1/' . $recipe['Recipe']['slug'] . '-1.jpg', array('url' => array('controller' => 'recipes', 'action' => 'view', 'short_name' => $recipe['User']['slug'], 'slug' => $recipe['Recipe']['slug']), 'width' => 160, 'height' => 160, 'alt' => $recipe['Recipe']['name'])); ?>
		<br />
		<?php echo $this->Html->link(h($recipe['Recipe']['name']), $this->Html->url(array('controller' => 'recipes', 'action' => 'view', 'short_name' => $recipe['User']['slug'], 'slug' => $recipe['Recipe']['slug']), true), array('escape' => false)); ?>
		<br />
		<br />
		<?php echo $recipe['User']['name']; ?>
	</div>

	<?php endforeach; ?>
</div>

<br />
<br />

<?php $this->Paginator->options(array('url' => $this->passedArgs)); ?>

<p>
<?php echo $this->Paginator->counter(array('format' => 'Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%')); ?>
</p>

<br />

<?php echo $this->element('pagination'); ?>

<br />


