<?php

    $servername = "localhost"; //IP ou dominio do server
    $username = "root"; // usuario do banco de dados
    $password = ""; //senha do usuario do banco de dados
    $dbname = "faculdade";

    // Cria a conexao
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verificar conexao
    if ($conn->connect_error){
        die("Conexão Falhou");
    }
?>