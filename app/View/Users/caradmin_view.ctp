<h2><?php echo h($car['Car']['name']); ?></h2>

<br />

<div class="row">
<div class="span6">
<table class="table table-striped table-bordered table-condensed">
	<tbody>
		<tr>
		<td>ID</dh>
			<td><?php echo h($car['Car']['id']); ?></td>
		</tr>
		<tr>
			<td>Category</td>
			<td><?php echo h($car['Category']['name']); ?></td>
		</tr>
		<tr>
			<td>Nane</td>
			<td><?php echo h($car['Car']['name']); ?></td>
		</tr>
		<tr>
			<td>Slug</td>
			<td><?php echo h($car['Car']['slug']); ?></td>
		</tr>
		<tr>
			<td>Make</td>
			<td><?php echo h($car['Car']['make']); ?></td>
		</tr>
		<tr>
			<td>Model</td>
			<td><?php echo h($car['Car']['model']); ?></td>
		</tr>
		<tr>
			<td>Model Year</td>
			<td><?php echo h($car['Car']['model_year']); ?></td>
		</tr>
		<tr>
			<td>Color</td>
			<td><?php echo h($car['Car']['color']); ?></td>
		</tr>
		<tr>
			<td>Description</td>
			<td><?php echo h($car['Car']['description']); ?></td>
		</tr>
		<tr>
			<td>Vin</td>
			<td><?php echo h($car['Car']['vin']); ?></td>
		</tr>
		<tr>
			<td>License Plate</td>
			<td><?php echo h($car['Car']['license_plate']); ?></td>
		</tr>
		<tr>
			<td>Daily Rent</td>
			<td><?php echo h($car['Car']['daily_rent']); ?></td>
		</tr>
		<tr>
			<td>Weekly Rent</td>
			<td><?php echo h($car['Car']['weekly_rent']); ?></td>
		</tr>
		<tr>
			<td>Monthly Rent</td>
			<td><?php echo h($car['Car']['monthly_rent']); ?></td>
		</tr>
		<tr>
			<td>Available</td>
			<td><a href="/admin/cars/switch/available/<?php echo $car['Car']['id']; ?>" class="status"><img src="/img/icon_<?php echo $car['Car']['available']; ?>.png" alt="" /></a></td>
		</tr>
		<tr>
			<td>Active</td>
			<td><a href="/admin/cars/switch/active/<?php echo $car['Car']['id']; ?>" class="status"><img src="/img/icon_<?php echo $car['Car']['active']; ?>.png" alt="" /></a></td>
		</tr>
		<tr>
			<td>Created</td>
			<td><?php echo h($car['Car']['created']); ?></td>
		</tr>
		<tr>
			<td>Modified</td>
			<td><?php echo h($car['Car']['modified']); ?></td>
		</tr>
		<tr>
			<td>Actions</td>
			<td>
				<?php echo $this->Html->link('Edit Car', array('action' => 'edit', $car['Car']['id']), array('class' => 'btn btn-small btn-primary')); ?>
				&nbsp; &nbsp;
				<?php echo $this->Form->postLink('Delete Car', array('action' => 'delete', $car['Car']['id']), array('class' => 'btn btn-small btn-danger'), __('Are you sure you want to delete # %s?', $car['Car']['id'])); ?>
			</td>
		</tr>

	</tbody>
</table>
</div>
</div>

<div class="row">
<div class="span5">
<?php echo $this->Form->create('Car', array('type' => 'file', 'url' => array('controller' => 'cars', 'action' => 'view', 'admin' => true)));?>
<?php echo $this->Form->hidden('slug', array('value' => $car['Car']['slug'])); ?>
<table class="table table-striped table-bordered table-condensed">
	<tbody>
		<tr>
			<td>Upload Image</td>
			<td><?php echo $this->Form->file('image'); ?></td>
		</tr>
		<tr>
			<td></td>
			<td><?php echo $this->Form->button('Submit', array('class' => 'btn btn-small btn-primary'));?></td>
		</tr>
	</tbody>
