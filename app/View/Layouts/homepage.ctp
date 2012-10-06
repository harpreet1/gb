<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title><?php echo $title_for_layout; ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<?php echo $this->Html->css(array('bootstrap.min.css', 'homepage.css', 'bootstrap-responsive.css')); ?>
<link rel="stylesheet" type="text/css" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/smoothness/jquery-ui.css" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
<?php echo $this->Html->script(array('bootstrap.min.js', 'js.js','jquery.li-scroller.1.0.js')); ?>
<?php echo $this->App->js(); ?>
<?php echo $this->fetch('meta'); ?>
<?php echo $this->fetch('css'); ?>
<?php echo $this->fetch('script'); ?>
</head>

<body>


<div class="container">

	<?php echo $this->fetch('content'); ?>

</div>

<script>

	// Ticker

	$("ul#ticker01").liScroll({travelocity: 0.15});
		
</script>			
</body>
</html>
