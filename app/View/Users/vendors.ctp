<h1>Vendors</h1>

<br />

<?php foreach($users as $user) : ?>

<?php echo $this->Html->link($user['User']['short_name'], 'http://' . $user['User']['short_name'] . '.' . DOMAIN . '/'); ?><br />

<?php endforeach; ?>

