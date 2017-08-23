<?php  
$servidor = '127.0.0.1';
$usuario = 'root';
$senha = '';
$banco = 'sistema';
// Conecta-se ao banco de dados MySQL
$mysqli = new mysqli($servidor, $usuario, $senha, $banco);

if (!$mysqli) {
	# code...

	echo "erro";
}

$nome = $_POST['nome_plano'];


/// Inserir Plano

mysqli_query($mysqli,"DELETE FROM planos WHERE nome = '$nome'");
if(!mysqli_query){
echo "Error";
}else
{
	echo "volte <a href='../planos.php'>a qui</a>";
}


?>