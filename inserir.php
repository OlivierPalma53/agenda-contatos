<?php
  require_once 'includes/header.php';
?>

<div class="container">
  <div class="row">
  <form class="col s12">
    <div class="row">
      <div class="col s3">
        <h5>Foto do Contato</h5>
        <img class="responsive-img circle" src="imagens/user.png">
        <input type="file" name="photo_profile" />
      </div>
    </div>
    <div class="row">
      <div class="input-field col s6">
        <i class="material-icons prefix">account_circle</i>
        <input type="text" id="icon_prefix" type="text" class="validate" name="nome">
        <label for="icon_prefix">Nome</label>
      </div>
      <div class="input-field col s6">
        <i class="material-icons prefix">date_range</i>
        <input type="date" id="icon_nascimento" type="tel" class="validate" name="data_nascimento">
        <!-- <label for="icon_nascimento">Data de Nascimento</label> -->
      </div>
    </div>

    <div class="row">
      <div class="input-field col s6">
        <i class="material-icons prefix">email</i>
        <input type="email" id="icon_prefix" type="text" class="validate" name="email">
        <label for="icon_prefix">Email</label>
      </div>
      <div class="input-field col s6">
        <i class="material-icons prefix">phone</i>
        <input name="telefone" id="icon_telephone" type="tel" class="validate">
        <label for="icon_telephone">Telefone</label>
      </div>
    </div>

    <div class="row">
      <div class="col s12">
        <input class="btn waves-effect waves-light" type="submit" value="Adicionar" />
      </div>
    </div>
  </form>
</div>

</div>
