<div class="row">
    <div class="span3">
    <br />
    <p class="gb-heading">Magazine Sections</p>
    <?php
                echo "<br>";
                foreach($blocks as $blockskey)
                {
                    
                    echo '<div class="gb-heading" style="font-size:120%;">';
                    echo $this->Html->link($blockskey['Block']['name'], '/articles/'.$blockskey['Block']['slug'], array('class' => 'basic-info-'.$blockskey['Block']['id'], 'onmouseover' => 'overlay('.$blockskey['Block']['id'].')'));
                    ?>
    <div class="art-list" style="position: absolute; display: none;" id="populate-overlay-<?=$blockskey['Block']['id']?>"> <a href="#" class="close-x">[ x ]</a> <br>
        <?php
                    foreach($blockskey['Article'] as $articlekey)
                    {
                        echo "<p>";
                        echo $this->Html->link( $articlekey['name'], '/articles/'.$blockskey['Block']['slug']."/".$articlekey['slug']);
                        echo "</p>";                            
                    }
                    echo "</div>";
                    // Main div closing
                    echo "</div>";
                }
            ?>
            
            <hr />
        <?php if(!isset($article['Article'])){ ?>



<!-- FOR BLOCKS LANDING PAGE -->
        
        <?php $trigger = $article['Block']['id']; ?>
        <p class="gb-heading">Articles in this Section:</p>
        
        <?php foreach($blocks as $blockskey) {
                        
        	if ($trigger == ($blockskey['Block']['id'])) : ?>
        
        <div>
        <?php //echo $blockskey['Block']['id']?>
        <?php
                            foreach($blockskey['Article'] as $articlekey)
                            {
                                echo "<p>";
                                echo $this->Html->link( $articlekey['name'], '/articles/'.$blockskey['Block']['slug']."/".$articlekey['slug'], array('class' => 'gb-heading article'));
                                echo "</p>";                            
                            }
                            //echo "</div>";
                            // Main div closing
                            echo "</div>";
							
						endif;	
					}
					
				?>
    </div>
    
    
    <div class="span9"> 
    	<img class="article-pic border" style="float:right;" src="/img/blocks/image/<?php echo $article['Block']['image']?>"  /> 
    
        <h3 class="article-name"><?php echo $article['Block']['name']; ?></h3>
        <p class="article-description"> <?php echo $article['Block']['writeup']; ?> </p>
        <br />
    </div>
    
    


<!-- FOR ARTICLE CONTENT -->
    
    <?php }else{ ?>
   
    
    </div>
    	<div class="span9 article">

                <h2 class="gb-heading"><?php echo $article['Article']['name']; ?></h2>
                <hr />
                <div class="article-body">
                    <img class="article-pic border" style="float:right;" src="/img/articles/image_1/<?php echo $article['Article']['image_1']?>"  /> 
                     <?php echo $article['Article']['body']; ?>
                </div>
              
                <?php if(!empty($recipe['Article']['image_2'])) : ?>
                <img class="article-pic border" src="/img/articles/image_2/<?php echo $article['Article']['image_2'] ?>" />
                <?php endif ; ?>
                <br />
                <?php if(!empty($recipe['Article']['image_3'])) : ?>
                <img class="article-pic border" src="/img/articles/image_3/<?php echo $recipe['Article']['image_3']?>"  />
                <?php endif ; ?>
                <br />
           
        <?php
            }
        ?>
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
