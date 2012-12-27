
<div class="row">
	<div class="span4">

		<h3><?php echo h($tradition['Tradition']['name']); ?></h3>
		<br />
		<br />

		<div id="subcat-menu">

				<?php foreach ($traditions as $trad): ?>
					<?php echo $this->Html->link($trad['Tradition']['name'], array('controller' => 'traditions', 'action' => 'view', 'slug' => $trad['Tradition']['slug'])); ?><br />
				<?php endforeach; ?>

		</div>
	</div>


	<div class="span8">

		<div class="row">
            <div class="summary"><strong><?php echo h($tradition['Tradition']['name']); ?>: </strong>
            	<?php echo $tradition['Tradition']['summary']; ?>
            </div>

			<?php
            $i = 0;
            foreach ($products as $product):
            $i++;
            //if (($i % 4) == 0) { echo "\n<div class=\"row\">\n\n";}
            ?>
    
            <div class="span2">
            
                <div class="content-product">

                    <div class="content-img">
                    <?php echo $this->Html->image('products/image/' . $product['Product']['image'], array('url' => array('subdomain' => $product['User']['slug'], 'controller' => 'products', 'action' => 'view', 'id' => $product['Product']['id'], 'slug' => $product['Product']['slug']), 'alt' => $product['Product']['name'], 'class' => 'img-polaroid img180')); ?>

                        <div class="product-name">
                            
                            <a href="/product/<?php echo ($product['Product']['id'].'-'.$product['Product']['slug']);?>">
                            	<?php echo $this->Text->truncate($product['Product']['name'], 40, array('ellipsis' => '...', 'exact' => 'false')); ?>
								
								<?php //echo $this->Html->link($product['Product']['name'], array('subdomain' => $product['User']['slug'], 'controller' => 'products', 'action' => 'view', 'id' => $product['Product']['id'], 'slug' => $product['Product']['slug'])); ?>
                    
                            </a>
                        
                        </div>

                    </div>
                
                <div class="price">$<?php echo $product['Product']['price']; ?></div>
                
                <div class="brand"><?php //echo $this->Html->link($product['User']['name'], array('subdomain' => $product['User']['slug'], 'controller' => 'products', 'action' => 'index')); ?>
                </div>

                
                </div>
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
	<dt>Name</dt>
	<dd>
		<?php echo h($tradition['Tradition']['name']); ?>
	</dd>

	<dt><?php echo __('Countries'); ?></dt>
	<dd>
		<?php echo h($tradition['Tradition']['countries']); ?>
	</dd>
</dl>

		<div id="category-article">
			<h3><?php echo h($tradition['Tradition']['name']); ?></h3>
			<br />
			<?php echo $tradition['Tradition']['article']; ?>
		</div>






		<?php echo $this->Html->image('traditions/' . $tradition['Tradition']['image'], array('width' => '300px')); ?>



		<?php echo $this->Html->image('traditions/' . $tradition['Tradition']['image_1'], array('width' => '300px')); ?>



		<?php echo $this->Html->image('traditions/' . $tradition['Tradition']['image_2'], array('width' => '300px')); ?>



		<?php echo $this->Html->image('traditions/' . $tradition['Tradition']['image_3'], array('width' => '300px')); ?>



		<?php echo $this->Html->image('traditions/' . $tradition['Tradition']['image_4'], array('width' => '300px')); ?>



		<?php echo $this->Html->image('traditions/' . $tradition['Tradition']['image_5'], array('width' => '300px')); ?>



		<?php echo $this->Html->image('traditions/' . $tradition['Tradition']['image_6'], array('width' => '300px')); ?>





