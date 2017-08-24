<?php  
/// Conexão com o banco
include("../conecta.php");

/// Dados do formulário de cadastro de Usuário
$nome = $_POST['nome'];
$email= $_POST['email'];
$senha= $_POST['senha'];

/// Inserir Usuário
$criptografia=base64_encode($senha);
mysqli_query($mysqli,"INSERT INTO usuario (nome,email,senha,foto)VALUES ('$nome','$email','$criptografia','$nome_imagem')");

/// Exibe uma mensagem ao usuário
echo "<a href='../../usuario.php'>Volte aqui</a>";
?>
