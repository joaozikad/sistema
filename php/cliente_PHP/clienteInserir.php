<?php

include("../conecta.php");

/// Dados do Cliente.php para inserir

$nome = $_POST["nome"];
$email= $_POST["email"];
$fone = $_POST["fone"];
$pacote= $_POST["pacote"];
$cpf= $_POST["cpf"];
$rg= $_POST["rg"];

/// Executar o sql

mysqli_query($link,"INSERT INTO cliente (nome,fone,email,pacote,cpf,rg)VALUES ('$nome','$fone','$email','$pacote','$cpf','$rg')");



echo "<a href='../../cliente.php'>Volte aqui</a>"






?>