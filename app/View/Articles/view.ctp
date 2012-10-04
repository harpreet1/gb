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

<br />
<br />

