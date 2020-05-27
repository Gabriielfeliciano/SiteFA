<?php
session_start();
include "conn.php";

 
//variáveis do Formulário
  
$autor =     			$_SESSION['nome'];    
$destinatario =     	$_POST["destinatario"]; 
$assunto = 				$_POST["assunto"];
$conteudo = 			$_POST["conteudo"];




 
$sql = ("INSERT INTO relatoriofunc VALUES ('0','$autor','$destinatario', '$assunto','$conteudo',NOW())");
$dados = mysqli_query($conn, $sql);

mysqli_close($conn);

header("Location:../relatorios_func.php");



?>