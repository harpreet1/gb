<br />
<br />

<div class="row">

	<div class="span4">

		<?php foreach ($culinaryusregions as $culinary): ?>
		<?php echo $this->Html->link($culinary['Culinaryusregion']['name'], array('controller' => 'culinaryusregions', 'action' => 'view', 'slug' => $culinary['Culinaryusregion']['slug'])); ?><br />
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
		<?php echo h($culinaryusregion['Culinaryusregion']['id']); ?>
	</dd>
	<dt><?php echo __('Name'); ?></dt>
	<dd>
		<?php echo h($culinaryusregion['Culinaryusregion']['name']); ?>
	</dd>
	<dt><?php echo __('Slug'); ?></dt>
	<dd>
		<?php echo h($culinaryusregion['Culinaryusregion']['slug']); ?>
	</dd>
	<dt><?php echo __('States'); ?></dt>
	<dd>
		<?php echo h($culinaryusregion['Culinaryusregion']['states']); ?>
	</dd>
	<dt><?php echo __('Summary'); ?></dt>
	<dd>
		<?php echo $culinaryusregion['Culinaryusregion']['summary']; ?>
	</dd>
	<dt><?php echo __('Article'); ?></dt>
	<dd>
		<?php echo $culinaryusregion['Culinaryusregion']['article']; ?>
	</dd>
	<dt><?php echo __('Main Image'); ?></dt>
	<dd>
		<?php echo h($culinaryusregion['Culinaryusregion']['main_image']); ?>
	</dd>
	<dt><?php echo __('Image 1'); ?></dt>
	<dd>
		<?php echo h($culinaryusregion['Culinaryusregion']['image_1']); ?>
	</dd>
	<dt><?php echo __('Image 2'); ?></dt>
	<dd>
		<?php echo h($culinaryusregion['Culinaryusregion']['image_2']); ?>
	</dd>
	<dt><?php echo __('Image 3'); ?></dt>
	<dd>
		<?php echo h($culinaryusregion['Culinaryusregion']['image_3']); ?>
	</dd>
	<dt><?php echo __('Image 4'); ?></dt>
	<dd>
		<?php echo h($culinaryusregion['Culinaryusregion']['image_4']); ?>
	</dd>
	<dt><?php echo __('Image 5'); ?></dt>
	<dd>
		<?php echo h($culinaryusregion['Culinaryusregion']['image_5']); ?>
	</dd>
	<dt><?php echo __('Image 6'); ?></dt>
	<dd>
		<?php echo h($culinaryusregion['Culinaryusregion']['image_6']); ?>
	</dd>
	<dt><?php echo __('Created'); ?></dt>
	<dd>
		<?php echo h($culinaryusregion['Culinaryusregion']['created']); ?>
	</dd>
	<dt><?php echo __('Modified'); ?></dt>
	<dd>
		<?php echo h($culinaryusregion['Culinaryusregion']['modified']); ?>
	</dd>
</dl>

