<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title><?php echo $title_for_layout; ?></title>

<!-- Meganizr Menu Styles -->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="http://fonts.googleapis.com/css?family=Play" rel="stylesheet" type="text/css">
<link href="css/meganizr.css" rel="stylesheet" type="text/css">
<!--[if lt IE 9]><link href="css/meganizr-ie.css" rel="stylesheet" type="text/css"><![endif]-->
<!-- end Meganizr Menu Styles -->




<?php echo $this->Html->css(array('bootstrap.min.css', 'jquery.vegas.css', 'homepage.css')); ?>
<link rel="stylesheet" type="text/css" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/smoothness/jquery-ui.css" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>

<?php echo $this->Html->script(array('bootstrap.min.js','twitter-bootstrap-hover-dropdown.js' ,'jquery.vegas.js', 'homepage.js','jquery.li-scroller.1.0.js')); ?>
<?php //echo $this->App->js(); ?>
<?php //echo $this->fetch('meta'); ?>
<?php //echo $this->fetch('css'); ?>
<?php //echo $this->fetch('script'); ?>

	<script>
		// Drop Down Hover!
		$(document).ready(function() {
		  $('.js-activated').dropdownHover(true);
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
				<!--<a class="brand" href="/">Home</a>-->
                
				<div class="nav-collapse">
                
                    <div class="gb-nav-bkgnd">
                    
                    	<!--<div class="basket"><img src="/img/global/basket.png" width="76" height="76" alt="gourmet basket"></div>-->
                    
                        <ul class="nav meganizr mzr-class mzr-slide mzr-responsive">
                            <li class="dropdown">
                                <a href="/categories" class="js-activated">Food Categories<b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <?php foreach($menucategories as $menucategory) : ?>
                                    <li><?php echo $this->Html->link($menucategory['Category']['name'], array('controller' => 'categories', 'action' => 'view', $menucategory['Category']['slug'])); ?></li>
    
                                    <?php endforeach; ?>
                                </ul>
    
                            <?php //echo $this->Html->link('Categories', array('controller' => 'categories', 'action' => 'index')); ?>
                            </li>
                            <li class="dropdown">
                                <a href="/users/vendors" class="js-activated">Vendor Shoppes<b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <?php foreach($menuvendors as $menuvendor) : ?>
                                    <li><?php echo $this->Html->link($menuvendor['User']['name'], 'http://' . $menuvendor['User']['slug'] . '.' . Configure::read('Settings.DOMAIN') . '/'); ?></li>
    
                                    <?php endforeach; ?>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="/ustraditions" class="js-activated">US Food Traditions<b class="caret"></b></a>
                                <ul class="dropdown-menu">
    
                                    <?php //foreach($menu_ustraditions as $menu_ustradition) : ?>
                                    <!--<li><?php //echo $this->Html->link($menu_ustradition['Ustradition']['name'], array('controller' => 'ustraditions', 'action' => 'view', $menu_ustradition['Ustradition']['slug'])); ?></li>-->
                                    <?php //endforeach; ?>
                                    <li><a href="http://www.<?php echo Configure::read('Settings.DOMAIN'); ?>/us/amish">Amish</a></li>
                                    <li><a href="http://www.<?php echo Configure::read('Settings.DOMAIN'); ?>/us/deep-south ">Deep South </a></li>
                                    <li><a href="http://www.<?php echo Configure::read('Settings.DOMAIN'); ?>/us/far-west ">Far West </a></li>
                                    <li><a href="http://www.<?php echo Configure::read('Settings.DOMAIN'); ?>/us/great-lakes">Great Lakes</a></li>
                                    <li><a href="http://www.<?php echo Configure::read('Settings.DOMAIN'); ?>/us/hawaii">Hawaii</a></li>
                                    <li><a href="http://www.<?php echo Configure::read('Settings.DOMAIN'); ?>/us/louisiana">Louisiana</a></li>
                                    <li><a href="http://www.<?php echo Configure::read('Settings.DOMAIN'); ?>/us/mid-atlantic">Mid-Atlantic</a></li>
                                    <li><a href="http://www.<?php echo Configure::read('Settings.DOMAIN'); ?>/us/midwest">Midwest and Plains </a></li>
                                    <li><a href="http://www.<?php echo Configure::read('Settings.DOMAIN'); ?>/us/native-american">Native American</a></li>
                                    <li><a href="http://www.<?php echo Configure::read('Settings.DOMAIN'); ?>/us/new-england">New England</a></li>
                                    <li><a href="http://www.<?php echo Configure::read('Settings.DOMAIN'); ?>/us/northwest">Pacific Northwest</a></li>
                                    <li><a href="http://www.<?php echo Configure::read('Settings.DOMAIN'); ?>/us/southeast">Southeast</a></li>
                                    <li><a href="http://www.<?php echo Configure::read('Settings.DOMAIN'); ?>/us/southwest">Southwest</a></li>
                                </ul>
                            </li>
                            <!--<a href="http://www.gourmetdev.com/ustraditions">US Traditions</a>-->
                            <?php //echo $this->Html->link('US Markets', array('controller' => 'ustraditions', 'action' => 'index')); ?></li>
                            <li class="dropdown">
                                <a href="/traditions" class="js-activated">Int'l Food Traditions<b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="http://www.<?php echo Configure::read('Settings.DOMAIN'); ?>/international/africa">Africa </a></li>
                                    <li><a href="http://www.<?php echo Configure::read('Settings.DOMAIN'); ?>/international/northern_europe">British Isles &amp; Ireland</a></li>
                                    <li><a href="http://www.<?php echo Configure::read('Settings.DOMAIN'); ?>/international/china">China and Taiwan</a></li>
                                    <li><a href="http://www.<?php echo Configure::read('Settings.DOMAIN'); ?>/international/eastern_europe">Eastern and Central Europe</a></li>
                                    <li><a href="http://www.<?php echo Configure::read('Settings.DOMAIN'); ?>/international/japan">Japan</a></li>
                                    <li><a href="http://www.<?php echo Configure::read('Settings.DOMAIN'); ?>/international/korea">Korea</a></li>
                                    <li><a href="http://www.<?php echo Configure::read('Settings.DOMAIN'); ?>/international/mediterranean_europe">Mediterranean Europe</a></li>
                                    <li><a href="http://www.<?php echo Configure::read('Settings.DOMAIN'); ?>/international/mexico_central_america">Mexico and Central America</a></li>
                                    <li><a href="http://www.<?php echo Configure::read('Settings.DOMAIN'); ?>/international/middle_east">Middle East</a></li>
                                    <li><a href="http://www.<?php echo Configure::read('Settings.DOMAIN'); ?>/international/north_america">North America / Canada</a></li>
                                    <li><a href="http://www.<?php echo Configure::read('Settings.DOMAIN'); ?>/international/oceania">Oceania</a></li>
                                    <li><a href="http://www.<?php echo Configure::read('Settings.DOMAIN'); ?>/international/scandinavia">Scandinavia</a></li>
                                    <li><a href="http://www.<?php echo Configure::read('Settings.DOMAIN'); ?>/international/southeast_asia">Southeast Asia</a></li>
                                    <li><a href="http://www.<?php echo Configure::read('Settings.DOMAIN'); ?>/international/south_america">South America</a></li>
                                    <li><a href="http://www.<?php echo Configure::read('Settings.DOMAIN'); ?>/international/south_asia">South Asia</a></li>
                                    <li><a href="http://www.<?php echo Configure::read('Settings.DOMAIN'); ?>/international/the_caribbean">The Caribbean</a></li>
                                    <li><a href="http://www.<?php echo Configure::read('Settings.DOMAIN'); ?>/international/western_europe">Western Europe</a></li>
                                </ul>
                            <?php //echo $this->Html->link('Int\'l Markets', array('controller' => 'traditions', 'action' => 'index')); ?></li>
    
                            <li><?php echo $this->Html->link('Recipes', array('controller' => 'recipes', 'action' => 'index')); ?></li>
                            <!--<li><?php //echo $this->Html->link('Learn More', array('controller' => 'articles', 'action' => 'index')); ?></li>-->
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
                    
				</div>
                
                
				<?php echo $this->Form->create('Product', array('type' => 'GET', 'class' => 'navbar-form pull-right', 'url' => array('controller' => 'products', 'action' => 'search'))); ?>
				<?php echo $this->Form->input('search', array('label' => false, 'div' => false, 'autocomplete' => 'off')); ?>
				<?php echo $this->Form->button('<i class="icon-search icon-white"></i> Search', array('div' => false, 'class' => 'btn btn-gb', 'escape' => false)); ?>
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
