<?php
// $servername = "localhost";
  $servername = "ns320.hostgator.com.br";
// $username = "user";
  $username = "itaca014_dbteste";
// $password = "234";
  $password = "vitoria22";
  $dbname = "itaca014_teste";

// Conectando com o BD:
$conn = new mysqli($servername, $username, $password, $dbname);

// Checando conexão:
if ($conn->connect_error) {
    die("Falha ao conectar: " . $conn->connect_error);
} 

?>