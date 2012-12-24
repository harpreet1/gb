<h1><?php echo $article['Article']['name']; ?></h1>

<br />
<br />
<br />

<p>
	<?php echo $article['Article']['body']; ?>
</p>

<br />
<br />

<p>
	<?php echo date('m/d/Y', strtotime($article['Article']['created'])); ?>
</p>


<?php if(!empty($article['Article']['image_1'])) : ?>
	<?php echo $this->Html->image('articles/image_1/' .$article['Article']['image_1']); ?>
<?php endif ; ?>
<br />
<br />
<?php if(!empty($article['Article']['image_2'])) : ?>
	<?php echo $this->Html->image('articles/image_2/' .$article['Article']['image_2']); ?>
<?php endif ; ?>
<br />
<br />
<?php if(!empty($article['Article']['image_3'])) : ?>
	<?php echo $this->Html->image('articles/image_3/' .$article['Article']['image_3']); ?>
<?php endif ; ?>



<br />
<br />

