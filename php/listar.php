<html:






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

$sql = "SELECT * FROM usuario";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        ?><table><tr>
               <th>id</th>";
              <th>first_name</th>";
             <th>last_name</th>";
				<th>email</th>";
            </tr>";
            <?php
        while($row = mysqli_fetch_array($result)){?>
            echo "<tr>";
                echo "<td><?php . $row['cod']?> 
        </td>
       </table>


</html>