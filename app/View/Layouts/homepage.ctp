<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title><?php echo $title_for_layout; ?></title>

<!-- Meganizr Menu Styles -->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Oregano:400,400italic' rel='stylesheet' type='text/css'>
<!--[if lt IE 9]><link href="css/meganizr-ie.css" rel="stylesheet" type="text/css"><![endif]-->
<!-- end Meganizr Menu Styles -->

<?php echo $this->Html->css(array('bootstrap.min.css', 'jquery.vegas.css', 'homepage.css','meganizr.css')); ?>
<link rel="stylesheet" type="text/css" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/smoothness/jquery-ui.css" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
<?php echo $this->Html->script(array('bootstrap.min.js','twitter-bootstrap-hover-dropdown.js' ,'jquery.vegas.js', 'homepage.js','jquery.li-scroller.1.0.js','jquery.columnizer.min.js','jquery.bpopup-0.9.1.min.js')); ?>
<?php //echo $this->App->js(); ?>
<?php //echo $this->fetch('meta'); ?>
<?php //echo $this->fetch('css'); ?>
<?php //echo $this->fetch('script'); ?>
<script>
    // Drop Down Hover!
    $(document).ready(function() {
      $('.js-activated').dropdownHover(true);
      
      //Columnizer
        $(function(){
        $('.wide').columnize({width:250});
        //$('.thin').columnize({width:200});
    });
    
     // Welcome
     $(function() {
     
        $('#welcome').on('hover', function(e) {
            e.preventDefault();
            $('#welcome_content').bPopup();
    });
});		
});
</script>
</head>

<body>
    <div id="infinite-background">
        <div class="container">
        <div id="header-magazine"> <a href="http://www.<?php echo Configure::read('Settings.DOMAIN'); ?>">
            <div class="basket"><img src="/img/global/basket.png" width="76" height="76" alt="gourmet basket"></div>
            </a>
                <div id="nav-wrapper"> 
                <!-- Include Nav element --> 
                <?php echo $this->element('nav'); ?> </div>
                <div id="left-header">&nbsp;</div>
                <!--<div id="right-header">&nbsp;</div>--> 
                
            </div>
        <div id="account">
                <ul class="gb-horiz-account">
                <li class="gb-account"><a href="/members/register">BECOME A MEMBER</a></li>
                <li class="gb-account"><a href="/members/login">LOG IN</a></li>
            </ul>
            </div>
        <div id="gb-title"> <img src="img/global/gb-title.png" width="1200" height="160" alt="gourmet-basket" /> <a href="#" id="welcome">
            <div class="title-description">A new way to learn about, shop for, prepare and enjoy foods of all kinds..</div>
            </a> </div>
        
        <!-- Element to pop up -->
        
        <div id="welcome_content">
                <h2>We welcome you to GOURMET BASKET the first-ever virtual ethnic market and interactive cultural cuisine magazine. </h2>
                <p>Shopping markets today are massive, and now with the variety of dishes from around the world finding their way to your table, buying what you need for a recipe or finding the product can be daunting. At GOURMET BASKET we are taking the "overwhelm" out, while adding in the fun of shopping for foods from around the country and the world. </p>
                <p>Supermarkets from each nationality of the population are popping up all over the country. They all offer the ability to lose yourself in another culture while perusing the aisles and exploring the ethnic flavors from around the globe.  These Hispanic, Asian, middle eastern, culinary shopping meccas, while stimulating and inspirational, can be overwhelming with so many choices of unfamiliar ingredients lining the shelves.  Often it ends in your walking out with nothing, wishing you knew name of the dish you’d had once, or one of the recipes from that country. </p>
                <p>That's where Gourmet Basket comes in.  GOURMET BASKET has taken the onus out of trying to figure out which ingredient to buy for an ethnic or regional dish.  Our online market not only offers a vast array of international and regional products, we offer detailed information on each item: the region and culture.  We give ideas on how to use the ingredients or products; give insight into the country or regions lifestyle; enhance your knowledge of food; and offer tips to help inspire the cook to experiment while creating their meals. </p>
                <p>Did you know there are two million brands of soy sauce?  That you wouldn’t use a Chinese soy sauce for a Japanese dish?  That rice and beans are a great combination of foods not just because they taste great together, but because combining grains and legumes together forms a complete protein? </p>
                <p>Gourmet Basket simplifies, demystifies and educates you on foods, giving you the tools and products to make dishes that will taste as though you were there in a local café of that country being cooked for by the people of that region with the ingredients from that land. </p>
                <p>We encourage our customers to buy in small amounts! Take a trip through the countries.  Learn about what is available. Try something new.  Come frequently.  There will always be new products.  And the good news is…We offer free shipping for orders under $10. </p>
                <p>Get interactive with us!..We offer recipes, articles, Shoppes, and blogs to share thoughts, ideas, and information on food and culture, lifestyle and friendship.  We welcome having you as one of our World Class Foodies! </p>
            </div>
    </div>
    </div>
    </div>
    <div class="container"> <?php echo $this->fetch('content'); ?> </div>
    <div id="footer"> </div>
    </div>
<script>

// Ticker
$("ul#ticker01").liScroll({travelocity: 0.15});

</script>
</body>
</html>
