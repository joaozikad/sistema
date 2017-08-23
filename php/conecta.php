
<?php
$servidor = '127.0.0.1';
$usuario = 'root';
$senha = '';
$banco = 'sistema';
// Conecta-se ao banco de dados MySQL
$mysqli = new mysqli($servidor, $usuario, $senha, $banco);
 
if (!$mysqli) {
  echo "error_log(message)";
}

mysqli_query($mysqli);
?>