<?php
include 'include/islogged.php';
include 'include/painel.php';
include 'include/menu.php';
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
  </head>
  <body>
  

    


    <main class="ls-main ">
      <div class="container-fluid">
      <div class="ls-box ls-board-box">
  <header class="ls-info-header">
    <h2 class="ls-title-3 ls-ico-dashboard">Painel de controle</h2>
  </header>

<?php if ($_SESSION['tipoCliente'] == 1 or $_SESSION['tipoCliente'] == 2){ ?>

<div id="sending-stats" class="row">
  <div class="col-sm-3">
    <div class="ls-box">
      <div class="ls-box-head">
        <h6 class="ls-title-4"><a href="orcamento.php" > Relátorios recebidos  </a></h6>
      </div>
      <div class="ls-box-body">
        <span class="ls-board-data">
          <strong>
            <?php
              include "include/contador_relatorios.php";              
              echo $total;
            ?>
          </strong>
        </span>
      </div>
    </div>
</div>

<?php } ?>

<?php if ($_SESSION['tipoCliente'] == 3 or $_SESSION['tipoCliente'] == 4){ ?>

  <div id="sending-stats" class="row">
    <div class="col-sm-3">
      <div class="ls-box">
        <div class="ls-box-head">
          <h6 class="ls-title-4"> <a href="orcamento.php" > Orçamentos </a> </h6>
        </div>
        <div class="ls-box-body">
          <span class="ls-board-data">
            <strong>
              <?php
                include "include/ver_orc.php";              
                echo $total;
              ?>
            </strong>
          </span>
        </div>
      </div>
    </div>

  <?php } ?>

    <div class="col-sm-3">
      <div class="ls-box">
        <div class="ls-box-head">
          <h6 class="ls-title-4"> <a href="orcamento.php" > Serviços </a> </h6>
        </div>
        <div class="ls-box-body">
          <span class="ls-board-data">
            <strong>
              <?php
                include "include/contador_servicos.php";              
                echo $total;
              ?>
            </strong>
          </span>
        </div>
      </div>
    </div>

    <?php if ($_SESSION['tipoCliente'] == 3 or $_SESSION['tipoCliente'] == 4){ ?>

    <div class="col-sm-3">
      <div class="ls-box">
        <div class="ls-box-head">
          <h6 class="ls-title-4"><a href="orcamento.php" > Relatórios </a></h6>
        </div>
        <div class="ls-box-body">
          <span class="ls-board-data">
            <strong>
              <?php
                include "include/contador_relatorios.php";              
                echo $total;
              ?>
            </strong>
          </span>
        </div>
      </div>
    </div>

    <div class="col-sm-3">
      <div class="ls-box">
        <div class="ls-box-head">
          <h6 class="ls-title-4"><a href="orcamento.php" > Clientes </a></h6>
        </div>
        <div class="ls-box-body">
          <span class="ls-board-data">
            <strong>
              <?php
                include "include/contador_clientes.php";              
                echo $total;
              ?>
            </strong>
          </span>
        </div>
      </div>
    </div>

    <?php } ?>

  </div>
  <hr class="ls-no-border">
  <div id="panel-charts-2" class="ls-clear-both"></div>
</div>




      </div>
    </main>

   

    <!-- We recommended use jQuery 1.10 or up -->
    <script type="text/javascript" src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script src="http://assets.locaweb.com.br/locastyle/3.10.1/javascripts/locastyle.js" type="text/javascript"></script>
  </body>
</html>