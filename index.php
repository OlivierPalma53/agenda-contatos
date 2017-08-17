<?php
  require_once 'includes/header.php';
?>
<div class="container">
    <?php
      require_once 'includes/connection.php';
      $result = $conn->query("SELECT * FROM contatos");
      ?>
      <div class="row">
      <?php
      while($row = $result->fetch_assoc()){
        echo "<div class='col s4 m4'>";
        echo "<div class='card z-depth-4'>";
        echo "<div class='card-image'>";
        echo "<img src='imagens/".$row['img_contato']."'>";
        echo "<span class='card-title'>".$row['nome']."</span>";
        echo "</div>";
        echo "<div class='card-content'>";
        echo "<p> <strong>Telefone: </strong>".$row['telefone']."</p>";
        echo "<p> <strong>E-mail: </strong>".$row['email']."</p>";
        echo "<p> <strong>Data de Nascimento: </strong>".$row['data_nascimento']."</p>";
        echo "</div>";
        echo "<div class='card-action'>";
        echo "<a href='editar.php?id=".$row['id']."'>Editar</a>";
        echo "<a href='excluir.php?id=".$row['id']."'>Excluir</a>";
        echo "</div>";
        echo "</div>";
        echo "</div>";
      }

    ?>
    </div>
</div>
