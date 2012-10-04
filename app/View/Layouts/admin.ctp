<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title><?php echo $title_for_layout; ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php echo $this->Html->css(array('bootstrap.css')); ?>
<?php //echo $this->Html->css(array('bootstrap-responsive.css')); ?>
<?php echo $this->Html->css(array('admin.css')); ?>

<link rel="stylesheet" type="text/css" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/smoothness/jquery-ui.css" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>

<?php echo $this->Html->script(array('bootstrap.min.js')); ?>
<?php echo $this->fetch('css'); ?>
<?php echo $this->fetch('script'); ?>
</head>
<body>

	<div class="navbar navbar-inverse navbar-fixed-top">
	<div class="navbar-inner">
		<div class="container-fluid">

		<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</a>
		<a class="brand" href="/admin/">GB ADMIN</a>

		<div class="nav-collapse">
			<ul class="nav">

				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">Users<b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li><?php echo $this->Html->link('Users', array('controller' => 'users', 'action' => 'index', 'admin' => true)); ?></li>
						<li><?php echo $this->Html->link('Add User', array('controller' => 'users', 'action' => 'add', 'admin' => true)); ?></li>
					</ul>
				</li>

				<li><?php echo $this->Html->link('Categories', array('controller' => 'categories', 'action' => 'index', 'admin' => true)); ?></li>

				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">Products<b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li><?php echo $this->Html->link('Products', array('controller' => 'products', 'action' => 'index', 'admin' => true)); ?></li>
						<li><?php echo $this->Html->link('Add Product', array('controller' => 'products', 'action' => 'add', 'admin' => true)); ?></li>
					</ul>
				</li>

				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">Recipes<b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li><?php echo $this->Html->link('Recipes', array('controller' => 'recipes', 'action' => 'index', 'admin' => true)); ?></li>
						<li><?php echo $this->Html->link('Add Recipe', array('controller' => 'recipes', 'action' => 'add', 'admin' => true)); ?></li>
					</ul>
				</li>

				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">Articles<b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li><?php echo $this->Html->link('Articles', array('controller' => 'articles', 'action' => 'index', 'admin' => true)); ?></li>
						<li><?php echo $this->Html->link('Add Article', array('controller' => 'articles', 'action' => 'add', 'admin' => true)); ?></li>
					</ul>
				</li>

				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">Notes<b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li><?php echo $this->Html->link('Notes', array('controller' => 'notes', 'action' => 'index', 'admin' => true)); ?></li>
						<li><?php echo $this->Html->link('Add Note', array('controller' => 'notes', 'action' => 'add', 'admin' => true)); ?></li>
					</ul>
				</li>

				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">Visitors<b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li><?php echo $this->Html->link('Visitors', array('controller' => 'visitors', 'action' => 'index')); ?></li>
					</ul>
				</li>
			</ul>
		</div>

		<div class="btn-group pull-right">
			<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
			<i class="icon-user"></i> Admin
			<span class="caret"></span>
			</a>
			<ul class="dropdown-menu">
			<li><a href="/mail" target="_blank"><i class="icon-envelope"></i> Email</a></li>
			<li><a href="http://www.google.com/analytics/" target="_blank"><i class="icon-align-left"></i> Analytics</a></li>
			<li class="divider"></li>
			<li><?php echo $this->Html->link('<i class=\'icon-off\'></i> Logout', array('controller' => 'users', 'action' => 'logout', 'admin' => false), array('escape' => false)); ?></li>
			</ul>
		</div>

		</div>
	</div>
	</div>

	<div class="container-fluid content">

	<?php echo $this->Session->flash(); ?>
	<?php echo $this->fetch('content'); ?>
	<?php echo $this->element('sql_dump'); ?>

	<br />
	<br />

	<footer>
		<p>&copy; <?php echo date('Y'); ?> <?php echo env('HTTP_HOST'); ?></p>
	</footer>

	</div>

</body>
</html>
