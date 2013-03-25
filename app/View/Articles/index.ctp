<div class="row">
	<div class="span3">
   
   <br />
    <h4>Our Blocks</h4>
    <?php //echo "<pre>"; print_r($blocks); exit;?>
  <br />   
		
		<?php
			echo "<br>";
			foreach($blocks as $blockskey)
			{
				echo '<div class="recipe-button btn-gb">';
				//echo '<a class="" href="http://' . $blockskey['Block']['slug'] . '.' . Configure::read('Settings.DOMAIN') . '/recipe/' . $blockskey['Recipe']['slug'] . '">';
				echo $blockskey['Block']['name'];
                                //echo "</a>";
                                echo "<br>---------<br>";
                                foreach($blockskey['Article'] as $articlekey)
                                {
                                    //http://www.gourmetdev.com/article/2012/12/28/product-review-dr-oetker-mousse
                                    echo $this->Html->link( $articlekey['name'], array('action' => 'index', 'slug' => $articlekey['slug']));
                                    echo "<br>";
                                }
                                echo "<br>---------<br>";
				//echo '</a>';
				echo "</div>";
			}
		?>
	</div>

	<div class="span6">
		<h3 class="recipe-name"><?php echo $article['Article']['name']; ?></h3>
		<!-- <? //echo $recipe['Recipe']['slug']?>-1.jpg"  /> -->
		<p class="recipe-description"> <?php echo $article['Article']['body']; ?> </p>
	</div>

	<div class="span3">
		<img class="recipe-pic border" src="/img/articles/image_1/<? echo $article['Article']['image_1']?>"  />
		<br />
		<br />
		<?php if(!empty($recipe['Article']['image_2'])) : ?>
			<img class="recipe-pic border" src="/img/articles/image_2/<? echo $article['Article']['image_2'] ?>" />
		<?php endif ; ?>
		<!--<?php //echo $this->Html->image('/img/recipes/thumb-' . $recipe['Recipe']['slug'] . '-2.jpg'); ?>-->
		<br />
		<?php if(!empty($recipe['Article']['image_3'])) : ?>
			<img class="recipe-pic border" src="/img/articles/image_3/<? echo $recipe['Article']['image_3']?>"  />
		<?php endif ; ?>
		<br />
	</div>
</div>









<!--h1>Articles</h1>

<br />
<br />

<?php //foreach ($articles as $article): ?>

<h3><?php //echo $this->Html->link( $article['Article']['name'], array('action' => 'view', 'year' => substr($article['Article']['created'], 0, 4), 'month' => substr($article['Article']['created'], 5, 2), 'day' => substr($article['Article']['created'], 8, 2),  'slug' => $article['Article']['slug'])); ?></h3>
<br /-->

<?php //endforeach; ?>

<?php //echo $this->element('pagination-counter'); ?>

<?php //echo $this->element('pagination'); ?>

