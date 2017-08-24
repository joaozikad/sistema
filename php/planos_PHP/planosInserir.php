<?php  
/// Conexão com o Banco
include("../conecta.php");

/// Dados do Formulário de cadastros de planos
$nome = $_POST['nome_plano'];
$opcao= $_POST['opcao'];
$preco= $_POST['preco'];
$mega = $_POST['mega'];

/// Inserir Plano
mysqli_query($link,"INSERT INTO planos (nome,preco,opcao,mega)VALUES ('$nome','$preco','$opcao','$mega')");

/// Exibe Mensagem ao usuário
echo "<a href='../../planos.php'>Volte aqui</a>";
?>