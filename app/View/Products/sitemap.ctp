<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
<url>
<loc>http://gourmetdev.com/</loc>
</url>
<?php foreach($products as $product): ?>
<url>
<loc>http://gourmetdev.com/product/<?php echo $product['Product']['slug']; ?></loc>
</url>
<?php endforeach; ?>
</urlset>
