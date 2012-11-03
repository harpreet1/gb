<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title><?php echo $title_for_layout; ?></title>
<link rel="stylesheet" type="text/css" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/smoothness/jquery-ui.css" />
<link href="http://fonts.googleapis.com/css?family=Mako" rel="stylesheet" type="text/css">
<?php echo $this->Html->css(array('bootstrap.min.css', 'css.css')); ?>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
<?php echo $this->Html->script(array('bootstrap.min.js', 'js.js')); ?>
<?php echo $this->App->js(); ?>
<?php echo $this->fetch('meta'); ?>
<?php echo $this->fetch('css'); ?>
<?php echo $this->fetch('script'); ?>
<script type="text/javascript" src="/t/track.php?id=gourmet"></script>
</head>
<body>

<div id="outer-wrapper">

	<div class="navbar navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container">
				<a class="brand" href="#">GB</a>
				<div class="nav-collapse">
					<ul class="nav">
						<li><?php echo $this->Html->link('Home', array('controller' => 'sites', 'action' => 'index')); ?></li>
						<li><?php echo $this->Html->link('Categories', array('controller' => 'categories', 'action' => 'index')); ?></li>
						<li><?php echo $this->Html->link('Products', array('controller' => 'products', 'action' => 'index')); ?></li>
						<li class="dropdown">
							<a href="/users/vendors" class="dropdown-toggle" data-toggle="dropdown">Vendors<b class="caret"></b></a>
							<ul class="dropdown-menu">
								<?php foreach($menuvendors as $menuvendor) : ?>
								<li><?php echo $this->Html->link($menuvendor['User']['name'], 'http://' . $menuvendor['User']['slug'] . '.' . Configure::read('Settings.DOMAIN') . '/'); ?></li>

								<?php endforeach; ?>
							</ul>
						</li>
						<li><a href="<?php echo $this->webroot; ?>/traditions">US Traditions</a>
						<?php //echo $this->Html->link('US Markets', array('controller' => 'ustraditions', 'action' => 'index')); ?></li>
						<li><?php echo $this->Html->link('Int\'l Markets', array('controller' => 'traditions', 'action' => 'index')); ?></li>

						<li><?php echo $this->Html->link('Recipes', array('controller' => 'recipes', 'action' => 'index')); ?></li>
						<li><?php echo $this->Html->link('Articles', array('controller' => 'articles', 'action' => 'index')); ?></li>
						<li><?php echo $this->Html->link('Cart', array('controller' => 'shops', 'action' => 'cart')); ?></li>
					</ul>
				</div>

				<?php echo $this->Form->create('Product', array('type' => 'GET', 'class' => 'navbar-form pull-right', 'url' => array('controller' => 'products', 'action' => 'search'))); ?>
				<?php echo $this->Form->input('search', array('label' => false, 'div' => false, 'autocomplete' => 'off')); ?>
				<?php echo $this->Form->button('<i class="icon-search icon-white"></i> Search', array('div' => false, 'class' => 'btn btn-primary', 'escape' => false)); ?>
				<?php echo $this->Form->end(); ?>

			</div>
		</div>
	</div>

	<div class="container content">
		<?php echo $this->Session->flash(); ?>
		<?php echo $this->fetch('content'); ?>
		<br />
		<br />

		<br />
		<br />
		&copy; <?php echo date('Y'); ?> <?php echo env('HTTP_HOST'); ?>
		<br />
		<br />

	</div>
	
	
	</div><!-- end outer wrapper -->

	<br />
	<br />
	<?php echo $this->element('sql_dump'); ?>
	<br />
	<br />
	
	
	

</body>
</html>
