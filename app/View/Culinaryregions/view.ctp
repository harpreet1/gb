<br />
<br />

<div class="row">

	<div class="span4">

		<?php foreach ($culinaryregions as $culinary): ?>
		<?php echo $this->Html->link($culinary['Culinaryregion']['name'], array('controller' => 'culinaryregions', 'action' => 'view', 'slug' => $culinary['Culinaryregion']['slug'])); ?><br />
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
				<?php echo $this->Html->link($product['Product']['name'], array('subdomain' => $product['User']['short_name'], 'controller' => 'products', 'action' => 'view', 'id' => $product['Product']['id'], 'slug' => $product['Product']['slug'])); ?>

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
		<?php echo h($culinaryregion['Culinaryregion']['id']); ?>
	</dd>
	<dt><?php echo __('Name'); ?></dt>
	<dd>
		<?php echo h($culinaryregion['Culinaryregion']['name']); ?>
	</dd>
	<dt><?php echo __('Slug'); ?></dt>
	<dd>
		<?php echo h($culinaryregion['Culinaryregion']['slug']); ?>
	</dd>
	<dt><?php echo __('Countries'); ?></dt>
	<dd>
		<?php echo h($culinaryregion['Culinaryregion']['countries']); ?>
	</dd>
	<dt><?php echo __('Summary'); ?></dt>
	<dd>
		<?php echo $culinaryregion['Culinaryregion']['summary']; ?>
	</dd>
	<dt><?php echo __('Article'); ?></dt>
	<dd>
		<?php echo $culinaryregion['Culinaryregion']['article']; ?>
	</dd>
	<dt><?php echo __('Image'); ?></dt>
	<dd>
		<?php echo $this->Html->image('culinaryregions/' . $culinaryregion['Culinaryregion']['image']); ?>
	</dd>
	<dt><?php echo __('Image 1'); ?></dt>
	<dd>
		<?php echo $this->Html->image('culinaryregions/' . $culinaryregion['Culinaryregion']['image_1']); ?>
	</dd>
	<dt><?php echo __('Image 2'); ?></dt>
	<dd>
		<?php echo $this->Html->image('culinaryregions/' . $culinaryregion['Culinaryregion']['image_2']); ?>
	</dd>
	<dt><?php echo __('Image 3'); ?></dt>
	<dd>
		<?php echo $this->Html->image('culinaryregions/' . $culinaryregion['Culinaryregion']['image_3']); ?>
	</dd>
	<dt><?php echo __('Image 4'); ?></dt>
	<dd>
		<?php echo $this->Html->image('culinaryregions/' . $culinaryregion['Culinaryregion']['image_4']); ?>
	</dd>
	<dt><?php echo __('Image 5'); ?></dt>
	<dd>
		<?php echo $this->Html->image('culinaryregions/' . $culinaryregion['Culinaryregion']['image_5']); ?>
	</dd>
	<dt><?php echo __('Image 6'); ?></dt>
	<dd>
		<?php echo $this->Html->image('culinaryregions/' . $culinaryregion['Culinaryregion']['image_6']); ?>
	</dd>
	<dt><?php echo __('Created'); ?></dt>
	<dd>
		<?php echo h($culinaryregion['Culinaryregion']['created']); ?>
	</dd>
	<dt><?php echo __('Modified'); ?></dt>
	<dd>
		<?php echo h($culinaryregion['Culinaryregion']['modified']); ?>
	</dd>
</dl>


