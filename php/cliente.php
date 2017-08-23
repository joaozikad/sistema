<?php

$local = "127.0.0.1";
$usuario = "root";
$senha = "";
$db = "sistema";

$link = new mysqli($local, $usuario, $senha, $db);


$nome = $_POST["nome"];
$email= $_POST["email"];
$fone = $_POST["fone"];
$pacote= $_POST["pacote"];
$cpf= $_POST["cpf"];
$rg= $_POST["rg"];

mysqli_query($link,"INSERT INTO cliente (nome,fone,email,pacote,cpf,rg)VALUES ('$nome','$fone','$email','$pacote','$cpf','$rg')");










?>