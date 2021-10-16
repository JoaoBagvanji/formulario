<?php

$account_number=$_POST['account_number'];
$branch_name=$_POST['branch_name'];
$balance=$_POST['balance'];

$strcon = mysqli_connect('localhost','root','','banco') or die('Erro ao conectar ao banco de dados');
$sql = "INSERT INTO account VALUES ";
$sql .= "('$account_number', '$branch_name', '$balance')"; 
mysqli_query($strcon,$sql) or die("Erro ao tentar cadastrar registro");
mysqli_close($strcon);
echo "Cliente cadastrado com sucesso!<br>";
echo "<a href='index.php'>Caso deseje realizar um novo cadastro,Clique aqui</a><br>";
echo "<a href='listar.php'>Caso deseje  realizar uma consulta,Clique aqui</a><br>";










?>