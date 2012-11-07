<?php echo $this->Html->script(array('admin-user-awning.js', 'color.js'), array('inline' => false)); ?>

<?php $awning = $user['User']['awning_image']; ?>

<?php var_dump ($user['User']['awning_css']);?>

<style>

	#awning1 {
		<?php echo $user['User']['awning_css']; ?>
	}

#awning1 {
	position: relative;
}

#div1 {
	position: absolute;
	top:-45px;
	left:177px;
	height: 63px;
	width: 206px;
	margin: 50px;
	padding:0px;
	perspective:100;
	-webkit-perspective:100; /* Safari and Chrome */
}

#div2 {
	padding:0px;
	background-color: red;
	transform: rotateX(45deg);
	-webkit-transform: rotateX(45deg); /* Safari and Chrome */
}

</style>

<script>

/*window.onload = function() {
  $('#awning1').css(
}

*/</script>

<h2>Vendor Awning Color Tool</h2>

<div class="row">

	<div class="span7 columns">
		<h3>Button Hue <small id="hue_value"></small></h3>
		<div id="hue"></div>
		<h3>Button Saturation <small id="saturation_value"></small></h3>
		<div id="saturation"></div>
		<h3>Button Lightness <small id="lightness_value"></small></h3>
		<div id="lightness"></div>
		<h3>Button Puffiness <small id="delta_value"></small></h3>
		<div id="delta"></div>
		<br /><br />
	</div>

	<div id="instructions" class="span12 offset1 columns">

		<h2>How to Use The Awning Color Generator</h2>

		<h3>First, play with the sliders on the left.</h3>
		<p>Use your arrow keys for extra precision. (Button Puffiness might not affect all browsers.)</p>

	</div>


</div>


<div class="awning custom large" id="awning1"><img id="awning1" class="awning custom large" src="/img/awning/awning.png">

	<div id="div1">
		<div id="div2">
			<?php echo $this->Html->image('users/image/'. $user['User']['image']); ?>
		</div>​
	</div>


</div>

<div style="margin-left:120px;">
	<?php echo $this->Html->image('users/image/'. $user['User']['image']); ?>
</div>

<br />

<?php echo $this->Form->create('User'); ?>
<?php echo $this->Form->input('id'); ?>

<?php echo $this->Form->input('awning_css', array('label' => false)); ?>

<?php echo $this->Form->button('Submit', array('class' => 'btn')); ?>
<?php echo $this->Form->end(); ?>



<div class="row">

	<div class="span7 columns">

		<h2>Some Examples!</h2>

		<button class="sample btn custom large a" data-h="193" data-s="32" data-l="64", data-p="15">Alpha</button>
		<button class="sample btn custom large b" data-h="36" data-s="100" data-l="50", data-p="10">Bravo</button>
		<button class="sample btn custom large c" data-h="86" data-s="79" data-l="64", data-p="20">Charlie</button>
		<button class="sample btn custom large d" data-h="312" data-s="80" data-l="48", data-p="5">Delta</button>
		<button class="sample btn custom large e" data-h="110" data-s="56" data-l="26", data-p="10">Echo</button>
		<button class="sample btn custom large f" data-h="0" data-s="69" data-l="32", data-p="10">Foxtrot</button>
		<button class="sample btn custom large g" data-h="195" data-s="79" data-l="53", data-p="10">Golf</button>
		<button class="sample btn custom large h" data-h="0" data-s="0" data-l="26", data-p="10">Hotel</button>
		<button class="sample btn custom large i" data-h="214" data-s="37" data-l="45", data-p="17">India</button>
		<button class="sample btn custom large j" data-h="41" data-s="85" data-l="47", data-p="12">Juliet</button>
		<button class="sample btn custom large k" data-h="0" data-s="0" data-l="100", data-p="21">Kilo</button>
		<button class="sample btn custom large l" data-h="145" data-s="62" data-l="78", data-p="10">Lima</button>
		<button class="sample btn custom large m" data-h="195" data-s="60" data-l="40", data-p="5">Mike</button>
		<button class="sample btn custom large n" data-h="0" data-s="100" data-l="86", data-p="4">November</button>
		<button class="sample btn custom large o" data-h="70" data-s="11" data-l="34", data-p="11">Oscar</button>

	</div>
<style>


</style>


