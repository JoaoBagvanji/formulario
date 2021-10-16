

<!DOCTYPE html>
<html lang="">
<head>
    <title>Pesquisa Cliente</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link href="style.css" rel="stylesheet" type="text/css" media="all">
</head>
<body>
	<a href="listar.php"><b>Procurar Cliente</b></a>
	<br/>
	<a href="index.php"><b>Criar Cliente</b></a>
	<br/>
	<br/>
    <table>
        <thead>
        <th>NOME</th>
        <th>Rua</th>
        <th>Cidade</th>
        </thead>
        <tbody>
                <?php
        include("config.php");
        $identificador = $_POST['identificador'];
        $query2="SELECT * FROM customer WHERE customer_name like '%$identificador%'";

        $result=mysqli_query($conexao,$query2);

        if(isset($result)){
            if(mysqli_num_rows($result)>=1){

                while($row = mysqli_fetch_assoc($result)) {
                    echo "<tr><td>".$row["customer_name"]."</td><td>".$row["customer_street"]."</td><td>".$row["customer_city"]."</td>
                        </tr>";
                }
            }else{
                if(isset($_SESSION['msg'])){
                    echo $_SESSION['msg'];
                    unset($_SESSION['msg']);
                }
            }
        }
        ?>
        </tbody>
    </table>
</body>
