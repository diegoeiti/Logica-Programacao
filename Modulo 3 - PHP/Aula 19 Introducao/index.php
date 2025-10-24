<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Introducao PHP</title>
</head>
<body>
    <h1>
        <?php
            echo "Hello World!";
        ?>
    </h1>

    <h2>Variaveis em PHP</h2>

    <p>
        <?php
            $nome = "Diego";
            $sobrenome = "Nakashima";
            echo "Nome: $nome <br>";
            echo "Sobrenome: $sobrenome";
        

        ?>
    </p>

    <h2>Constantes em PHP</h2>

    <p>
        <?php

            const faculdade = "UMC";
            const cidade = "Mogi das Cruzes";

            echo "Faculdade" . faculdade . "<br>";
            echo "Cidade" . cidade . "<br>";

        ?>
    </p>
</body>
</html>