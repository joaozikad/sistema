
<?php
$servidor = '127.0.0.1';
$usuario = 'root';
$senha = 'root';
$banco = 'sistema';
// Conecta-se ao banco de dados MySQL
$link = new mysqli($servidor, $usuario, $senha, $banco);
 
if (!$link) {
  echo "error_log(message)";
}

mysqli_query($link);
?>