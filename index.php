<?php

    include('config.php');



?>

<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projecto-PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <section class="content">

        <div class="contato">
            <h3>Formulario de Contato</h3>
            <form class="form" method="POST" action="./contato.php">
                <input class="field" name="customer_name" placeholder="Nome">
                <input class="field" name="customer_city" placeholder="cidade">
                <input class="field" name="customer_street" placeholder="Rua">
                <input class="field" type="submit" value="submeter">
            </form>
            <form action="listar.php">
                <button class="field" type="submit">Pesquisar</button>
            </form>
            <form action="conta.php">
                <button class="field" type="submit">Adicionar Conta</button>
            </form>
            <form action="listarconta.php">
                <button class="field" type="submit">Procurar Conta</button>
            </form>
            <form action="associarcontas.php">
                <button class="field" type="submit">Associar</button>
            </form>

        </div>

    </section>
    
</body>
</html>