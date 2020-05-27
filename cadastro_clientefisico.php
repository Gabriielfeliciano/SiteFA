<?php
include 'include/islogged.php';
include 'include/painel.php';
include 'include/menu.php';
?> 
<!DOCTYPE html>
<html class="ls-theme-indigo">
  <head>
    <title>Cadastro - Pessoa Física</title>

    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta name="description" content="Insira aqui a descrição da página.">
    <link href="http://assets.locaweb.com.br/locastyle/3.10.1/stylesheets/locastyle.css" rel="stylesheet" type="text/css">
    <link rel="icon" sizes="192x192" href="/locawebstyle/assets/images/ico-boilerplate.png">
    <link rel="apple-touch-icon" href="/locawebstyle/assets/images/ico-boilerplate.png">
    <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script type="text/javascript" src="jquery.mask.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function(){
        $('#cpf').mask('000.000.000-00', {reverse: true}); //CPF
        $('#telefone').mask('(00)00000-0000'); //Telefone
      });
    </script>
    <script type="text/javascript">
      (function() {
    // Inicia a função de Modal manualmente
    locastyle.modal.init();
  })();
    </script>
  </head>
  <body>
    <main class="ls-main ">
 
      <div class="ls-box ls-board-box">
  <header class="ls-info-header">
    <h2 class="ls-title-3 ls-ico-user-add">Cadastro - Pessoa Física</h2>
  </header>

<div>
    <?php 
      if(isset($_SESSION['msg'])){
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
      }
    ?>
</div>

  <form action="include/Ccf.php" method="post" class="ls-form-horizontal">
  <fieldset>

    <label class="ls-label col-md-3">
      <b class="ls-label-text">Nome</b>      
      <input type="text" name="nome" id="nome" placeholder="Ubireudo" required >
    </label>

    <label class="ls-label col-md-3">
      <b class="ls-label-text">Sobrenome</b>      
      <input type="text" name="sobrenome" id="sobrenome" placeholder="da Silva" required >
    </label>

    <label class="ls-label col-md-3">
      <b class="ls-label-text">Data de Nascimento</b>      
      <input type="text" class="datepicker" name="dataNasc" required >
    </label>

    <label class="ls-label col-md-3">
      <b class="ls-label-text">E-mail</b>      
      <input type="text" name="email" id="email" placeholder="exemplo@exemplo.com" required >
    </label>

    <label class="ls-label col-md-3">
      <b class="ls-label-text">Sexo</b>      
      <input type="text" name="sexo" id="sexo" placeholder="Ubireudo" required >
    </label>

    <label class="ls-label col-md-3">
      <b class="ls-label-text">Endereço</b>      
      <input type="text" name="endereco" id="endereco" placeholder="Rua Ubireudo" required >
    </label>

    <label class="ls-label col-md-3">
      <b class="ls-label-text">Número</b>      
      <input type="text" name="numero" id="numero" placeholder="000" required >
    </label>

    <label class="ls-label col-md-3">
      <b class="ls-label-text">Complemento</b>      
      <input type="text" name="complemento" id="complemento" placeholder="AAA" required >
    </label>

    <label class="ls-label col-md-3">
      <b class="ls-label-text">CPF</b>      
      <input type="text" name="cpf" id="cpf" placeholder="XXX.XXX.XXX-XX" required >
    </label>

    <label class="ls-label col-md-2">
      <b class="ls-label-text">Telefone</b>
      <input type="text" id="telefone" name="telefone" placeholder="(99) 99999-9999" >
    </label>

     
    
  </fieldset> 

  
  <button class="ls-btn" type="submit">Cadastrar</button>
  
  </form>
<div class="ls-actions-btn">
    <a href="funcionarios.php"><button class="ls-btn ls-ico-chevron-left">Voltar</button></a>
  </div>
    </main>

   

    <!-- We recommended use jQuery 1.10 or up -->

    <script type="text/javascript" src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script type="text/javascript" src="mask.js"></script>
    <script src="http://assets.locaweb.com.br/locastyle/3.10.1/javascripts/locastyle.js" type="text/javascript"></script>
    
  </body>
</html>