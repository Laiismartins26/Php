<?php
// Configuração de conexão com banco de dados
$host = "localhost";
$user = "root";
$password = "";
$database = "biblioteca";

$conn = new mysqli(hostname: $host, username: $user, password: $password, database: $database);

if ($conn->connect_error) {
    die("Conexão falhou: ". $conn->connect_error);
}
?>