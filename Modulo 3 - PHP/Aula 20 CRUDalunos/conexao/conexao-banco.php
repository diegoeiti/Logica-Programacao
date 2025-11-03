<?php
$host = 'localhost';
$user = 'root';
$password = "diegodev123";
$database = 'faculdade';

// Criar conexão
$conn = new mysqli($host, $user, $password, $database);

// Verificar conexão
if ($conn->connect_error) {
  die("Erro de conexão: " . $conn->connect_error);
}
