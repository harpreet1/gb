<h2>Brands Index</h2>


<ul class="meganizr mzr-slide mzr-responsive">

		<!-- 4 Columns Mega Dropdown -->
		<!-- Portfolio -->
		<li class="mzr-drop brands"> <a class ="brands-link" href="http://www.<?php echo Configure::read('Settings.DOMAIN'); ?>/categories">BRANDS<b class="caret"></b></a>
			<div class="mzr-content drop-six-columns popover-content">
				<div class="wide">
					
						<?php foreach($brands as $brand): ?>
						<?php echo $this->Html->link($brand['Brand']['name'], array('action' => 'view', $brand['Brand']['slug'])); ?><br />
						<?php endforeach; ?>

				</div>
			</div>
		</li>
			
</ul>


<!-- Include Products element -->
			<?php //echo $this->element('products'); ?>