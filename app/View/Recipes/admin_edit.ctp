<h2>Admin Edit Recipe</h2>


<?php echo $this->Form->create('Recipe'); ?>
<?php
echo $this->Form->input('id');
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


<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Recipe.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Recipe.id'))); ?></li>
	</ul>
</div>
