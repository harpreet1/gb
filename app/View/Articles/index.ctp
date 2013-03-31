
<div class="row">
    <div class="span3">
        <br />
        <p class="gb-heading">Magazine Sections</p>
        <?php
            echo "<br>";
            foreach($blocks as $blockskey)
            {
				//print_r($blockskey);
				//die;
                echo '<div class="gb-heading"  style="font-size:120%; color:#000000">';
                echo $this->Html->link($blockskey['Block']['name'], '#', array('class' => 'basic-info-'.$blockskey['Block']['id'], 'onmouseover' => 'overlay('.$blockskey['Block']['id'].')'));
                ?>
                 <div class="art-list" style="position: absolute; display: none;" id="populate-overlay-<?=$blockskey['Block']['id']?>">
                        <a href="javascript:void(0);" class="close-x">[ x ]</a>
                        <br>
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
    </div>

    <?php if(isset($article['Article'])){ ?>
    
    
    
    <!-- For Articles content -->
        <div class="span6">
                <h2 class="gb-heading"><?php echo $article['Article']['name']; ?></h3>
                <p class="article-description"> <?php echo $article['Article']['body']; ?> </p>
        </div>

        <div class="span3">
                <img class="article-pic border" src="/img/articles/image_1/<? echo $article['Article']['image_1']?>"  />
                <br />
                <br />
                <?php if(!empty($recipe['Article']['image_2'])) : ?>
                        <img class="article-pic border" src="/img/articles/image_2/<? echo $article['Article']['image_2'] ?>" />
                <?php endif ; ?>
                <!--<?php //echo $this->Html->image('/img/recipes/thumb-' . $recipe['Recipe']['slug'] . '-2.jpg'); ?>-->
                <br />
                <?php if(!empty($recipe['Article']['image_3'])) : ?>
                        <img class="article-pic border" src="/img/articles/image_3/<? echo $recipe['Article']['image_3']?>"  />
                <?php endif ; ?>
                <br />
        </div>
        
    <?php }else{ ?>
    
    <!-- For blocks landing page -->
            <div class="span9">
            	<img class="article-pic" src="/img/article-categories/<?php echo $article['Block']['image']; ?>" />
                <h3 class="article-name"><?php echo $article['Block']['name']; ?></h3>
                <p class="article-description"> <?php echo $article['Block']['writeup']; ?> </p>
                 
                
                        
                        <br>
                <?php
                foreach($articlelist['Article'] as $articlekey)
                {
                    echo "<p>";
                    echo $this->Html->link( $articlekey['name'], '/articles/'.$articlelist['Block']['slug']."/".$articlekey['slug']);
                    echo "</p>";                            
                }
               
                // Main div closing
                echo "</div>";
            
					 
            ?>    
                
                
            </div>
    <?php
        }
    ?>
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
</script>
