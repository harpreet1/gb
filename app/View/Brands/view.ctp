view

<?php foreach ($products as $product): ?>
<?php echo $product['Product']['name']; ?> - <?php echo $product['Product']['brand_id']; ?> - <br />
<?php endforeach; ?>
