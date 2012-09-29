<h1>Vendors</h1>

<br />

<?php foreach($users as $user) : ?>
<?php echo $this->Html->image('user_image/' . $user['User']['image'], array('alt' => $user['User']['shop_name'])); ?>

<br />
<br />
<?php echo $this->Html->link($user['User']['shop_name'], 'http://' . $user['User']['slug'] . '.' . DOMAIN . '/'); ?>

<br />
<br />
<hr>

<?php endforeach; ?>

