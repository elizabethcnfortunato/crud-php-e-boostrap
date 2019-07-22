<?php
    require_once('functions.php');
    index();
?>

<?php include(HEADER_TEMPLATE); ?>

<header>
	<div class="row">
		<div class="col-sm-6">
			<h2>Address</h2>
		</div>
		<div class="col-sm-6 text-right h2">
	    	<a class="btn btn-primary" href="add.php"><i class="fa fa-plus"></i> New Address</a>
	    	<a class="btn btn-default" href="index.php"><i class="fa fa-refresh"></i> Update</a>
	    </div>
	</div>
</header>


<!--Página de listagem de dados-->


<?php if (!empty($_SESSION['message'])) : ?>
	<div class="alert alert-<?php echo $_SESSION['type']; ?> alert-dismissible" role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		<?php echo $_SESSION['message']; ?>
	</div>
	<?php clear_messages(); ?>
<?php endif; ?>
<div class="row">
    <div class="col-sm-4">
        <div class="form-group input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-search"></i></span>
            <input id="input-search" onkeyup="myFunction()" placeholder="Search" type="text" class="form-control">
        </div>
    </div>
    
</div>

<br>

<div class="row">
    <div class="form-group col-sm-2">
        <label for="campo3">Status</label>
        <select id="my-search-select"class="form-control" name="select-search" onchange="filterSelect()">
            <option value="ativo">Ativo</option>
            <option value="inativo">Inativo</option>
        </select>  
    </div>
</div>





<table id = "table-address" class="table table-hover">
<thead>
	<tr>
		<th>ID</th>
		<th>District</th>
        <th>Number</th>
		<th>City</th>
		<th>State</th>
		<th>Country</th>
        <th>Postal Code</th>		
        <th>Status</th>
	</tr>
</thead>
<tbody>
<?php if ($address_s) : ?>
<?php foreach ($address_s as $address) : ?>
	<tr>
		<td><?php echo $address['id']; ?></td>
        <td><?php echo $address['district']; ?></td>
        <td><?php echo $address['number']; ?></td>
		<td><?php echo $address['city']; ?></td>
        <td><?php echo $address['state']; ?></td>
        <td><?php echo $address['country']; ?></td>
        <td><?php echo $address['postal_code']; ?></td>
        <td><?php echo $address['status']; ?></td>
		<td class="actions text-right">
			<a href="view.php?id=<?php echo $address['id']; ?>" class="btn btn-sm btn-success"><i class="fa fa-eye"></i> View</a>
			<a href="edit.php?id=<?php echo $address['id']; ?>" class="btn btn-sm btn-warning"><i class="fa fa-pencil"></i> Edit</a>
			<a href="#" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#delete-modal" data-address="<?php echo $address['id']; ?>">
				<i class="fa fa-trash"></i> Delete
			</a>
		</td>
	</tr>
<?php endforeach; ?>
<?php else : ?>
	<tr>
		<td colspan="6">Nenhum registro encontrado.</td>
	</tr>
<?php endif; ?>
</tbody>
</table>


<!--Campos de Pesquisa de Dados -->
<script>
    function myFunction() {
      // Declare variables 
      var input, filter, table, tr, td, i, txtValue;
      input = document.getElementById("input-search");
      filter = input.value.toUpperCase();
      table = document.getElementById("table-address");
      tr = table.getElementsByTagName("tr");
        console.log(tr);
      for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[0];
        if (td) {
          txtValue = td.textContent || td.innerText;
          if (txtValue.toUpperCase().indexOf(filter) > -1) {
            tr[i].style.display = "";
          } else {
            tr[i].style.display = "none";
          }
        } 
      }
    }
    
    
    
    
function filterSelect() {
  var input, filter, table, tr, td, i;
  input = document.getElementById("my-search-select");
  filter = input.value.toUpperCase();
  table = document.getElementById("table-address");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
    
    

</script>

<?php include('modal.php'); ?>


<?php include(FOOTER_TEMPLATE); ?>