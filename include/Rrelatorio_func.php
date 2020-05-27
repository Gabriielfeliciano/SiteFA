<?php

include "conn.php";

$nome = $_SESSION['nome'];

// cria a instrução SQL que vai selecionar os dados
if ($_SESSION['tipoCliente'] == 1 or $_SESSION['tipoCliente'] == 2){

    $query = sprintf("SELECT  * FROM relatoriofunc WHERE destinatario = '$nome' ");
    
}

if ($_SESSION['tipoCliente'] == 3 or $_SESSION['tipoCliente'] == 4){

    $query = sprintf("SELECT  * FROM relatoriofunc WHERE autor = '$nome' ");

}

// executa a query
$dados = mysqli_query($conn,$query) or die(mysqli_error());

// transforma os dados em um array
$linha = mysqli_fetch_assoc($dados);


// calcula quantos dados retornaram
$total = mysqli_num_rows($dados);


?> 