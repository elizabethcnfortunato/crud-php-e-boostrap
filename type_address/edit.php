<?php 
  require_once('functions.php'); 
  edit();
?>

<?php include(HEADER_TEMPLATE); ?>

<h2>Update Type Address</h2>

<form action="edit.php?id=<?php echo $type_address['id']; ?>" method="post">
  <hr />
  <div class="row">
    <div class="form-group col-md-7">
      <label for="name">Description</label>
      <input type="text" class="form-control" name="type_address['description']" value="<?php echo $type_address['description']; ?>">
    </div>
  </div>
  <div id="actions" class="row">
    <div class="col-md-12">
      <button type="submit" class="btn btn-primary">Save</button>
      <a href="index.php" class="btn btn-default">Cancel</a>
    </div>
  </div>
</form>

<?php include(FOOTER_TEMPLATE); ?>