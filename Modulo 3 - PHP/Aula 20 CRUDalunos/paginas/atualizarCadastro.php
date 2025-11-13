<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar Cadastro</title>
    <link rel="stylesheet" href="../estilos/styleVerificar.css">
</head>
<body>

<header>
    <nav>
        <ul>
            <li><a href="../index.html">Home</a></li>
            <li><a href="cadastro.php">Cadastrar Usuário</a></li>
            <li><a href="verificarUsuario.php">Procurar Usuário</a></li>
        </ul>
    </nav>
</header>

<main>
    <section id="containerSection">
        <form action="" method="post">
            <label for="id">Informe o ID do aluno:</label>
            <input type="number" name="id" id="id" required>
            <input type="submit" value="Buscar">
        </form>
    </section>

    <section>
        <?php
        if (isset($_POST["id"])) {
            include("../conexao/conexao-banco.php");

            $id = $_POST["id"];
            $sql = "SELECT * FROM usuarios WHERE id = ?";
            $stmt = $conn->prepare($sql);

            if ($stmt) {
                $stmt->bind_param("i", $id);
                $stmt->execute();
                $resultado = $stmt->get_result();

                if ($resultado->num_rows > 0) {
                    $usuario = $resultado->fetch_assoc();

                    echo "
                    <h2 style='text-align:center'>Atualizar Cadastro do Aluno #{$usuario['id']}</h2>
                    <form action='processaAtualizacao.php' method='post' id='form-atualiza'>
                        <input type='hidden' name='id' value='{$usuario['id']}'>
                        <label>Nome:</label>
                        <input type='text' name='nome' value='{$usuario['nome']}' required><br>

                        <label>Sobrenome:</label>
                        <input type='text' name='sobrenome' value='{$usuario['sobrenome']}' required><br>

                        <label>Curso:</label>
                        <select name='curso' required>
                            <option value='ads' " . ($usuario['curso'] == 'ads' ? 'selected' : '') . ">Análise e Desenvolvimento de Sistemas</option>
                            <option value='es' " . ($usuario['curso'] == 'es' ? 'selected' : '') . ">Engenharia de Software</option>
                            <option value='si' " . ($usuario['curso'] == 'si' ? 'selected' : '') . ">Sistemas de Informação</option>
                            <option value='cc' " . ($usuario['curso'] == 'cc' ? 'selected' : '') . ">Ciências da Computação</option>
                        </select><br>

                        <input type='submit' value='Salvar Alterações'>
                    </form>
                    ";
                } else {
                    echo "<div class='mensagem erro'>Nenhum aluno encontrado com esse ID.</div>";
                }
            }
        }
        ?>
    </section>
</main>

</body>
</html>
