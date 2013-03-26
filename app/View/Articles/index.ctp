<style>
.close-x{
	float: right;
}

.art-list{
	background-color: white;
	border: 1px solid;
	width: 200px;
	padding: 10px;
}
</style>

<div class="row">
    <div class="span3">
        <br />
        <h4>Our Article Categories</h4>
        <br />
        <?php
            echo "<br>";
            foreach($blocks as $blockskey)
			
			//$blocklink = $menublock['Block']['name'], '/articles/' . $menublock['Block']['slug'];
			
            {
                echo '<div class="article-nav btn-gb">';
                echo '<a href="javascript:void(0);" class="basic-info-'.$blockskey['Block']['id'].'" onmouseover="overlay('.$blockskey['Block']['id'].')">';
                echo $blockskey['Block']['name'];
                echo '</a>';
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
                <h3 class="recipe-name"><?php echo $article['Article']['name']; ?></h3>
                <p class="recipe-description"> <?php echo $article['Article']['body']; ?> </p>
        </div>

        <div class="span3">
                <img class="recipe-pic border" src="/img/articles/image_1/<? echo $article['Article']['image_1']?>"  />
                <br />
                <br />
                <?php if(!empty($recipe['Article']['image_2'])) : ?>
                        <img class="recipe-pic border" src="/img/articles/image_2/<? echo $article['Article']['image_2'] ?>" />
                <?php endif ; ?>
                <!--<?php //echo $this->Html->image('/img/recipes/thumb-' . $recipe['Recipe']['slug'] . '-2.jpg'); ?>-->
                <br />
                <?php if(!empty($recipe['Article']['image_3'])) : ?>
                        <img class="recipe-pic border" src="/img/articles/image_3/<? echo $recipe['Article']['image_3']?>"  />
                <?php endif ; ?>
                <br />
        </div>
        
    <?php }else{ ?>
    
    <!-- For blocks landing page -->
    
            <div class="span9">
            
				<img class="recipe-pic border" src="/img/article-categories/<? echo $article['Block']['image'] ?>" />
                <h3 class="recipe-name"><?php echo $article['Block']['name']; ?></h3>
                <p class="recipe-description"> <?php echo $article['Block']['writeup']; ?></p>
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
        var leftPos = parseInt(position.left) + 110;
        $("#populate-overlay-"+arg).css( { position: "absolute", left: leftPos, top: topPos } ).show();
    }
    $(".close-x").click(function () { $(this).parent().hide(); });
</script>