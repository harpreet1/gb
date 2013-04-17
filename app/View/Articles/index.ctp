	 
	<?php if(!isset($article['Article'])){ ?>
	<!-- FOR EXCELLENT ADVENTURES BLOCKS LANDING PAGE -->
	
<div class="row">    
	<div class="span3"> <br />
		<p class="gb-heading">Magazine Sections</p>
	
	
		<?php // NAVIGATION
				echo "<br>";
				foreach($blocks as $blockskey)
				{

					echo '<div class="gb-heading" style="font-size:120%;">';
					echo $this->Html->link($blockskey['Block']['name'], '/articles/'.$blockskey['Block']['slug'], array('class' => 'basic-info-'.$blockskey['Block']['id'], 'onmouseover' => 'overlay('.$blockskey['Block']['id'].')'));
					?>
	<div class="art-list" style="position: absolute; display: none;" id="populate-overlay-<?php echo $blockskey['Block']['id']?>"> <a href="#" class="close-x">[ x ]</a> <br>
		<?php
						foreach($blockskey['Article'] as $articlekey) {
							if ($articlekey['active'] == 1) {
								echo "<p>";
								echo $this->Html->link( $articlekey['name'], '/articles/'.$blockskey['Block']['slug']."/".$articlekey['slug']);
								echo "</p>";
							}
						}
						echo "</div>";
					// Main div closing
					echo "</div>";
				}
				// END NAVIGATION
		?>    
		
		
	
	</div>
	
	<div>
  

	<div class="span9">
		<?php if(!empty($article['Block']['image'])) : ?>
			<img class="article-pic border" style="float:right;" src="/img/blocks/image/<?php echo $article['Block']['image']?>"  />
		<?php endif ; ?>
		
		<h3 class="article-name"><?php echo $article['Block']['name']; ?></h3>
		<p class="article-description"> <?php echo $article['Block']['writeup']; ?> </p>
		

		<?php $trigger = $article['Block']['id']; ?>

		<p class="gb-heading air20">Articles in this Section:</p>

		<?php if (($article['Block']['id']) == 1) { ?>
		
 
	<ul class="nav nav-tabs" id="myTab">
		<li class="active"><a href="#intl" data-toggle="tab" class="section-subheading">International</a></li>
		<li><a href="#us" data-toggle="tab"class="section-subheading">US</a></li>
		<li><a href="#fusion" data-toggle="tab"class="section-subheading">Fusion Ideas</a></li>
		<li><a href="#trends" data-toggle="tab"class="section-subheading">Hot Food & Beverage Trends</a></li>
	   
	</ul>         
		
	<div class="tab-content article-tabs">

		<div class="tab-pane active" id="intl">
		
			<p class="gb-heading">INTERNATIONAL CULINARY TRADITIONS</strong></p>
			
				<p><span class="prefix">British Isles : </span><a href="/articles/excellent-food-adventures/fabulous-foods-across-the-pond" class="gb-heading article">Fabulous Foods Across the Pond - the British Isles </a> </p>
				<p> <span class="prefix">The Caribbean : </span><a href="/articles/excellent-food-adventures/the-caribbean-a-culinary-palette-of-tastes-textures-and-flavors" class="gb-heading article">The Caribbean - A Culinary Palette of Tastes, Textures and Flavors</a> </p>
				<p> <span class="prefix">China : </span><a href="/articles/excellent-food-adventures/china-5000-years-of-dynastic-dining" class="gb-heading article">China - 5000 Years of Dynastic Dining</a> </p>
				<p> <span class="prefix">Eastern Europe : </span><a href="/articles/excellent-food-adventures/excellent-eating-in-eastern-europe" class="gb-heading article">Eastern Europe: Excellent Eating </a> </p>
				<p> <span class="prefix">Japan : </span><a href="/articles/excellent-food-adventures/japan-food-as-art" class="gb-heading article">Japan - Food As Art</a> </p>
				<p> <span class="prefix">The Mediterranean : </span><a href="/articles/excellent-food-adventures/meals-along-the-mediterrean" class="gb-heading article">Meals Along the Mediterrean </a> </p>
							<p> <span class="prefix">Mexico : </span><a href="/articles/excellent-food-adventures/the-a-maize-ing-foods-of-mexico-and-central-america" class="gb-heading article">The A "Maize"-ing Foods of Mexico and Central America </a> </p>
				
				<p> <span class="prefix">Middle East : </span><a href="/articles/excellent-food-adventures/never-strangers-amongst-food" class="gb-heading article">Never Strangers Amongst Food - Eating in the Middle East</a> </p>
				<p> <span class="prefix">North Africa : </span><a href="/articles/excellent-food-adventures/savory-flavors-of-north-africa" class="gb-heading article">North Africa: Savory and Sophisticated Flavors </a> </p>
				<p> <span class="prefix">Oceania : </span><a href="/articles/excellent-food-adventures/cuisines-of-tropical-oceania" class="gb-heading article">Cusines of Tropical Oceania</a> </p>
				<p> <span class="prefix">Southeast Asia : </span><a href="/articles/excellent-food-adventures/southeast-asia-the-cross-cultural-table" class="gb-heading article">Southeast Asia - the Cross Cultural Table </a> </p>
				<p> <span class="prefix">South America : </span><a href="/articles/excellent-food-adventures/south-america-gauchos-grains-and-gourmet-foods" class="gb-heading article">South America - Gaúchos, Grains and Gourmet Foods</a> </p>
				 <p> <span class="prefix">South Asia : </span><a href="/articles/excellent-food-adventures/ghee-ful-about-south-asia" class="gb-heading article">Ghee-ful about South Asia</a> </p>
				<p> <span class="prefix">Scandinavia : </span><a href="/articles/excellent-food-adventures/scandinavia-home-of-the-new-nordic-cuisine" class="gb-heading article">Home of the"New Nordic Cuisine"</a> </p>
				<p> <span class="prefix">Korea : </span><a href="/articles/excellent-food-adventures/korea-kimchee-and-so-much-more" class="gb-heading article">Korea: Kimchee and So Much More</a> </p>
				 <p> <span class="prefix">Western Europe : </span><a href="/articles/excellent-food-adventures/breaking-bread-in-western-europe" class="gb-heading article">Breaking Bread in Western Europe </a> </p>
								
		</div>
		
	
		<div class="tab-pane" id="us">   
				 
			<p class="gb-heading">US REGIONAL CULINARY TRADITIONS</p>>
			
				</p>
				<p> <span class="prefix">Amish : </span><a href="/articles/excellent-food-adventures/foods-from-a-simple-life" class="gb-heading article">Amish Cooking - Foods From a Simple Life</a> </p>
				<p> <span class="prefix">Southern : </span><a href="/articles/excellent-food-adventures/down-home-southern-cooking" class="gb-heading article">Down Home Southern Cooking</a> </p>
				<p> <span class="prefix">Far West : </span><a href="/articles/excellent-food-adventures/california-and-nevada-the-culinary-western-front" class="gb-heading article">California and Nevada -The Culinary Western Front</a> </p>
				<p> <span class="prefix">Great Lakes : </span><a href="/articles/excellent-food-adventures/land-o-great-lakes-cooking" class="gb-heading article">Land O'Great Lakes Cooking</a> </p>
				<p> <span class="prefix">Hawaii : </span><a href="/articles/excellent-food-adventures/hawaii-a-polynesian-paradise" class="gb-heading article">Hawaii: A Polynesian Paradise</a> </p>
				<p> <span class="prefix">Mid Atlantic : </span><a href="/articles/excellent-food-adventures/back-east-an-atlantic-quilt-work-of-foods" class="gb-heading article">Back East: An Atlantic Quilt-Work of Foods</a> </p>
				<p> <span class="prefix">Native American : </span><a href="/articles/excellent-food-adventures/native-to-the-land" class="gb-heading article">Native to the Land</a> </p>
				<p> <span class="prefix">New England : </span><a href="/articles/excellent-food-adventures/new-englands-old-and-wonderful-cooking-heritage" class="gb-heading article">New England's Old and Wonderful Cooking Heritage </a> </p>
				<p> <span class="prefix">Northwest : </span><a href="/articles/excellent-food-adventures/striking-gold-in-the-food-of-the-pacific-northwest" class="gb-heading article">Striking Gold in the Food of the Pacific Northwest </a> </p>
				<p> <span class="prefix">Southeast : </span><a href="/articles/excellent-food-adventures/southeastern-deliciously-historic-cooking" class="gb-heading article">Southeastern Deliciously Historic Cooking</a> </p>
				<p> <span class="prefix">Southwest : </span><a href="/articles/excellent-food-adventures/getting-rustic-in-the-southwest" class="gb-heading article">Getting Rustic In the Southwest</a> </p>
				<p> <span class="prefix">Louisiana : </span><a href="/articles/excellent-food-adventures/cajun-creole-and-french-traditions-of-louisiana" class="gb-heading article">Cajun, Creole and French Traditions of Louisiana</a> </p>
		
		</div>
		
		<div class="tab-pane" id="fusion">  
			Coming Soon!
		</div>
		
		<div class="tab-pane" id="trends">  
			Coming Soon!
		</div>


	</div>

</div>            
			<br />

	
			<?php }


	// FOR ALL OTHER BLOCKS LANDING PAGE -->


 else {

	foreach($blocks as $blockskey) {
			if ($trigger == ($blockskey['Block']['id'])) : ?>
		<?php
				foreach($blockskey['Article'] as $articlekey)
					if ($articlekey['active'] == 1) {
						{
							echo "<p>";

							if (!empty($articlekey['prefix'])) {

								echo "<span class='prefix'>";
								echo $articlekey['prefix'] . ' : &nbsp;&nbsp;';
								echo "</span>";
							}

							echo $this->Html->link( $articlekey['name'], '/articles/'.$blockskey['Block']['slug']."/".$articlekey['slug'], array('class' => 'gb-heading article'));
							echo "</p>";
						}
					}
				//echo "</div>";
				// Main div closing
				echo "</div>";

			endif;
			}

			?>
	</div>


<?php	}
		?>

<?php }else{ ?>

<!-- FOR ARTICLE CONTENT -->






<div class="row">


	<div class="span4">
		<br />
		<p class="gb-heading">Magazine Sections</p>
	
	
		<?php // NAVIGATION
				echo "<br>";
				foreach($blocks as $blockskey)
				{

					echo '<div class="gb-heading" style="font-size:120%;">';
					echo $this->Html->link($blockskey['Block']['name'], '/articles/'.$blockskey['Block']['slug'], array('class' => 'basic-info-'.$blockskey['Block']['id'], 'onmouseover' => 'overlay('.$blockskey['Block']['id'].')'));
					?>
	<div class="art-list" style="position: absolute; display: none;" id="populate-overlay-<?php echo $blockskey['Block']['id']?>"> <a href="#" class="close-x">[ x ]</a> <br>
		<?php
						foreach($blockskey['Article'] as $articlekey) {
							if ($articlekey['active'] == 1) {
								echo "<p>";
								echo $this->Html->link( $articlekey['name'], '/articles/'.$blockskey['Block']['slug']."/".$articlekey['slug']);
								echo "</p>";
							}
						}
						echo "</div>";
					// Main div closing
					echo "</div>";
				}
				// END NAVIGATION
		?>  
		
		
	  <div class="xtra-images"> 

	  	<div class="article-pics-container">

			<?php if(!empty($article['Article']['image_2'])) : ?>		
				<img class="article-pic border" src="/img/articles/image_2/<?php echo $article['Article']['image_2']?>"  /><br />
			<?php endif ; ?>
            
            <?php if(!empty($article['Article']['attribution_2'])) : ?>
            	<div class="photo-attr">
                	<span>Photo:&nbsp;
						<?php echo $article['Article']['attribution_2']; ?>
                    </span>
                </div>
			<?php endif ; ?>
		


			<?php if(!empty($article['Article']['pic_title_2'])) : ?>
            	<div class="pic-title">
					<?php echo $article['Article']['pic_title_2']; ?>
                </div>
			<?php endif ; ?>
	
            
			<?php if(!empty($article['Article']['product_link_2'])) : ?>
				<?php echo $this->Html->link('Product', $article['Article']['product_link_2'],array(
					'class' => 'btn btn-mini btn-inverse', 
					'target' => '_self'
					)
				); ?>
			<?php endif ; ?>

			<?php if(!empty($article['Article']['recipe_link_2'])) : ?>
				<?php echo $this->Html->link('Recipe', $article['Article']['recipe_link_2'],array(
					'class' => 'btn btn-mini btn-inverse right',
					'target' => '_self'
					)
				); ?><br />
			<?php endif ; ?>
		</div>


	  	<div class="article-pics-container">
			<?php if(!empty($article['Article']['image_3'])) : ?>		
				<img class="article-pic border" src="/img/articles/image_3/<?php echo $article['Article']['image_3']?>"  /><br />
			<?php endif ; ?>
            
            <?php if(!empty($article['Article']['attribution_3'])) : ?>
            	<div class="photo-attr">
                	<span>Photo:&nbsp;
						<?php echo $article['Article']['attribution_3']; ?>
                    </span>
                </div>
			<?php endif ; ?>
		

			<?php if(!empty($article['Article']['pic_title_3'])) : ?>
            	<div class="pic-title">
					<?php echo $article['Article']['pic_title_3']; ?>
                </div>
			<?php endif ; ?>
	
            

			<?php if(!empty($article['Article']['product_link_3'])) : ?>
				<?php echo $this->Html->link('Product', $article['Article']['product_link_3'],array(
					'class' => 'btn btn-mini btn-inverse', 
					'target' => '_self'
					)
				); ?>
			<?php endif ; ?>

			<?php if(!empty($article['Article']['recipe_link_3'])) : ?>
				<?php echo $this->Html->link('Recipe', $article['Article']['recipe_link_3'],array(
					'class' => 'btn btn-mini btn-inverse right',
					'target' => '_self'
					)
				); ?><br />
			<?php endif ; ?>
		</div>


	  	<div class="article-pics-container">
			<?php if(!empty($article['Article']['image_4'])) : ?>		
				<img class="article-pic border" src="/img/article4/image_4/<?php echo $article['Article']['image_4']?>"  /><br />
			<?php endif ; ?>
            
            <?php if(!empty($article['Article']['attribution_4'])) : ?>
            	<div class="photo-attr">
                	<span>Photo:&nbsp;
						<?php echo $article['Article']['attribution_4']; ?>
                    </span>
                </div>
			<?php endif ; ?>


			<?php if(!empty($article['Article']['pic_title_4'])) : ?>
            	<div class="pic-title">
					<?php echo $article['Article']['pic_title_4']; ?>
                </div>
			<?php endif ; ?>
	
            

			<?php if(!empty($article['Article']['product_link_4'])) : ?>
				<?php echo $this->Html->link('Product', $article['Article']['product_link_4'],array(
					'class' => 'btn btn-mini btn-inverse', 
					'target' => '_self'
					)
				); ?>
			<?php endif ; ?>

			<?php if(!empty($article['Article']['recipe_link_4'])) : ?>
				<?php echo $this->Html->link('Recipe', $article['Article']['recipe_link_4'],array(
					'class' => 'btn btn-mini btn-inverse right',
					'target' => '_self'
					)
				); ?><br />
			<?php endif ; ?>
		</div>

	  	<div class="article-pics-container">
			<?php if(!empty($article['Article']['image_5'])) : ?>		
				<img class="article-pic border" src="/img/article4/image_5/<?php echo $article['Article']['image_5']?>"  /><br />
			<?php endif ; ?>
            
            <?php if(!empty($article['Article']['attribution54'])) : ?>
            	<div class="photo-attr">
                	<span>Photo:&nbsp;
						<?php echo $article['Article']['attribution_5']; ?>
                    </span>
                </div>
			<?php endif ; ?>


			<?php if(!empty($article['Article']['pic_title_5'])) : ?>
            	<div class="pic-title">
					<?php echo $article['Article']['pic_title_5']; ?>
                </div>
			<?php endif ; ?>
	
            

			<?php if(!empty($article['Article']['product_link_5'])) : ?>
				<?php echo $this->Html->link('Product', $article['Article']['product_link_5'],array(
					'class' => 'btn btn-mini btn-inverse', 
					'target' => '_self'
					)
				); ?>
			<?php endif ; ?>

			<?php if(!empty($article['Article']['recipe_link_5'])) : ?>
				<?php echo $this->Html->link('Recipe', $article['Article']['recipe_link_5'],array(
					'class' => 'btn btn-mini btn-inverse right',
					'target' => '_self'
					)
				); ?><br />
			<?php endif ; ?>
		</div>

	  	<div class="article-pics-container">
			<?php if(!empty($article['Article']['image_6'])) : ?>		
				<img class="article-pic border" src="/img/article4/image_6/<?php echo $article['Article']['image_6']?>"  /><br />
			<?php endif ; ?>
            
            <?php if(!empty($article['Article']['attribution_6'])) : ?>
            	<div class="photo-attr">
                	<span>Photo:&nbsp;
						<?php echo $article['Article']['attribution_6']; ?>
                    </span>
                </div>
			<?php endif ; ?>


			<?php if(!empty($article['Article']['pic_title_6'])) : ?>
            	<div class="pic-title">
					<?php echo $article['Article']['pic_title_6']; ?>
                </div>
			<?php endif ; ?>
	
            

			<?php if(!empty($article['Article']['product_link_6'])) : ?>
				<?php echo $this->Html->link('Product', $article['Article']['product_link_6'],array(
					'class' => 'btn btn-mini btn-inverse', 
					'target' => '_self'
					)
				); ?>
			<?php endif ; ?>

			<?php if(!empty($article['Article']['recipe_link_6'])) : ?>
				<?php echo $this->Html->link('Recipe', $article['Article']['recipe_link_6'],array(
					'class' => 'btn btn-mini btn-inverse right', 
					'target' => '_self'
					)
				); ?><br />
			<?php endif ; ?>
		</div>
				 
	  </div>    
			
	</div>






<div class="span8 article">

	<h2 class="gb-heading">
	<?php if (!empty($article['Article']['prefix'])) {
				echo $article['Article']['prefix']; ?> : <?php
			} ?>
			
	<?php echo $article['Article']['name']; ?></h2>
	<hr />
	
	<div class="article-body" style="float:right;">
    
    
    
    
    
    

		<div class="article-pic-container">

			<?php if(!empty($article['Article']['image_1'])) : ?>		
				<img class="article-pic border" src="/img/articles/image_1/<?php echo $article['Article']['image_1']?>"  /><br />
			<?php endif ; ?>
            
            <?php if(!empty($article['Article']['attribution_1'])) : ?>
            	<div class="photo-attr">
                	<span>Photo:&nbsp;
						<?php echo $article['Article']['attribution_1']; ?>
                    </span>
                </div>
			<?php endif ; ?>


			<?php if(!empty($article['Article']['pic_title_1'])) : ?>
            	<div class="pic-title">
					<?php echo $article['Article']['pic_title_1']; ?>
                </div>
			<?php endif ; ?>
	
            

			<?php if(!empty($article['Article']['product_link_1'])) : ?>
				<?php echo $this->Html->link('Product', $article['Article']['product_link_1'],array(
					'class' => 'btn cream-button btn-mini', 
					'target' => '_self'
					)
				); ?>
			<?php endif ; ?>

			<?php if(!empty($article['Article']['recipe_link_1'])) : ?>
				<?php echo $this->Html->link('Recipe', $article['Article']['recipe_link_1'],array(
					'class' => 'cream-button btn-mini right',
					'target' => '_self'
					)
				); ?><br />
			<?php endif ; ?>
						
		</div>	
			
		
		
		<?php echo $article['Article']['body']; ?>
	</div>

	
	<br />
	<?php
			}
		?>
		
 



</div>	        
		
<div class="row">
  
	

	
	
		<div class="span12"> <?php echo $this->element('pagination-counter'); ?> <?php echo $this->element('pagination'); ?> </div>
	</div>
</div>


<script>
	function overlay(arg){
		$('.art-list').hide();
		var position = $(".basic-info-"+arg).position(); // Grabs the position
		var topPos = parseInt(position.top);
		var leftPos = parseInt(position.left) + 175;
		$("#populate-overlay-"+arg).css( { position: "absolute", left: leftPos, top: topPos } ).show();
	}
	$(".close-x").click(function () { $(this).parent().hide(); });

//
//$(".art-list").hover(
//		function(arg) {
//
//		var position = $(".basic-info-"+arg).position(); // Grabs the position
//        var topPos = parseInt(position.top);
//        var leftPos = parseInt(position.left) + 175;
//        $("#populate-overlay-"+arg).css( { position: "absolute", left: leftPos, top: topPos } ).show();
//
//		$(".close-x").show();
//		},
//		function() {
//		$(".close-x").hide();
//	});
//




</script>
