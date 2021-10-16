
<?php

include('config.php');
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
mysqli_select_db($conn,"banco");
$sql = "SELECT customer_name FROM customer INNER JOIN account on account.branch_name=customer.customer_name";
$resultado = mysqli_query($conn,$sql) or die(mysqli_error($conn)."<br>Erro ao executar a inserção dos dados");
echo"<table border='1'>
<tr>
<th>Cliente nome</th>
<th>Cliente numero</th>
<th>Balance</th>
</tr>";
while($registro = mysqli_fetch_array($resultado)){
    $id=$registro['account_number'];
    $clientenome=$registro['customer_name'];
    $balance = $registro['balance'];
    echo"<tr>";
    echo"<td>".$id."</td>";
    echo"<td>".$clientenome."</td>";
    echo"<td>".$balance."</td>";
    echo"</tr>";
}
mysqli_close($conn);
echo "</table>";

?>
