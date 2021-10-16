<html>
    <head>
        <link href="style.css" rel="stylesheet" type="text/css">
    </head>

    <body>
        <ul>
            <li><a href="index.php">Pagina Inicial</a></li>
           
          </ul>

        <?php
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



$sql = "SELECT branch_name FROM branch ORDER BY branch_name";
$resultado = mysqli_query($conn,$sql) or die(mysql_error()."<br>Erro ao executar a inserção dos dados");

if (mysqli_num_rows($resultado)!=0){
echo '<form name="Combobox" action="adicionarconta.php" method="POST">';
echo 'account_number:<input type=text name=account_number placeholder="id"><br>';
echo 'Saldo Inicial:<input type= texte name=balance><BR>';
echo '<select name="branch_name" id="branch_name">
<option value=" " selected="selected">Escolha a Agencia:</option>';
while($elemento = mysqli_fetch_array($resultado))
{
  $nomeItem = $elemento['branch_name'];
  echo '<option value="'.$nomeItem.'">'.$nomeItem.'</option>';
}
echo '</select> </br>'; 
echo '<input type="submit" name="btnEnvia" value="adicionar">';
echo '</form>';
}
?>

</body>        