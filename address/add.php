<?php 
  require_once('functions.php'); 
  add();
?>

<?php include(HEADER_TEMPLATE); ?>

<h2>New Address</h2>

<form action="add.php" method="post">
  <!-- area de campos do form -->
  <hr />
<!-- Campos para adicionar os dados dos novos endereços -->
<div class="row">
    <div class="form-group col-md-3">
      <label for="campo2">District</label>
      <input type="text" class="form-control" name="customer['district']">
    </div>

    <div class="form-group col-md-2">
      <label for="campo3">Number</label>
      <input type="text" class="form-control" name="customer['number']">
    </div>
  </div>
  
  <div class="row">
        <div class="form-group col-md-3">
          <label for="campo1">City</label>
          <input type="text" class="form-control" name="customer['city']">
        </div>

        <div class="form-group col-md-3">
          <label for="campo2">State</label>
          <input type="text" class="form-control" name="customer['state']">
        </div>

        <div class="form-group col-md-2">
          <label for="campo3">Country</label>
          <input type="text" class="form-control" name="customer['country']">
        </div>
    </div> 
    <div class="row">
        <div class="form-group col-md-2">
          <label for="campo3">Postal Code</label>
          <input type="text" class="form-control" name="customer['postal_code']" >
        </div>


      <div class="form-group col-md-3">
                <label for="campo3">Status</label>
                <select class="form-control" name="customer['status']">
                    <option value="ativo">Ativo</option>
                    <option value="inativo">Inativo</option>
                </select>  
      </div>

        <div class="col-md-12">
          <button type="submit" class="btn btn-primary">Save</button>
          <a href="index.php" class="btn btn-default">Cancel</a>
        </div>
    </div>
</form>

<?php include(FOOTER_TEMPLATE); ?>