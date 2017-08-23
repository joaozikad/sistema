<?php




mysqli_query("SELECT * FROM usuario WHERE nome='$nome_login'")

if (mysql_num_rows($query) != 1) {
    // Mensagem de erro quando os dados são inválidos e/ou o usuário não foi encontrado
    echo "Login inválido!"; exit;


?>