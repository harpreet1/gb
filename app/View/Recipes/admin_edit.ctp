<?php echo $this->Html->script('/tiny_mce/tiny_mce.js'); ?>

<script type="text/javascript">
	tinyMCE.init({
		mode : "textareas",
		theme : "advanced",
		skin: "thebigreason",
		plugins : "inlinepopups",
		plugins : "paste",
		// Theme options
			theme_advanced_buttons1 : "bold,italic,underline,|,link,unlink,|,bullist,|,pastetext,pasteword,selectall,|,cleanup,removeformat,code",
			theme_advanced_resizing : true,

	});
</script>

<h2>Admin Edit Recipe</h2>

<?php echo $this->Form->create('Recipe'); ?>
<?php
echo $this->Form->input('id');
echo $this->Form->input('user_id');
echo $this->Form->input('category_id');
echo $this->Form->input('subcategory_id');
echo $this->Form->input('name');
echo $this->Form->input('slug');
echo $this->Form->input('description', array('rows' => 20, 'class' => 'input-xxlarge'));
echo $this->Form->input('ingredients', array('rows' => 20, 'class' => 'input-xxlarge'));
echo $this->Form->input('preparation', array('rows' => 20, 'class' => 'input-xxlarge'));
echo $this->Form->input('comment', array('rows' => 20, 'class' => 'input-xxlarge'));
echo $this->Form->input('tags');
echo $this->Form->input('image_1');
echo $this->Form->input('image_2');
echo $this->Form->input('image_3');
echo $this->Form->input('image_caption_1');
echo $this->Form->input('image_caption_2');
echo $this->Form->input('image_caption_3');
?>
<br />
Active <?php echo $this->Form->checkbox('active'); ?>
<br />


<br />

<br />
<?php echo $this->Form->button('Submit', array('class' => 'btn')); ?>
<?php echo $this->Form->end(); ?>


<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Recipe.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Recipe.id'))); ?></li>
	</ul>
</div>
