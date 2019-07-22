<?php 
	require_once('functions.php'); 
	view($_GET['id']);
?>

<?php include(HEADER_TEMPLATE); ?>

<h2>Type Address <?php echo $type_address['id']; ?></h2>
<hr>

<?php if (!empty($_SESSION['message'])) : ?>
	<div class="alert alert-<?php echo $_SESSION['type']; ?>"><?php echo $_SESSION['message']; ?></div>
<?php endif; ?>

<dl class="dl-horizontal">
	<dt>Description</dt>
	<dd><?php echo $type_address['description']; ?></dd>

</dl>


<div id="actions" class="row">
	<div class="col-md-12">
	  <a href="edit.php?id=<?php echo $type_address['id']; ?>" class="btn btn-primary">Edit</a>
	  <a href="index.php" class="btn btn-default">Retorn</a>
	</div>
</div>

<?php include(FOOTER_TEMPLATE); ?>