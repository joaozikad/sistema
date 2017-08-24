<?php
/// Conexão com o Banco
include("../conecta.php");

/// Nome usado para excluir
$nome = $_POST["nome"];

/// Executa o sql e a variavel de conexão
mysqli_query($link,"DELETE FROM cliente WHERE nome = '$nome'");

/// Envia uma mensagem ao usuário
echo "Usuário excluído. <a href='../../cliente.php'>Volte aqui</a>";







?>