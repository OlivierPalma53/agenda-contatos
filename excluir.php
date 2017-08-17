<?php

ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);

  if(isset($_GET['id'])){

    $id = $_GET['id'];

    require_once 'includes/connection.php';

    if($conn->query("DELETE FROM contatos WHERE id = '$id' ")){
      header('Location: index.php?deletado=sucesso');
    }

  } else {
    header("Location: index.php");
  }


?>
