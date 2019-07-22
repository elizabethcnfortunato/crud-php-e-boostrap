<?php 
	require_once('functions.php'); 
	view($_GET['id']);
?>

<?php include(HEADER_TEMPLATE); ?>

<h2>Address <?php echo $address['id']; ?></h2>
<hr>

<?php if (!empty($_SESSION['message'])) : ?>
	<div class="alert alert-<?php echo $_SESSION['type']; ?>"><?php echo $_SESSION['message']; ?></div>
<?php endif; ?>

<dl class="dl-horizontal">
	<dt>District:</dt>
	<dd><?php echo $address['district']; ?></dd>

	<dt>Number:</dt>
	<dd><?php echo $address['number']; ?></dd>

	<dt>City:</dt>
	<dd><?php echo $address['city']; ?></dd>
</dl>

<dl class="dl-horizontal">
	<dt>State:</dt>
	<dd><?php echo $address['state']; ?></dd>

	<dt>Country:</dt>
	<dd><?php echo $address['country']; ?></dd>

	<dt>Postal Code:</dt>
	<dd><?php echo $address['postal_code']; ?></dd>

	<dt>Status:</dt>
	<dd><?php echo $address['status']; ?></dd>
</dl>

<div id="actions" class="row">
	<div class="col-md-12">
	  <a href="edit.php?id=<?php echo $address['id']; ?>" class="btn btn-primary">Edit</a>
	  <a href="index.php" class="btn btn-default">Return</a>
	</div>
</div>

<?php include(FOOTER_TEMPLATE); ?>