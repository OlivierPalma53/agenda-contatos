<?php
  require_once 'includes/header.php';
?>
<div class="container">
  <table class="bordered highlight responsive-table lista">
    <thead>
      <th>Nome</th>
      <th>Data de Nascimento</th>
      <th>E-mail</th>
      <th>Telefone</th>
      <th>Detalhes</th>
    </thead>
    <?php

      require_once 'includes/connection.php';

      $result = $conn->query("SELECT * FROM contatos");

      while($row = $result->fetch_assoc()){

        echo "<tr>";
        echo "<td>".$row['nome']."</td>";
        echo "<td>".$row['data_nascimento']."</td>";
        echo "<td>".$row['email']."</td>";
        echo "<td>".$row['telefone']."</td>";
        echo "<td><a class='waves-effect waves-light btn' href='detalhes.php?id=".$row['id']."'>Detalhes</a></td>";
        echo "</tr>";

      }

    ?>
  </table>
</div>
