<?php
$host = 'localhost';
$user = 'root';
$password = "diegodev123";
$database = 'faculdade';

// Conectar ao MySQL
$conn = new mysqli($host, $user, $password);

// Criar banco de dados
$sql = "CREATE DATABASE IF NOT EXISTS $database";
$conn->query($sql);

// Conectar ao banco
$conn->select_db($database);

// **EXCLUIR a tabela se existir**
$sql = "DROP TABLE IF EXISTS usuarios";
$conn->query($sql);

// **CRIAR a tabela com a estrutura correta**
$sql = "CREATE TABLE usuarios (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(100) NOT NULL,
    sobrenome VARCHAR(100) NOT NULL,
    email VARCHAR(150) NOT NULL UNIQUE,
    curso VARCHAR(50) NOT NULL,
    nota_atividade INT NOT NULL DEFAULT 0,
    nota_prova INT NOT NULL DEFAULT 0,
    nota_final INT NOT NULL DEFAULT 0,
    data_cadastro TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
    echo "Tabela criada com sucesso!<br>";
} else {
    echo "Erro ao criar tabela: " . $conn->error . "<br>";
}

echo "Setup completo! O banco está pronto para uso.";

// **REMOVA ou COMENTE esta linha:**
// $conn->close();
