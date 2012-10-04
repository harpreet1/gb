<h2>Admin Add Recipe</h2>

<?php echo $this->Form->create('Recipe'); ?>
<?php
echo $this->Form->input('user_id');
echo $this->Form->input('category_id');
echo $this->Form->input('subcategory_id');
echo $this->Form->input('name');
echo $this->Form->input('slug');
echo $this->Form->input('description');
echo $this->Form->input('tags');
echo $this->Form->input('ingredients');
echo $this->Form->input('preparation');
echo $this->Form->input('comment');
echo $this->Form->input('image_1');
echo $this->Form->input('image_2');
echo $this->Form->input('image_3');
echo $this->Form->input('image_caption_1');
echo $this->Form->input('image_caption_2');
echo $this->Form->input('image_caption_3');
echo $this->Form->input('active');
?>
<br />
<?php echo $this->Form->end(__('Submit')); ?>

