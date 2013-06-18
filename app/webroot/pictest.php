<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title><?php echo $title_for_layout; ?></title>

<link rel="stylesheet" type="text/css" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/themes/smoothness/jquery-ui.css" />
<!--<link href="http://fonts.googleapis.com/css?family=Mako" rel="stylesheet" type="text/css">-->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
<!--<link href='http://fonts.googleapis.com/css?family=Simonetta:400,400italic' rel='stylesheet' type='text/css'>-->
<link href='http://fonts.googleapis.com/css?family=Oregano:400,400italic' rel='stylesheet' type='text/css'>

<?php //echo $this->Html->css(array('bootstrap.min.css','css.css','meganizr.css','cakephp_tag_cloud.css')); ?>

<!------ CSS ------>

<style>
<?php if(isset($user['User']['awning_css'])) : ?>
.btn-gb {
	<?php echo $user['User']['awning_css']; ?>
}
.bkgnd-gb {
	<?php echo $user['User']['awning_css']; ?>
	opacity: 0.2;  Android 2.1+, Chrome 4+, Firefox 2+, IE 9+, iOS 3.2+, Opera 9+, Safari 3.1+
}
<?php endif; ?>
</style>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>

<script type="text/javascript" src="/app/webroot/js/bootstrap.min.js"/></script>
<script type="text/javascript" src="/app/webroot/js/jquery.cj-object-scaler.min.js"/></script>

<?php //echo $this->Html->script(array('bootstrap.min.js','twitter-bootstrap-hover-dropdown.js','js.js','jquery.columnizer.min.js','jquery.bpopup-0.9.3.min.js','jquery.easing.1.3.js','jquery.cj-object-scaler.min.js')); ?>

<?php //echo $this->Html->css('bootstrap.less?','stylesheet/less') ?>

<?php //echo $this->App->js(); ?>
<?php //echo $this->fetch('meta'); ?>
<?php //echo $this->fetch('css'); ?>
<?php //echo $this->fetch('script'); ?>

<script type="text/javascript" src="/t/track.php?id=gourmet"></script>
<script>
	// Drop Down Hover!
	$(document).ready(function() {
		$('.js-activated').dropdownHover(true);
	});

	//Select Customize
	//$('.selectpicker').selectpicker();

	 //Columnizer
	$(function(){
		$('.wide').columnize({width:250});
		//$('.thin').columnize({width:200});
	});

	// Pop Up

	// $('#gb_popup').bPopup({
//            speed: 650,
//            transition: 'slideIn'
//        });

// Semicolon (;) to ensure closing of earlier scripting
	// Encapsulation
	// $ is assigned to jQuery
	(function($) {
		 // Policies
		$(function() {
			// Binding a click event
			// From jQuery v.1.7.0 use .on() instead of .bind()
			$('#policies').on('click', function(e) {
				// Prevents the default action to be triggered.
				e.preventDefault();
				// Triggering bPopup when click event is fired
				$('#policy_content').bPopup();
			});
		});
		 // Story
		 $(function() {
			$('#story').on('click', function(e) {
				e.preventDefault();
				$('#story_content').bPopup()
			});
		});

	//Accordion on hover
	
		$(".pointer").hover(
			function(){
				var thisdiv = jQuery(this).attr("data-target")
				$(thisdiv).collapse("show");
			},
			function(){
				var thisdiv = jQuery(this).attr("data-target")
				$(thisdiv).collapse("hide");
			}
		);
		
		//Image scale
		$(".content-img a img").each(function() {
			$(this).cjObjectScaler({
				method: "fit",
				fade: 800
			});
		});
		
	})(jQuery);

</script>

</head>
<body>

<div id="outer-wrapper">
	
	<div id="header">
	
	<div class="social-main">
		<a href="https://www.facebook.com/pages/Gourmet-Basket/603379453015040"><img src="/img/global/facebook.png" width="29" height="30" alt="facebook"></a>
		<a href="https://twitter.com/search/users?q=gourmetbasket1"><img src="/img/global/twitter.png" width="30" height="30"></a>		
	</div>

		<a href="http://www.<?php //echo Configure::read('Settings.DOMAIN'); ?>">
			<div class="basket"><img src="/img/global/basket.png" width="76" height="76" alt="gourmet basket"></div>
		 </a>

	

		<div id="nav-wrapper">
			<!-- Include Nav element -->
			<?php //echo $this->element('nav'); ?>
		</div>

	</div>

	<div class="container content" style="margin:auto;width:300px;">

				

					<div class="content-product" style="">


							<a href="http://sfi.thegourmetbasket.net/product/11866-bechtle-egg-spaetzle-farmers-style-in-bag"><img src="/img/products/image/11866.jpg" alt="Farmers Style Egg Spaetzle" class="img-polaroid img180" /></a>
							<div class="product-name">
								<a href="/product/11866-bechtle-egg-spaetzle-farmers-style-in-bag">
								Farmers Style Egg Spaetzle								</a>

							</div>

						


						<div class="price">$4.05</div>


						
							<div class="brand">Bechtle</div>

												
							

					</div>

				
				
				
				
				
	</div>

	<?php //echo $this->element('footer'); ?>

</div>

</div><!-- end outer wrapper -->

	<br />
	<br />
	<?php //echo $this->element('sqldump'); ?>
	<br />
	<br />

</body>
</html>