<?php		
require_once('../config.php');	
require_once(DBAPI);
/** 
*Esse arquivo terá todas as funções das telas de cadastro de endereço.
*/



$address_s = null;	
$address = null;	

/**	 *  Listagem de Endereços 
*fará a consulta pelos registros no banco de dados, 
*e depois colocará tudo na variável $address_s, para que possamos exibir.
*/	

function index() {	
    /** guardar um conjunto de registros de endereços*/
    global $address_s;	
    
    /**guardará um único endereço, para os casos de inserção e atualização 
    *find_all - traz os dados*/
    $address_s = find_all('address');	
}	


/**
 *  Cadastro de Endereço
 */
function add() {

  if (!empty($_POST['customer'])) {
    
        $customer = $_POST['customer'];   
    
        save('address', $customer);
    header('location: index.php');
  }
}


/**
 *	Atualizacao/Edicao de Endereço
 */
function edit() {

 

  if (isset($_GET['id'])) {

    $id = $_GET['id'];

    if (isset($_POST['customer'])) {

      $address = $_POST['customer'];
      
      update('address', $id, $address);
     header('location: index.php');
    } else {

      global $address;
      $address = find('address', $id);
    } 
  } else {
   header('location: index.php');
  }
}



function view($id = null) {	  
    global $address;	  
    $address = find('address', $id);	
}



/**
 *  Exclusão de Endereço
 */
function delete($id = null) {

  global $address;
  $address = remove('address', $id);

  header('location: index.php');
}