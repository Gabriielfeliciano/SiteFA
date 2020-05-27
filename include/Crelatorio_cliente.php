<?php
session_start();
include "conn.php";

 
//variáveis do Formulário
  
$autor =     			$_SESSION['nome'];  
$destinatario =     	$_POST["destinatario"]; 
$assunto = 				$_POST["assunto"];
$conteudo = 			$_POST["conteudo"];

//$arquivos_permitidos = ['jpg','jpeg','png','txt','pdf','csv','jar','html','php','css','js','xlsx'];

//$arquivos = $_FILES['arquivos'];

//$nomes = $arquivos['name'];




 
$sql = ("INSERT INTO relatoriocliente VALUES ('0','$autor','$destinatario', '$assunto','$conteudo',NOW())");
$dados = mysqli_query($conn, $sql);

/*for ($i=0; $i < count($nomes); $i++) { 
	$extensao = explode('.', $nomes[$i]);
	$extensao = end($extensao);

	if (in_array($extensao, $arquivos_permitidos)) {
			$sql2 = ("INSERT INTO arqcliente VALUES ('0', '$nomes[$i]','$assunto', NOW())");

			$dados2 = mysqli_query($conn, $sql2);
	}
}*/

mysqli_close($conn);

header("Location:../relatorios_clientes.php");



?>