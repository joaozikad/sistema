<!DOCTYPE html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>SJP-Sistema</title>
	<div id="paginatopo">
<br><br><br><br><br>
<div id="titulo">Sistema-SJP</div>
</div><center>
<ul class="menu">
<a href="produtos.html"><li><img src="image/iconProdutos.png" height="50"><br>Produtos</li></a>
<a href="cliente.php"><li><IMG SRC="image/iconCliente.png" height="50"><br>Clientes</li></a>
<a href="usuario.php"><li><img src="image/iconUsuario.png" height="50"><br>Usuários</li></a>
<a href=""><li><img src="image/iconVendedor.png" height="50"><br>Vendedores</li></a>
<a href="planos.php"><li><img src="image/iconProdutos.png" height="50"><br>Planos</li></a>
</ul>
</center>
</head>
<body>
	<div class="container">

<form method="POST" action="php/planosInserir.php">
<center>
<br><br><br><br>
<h2>Cadastrar Plano</h2>
<br><br>
<input type="radio" name="opcao" value="beta">beta
<input type="radio" name="opcao" value="alfa">alfa
<input type="radio" name="opcao" value="omega">omega<br><br>
<input type="text" name="nome_plano" placeholder="nome do plano"><br><br>
<input type="text" name="mega" placeholder="quantidade de megas"><br><br>
<input type="TEXT" value="R$ " name="preco" required="R$" placeholder="R$ preço"><br><br><br>
<input type="submit" value="enviar">
</center>
</form>
<hr>
<!--DELETAR PLANOS-->
<center>
<h2>Deletar Plano</h2>
<form action="php/planos_excluir.php" method="POST">
	<input type="text" name="nome_plano" placeholder="Digite o código para excluir">
    <input type="submit">
</form>
</center>

<!--TABELA DE PLANOS-->

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
$servidor = '127.0.0.1';
$usuario = 'root';
$senha = '';
$banco = 'sistema';
// Conecta-se ao banco de dados MySQL
$link = new mysqli($servidor, $usuario, $senha, $banco);

if (!$mysqli) {
	# code...

	
}

$sql = "SELECT * FROM planos";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table >";
            echo "<tr class='fixo'>";
                echo "<th class='fixo'>COD</th>";
                echo "<th class='fixo'>Nome</th>";
                echo "<th class='fixo'>Qntd. Mega</th>";
                echo "<th class='fixo'>opção</th>";
                echo "<th class='fixo'>preco</th>";				
				echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['cod'] . "</td>";
                echo "<td>" . $row['nome'] . "</td>";
                echo "<td>" . $row['mega'] . "</td>";
                echo "<td>" . $row['opcao'] . "</td>";
                echo "<td>" .$row['preco'] . "</td>";				
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
</body>
</html>