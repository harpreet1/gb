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
		theme_advanced_resizing : true,	});
</script>


<div class= "row">
	<div class= "span4">
		<h2>Admin Edit Page</h2>
	</div>
</div>



<?php echo $this->Form->create('Page'); ?>
<?php echo $this->Form->input('name', array('class' => 'input-gb-large')); ?>
<?php echo $this->Form->input('body', array('rows' => 20, 'class' => 'input-gb-large')); ?>
	
	
<?php echo $this->Form->input('id', array('type' => 'hidden')); ?>
<?php echo $this->Form->end('Save Page'); ?>