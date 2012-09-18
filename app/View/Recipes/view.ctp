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
		<ul>
			<li>
			<?php echo $recipe['Recipe']['ingredients']; ?>
			</li>
		</ul>
		<h4>Directions</h4>
		<p><?php echo $recipe['Recipe']['preparation']; ?></p>
		<br />
		<br />
		<h4>Additional Images</h4>
		<br />
	</div>

	<div class="span3">
		<img class="recipe-pic border" src="/img/recipes/<? echo $recipe['Recipe']['image_1']?>"  />
		<br />
		<br />
		<img class="recipe-pic border" src="/img/recipes/<? echo $recipe['Recipe']['image_2'] ?>" />
		<!--<?php //echo $this->Html->image('/img/recipes/thumb-' . $recipe['Recipe']['slug'] . '-2.jpg'); ?>-->
		<br />
		<br />
		<?php echo $this->Html->image('/img/recipes/thumb-' . $recipe['Recipe']['slug'] . '-3.jpg'); ?>
	</div>

</div>

