 <?php
if (isset($_POST['idAdministrador']) && isset($_FILES['arquivo'])) {
	   

	$modificar = 			$_POST['idAdministrador'];
	$extensao = strtolower(substr($_FILES['arquivo']['name'], -4));
	$novo_nome = md5(time()) . $extensao;
	$diretorio = "../img/";

	move_uploaded_file($_FILES['arquivo']['tmp_name'], $diretorio.$novo_nome);

 include "conn.php";

// cria a instrução SQL que vai selecionar os dados
$query = ("UPDATE administrador SET fotoPerfil = '$novo_nome'  WHERE idAdministrador = $modificar");

$dados = mysqli_query($conn,$query) or die(mysqli_error());

header("Location:../perAdm.php");

}

?>