<?php
/*Atributos para que possa ser feito a conexão*/

define('SERVER','localhost');
define('NOMEBANCO','farmacia');	
define('USER', 'root');
define('SENHA', '');
/*conexão PDO com o banco mysql
Tratamento de erro try/catch
Uma mensagem de erro será enviada
*/


try {
$conn = new PDO('mysql:host='.SERVER.';dbname='.NOMEBANCO,USER,SENHA);

} catch (PDOException $e) {

	echo 'ERRO NA CONEXÃO: ' . $e->getMessage();
}


?>