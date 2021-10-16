<!DOCTYPE html>
<?php
// chamar as configuracoes para conexao a base de dados
include("config.php");
// Verificar a conexao
if(!$conexao){
    echo "Erro de Conexão com a base de Dados";
}

$customer_name = $_POST["customer_name"];
$customer_street =$_POST["customer_street"];
$customer_city =$_POST["customer_city"];

?>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Registro de clientes na Base de Dados</title>
    <style>
        body{
            font-family: Georgia, 'Times New Roman', Times, serif;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <?php
         $sql = "insert into customer values('$customer_name', '$customer_street', '$customer_city')";
         mysqli_query($conexao, $sql);
         mysqli_close($conexao);
         echo "O <strong> Cliente  </strong><strong>$customer_name</strong> foi cadastrado com sucesso<strong>";
    ?>
    <a href="index.php"><b>Pagina Inicial</b></a>
</body>
</html>
