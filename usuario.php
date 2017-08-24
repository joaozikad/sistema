<!DOCTYPE html>
<head>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>SCF-Sistema </title>
	<div id="paginatopo">
<br><br><br><br><br>
<div id="titulo">Sistema</div>
</div><center>
<ul class="menu">
<a href=""><li><img src="image/iconProdutos.png" height="50"><br>Produtos</li></a>
<a href="cliente.php"><li><IMG SRC="image/iconCliente.png" height="50"><br>Clientes</li></a>
<a href="usuario.php"><li><img src="image/iconUsuario.png" height="50"><br>Usuários</li></a>
<a href=""><li><img src="image/iconVendedor.png" height="50"><br>Vendedores</li></a>
<a href="planos.php"><li><img src="image/iconProdutos.png" height="50"><br>Planos</li></a>
</ul>
</center>
</head>
<body>
	<div class="container">
		<div class="formulario" id="usuario">
			<form action="php/usuario_PHP/.php" method="POST">
            <h2>Cadastrar Usuário</h2>
<input type="text" name="nome" placeholder="Digite seu nome"><BR><br>
<input type="email" placeholder="Digite seu email" required="@" name="email"><BR><br>
<input placeholder="digite sua senha" type="password" name="senha"><BR><br>
<!--<input type="file" name="foto">-->
<input type="submit" Value="Enviar" href="paginaprincipal.html">

</form>
        </div>
    <!-- deletar usuario -->
    
<form method="POST" action="php/excluir_usuario.php">
<center>
<h2>Excluir usuário.</h2><br> Digite o nome:
<input type="text" name="nome_excluir">
<input type="submit" value="Excluir">

</center>
</form>
<br><br><br><br><br><br>

<center>
<style type="text/css">
	.fixo th{
		background: red;
	}
	tr{
background: white;
	}
    .fixo th:hover{
        color=black;
    }
		tr:hover{
background: blue;
color: white;
	}
</style>
<?php 
$servidor = '127.0.0.1';
$usuario = 'root';
$senha = 'root';
$banco = 'sistema';
// Conecta-se ao banco de dados MySQL
$link = new mysqli($servidor, $usuario, $senha, $banco);

$sql = "SELECT * FROM usuario";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table >";
            echo "<tr class='fixo'>";
               /// echo "<th class='fixo'>foto</th>";
                echo "<th class='fixo'>COD</th>";
                echo "<th class='fixo'>Nome</th>";
                echo "<th class='fixo'>Senha</th>";
                echo "<th class='fixo'>email</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
               /// echo "<td><image/" . $row['foto'] . ".jpg</td>";
                echo "<td>" . $row['COD'] . "</td>";
                echo "<td>" . $row['nome'] . "</td>";
                echo "<td>" . base64_decode($row['senha']) . "</td>";
                echo "<td>" . $row['email'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "Sem usuários cadastrados.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
?>
</center>
    </div>
</div










>
</body>
</html>