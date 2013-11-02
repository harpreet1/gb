<?php echo $this->Html->script('/tiny_mce/tiny_mce.js'); ?>

<script type="text/javascript">
	tinyMCE.init({
		mode : "textareas",
		theme : "advanced",
		skin: "thebigreason",
		plugins : "inlinepopups",
		plugins : "paste",
		// Theme options
		theme_advanced_buttons1 : "styleselect,bold,italic,underline,|,link,unlink,|,bullist,numlist,|,pastetext,pasteword,selectall,|,cleanup,removeformat,code",
		theme_advanced_resizing : true,
	});
</script>

<h2>Admin Edit Feature</h2>

<?php echo $this->Form->create('Feature'); ?>
<?php
echo $this->Form->input('id');
echo $this->Form->input('name');

echo $this->Form->select('type', array(		
				'1' => 'Seasonal',
				'2' => 'US',
				'3' => 'International',
				'4' => 'Recipes',			
		));

echo $this->Form->input('recipe_link',array('class' => 'span6'));
echo $this->Form->input('slug');
echo $this->Form->input('gwm_product', array('label' => 'GWM Product ID'));
//echo $this->Form->input('writeup', array('rows' => 20, 'class' => 'input-xxlarge'));

?>
<br />
<?php echo $this->Form->button('Submit', array('class' => 'btn')); ?>
<?php echo $this->Form->end(); ?>

<br />
<br />

<h3>Actions</h3>

<br />

<?php echo $this->Form->postLink('Delete', array('action' => 'delete', $this->Form->value('Brand.id')), array('class' => 'btn btn-danger'), __('Are you sure you want to delete # %s?', $this->Form->value('Feature.id'))); ?>

<br />
<br />