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
/// Remover Usuário

$nome_excluir = $_POST["nome_excluir"];


mysqli_query($mysqli, "DELETE FROM usuario WHERE nome = '$nome_excluir';");

echo "Usuario excluído com sucesso.<a href='../usuario.php'>Volte aqui</a>";

?>