<?php
include 'include/islogged.php';
include 'include/painel.php';
include 'include/menu.php';
$hoje = date('d/m/Y');
?> 
<!DOCTYPE html>
<html class="ls-theme-indigo">
  <head>
    <title>Feliciano Associados - Dashboard</title>

    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta name="description" content="Insira aqui a descrição da página.">
    <link href="http://assets.locaweb.com.br/locastyle/3.10.1/stylesheets/locastyle.css" rel="stylesheet" type="text/css">
    <link rel="icon" sizes="192x192" href="/locawebstyle/assets/images/ico-boilerplate.png">
    <link rel="apple-touch-icon" href="/locawebstyle/assets/images/ico-boilerplate.png">
    <link rel="stylesheet" href="css/cor.css">
  </head>
  <body>
  

    


    <main class="ls-main ">

    <!-- <div class="ls-box ls-board-box">
  <header class="ls-info-header">
    <h2 class="ls-title-3 ls-ico-dashboard">Painel de controle</h2>
  </header> -->

<!-- <div class="col-sm-5">  
  <div class="ls-box">
      <span class="ls-ico-alone ls-ico-panel-emkt"></span>
    <div class="col-md-9">
        <h3><strong>Orçamentos</strong></h3>
        <a href="#" class="ls-btn-success ls-btn">Visualizar</a>
        <hr>
    </div>
   </div>
</div> -->

  <!-- <div class="ls-box ls-md-space">
      <div class="col-md-3">
      <span class="ls-ico-alone ls-ico-panel-emkt"></span>
      </div>
      <div class="col-md-8">
          <h3 class="ls-title-4"><strong>Orçamentos</strong></h3>
          <a href="#" class="ls-btn-success ls-btn">Visualizar</a>
        <hr>
      </div>
  </div> -->


<!-- </div> -->

<div class="ls-box ls-board-box">
  <header class="ls-info-header">
    <h2 class="ls-title-3 ls-ico-dashboard">Painel de controle</h2>
    <p class="ls-float-right ls-float-none-xs ls-small-info"><strong><?php echo $hoje ?></strong> </p>
  </header>
    <div class="col-sm-6 col-md-4">
      <div class="ls-box back">
      <strong class="ls-ico-panel-emkt"></strong>
        <div class="ls-box-head">
          <h3 class="ls-title-4">Orçamentos</h3>
        </div>
        <div class="ls-box-body">
          <strong>100.000</strong>
          <hr>
        </div>
        <div class="ls-box-footer">
          <a href="#" class="ls-btn-success ls-btn">Visualizar</a>
          <br>
        </div>
      </div>
    </div>

    <div class="col-sm-6 col-md-4">
      <div class="ls-box back">
        <strong class="ls-ico-chart-bar-up"></strong>
          <div class="ls-box-head">
            <h3 class="ls-title-4">Relátorios recebidos</h3>
          </div>
          <div class="ls-box-body">
            <strong>100.000</strong>
            <hr>
          </div>
          <div class="ls-box-footer">
            <a href="#" class="ls-btn-success ls-btn">Visualizar</a>
            <br>
          </div>
        </div>
      </div>

    <div class="col-sm-6 col-md-4">
      <div class="ls-box back">
        <strong class="ls-ico-lamp"></strong>
          <div class="ls-box-head">
            <h3 class="ls-title-4">Serviços</h3>
          </div>
          <div class="ls-box-body">
            <strong>100.000</strong>
            <hr>
          </div>
          <div class="ls-box-footer">
            <a href="#" class="ls-btn-success ls-btn">Visualizar</a>
            <br>
          </div>
        </div>
      </div>

      <div class="col-sm-6 col-md-4 paddd">
      <div class="ls-box back">
        <strong class="ls-ico-users"></strong>
          <div class="ls-box-head">
            <h3 class="ls-title-4">Clientes</h3>
          </div>
          <div class="ls-box-body">
            <strong>100.000</strong>
            <hr>
          </div>
          <div class="ls-box-footer">
            <a href="#" class="ls-btn-success ls-btn">Visualizar</a>
            <br>
          </div>
        </div>
      </div>

      
    </div>

  </div>
</div>




    </main>

   

    <!-- We recommended use jQuery 1.10 or up -->
    <script type="text/javascript" src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script src="http://assets.locaweb.com.br/locastyle/3.10.1/javascripts/locastyle.js" type="text/javascript"></script>
  </body>
</html>