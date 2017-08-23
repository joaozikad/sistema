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
$opcao= $_POST['opcao'];
$preco= $_POST['preco'];
$mega = $_POST['mega'];
/// Inserir Plano

mysqli_query($mysqli,"INSERT INTO planos (nome,preco,opcao,mega)VALUES ('$nome','$preco','$opcao','$mega')");
if(!mysqli_query){
echo "Error";
}else
{
	echo "volte <a href='../planos.php'>a qui</a>";
}


?>