<br />
<br />

<div class="row">

	<div class="span4">

		<?php foreach ($traditions as $trad): ?>
		<?php echo $this->Html->link($trad['Tradition']['name'], array('controller' => 'traditions', 'action' => 'view', 'slug' => $trad['Tradition']['slug'])); ?><br />
		<?php endforeach; ?>

	</div>

	<div class="span8">

		<div class="row">

		<?php
		$i = 0;
		foreach ($products as $product):
		$i++;
		//if (($i % 4) == 0) { echo "\n<div class=\"row\">\n\n";}
		?>

			<div class="span2">
				<?php echo $this->Html->image('products/' . $product['Product']['image'], array('url' => array('controller' => 'products', 'action' => 'view', 'id' => $product['Product']['id'], 'slug' => $product['Product']['slug']), 'alt' => $product['Product']['name'], 'class' => 'img-polaroid img180')); ?>

				<br />
				<?php echo $this->Html->link($product['Product']['name'], array('subdomain' => $product['User']['slug'], 'controller' => 'products', 'action' => 'view', 'id' => $product['Product']['id'], 'slug' => $product['Product']['slug'])); ?>

				<br />
				$<?php echo $product['Product']['price']; ?>

				<br />
				<br />
				<br />
			</div>

		<?php
		if (($i % 4) == 0) { echo "</div>\n\n\t\t<div class=\"row\">\n\n";}
		endforeach;
		?>

		</div>

		<?php echo $this->element('pagination-counter'); ?>

		<?php echo $this->element('pagination'); ?>

		<br />
		<br />

	</div>
</div>

<br />
<hr>
<br />




<dl>
	<dt><?php echo __('Id'); ?></dt>
	<dd>
		<?php echo h($tradition['Tradition']['id']); ?>
	</dd>
	<dt><?php echo __('Name'); ?></dt>
	<dd>
		<?php echo h($tradition['Tradition']['name']); ?>
	</dd>
	<dt><?php echo __('Slug'); ?></dt>
	<dd>
		<?php echo h($tradition['Tradition']['slug']); ?>
	</dd>
	<dt><?php echo __('Countries'); ?></dt>
	<dd>
		<?php echo h($tradition['Tradition']['countries']); ?>
	</dd>
	<dt><?php echo __('Summary'); ?></dt>
	<dd>
		<?php echo $tradition['Tradition']['summary']; ?>
	</dd>
	<dt><?php echo __('Article'); ?></dt>
	<dd>
		<?php echo $tradition['Tradition']['article']; ?>
	</dd>
	<dt><?php echo __('Image'); ?></dt>
	<dd>
		<?php echo $this->Html->image('traditions/' . $tradition['Tradition']['image']); ?>
	</dd>
	<dt><?php echo __('Image 1'); ?></dt>
	<dd>
		<?php echo $this->Html->image('traditions/' . $tradition['Tradition']['image_1']); ?>
	</dd>
	<dt><?php echo __('Image 2'); ?></dt>
	<dd>
		<?php echo $this->Html->image('traditions/' . $tradition['Tradition']['image_2']); ?>
	</dd>
	<dt><?php echo __('Image 3'); ?></dt>
	<dd>
		<?php echo $this->Html->image('traditions/' . $tradition['Tradition']['image_3']); ?>
	</dd>
	<dt><?php echo __('Image 4'); ?></dt>
	<dd>
		<?php echo $this->Html->image('traditions/' . $tradition['Tradition']['image_4']); ?>
	</dd>
	<dt><?php echo __('Image 5'); ?></dt>
	<dd>
		<?php echo $this->Html->image('traditions/' . $tradition['Tradition']['image_5']); ?>
	</dd>
	<dt><?php echo __('Image 6'); ?></dt>
	<dd>
		<?php echo $this->Html->image('traditions/' . $tradition['Tradition']['image_6']); ?>
	</dd>
	<dt><?php echo __('Created'); ?></dt>
	<dd>
		<?php echo h($tradition['Tradition']['created']); ?>
	</dd>
	<dt><?php echo __('Modified'); ?></dt>
	<dd>
		<?php echo h($tradition['Tradition']['modified']); ?>
	</dd>
</dl>


