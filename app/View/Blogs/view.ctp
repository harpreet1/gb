<h1><?php echo $blog['Blog']['name']; ?></h1>

<br />
<br />
<br />

<p>
	<?php echo $blog['Blog']['body']; ?>
</p>

<br />
<br />

<p>
	<?php echo date('m/d/Y', strtotime($blog['Blog']['created'])); ?>
</p>

<br />
<br />

