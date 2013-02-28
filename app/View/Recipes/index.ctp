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

<h2>Our Own Recipes</h2>

<br />

<div class="recipescontainer">
	<?php foreach ($recipes as $recipe): ?>

	<div class="recipes">
		<?php //echo $recipe['Recipe']['name']; ?>
		<br />
		<?php echo '<a href="http://' . $recipe['User']['slug'] . '.' . Configure::read('Settings.DOMAIN') . '/recipe/' . $recipe['Recipe']['slug'] . '">'; ?>
		<?php echo $this->Html->image('/img/recipes/image_1/' . $recipe['Recipe']['image_1'] , array('width' => 160, 'height' => 160, 'alt' => $recipe['Recipe']['name'])); ?>
		<br />
		<?php echo $recipe['Recipe']['name']; ?>
		</a>

		<?php //echo $this->Html->image('/img/recipes/image_1/' . $recipe['Recipe']['image_1'] , array('url' => array('controller' => 'recipes', 'action' => 'view', 'short_name' => $recipe['User']['slug'], 'slug' => $recipe['Recipe']['slug']), 'width' => 160, 'height' => 160, 'alt' => $recipe['Recipe']['name'])); ?>
		<br />
		<?php //echo $this->Html->link(h($recipe['Recipe']['name']), $this->Html->url(array('controller' => 'recipes', 'action' => 'view', 'short_name' => $recipe['User']['slug'], 'slug' => $recipe['Recipe']['slug']), true), array('escape' => false)); ?>
		<br />
		<br />
		<?php echo $recipe['User']['name']; ?>
	</div>

	<?php endforeach; ?>
</div>

<br />
<br />

<?php $this->Paginator->options(array('url' => $this->passedArgs)); ?>

<?php echo $this->element('pagination-counter'); ?>

<?php echo $this->element('pagination'); ?>

<br />
