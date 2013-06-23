<?php echo $this->Html->script('/ckeditor/ckeditor.js', array('inline' => false)); ?>

<script type="text/javascript">

CKEDITOR.replace( 'textarea', {
    toolbar: 'Basic',
    uiColor: '#9AB8F3',
});
</script>

<h2>Admin Edit Article</h2>

<?php echo $this->Form->create('Article'); ?>
<?php echo $this->Form->button('Submit', array('class' => 'btn')); ?>


<br /><br />

<?php echo $this->Form->input('id'); ?>
<?php echo $this->Form->input('prefix'); ?>
<?php echo $this->Form->input('name'); ?>
<?php 
// Add select box with blocks name
echo $this->Form->input('block_id'); 
?>
<?php echo $this->Form->input('group_id'); ?>
<?php echo $this->Form->input('slug'); ?>
<?php echo $this->Form->input('summary', array('rows' => 10, 'class' => 'input-xlarge ckeditor')); ?>
<?php echo $this->Form->input('body', array('rows' => 20, 'class' => 'ckeditor')); ?>
<?php echo $this->Form->input('source', array('rows' => 20, 'class' => 'ckeditor','label' => 'The Source')); ?>
<br />
<?php echo $this->Form->input('active', array('type' => 'checkbox', 'label' => 'Active')); ?>





<div class="row">


	<?php if($this->Form->value('Article.image_1') !== '') : ?>
        <div class="span4">
            <div style="height:245px">       
                <img class="article-img" src="/img/articles/image_1/<?php echo $this->Form->value('Article.image_1'); ?>" />
             </div>   
            <?php echo $this->Form->input('pic_title_1'); ?>
            <?php echo $this->Form->input('attribution_1'); ?>
            <?php echo $this->Form->input('product_link_1'); ?>
            <?php echo $this->Form->input('recipe_link_1'); ?>

        </div>  
	<?php endif; ?>
                  
        
	<?php if($this->Form->value('Article.image_2') !== '') : ?>
        <div class="span4">
            <div style="height:245px">       
                <img class="article-img" src="/img/articles/image_2/<?php echo $this->Form->value('Article.image_2'); ?>" />
             </div>   
            <?php echo $this->Form->input('pic_title_2'); ?>
            <?php echo $this->Form->input('attribution_2'); ?>
            <?php echo $this->Form->input('product_link_2'); ?>
            <?php echo $this->Form->input('recipe_link_2'); ?>

         </div>       
	<?php endif; ?>
        
        
	<?php if($this->Form->value('Article.image_3') !== '') : ?>
        <div class="span4">
            <div style="height:245px">       
                <img class="article-img" src="/img/articles/image_3/<?php echo $this->Form->value('Article.image_3'); ?>" />
             </div>   
            <?php echo $this->Form->input('pic_title_3'); ?>
            <?php echo $this->Form->input('attribution_3'); ?>
            <?php echo $this->Form->input('product_link_3'); ?>
            <?php echo $this->Form->input('recipe_link_3'); ?>

          </div>               
	<?php endif; ?>
       

	<?php if($this->Form->value('Article.image_4') !== '') : ?>
        <div class="span4">
            <div style="height:245px">       
                <img class="article-img" src="/img/articles/image_4/<?php echo $this->Form->value('Article.image_4'); ?>" />
             </div>   
            <?php echo $this->Form->input('pic_title_4'); ?>
            <?php echo $this->Form->input('attribution_4'); ?>
            <?php echo $this->Form->input('product_link_4'); ?>
            <?php echo $this->Form->input('recipe_link_4'); ?>
                
          </div>         
	<?php endif; ?>
        
        
	<?php if($this->Form->value('Article.image_5') !== '') : ?>
        <div class="span4">dfgdfgdfg
            <div style="height:245px">       
                <img class="article-img" src="/img/articles/image_5/<?php echo $this->Form->value('Article.image_5'); ?>" />
             </div>   
                <?php echo $this->Form->input('pic_title_5'); ?>
                <?php echo $this->Form->input('attribution_5'); ?>
                <?php echo $this->Form->input('product_link_5'); ?>
                <?php echo $this->Form->input('recipe_link_5'); ?>
			</div>
            
         </div>
	<?php endif; ?>
        
        
	<?php if($this->Form->value('Article.image_6') !== '') : ?>
        <div class="span4">
            <div style="height:245px">       
                <img class="article-img" src="/img/articles/image_6/<?php echo $this->Form->value('Article.image_6'); ?>" />
             </div>   
            <?php echo $this->Form->input('pic_title_6'); ?>
            <?php echo $this->Form->input('attribution_6'); ?>
            <?php echo $this->Form->input('product_link_6'); ?>
            <?php echo $this->Form->input('recipe_link_6'); ?>

            
        </div>        
	<?php endif; ?>
        
        
</div>


<?php echo $this->Form->end(); ?>




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

