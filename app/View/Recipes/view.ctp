<h3>GB Recipes List</h3>

<div class="row">

	<div class="span3">
		NAV
	</div>

	<div class="span6">
		<h2><?php echo $recipe['Recipe']['name']; ?></h2>
		<!-- <? //echo $recipe['Recipe']['slug']?>-1.jpg"  /> -->
		<p> <?php echo $recipe['Recipe']['description']; ?> </p>
		<h4>Ingredients</h4>
		
			<?php echo $recipe['Recipe']['ingredients']; ?>
		<br />
		<h4>Directions</h4>
		<p><?php echo $recipe['Recipe']['preparation']; ?></p>
		<br />
		<br />
		
		<br />
	</div>

	<div class="span3">
		<img class="recipe-pic border" src="/img/recipes/image_1/<? echo $recipe['Recipe']['image_1']?>"  />
		<br />
		<br />
		<?php if(!empty($recipe['Recipe']['image_2'])) : ?>
			<img class="recipe-pic border" src="/img/recipes/image_2/<? echo $recipe['Recipe']['image_2'] ?>" />
		<?php endif ; ?>
		<!--<?php //echo $this->Html->image('/img/recipes/thumb-' . $recipe['Recipe']['slug'] . '-2.jpg'); ?>-->
		<br />
		<?php if(!empty($recipe['Recipe']['image_3'])) : ?>
			<img class="recipe-pic border" src="/img/recipes/image_3/<? echo $recipe['Recipe']['image_3']?>"  />
		<?php endif ; ?>
		<br />
		
	</div>

</div>

