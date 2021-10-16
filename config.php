<?php
$host = 'localhost';
$database = 'banco';
$username = 'root';
$password = '';
$conexao = new mysqli($host,$username,$password,$database);

if (!$conexao) {
    die("Connection failed: " . mysqli_connect_error());
}
?>