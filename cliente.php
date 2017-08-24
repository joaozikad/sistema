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
			<form action="php/cliente_PHP/clienteInserir.php" method="POST">
            <h2>Cadastrar Cliente</h2>
<input type="text" name="nome" placeholder="Digite seu nome"><BR><br>
<input type="email" placeholder="Digite seu email" required="@" name="email"><BR><br>
<input placeholder="Telefone" type="text" name="fone" required="85"><BR><br>
<input type="text" name="cpf" placeholder="digite apenas os números de seu CPF "><BR><br>
<input type="text" name="rg" placeholder="digite apenas os números de seu CPF "><BR><br>

<?php

$servidor = '127.0.0.1';
$usuario = 'root';
$senha = 'root';
$banco = 'sistema';
// Conecta-se ao banco de dados MySQL
$link = new mysqli($servidor, $usuario, $senha, $banco);

if (!$mysqli) {
	# code...

	
}
$sql = "SELECT * FROM planos";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
     
        while($row = mysqli_fetch_array($result)){
          
               /// echo "<td><image/" . $row['foto'] . ".jpg</td>";

                echo "<td><input type='radio' name='pacote'value='" . $row['nome'] . "'>" . $row['nome'] . "</input></td>";


        }
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "Sem usuários cadastrados.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
?>
<BR><br>
<input type="submit" Value="Enviar">
</form>
    </div>
    <!-- DELETAR CLIENTE -->
<form method="POST" action="php/cliente_PHP/excluirCliente.php">
<center>
<h2>Excluir cliente.</h2><br> Digite o nome:
<input type="text" name="nome">
<input type="submit" value="Excluir">
</center>
</form>
<br><br><br>
<br><br><br>


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

// Conecta-se ao banco de dados MySQL

include("php/conecta.php");

/// Chama dados
$sql = "SELECT cliente.*, planos.preco
FROM cliente
INNER JOIN planos ON cliente.pacote = planos.nome;";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table >";
            echo "<tr class='fixo'>";
                echo "<th class='fixo'>COD</th>";
                echo "<th class='fixo'>Nome</th>";
                echo "<th class='fixo'>fone</th>";
                echo "<th class='fixo'>email</th>";
                echo "<th class='fixo'>pacote</th>";
                echo "<th class='fixo'>cpf</th>";
                echo "<th class='fixo'>rg</th>";
                echo "<th class='fixo'>Preço a pagar</th>";
                echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['cod'] . "</td>";
                echo "<td>" . $row['nome'] . "</td>";
                echo "<td>" . $row['fone'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
                echo "<td>" . $row['pacote'] . "</td>";
                echo "<td>" . $row['cpf'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
                echo "<td>" . $row['preco'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
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
</div>
</body>
</html>