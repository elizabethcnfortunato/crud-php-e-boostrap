<?php 


/** Exclusão os endereços */
  require_once('functions.php'); 

  if (isset($_GET['id'])){
    delete($_GET['id']);
  } else {
    die("ERRO: ID não definido.");
  }
?>