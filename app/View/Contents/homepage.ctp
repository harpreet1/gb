<h1>GB Homepage</h1>

<br />
<br />


	<div id="upper">
		<div class="ticker-wrap"> 
			
			<!-- <marquee loop="3" behavior="slide" direction="left" width="1400"><h2>START Lorem ipsum dolor sit amet END</h2></marquee> -->
			
			<ul id="ticker01">
				<li><img src="img/ticker/international.png" width="1366" height="52" alt=""/></li>
				<li><img src="img/ticker/regional.png"  width="1543" height="52" alt=""/></li>
				<li><img src="img/ticker/chefs-tips.png"  width="1021" height="52" alt=""/></li>
				<li><img src="img/ticker/recipes.png"  width="909" height="52" alt=""/></li>
				<li><img src="img/ticker/articles.png"  width="1021" height="52" alt=""/></li>
				<li><img src="img/ticker/pairings.png"  width="975" height="52" alt=""/></li>
			</ul>
		</div>
		<div id="upper-wrapper">
			<div id="header-magazine"></div>
			<div id="left-header">&nbsp;</div>
			<!--<div id="right-header">&nbsp;</div>-->
			
			<div id="account">
				<ul class="gb-horiz-account">
					<li class="gb-account"><a href="/members/register">BECOME A MEMBER</a></li>
					<li class="gb-account"><a href="/members/login">LOG IN</a></li>
				</ul>
			</div>
			
		</div>
				
	</div>
	
	




<div id="myCarousel" class="carousel slide">

	<div class="carousel-inner">

	<?php foreach($contents as $content) : ?>

		<div class="item">

			<?php echo $this->Html->image('homepage/' . $content['Content']['image']); ?>

			<div class="carousel-capti1on">
				<h1>
				<?php echo $this->Html->link($content['Content']['name'], $content['Content']['link']); ?><br />
				</h1>
				<br />
				<?php echo $content['Content']['name']; ?>
				<br />
				&nbsp;
			</div>
		</div>

	<?php endforeach; ?>

	</div>

	<a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
	<a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
</div>

<br />
<br />

<?php //debug($blocks); ?>

<div class="row">

	<?php
	$i = 0;
	foreach($blocks as $block) :
	$i++;
	//if (($i % 4) == 0) { echo "\n<div class=\"row\">\n\n";}
	?>

	<div class="span4">

		<br />
		<br />
		<?php echo $this->Html->image('homepage/' . $block['Block']['image']); ?>
		<br />
		<strong><?php echo $block['Block']['name']; ?></strong>
		<br />
		<?php echo $block['Block']['subtitle']; ?>


	</div>

	<?php if (($i % 3) == 0) { echo "</div>\n\n\t\t<div class=\"row\">\n\n";} ?>

	<?php endforeach; ?>

</div>

<br />

<div class="row">

	<div class="span4">
		1
	</div>
	<div class="span4">
		2
	</div>
	<div class="span4">
		3
	</div>

</div>

<br />


<?php foreach($menuvendors as $menuvendor) : ?>
<?php echo $this->Html->link($menuvendor['User']['name'], 'http://' . $menuvendor['User']['slug'] . '.' . DOMAIN . '/'); ?><br />
<?php endforeach; ?>

