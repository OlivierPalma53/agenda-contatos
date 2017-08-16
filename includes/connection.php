<?php

  $conn = new mysqli("localhost", "root", "root", "agenda");

  if($conn->connect_error){

    echo "<script>alert('erro ao conectar ao banco de dados');</script>";

  }

?>
