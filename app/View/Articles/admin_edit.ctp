<?php echo $this->Html->script('/tiny_mce/tiny_mce.js'); ?>

<script type="text/javascript">
	tinyMCE.init({
		mode : "textareas",
		theme : "advanced",
		skin: "thebigreason",
		plugins : "inlinepopups",
		plugins : "paste",
		// Theme options
		theme_advanced_buttons1 : "styleselect,bold,italic,underline,hr,|,justifyleft,justifycenter,justifyright,justifyfull,|,link,unlink,|,bullist,numlist,|,pastetext,pasteword,selectall,|,removeformat,code",
		theme_advanced_resizing : true,
	});
</script>

<h2>Admin Edit Article!!</h2>

<?php echo $this->Form->create('Article'); ?>
<?php echo $this->Form->input('id'); ?>
<?php echo $this->Form->input('prefix'); ?>
<?php echo $this->Form->input('name'); ?>
<?php 
// Add select box with blocks name
echo $this->Form->input('block_id'); 
?>
<?php echo $this->Form->input('group_id'); ?>

<?php echo $this->Form->input('slug'); ?>
<?php echo $this->Form->input('body', array('rows' => 20, 'class' => 'input-xxlarge')); ?>
<br />
<?php echo $this->Form->input('active', array('type' => 'checkbox', 'label' => 'Active')); ?>





<div class="row">

        
        <div class="span4">
            <div style="height:245px">       
    
            	<?php echo $this->Html->image('articles/image_1/'. $article['Article']['image_1'] , array('class' => 'gb')); ?>
                <br /><br />
                
             </div>   
            <?php echo $this->Form->input('image_1'); ?>
             <?php echo $this->Form->input('pic_title_1'); ?>
            <?php echo $this->Form->input('attrribution_1'); ?>
            <?php echo $this->Form->input('product_link_1'); ?>
            <?php echo $this->Form->input('recipe_link_1'); ?>

         </div>    
       
        
       

		<?php if(!empty($article['Article']['image_2'])) : ?>
        <div class="span4">
 			<div style="height:245px">       
                <?php echo $this->Html->image('articles/image_2/'. $article['Article']['image_2'] , array('class' => 'gb')); ?>
                <br /><br />
               
            </div>    
            <?php echo $this->Form->input('pic_title_2'); ?>
            <?php echo $this->Form->input('attrribution_3'); ?>
            <?php echo $this->Form->input('product_link_2'); ?>
            <?php echo $this->Form->input('recipe_link_2'); ?>

         </div>       
        <?php endif; ?>
        
        
		<?php if(!empty($article['Article']['image_3'])) : ?>
        <div class="span4">  
 			<div style="height:245px">       
                <?php echo $this->Html->image('articles/image_3/'. $article['Article']['image_3'] . '?date=' . time(), array('class' => 'gb')); ?>
                <br /><br />
                
             </div>   
            <?php echo $this->Form->input('pic_title_3'); ?>
            <?php echo $this->Form->input('attrribution_3'); ?>
            <?php echo $this->Form->input('product_link_3'); ?>
            <?php echo $this->Form->input('recipe_link_3'); ?>

          </div>               
        <?php endif; ?>
       

		<?php if(!empty($article['Article']['image_4'])) : ?>
        <div class="span4">
 			<div style="height:245px">       
                <?php echo $this->Html->image('articles/image_4/'. $article['Article']['image_4'] . '?date=' . time(), array('class' => 'gb')); ?>
                <br /><br />
               
             </div>  
            <?php echo $this->Form->input('pic_title_4'); ?>
            <?php echo $this->Form->input('attrribution_4'); ?>
            <?php echo $this->Form->input('product_link_4'); ?>
            <?php echo $this->Form->input('recipe_link_4'); ?>
                
          </div>         
        <?php endif; ?>
        
        
		<?php if(!empty($article['Article']['image_5'])) : ?>
        
        <div class="span4"> 
        	<div style="height:245px">       
				<?php echo $this->Html->image('articles/image_5/'. $article['Article']['image_5'] . '?date=' . time(), array('class' => 'gb')); ?>
                <br /><br />
               
                    
                <?php echo $this->Form->input('pic_title_5'); ?>
                <?php echo $this->Form->input('attrribution_5'); ?>
                <?php echo $this->Form->input('product_link_5'); ?>
                <?php echo $this->Form->input('recipe_link_5'); ?>
			</div>
            
         </div>
        <?php endif; ?>
        
        
		<?php if(!empty($article['Article']['image_6'])) : ?>
        <div class="span4">
			<div style="height:245px">       
				<?php echo $this->Html->image('articles/image_6/'. $article['Article']['image_6'] . '?date=' . time(), array('class' => 'gb')); ?>
                <br /><br />
                
           	</div>    
            <?php echo $this->Form->input('pic_title_6'); ?>
            <?php echo $this->Form->input('attrribution_6'); ?>
            <?php echo $this->Form->input('product_link_61'); ?>
            <?php echo $this->Form->input('recipe_link_6'); ?>

            
        </div>        
        <?php endif; ?>
        
<?php echo $this->Form->button('Submit', array('class' => 'btn')); ?>
<?php echo $this->Form->end(); ?>
        
</div>





<br />
<br />








<h3>Actions</h3>

<?php echo $this->Html->link('View', array('action' => 'view', $this->Form->value('Article.id')), array('class' => 'btn')); ?>

<br />
<br />

<?php echo $this->Form->postLink('Delete', array('action' => 'delete', $this->Form->value('Article.id')), array('class' => 'btn btn-danger'), __('Are you sure you want to delete # %s?', $this->Form->value('Article.id'))); ?>

<br />
<br />

<br />
<br />

