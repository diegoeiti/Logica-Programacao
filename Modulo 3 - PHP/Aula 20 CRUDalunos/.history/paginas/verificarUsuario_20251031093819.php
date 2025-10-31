<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificar Usuário</title>
    <link rel="stylesheet" href="../estilos/styleVerificar.css">
</head>
<body>
    
    <header>
        <nav>
            <ul>
                <li><a href="../index/html">Home</a></li>
                <li><a href="cadastro.php">Cadastrar Usuários</a></li>
                <li><a href="#">Procurar Usuario</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section id="container">
            <form action="verificarUsuario.php" method="post">
                <input type="email" name="email" id="email" placeholder="Informe seu e-mail">
                <input type="submit" value="Buscar">
            </form>
        </section>

        <section>

            <?php

                if(isset($_POST["email"])) {
                    include("../conexao/conexao.php");
                    $email = $_POST["email"];

                    $sql = "SELECT * FROM usuarios WHERE email = ?";
                    $stmt = $conn->prepare($sql);

                    if($stmt) {
                        $stmt->bind_param("s", $email);
                        $stmt->execute();
                        $stmt->bind_result($id, $nome, $email);
                        $usuarios = [];

                        while ($stmt->fetch()) {
                            $usuarios[] = [
                                'id' => $id,
                                'nome' => $nome,
                                'email' => $email
                            ];
                        }

                        print_r($usuarios);
                    }

                
                }

            ?>

        </section>
    </main>
</body>
</html>