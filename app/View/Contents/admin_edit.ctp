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
	
	// Format phone number script
function doFormatPhone(A){var B=document.getElementById(A);B.onblur=function(){formatPhone(this)}}function formatPhone(A){A.value=formatPhoneStr(A.value)}function formatPhoneStr(A){var C=A.replace(/[^0-9xX]/g,"");C=C.replace(/[xX]/g,"x");var B="";if(C.indexOf("x")>-1){B=" "+C.substr(C.indexOf("x"));C=C.substr(0,C.indexOf("x"))}switch(C.length){case (10):return C.replace(/(...)(...)(....)/g,"($1) $2-$3")+B;case (11):if(C.substr(0,1)=="1"){return C.substr(1).replace(/(...)(...)(....)/g,"($1) $2-$3")+B}break;default:}return A}window.onload=function(){doFormatPhone("phone")};
	
</script>



<div class="contents form">
<?php echo $this->Form->create('Content'); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit Content'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('body');
		echo $this->Form->input('image');
		echo $this->Form->input('link');
		echo $this->Form->input('type', array(
			'label' => 'Type',
			'class' => 'span2',
			'options' => array(
				'welcome' => 'Welcome',
				'slider' => 'Slider',
			),
		));
		echo $this->Form->input('active', array('type' => 'checkbox', 'label' => 'Active'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Content.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Content.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Contents'), array('action' => 'index')); ?></li>
	</ul>
</div>
