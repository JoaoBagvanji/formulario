<?php
session_start();
 include("config.php");

if($_SERVER["REQUEST_METHOD"] == "POST") {
    // username and password sent from form

    $nome = $_POST["identificador"];

    $sql="select * from customer;";

    $result=mysqli_query($conexao,$sql);

    $count=0;

    $count=mysqli_num_rows($result);

    if($count==1){
        $msg="Encontrou";
    }else{
        $_SESSION['msg']='<br><h3 style="color: red">Cliente não encontrado</h3>';

        $url="listar.php";

        header("location:".$url,true);
    }

}
?>

<!DOCTYPE html>
<html lang="">
<head>
    <title>Pesquisa Cliente</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link href="style.css" rel="stylesheet" type="text/css" media="all">
</head>
<body>
<div class="content">

    <div class="comments">
        <h2>Pesquisa</h2>
        <form action="listados.php" method="post">
            <div class="field">
                <input type="text" name="identificador" id="identificador" placeholder="Nome" size="22" required>
            </div>
            <div class="field">
                <input type="submit" name="submit" value="Pesquisar">
            </div>


         
        </form>
    </div>
</div>
	<a href="index.php"><b>Criar Cliente</b></a>
</body>
