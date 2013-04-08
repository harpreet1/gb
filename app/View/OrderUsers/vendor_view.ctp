
<h2>Order</h2>

<table class="table-striped table-bordered table-condensed table-hover">
	<tr>
		<td>Id</td>
		<td><?php echo h($orderUser['OrderUser']['id']); ?></td>
	</tr>
	<tr>
		<td>Shipping Method</td>
		<td><?php echo h($orderUser['OrderUser']['shipping_method']); ?></td>
	</tr>
	<tr>
		<td>Shipping Service</td>
		<td><?php echo h($orderUser['OrderUser']['shipping_service']); ?></td>
	</tr>
	<tr>
		<td>Weight</td>
		<td><?php echo h($orderUser['OrderUser']['weight']); ?></td>
	</tr>
	<tr>
		<td>Quantity</td>
		<td><?php echo h($orderUser['OrderUser']['quantity']); ?></td>
	</tr>
	<tr>
		<td>Subtotal</td>
		<td><?php echo h($orderUser['OrderUser']['subtotal']); ?></td>
	</tr>
	<tr>
		<td>Tax</td>
		<td><?php echo h($orderUser['OrderUser']['tax']); ?></td>
	</tr>
	<tr>
		<td>Shipping</td>
		<td><?php echo h($orderUser['OrderUser']['shipping']); ?></td>
	</tr>
	<tr>
		<td>Total</td>
		<td><?php echo h($orderUser['OrderUser']['total']); ?></td>
	</tr>
	<tr>
		<td>Tracking Number</td>
		<td><?php echo h($orderUser['OrderUser']['tracking_number']); ?></td>
	</tr>
	<tr>
		<td>Status</td>
		<td><?php echo h($orderUser['OrderUser']['status']); ?></td>
	</tr>
	<tr>
		<td>Created</td>
		<td><?php echo h($orderUser['OrderUser']['created']); ?></td>
	</tr>
	<tr>
		<td>Modified</td>
		<td><?php echo h($orderUser['OrderUser']['modified']); ?></td>
	</tr>
</table>

<br />
<br />

<?php debug($orderUser); ?>

<br />
<br />

<?php debug($orderItems); ?>

<br />
<br />