</table>
<?php echo $this->Form->end(); ?>
</div>
</div>

<a href="/admin/cars/crop?id=<?php echo $car['Car']['id']; ?>&slug=<?php echo $car['Car']['slug']; ?>&width=900&height=600" class="btn btn-small btn-primary">crop 900x600 image</a>

<br />
<br />

<?php echo $this->Html->image('cars/' . $car['Car']['slug']. '/thumb/'. $car['Car']['slug'] . '.jpg', array('class' => 'gb')); ?>

<br />
<br />

<?php echo $this->Html->image('cars/' . $car['Car']['slug']. '/'. $car['Car']['slug'] . '.jpg', array('class' => 'gb')); ?>

<br />
<br />

<br />
<br />

<span class="label label-warning">
 &nbsp; Galleries : actual pictures, no watermark, 1920 x 1080 px image size &nbsp;
</span>

<br />
<br />

<link rel="stylesheet" type="text/css" href="/uploadify/uploadify.css" />
<script type="text/javascript" src="/uploadify/jquery.uploadify-3.1.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
	$('#upload').hide();
	$('#uploaddone').hide();
	$('#file_upload').uploadify({
		'swf' : '/uploadify/uploadify.swf',
		'uploader' : '/cars/uploadify',
		'buttonText' : 'Upload Galleries',
		'auto' : false,
		'multi' : true,
		'fileTypeExts' : '*.jpg',
		'fileTypeDesc' : 'Image Files',
		'fileSizeLimit' : '3MB',
		'formData' : { 'folder' : '<?php echo $car['Car']['slug']; ?>' },
		'removeCompleted' : false,
		'onSelect' : function(file) {
			$('#upload').show();
		},
		'onClearQueue' : function(queueItemCount) {
			$('#upload').hide();
		},
		'onQueueComplete' : function(queueData) {
			$('#uploaddone').show();
			$('#upload').hide();
		}
	});
});
</script>

<input type="file" id="file_upload" name="file_upload" />

<div id="upload">
	<a href="javascript:$('#file_upload').uploadify('upload','*')">Upload Queue</a>
	&nbsp;
	<a href="javascript:$('#file_upload').uploadify('cancel','*');">Clear Queue</a>
</div>

<div id="uploaddone">
	<a href="/admin/cars/view/<?php echo $car['Car']['id']; ?>">Refresh Page</a>
</div>

<br />
<br />

<?php if(!empty($images)) : ?>

<table>
<tr>
<?php
$i = 0;
foreach ($images as $image):
$i++;
?>
<td>
	<?php echo $this->Html->image('cars/' . $car['Car']['slug']. '/t/'. $image, array('class' => 'gb', 'url' => '/img/cars/' . $car['Car']['slug']. '/gallery/'. $image, 'target' => '_blank')); ?>
	<br />
	<?php echo $image; ?>
	<br />
	<?php echo $this->Form->postLink('Delete', array('action' => 'delete_gallery', 'admin' => true, '?slug=' . $car['Car']['slug'] . '&image=' . $image), array('class' => 'btn btn-danger btn-mini'), __('Are you sure you want to delete # %s?', $image)); ?>
	<br />
	<br />
</td>
<?php
if (($i % 4) == 0) {
	echo "</tr>\n<tr>\n";
}
endforeach;
?>
</tr>
</table>

<a href="/admin/cars/organize_gallery/<?php echo $car['Car']['slug']; ?>">Organize</a>

<br />
<br />

<?php endif; ?>

<br />
<br />

<?php if(!empty($files)) : ?>

<h3>Files</h3>

<br />

<?php
$i = 0;
foreach ($files as $file):
$i++;
?>
<?php echo $file; ?><br />
<?php
endforeach;
?>

<br />
<br />

<?php endif; ?>

<br />
<br />

