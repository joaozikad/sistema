<?php  
// Conecta-se ao banco de dados MySQL
include("../conecta.php");

/// Dado do formulário Excluir PLano
$nome = $_POST['nome_plano'];

/// Inserir Plano
mysqli_query($link,"DELETE FROM planos WHERE nome = '$nome'");

/// Exibe Mensagem ao usuário
echo "<a href='../../planos.php'>Volte aqui</a>";
?>