<?php  
/// Conexão com o Banco de Dados
include("../conecta.php");

/// Remover Usuário
$nome_excluir = $_POST["nome_excluir"];
mysqli_query($link,"DELETE FROM usuario WHERE nome = $nome_excluir;");

/// Exibe uma mensagem ao usuário
echo "<a href='../../usuario.php'>Volte aqui</a>";
?>