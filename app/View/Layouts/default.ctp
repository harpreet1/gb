<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title><?php echo $title_for_layout; ?></title>
<link rel="stylesheet" type="text/css" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/smoothness/jquery-ui.css" />
<!--<link href="http://fonts.googleapis.com/css?family=Mako" rel="stylesheet" type="text/css">-->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
<?php echo $this->Html->css(array('bootstrap.min.css', 'css.css')); ?>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
<?php echo $this->Html->script(array('bootstrap.min.js','twitter-bootstrap-hover-dropdown.js','js.js','jquery.columnizer.min.js')); ?>
<?php echo $this->App->js(); ?>
<?php echo $this->fetch('meta'); ?>
<?php echo $this->fetch('css'); ?>
<?php echo $this->fetch('script'); ?>

<script type="text/javascript" src="/t/track.php?id=gourmet"></script>
	<script>
		// Drop Down Hover!
		$(document).ready(function() {
			$('.js-activated').dropdownHover(true);
		});
	</script>
  
</head>
<body>

<div id="outer-wrapper">

	<div class="navbar">
		<div class="navbar-inner">
			<div class="container">
				<a class="brand" href="/">Home</a>
				<div class="nav-collapse">
					<ul class="nav">
						<li class="dropdown">
							<a href="http://gourmetdev.com/categories" class="js-activated">Food Categories<b class="caret"></b></a>
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
						<li class="dropdown">
							<a href="http://gourmetdev.com/users/vendors" class="js-activated">Vendor Shoppes<b class="caret"></b></a>
							<ul class="dropdown-menu">
								<?php foreach($menuvendors as $menuvendor) : ?>
								<li><?php echo $this->Html->link($menuvendor['User']['name'], 'http://' . $menuvendor['User']['slug'] . '.' . Configure::read('Settings.DOMAIN') . '/'); ?></li>

								<?php endforeach; ?>
							</ul>
						</li>
						<li class="dropdown">
							<a href="/ustraditions" class="js-activated">US Food Traditions<b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="/us/amish">Amish</a></li>
								<li><a href="/us/deep-south ">Deep South </a></li>
								<li><a href="/us/far-west ">Far West </a></li>
								<li><a href="/us/great-lakes">Great Lakes</a></li>
								<li><a href="/us/hawaii">Hawaii</a></li>
								<li><a href="/us/mid-atlantic">Mid-Atlantic</a></li>
								<li><a href="/us/midwest">Midwest and Plains </a></li>
								<li><a href="/us/native-american">Native American</a></li>
								<li><a href="/us/new-england">New England</a></li>
								<li><a href="/us/northwest">Pacific Northwest</a></li>
								<li><a href="/us/south-central-louisiana">South Central/Louisiana</a></li>
								<li><a href="/us/southeast">Southeast</a></li>
								<li><a href="/us/southwest">Southwest</a></li>
							</ul>
						</li>
						<!--<a href="http://www.gourmetdev.com/ustraditions">US Traditions</a>-->
						<?php //echo $this->Html->link('US Markets', array('controller' => 'ustraditions', 'action' => 'index')); ?></li>
						<li class="dropdown">
							<a href="/traditions" class="js-activated">Int'l Food Traditions<b class="caret"></b></a>
							<ul class="dropdown-menu">			
								<li><a href="/international/china">China and Taiwan</a></li>
								<li><a href="/international/japan">Japan</a></li>
								<li><a href="/international/korea">Korea</a></li>
                                <li><a href="/international/south_asia">South Asia</a></li>
								<li><a href="/international/southeast_asia">Southeast Asia</a></li>
                                <li><a href="/international/northern_europe">British Isles &amp; Ireland</a></li>
								<li><a href="/international/eastern_europe">Eastern and Central Europe</a></li>
								<li><a href="/international/mediterranean_europe">Mediterranean Europe</a></li>
                                <li><a href="/international/western_europe">Western Europe</a></li>
                                <li><a href="/international/scandinavia">Scandinavia</a></li>
                                <li><a href="/international/middle_east">Middle East</a></li>
								<li><a href="/international/mexico_central_america">Mexico and Central America</a></li>
								<li><a href="/international/north_america">North America / Canada</a></li>
                                <li><a href="/international/latin_america">South America</a></li>
								<li><a href="/international/the_caribbean">The Caribbean</a></li>
                                <li><a href="/international/north_africa">North Africa </a></li>
                                <li><a href="/international/south_africa">South Africa</a></li>
                                <li><a href="/international/east_africa">East Africa</a></li>
								<li><a href="/international/west_africa">West Africa</a></li>
                                <li><a href="/international/oceania">Oceania</a></li>
							</ul>					
						
						<?php //echo $this->Html->link('Int\'l Markets', array('controller' => 'traditions', 'action' => 'index')); ?></li>

						<li><?php echo $this->Html->link('Recipes', array('controller' => 'recipes', 'action' => 'index')); ?></li>
						<li><?php echo $this->Html->link('Learn More', array('controller' => 'articles', 'action' => 'index')); ?></li>
						<!--<li class="dropdown">
							<a href="http://gourmetdev.com/pages/about" class="js-activated">About<b class="caret"></b></a>
								<ul class="dropdown-menu">
									<li><a href="/pages/faq">FAQ</a></li>
									<li><a href="/pages/shipping">Shipping</a></li>
									<li><a href="/pages/policies">Policies</a></li>
							</ul>
						</li>-->
						
							<?php //echo $this->Html->link('Products', array('controller' => 'products', 'action' => 'index')); ?></li>

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