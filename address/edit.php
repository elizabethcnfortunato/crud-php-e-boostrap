<?php 
  require_once('functions.php'); 
  edit();
?>

<?php include(HEADER_TEMPLATE); ?>

<h2>Update Address</h2>
<!-- Formulário de edição de dados do cliente-->
<form action="edit.php?id=<?php echo $address['id']; ?>" method="post">
  <hr />
    <div class="row">
        <div class="form-group col-md-3">
          <label for="campo2">District</label>
          <input type="text" class="form-control" name="customer['district']" value="<?php echo $address['district']; ?>">
        </div>

        <div class="form-group col-md-1">
          <label for="campo3">Number</label>
          <input type="text" class="form-control" name="customer['number']" value="<?php echo $address['number']; ?>">
        </div>
    </div>
   
  <div class="row">
    <div class="form-group col-md-3">
      <label for="campo1">City</label>
      <input type="text" class="form-control" name="customer['city']" value="<?php echo $address['city']; ?>">
    </div>

    <div class="form-group col-md-3">
      <label for="campo2">State</label>
      <input type="text" class="form-control" name="customer['state']" value="<?php echo $address['state']; ?>">
    </div>

    <div class="form-group col-md-2">
      <label for="campo3">Country</label>
      <input type="text" class="form-control" name="customer['country']" value="<?php echo $address['country']; ?>">
    </div>
    </div>     
      
  <div class="row">
    <div class="form-group col-md-2">
      <label for="campo3">Postal Code</label>
      <input type="text" class="form-control" name="customer['postal_code']<?php echo $address['postal_code']; ?>">
    </div>
  
        <div class="form-group col-md-3">
            <label for="campo3">Status</label>
            <select class="form-control" name="customer['status']">
                <option value="ativo">Ativo</option>
                <option value="inativo">Inativo</option>
            </select>  
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