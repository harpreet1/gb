<h2>Products</h2>

<div class="row">

<div class="span3">
LEFT SIDE
</div>

<div class="span9">

<div class="row">

<?php
$i = 0;
foreach ($products as $product):
$i++;
if (($i % 3) == 0) { echo "\n<div class=\"row\">\n\n";}
?>
<div class="span3">
<?php echo $this->Html->image('/images/' . $product['Product']['image'], array('url' => array('controller' => 'products', 'action' => 'view', 'slug' => $product['Product']['slug']), 'alt' => $product['Product']['name'], 'width' => 180, 'height' => 180, 'class' => 'image')); ?>
<br />
<?php echo $this->Html->link($product['Product']['name'], array('controller' => 'products', 'action' => 'view', 'slug' => $product['Product']['slug'])); ?>
<br />
$<?php echo $product['Product']['price']; ?>
<br />
<br />
<br />
</div>
<?php
if (($i % 3) == 0) { echo "\n</div>\n\n";}
endforeach;
?>

</div>

<p><?php echo $this->Paginator->counter(array('format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}'))); ?></p>

<div class="paging">
 <?php echo $this->Paginator->first('<< first', array(), null, array('class' => 'first disabled')); ?>
 <?php echo $this->Paginator->prev('< previous', array(), null, array('class' => 'prev disabled')); ?>
 <?php echo $this->Paginator->numbers(array('separator' => ' ')); ?>
 <?php echo $this->Paginator->next('next >', array(), null, array('class' => 'next disabled')); ?>
 <?php echo $this->Paginator->last('last >>', array(), null, array('class' => 'last disabled')); ?>
</div>

<br />
<br />

</div>

</div>

