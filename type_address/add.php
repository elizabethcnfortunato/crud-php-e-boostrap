<?php 
  require_once('functions.php'); 
  add();
?>

<?php include(HEADER_TEMPLATE); ?>

<h2>New Type Address</h2>

<form action="add.php" method="post">
  <!-- area de campos do form -->
  <hr />
  <div class="row">
    <div class="form-group col-md-7">
      <label for="name">Description</label>
        <p>*it is not allowed to register existing data</p>
      <input type="text" class="form-control" name="customer['description']">
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