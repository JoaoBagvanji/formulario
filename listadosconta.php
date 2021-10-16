<?php
 // Conectando ao banco de dados:
 $servername = "localhost";
$username = "root";
$password = "";
$database = "banco";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";



 $pesquisa = $_POST['customer_name'];
?>

 <html>
 <head>
 <link href="style.css" rel="stylesheet" type="text/css">
 <title>Resultado da pesquisa</title>
 </head>
 <body>
 
 <!-- Criando tabela e cabeçalho de dados: -->
 <table border="2" style='width:50%'>
 <tr>
 <th>Identificador</th>
 <th>branch_name</th>
 <th>balance</th>
 </tr>
 
 <!-- Preenchendo a tabela com os dados do banco: -->
 <?php
 $sql = "SELECT * FROM account WHERE account_number = '$pesquisa'";
 $resultado = mysqli_query($conn,$sql) or die("Erro ao retornar dados");
 
 // Obtendo os dados por meio de um loop while
 while ($registro = mysqli_fetch_array($resultado))
 {
   $Identificador = $registro['account_number'];
   $branch_name = $registro['branch_name'];
   $balance = $registro['balance'];
   echo "<tr>";
   echo "<td>".$Identificador."</td>";
   echo "<td>".$branch_name."</td>";
   echo "<td>".$balance."</td>";
   echo "</tr>";
 }
 mysqli_close($conn);
 echo "</table>";
?>
</body>
</html>