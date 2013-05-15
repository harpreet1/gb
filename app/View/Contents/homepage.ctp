<div id="upper">


	<div id="welcome_content">
            <h2 style="text-align:center">Welcome to Gourmet Basket &ndash; the First-Ever World Marketplace and Cultural Cuisine Magazine in One..</h2>
            <hr />
            <div style="text-align:center;position:relative">
            	<div id="welcome-bkngd">
   					<img src="/img/homepage/markets.png" width="704" height="657">
                 </div>
				<?php echo $welcome['Content']['body']; ?>
            </div>
           
        </div>





    <div class="marquee">
        <span><a href="">+  FEATURED VENDORS  +</a></span>
        <span>+  FEATURED ARTICLES  +</span>
        <span>+  FEATURED RECIPES  +</span>           
    </div>

	<div id="upper-content">
		<div id="headlines" class="row">
			<!--<div class="headline-1 span6">
				<div> <a href="">Unique Gift Ideas</a>
					</h2>
				</div>
			</div>

			<div class="headline-2 span6">
				<div>
					<h2> <a href="http://gourmetdev.com/blog/2012/07/11/beverage-trends-2012"> News on Trends! </a> </h2>
				</div>
				<div></div>
			</div>-->

			<!--<div class="headline-3 span6">
				<div>
					<h2> <a href=""> Tips from Chefs! </a> </h2>
				</div>
			</div>

			<div class="headline-4 span6">
				<div>
					<h2> <a href=""> Pairing Ideas! </a> </h2>
				</div>
			</div>
-->
			<div class="front-page-pic-link"> <img src="/img/homepage/lil-star.png" width="36" height= "23" style="float:left" />
				<div class="pic-link-title"><a href="">Sriracha Flying Rooster Chocolate Truffles - $9.85-$24.95</a></div>
				<img src="/img/homepage/lil-star.png" width="36" height="23" style="float:left" />
				<div class="shop-now submit_button" ><a href="">SHOP NOW</a></div>
			</div>

		</div>
	</div>

</div>

<div id="lower">
	<!--<div id="star-band"></div>
-->
	<div id="myCarousel" class="carousel slide">

		<div class="carousel-inner">
		<?php $active = 'active'; ?>
		<?php foreach($contents as $content) : ?>
        
        <?php if (($content['Content']['active']) == 1) : ?>

			<div class="item <?php echo $active; ?>">

				<?php echo $this->Html->image('homepage/sliders/' . $content['Content']['image']); ?>

				<div class="carousel-caption">
					<h1><?php echo $this->Html->link($content['Content']['name'], $content['Content']['link']); ?></h1>
					<?php echo $content['Content']['body']; ?>
					<br />

				</div>
			</div>
        <?php endif ; ?>    
            
		<?php $active = ''; ?>
		<?php endforeach; ?>

		</div>

		<a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
		<a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
	</div>

