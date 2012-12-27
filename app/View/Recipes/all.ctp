<h2>Recipes</h2>

<script>
$(document).ready(function() {
	$('#recipescategories').change(function() {
		location.href = 'http://<?php echo Configure::read('Settings.DOMAIN'); ?>/recipes/all/category:' + $(this).val();
	});
	$('#vendors').change(function() {
		location.href = 'http://<?php echo Configure::read('Settings.DOMAIN'); ?>/recipes/all/vendor:' + $(this).val();
	});
});
</script>


<div class="row">
	<div class="span3">
		<?php echo $this->Form->input('recipescategories', array('options' => $recipescategories, 'empty' => array('all' => 'All Recipes'), 'default' => $recipescategory_selected)); ?>
	</div>
	<div class="span3">
		<?php echo $this->Form->input('vendors', array('options' => $vendors, 'empty' => array('all' => 'All Vendors'), 'default' => $vendor_selected)); ?>
	</div>
</div>

<!--

<table cellpadding="5" cellspacing="5">
	<tr>
		<th><?php echo $this->Paginator->sort('name');?></th>
		<th><?php echo $this->Paginator->sort('user_id');?></th>
		<th><?php echo $this->Paginator->sort('recipescategory_name');?></th>
	</tr>
<?php foreach ($recipes as $recipe): ?>
	<tr>
		<td><?php echo $this->Html->link($recipe['Recipe']['name'], array('action' => 'view', 'short_name' => $recipe['User']['slug'], 'slug' => $recipe['Recipe']['slug'])); ?></td>
		<td><?php echo $recipe['User']['name']; ?></td>
		<td><?php echo $recipe['Category']['name']; ?></td>
	</tr>
<?php endforeach; ?>
</table>

-->

<br />
<br />

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

<div class="row">

	<?php
	$i = 0;
	foreach ($recipes as $recipe):
	$i++;
	if (($i % 4) == 0) { echo "\n<div class=\"row\">\n\n";}
	?>
	<div class="span3">
		<?php echo $recipe['Recipescategory']['name']; ?>
		<br />
		<?php echo $this->Html->image('/img/recipes/image_1/' . $recipe['Recipe']['image_1'] , array('url' => array('controller' => 'recipes', 'action' => 'view', 'short_name' => $recipe['User']['slug'], 'slug' => $recipe['Recipe']['slug']), 'width' => 160, 'height' => 160, 'alt' => $recipe['Recipe']['name'])); ?>

<!--		<?php //echo $this->Html->image('/img/recipes/' . $recipe['Recipe']['slug'] . '-1.jpg', array('url' => array('controller' => 'recipes', 'action' => 'view', 'short_name' => $recipe['User']['short_name'], 'slug' => $recipe['Recipe']['slug']), 'width' => 160, 'height' => 160, 'alt' => $recipe['Recipe']['name'])); ?>

-->
		<br />
		<?php echo $this->Html->link(h($recipe['Recipe']['name']), $this->Html->url(array('controller' => 'recipes', 'action' => 'view', 'short_name' => $recipe['User']['slug'], 'slug' => $recipe['Recipe']['slug']), true), array('escape' => false)); ?>
		<br />
		<br />
		<?php echo $recipe['User']['name']; ?>
		<br />
		<br />

	</div>
	<?php
	if (($i % 4) == 0) { echo "\n</div>\n\n";}
	endforeach;
	?>
</div>

<br />
<br />

<?php $this->Paginator->options(array('url' => $this->passedArgs)); ?>

<?php echo $this->element('pagination-counter'); ?>

<?php echo $this->element('pagination'); ?>

<br />

