<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processar input via PHP</title>
    <link rel="stylesheet" href="stylephp.css">
</head>
<body>
    <main class="container">
        <h1>Dados Enviados</h1>

        <?php
            // echo var_dump($_POST);
            echo $_POST['nome'];
            echo $_POST['sobreNome'];
            echo $_GET['nome'];
            echo $_GET['sobreNome'];
            echo $_REQUEST['nome'];
            echo $_REQUEST['sobreNome'];
            $nome = $_POST['nome'];
            $sobrenome = $_POST['sobreNome'];
            $email = $_POST['email'];
            $senha = $_POST['senha'];
            echo "<br>Meu nome é: " . $nome;
            echo "<br>Meu sobrenome é: " . $sobrenome;
            echo "<br>Meu email é: " . $email;
            echo "<br>Minha senha é:   $senha";
            echo "<p id='campoNome'>Meu nome é: <strong>com toda certeza</strong> $nome </p>"
        ?>
    </main>
</body>
</html>