<?php
include "conn.php";

if($_SESSION['tipoCliente'] == 1){
    $nome = $_SESSION['nome'];
    $sobrenome = $_SESSION['sobrenome'];
    $ident = $nome . " " . $sobrenome;
} else {
    $ident = $_SESSION['nome'];
}

// cria a instrução SQL que vai selecionar os dados
if ($_SESSION['tipoCliente'] == 3){
    
    $query = sprintf("SELECT * FROM relatoriocliente WHERE destinatario = '$ident' ");
    
} else if ($_SESSION['tipoCliente'] == 1 or $_SESSION['tipoCliente'] == 2){

    $query = sprintf("SELECT * FROM relatoriofunc WHERE destinatario = '$ident' ");

} else if ($_SESSION['tipoCliente'] == 4){

    $query = sprintf("SELECT * FROM relatoriocliente WHERE destinatario = '$ident' ");

    $query2 = sprintf("SELECT * FROM relatoriofunc WHERE destinatario = '$ident' ");
    $dados2 = mysqli_query($conn,$query2) or die(mysqli_error());
    $total_func = mysqli_num_rows($dados2);
}

// executa a query
$dados = mysqli_query($conn,$query) or die(mysqli_error());

// transforma os dados em um array
$linha = mysqli_fetch_assoc($dados);


// calcula quantos dados retornaram
$total = mysqli_num_rows($dados);

if ($_SESSION['tipoCliente'] == 4){
    $total = $total + $total_func;
}

?> 