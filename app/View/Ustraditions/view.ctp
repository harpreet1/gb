<div class="row">

	<div class="span4">
    
    <h3><?php echo h($ustradition['Ustradition']['name']); ?></h3>
    
    	<div id="subcat-menu">

			<?php foreach ($ustraditions as $tradition): ?>
				<?php echo $this->Html->link($tradition['Ustradition']['name'], array('controller' => 'ustraditions', 'action' => 'view', 'slug' => $tradition['Ustradition']['slug'])); ?><br />
			<?php endforeach; ?>
        
        </div>

	</div>

	<div class="span8">

		<div class="row">
        
            <div class="summary"><strong><?php echo h($ustradition['Ustradition']['name']); ?>: </strong>
            	<?php echo $ustradition['Ustradition']['summary']; ?>
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
    
    				<div class="brand"><?php echo $this->Html->link($product['User']['username'], array('subdomain' => $product['User']['slug'], 'controller' => 'products', 'action' => 'index')); ?>
                </div>

            
            </div>
            </div>		<?php
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
		<?php echo h($ustradition['Ustradition']['id']); ?>
	</dd>
	<dt>Name</dt>
	<dd>
		<?php echo h($ustradition['Ustradition']['name']); ?>
	</dd>
	<dt><?php echo __('Slug'); ?></dt>
	<dd>
		<?php echo h($ustradition['Ustradition']['slug']); ?>
	</dd>
	<dt><?php echo __('States'); ?></dt>
	<dd>
		<?php echo h($ustradition['Ustradition']['states']); ?>
	</dd>
	<dt><?php echo __('Summary'); ?></dt>
	<dd>
		<?php echo $ustradition['Ustradition']['summary']; ?>
	</dd>
	<dt><?php echo __('Article'); ?></dt>
	<dd>
		<?php echo $ustradition['Ustradition']['article']; ?>
	</dd>
	<dt><?php echo __('Main Image'); ?></dt>
	<dd>
		<?php echo h($ustradition['Ustradition']['main_image']); ?>
	</dd>
	<dt><?php echo __('Image 1'); ?></dt>
	<dd>
		<?php echo h($ustradition['Ustradition']['image_1']); ?>
	</dd>
	<dt><?php echo __('Image 2'); ?></dt>
	<dd>
		<?php echo h($ustradition['Ustradition']['image_2']); ?>
	</dd>
	<dt><?php echo __('Image 3'); ?></dt>
	<dd>
		<?php echo h($ustradition['Ustradition']['image_3']); ?>
	</dd>
	<dt><?php echo __('Image 4'); ?></dt>
	<dd>
		<?php echo h($ustradition['Ustradition']['image_4']); ?>
	</dd>
	<dt><?php echo __('Image 5'); ?></dt>
	<dd>
		<?php echo h($ustradition['Ustradition']['image_5']); ?>
	</dd>
	<dt><?php echo __('Image 6'); ?></dt>
	<dd>
		<?php echo h($ustradition['Ustradition']['image_6']); ?>
	</dd>
	<dt>Created</dt>
	<dd>
		<?php echo h($ustradition['Ustradition']['created']); ?>
	</dd>
	<dt>Modified</dt>
	<dd>
		<?php echo h($ustradition['Ustradition']['modified']); ?>
	</dd>
</dl>

