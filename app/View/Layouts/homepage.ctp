<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title><?php echo $title_for_layout; ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<?php echo $this->Html->css(array('bootstrap.min.css', 'bootstrap-responsive.css', 'jquery.vegas.css', 'homepage.css')); ?>
<link rel="stylesheet" type="text/css" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/smoothness/jquery-ui.css" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
<?php echo $this->Html->script(array('bootstrap.min.js','twitter-bootstrap-hover-dropdown.js' ,'jquery.vegas.js', 'homepage.js','jquery.li-scroller.1.0.js')); ?>
<?php echo $this->App->js(); ?>
<?php echo $this->fetch('meta'); ?>
<?php echo $this->fetch('css'); ?>
<?php echo $this->fetch('script'); ?>

	<script>
		// Drop Down Hover!
		$(document).ready(function() {
		  $('.js-activated').dropdownHover(true);
		});
	</script>

	<script>
		jQuery(function(){
			jQuery('.jquery-column').columnize({
				columns : 3,
				accuracy : 1,
				buildOnce : true
			})
		});
	</script>



</head>

<body>

<div id="infinite-background">



<div class="container">
	<div id="header-magazine"></div>
	<div id="left-header">&nbsp;</div>
	<!--<div id="right-header">&nbsp;</div>-->
	
	
	<div class="navbar">
		<div class="navbar-inner">
			<div class="container">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
				<a class="brand" href="#">GB</a>
				<div class="nav-collapse">
					<ul class="nav">
						<!--<li><?php //echo $this->Html->link('Home', array('controller' => 'sites', 'action' => 'index')); ?></li>-->
						<li class="dropdown">
							<a href="/categories" class="js-activated">Categories<b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="/cat/appetizers">Appetizers</a></li>
								<li><a href="/cat/bakery">Bakery</a></li>
								<li><a href="/cat/beverages">Beverages</a></li>
								<li><a href="/cat/chocolates">Chocolates</a></li>
								<li><a href="/cat/coffee">Coffee</a></li>
								<li><a href="/cat/condiments">Condiments</a></li>
								<li><a href="/cat/confections">Confections</a></li>
								<li><a href="/cat/dairy">Dairy</a></li>
								<li><a href="/cat/desserts">Desserts</a></li>
								<li><a href="/cat/seafood">Fish &amp; Seafood</a></li>
								<li><a href="/cat/fruits">Fruits</a></li>
								<li><a href="/cat/grains-and-cereals">Grains &amp; Cereals</a></li>
								<li><a href="/cat/herbs-spices">Herbs and Spices</a></li>
								<li><a href="/cat/jams-syrups">Jams &amp; Syrups</a></li>
								<li><a href="/cat/legumes-beans">Legumes &amp; Beans</a></li>
								<li><a href="/cat/meats-poultry">Meats &amp; Poultry</a></li>
								<li><a href="/cat/nuts-seeds">Nuts &amp; Seeds</a></li>
								<li><a href="/cat/oils-vinegars">Oils &amp; Vinegars</a></li>
								<li><a href="/cat/pasta-noodles">Pasta &amp; Noodles</a></li>
								<li><a href="/cat/rice">Rice</a></li>
								<li><a href="/cat/sauces">Sauces &amp; Marinades</a></li>
								<li><a href="/cat/snacks">Snacks</a></li>
								<li><a href="/cat/soups-prepared-foods">Soups &amp; Prepared Foods</a></li>
								<li><a href="/cat/vegetables-and-potatoes">Vegetables &amp; Potatoes</a></li>
							</ul>
						
						<?php //echo $this->Html->link('Categories', array('controller' => 'categories', 'action' => 'index')); ?>
						</li>
						
						
						
						<li><?php echo $this->Html->link('Products', array('controller' => 'products', 'action' => 'index')); ?></li>
						<li class="dropdown">
							<a href="/users/vendors" class="js-activated">Vendors<b class="caret"></b></a>
							<ul class="dropdown-menu">
								<?php foreach($menuvendors as $menuvendor) : ?>
								<li><?php echo $this->Html->link($menuvendor['User']['name'], 'http://' . $menuvendor['User']['slug'] . '.' . Configure::read('Settings.DOMAIN') . '/'); ?></li>

								<?php endforeach; ?>
							</ul>
						</li>
						<li><?php echo $this->Html->link('US Markets', array('controller' => 'ustraditions', 'action' => 'index')); ?></li>
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
	
	
	
	
	
	

	<div id="account">
		<ul class="gb-horiz-account">
			<li class="gb-account"><a href="/members/register">BECOME A MEMBER</a></li>
			<li class="gb-account"><a href="/members/login">LOG IN</a></li>
		</ul>
	</div>

	<div id="gb-title"> <img src="img/global/gb-title.png" width="1200" height="160" alt="gourmet-basket" />
		<div class="title-description">A new way to learn about, shop for, prepare and enjoy foods of all kinds..</div>
	</div>

</div>



<div class="container">

	<?php echo $this->fetch('content'); ?>

</div>

<div id="footer">

</div>

</div>

<script>

	// Ticker
	$("ul#ticker01").liScroll({travelocity: 0.15});

</script>
</body>
</html>
