<?php		
require_once('../config.php');	
require_once(DBAPI);
/** 
*Esse arquivo terá todas as funções das telas de cadastro dos type address.
*/



$type_address_s = null;	
$type_address = null;	

/**	 *  Listagem 	 
*fará a consulta pelos registros no banco de dados, 
*e depois colocará tudo na variável $type_address_s, para que possamos exibir.
*/	

function index() {	
    /** guardar um conjunto de registros*/
    global $type_address_s;	
    
    /**guardará um único registro, para os casos de inserção e atualização 
    *find_all - traz os dados*/
    $type_address_s = find_all('type_address');	
}	


/**
 *  Cadastro de Type Address
 */
function add() {
  if (!empty($_POST['customer'])) {
    
  

    $customer = $_POST['customer'];
    
    
    save('type_address', $customer);
    header('location: index.php');
  }
}


/**
 *	Atualizacão/Edicao
 */
function edit() {

  if (isset($_GET['id'])) {

    $id = $_GET['id'];

    if (isset($_POST['type_address'])) {

      $type_address = $_POST['type_address'];
      echo ($type_address);
      update('type_address', $id, $type_address);
      header('location: index.php');
    } else {

      global $type_address;
      $type_address = find('type_address', $id);
    } 
  } else {
    header('location: index.php');
  }
}


function view($id = null) {	  
    global $type_address;	  
    $type_address = find('type_address', $id);	
}




/**
 *  Exclusão
 */
function delete($id = null) {

  global $type_address;
  $type_address = remove('type_address', $id);

  header('location: index.php');
}