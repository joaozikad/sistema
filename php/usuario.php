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

$nome = $_POST['nome'];
$email= $_POST['email'];
$senha= $_POST['senha'];
$foto= $_FILES['foto'];

		preg_match("/\.(gif|bmp|png|jpg|jpeg){1}$/i", $foto["name"], $ext);

		// Gera um nome único para a imagem
		$nome_imagem = md5(uniqid(time())) . "." . $ext[1];

		// Caminho de onde ficará a imagem
		$caminho_imagem = "fotos/" . $nome_imagem;

		// Faz o upload da imagem para seu respectivo caminho
		move_uploaded_file($foto["tmp_name"], $caminho_imagem);

/// Inserir Usuário
$criptografia=base64_encode($senha);
mysqli_query($mysqli,"INSERT INTO usuario (nome,email,senha,foto)VALUES ('$nome','$email','$criptografia','$nome_imagem')");
echo "usuario inserido com sucesso. <a href='../usuario.php'>Clique aqui para voltar</a>";
echo "<img src='image/".$usuario->foto."' alt='Foto de exibição' /><br />";
/// Remover Usuário

$nome_excluir = $_POST["nome_excluir"];


mysqli_query("DELETE FROM usuario WHERE nome = $nome_excluir;");












?>
