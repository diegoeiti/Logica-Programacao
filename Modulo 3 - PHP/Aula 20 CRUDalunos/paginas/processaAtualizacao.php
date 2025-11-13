<?php
include("../conexao/conexao-banco.php");

if (isset($_POST["id"])) {
    $id = $_POST["id"];
    $nome = $_POST["nome"];
    $sobrenome = $_POST["sobrenome"];
    $curso = $_POST["curso"];

    $sql = "UPDATE usuarios SET nome = ?, sobrenome = ?, curso = ? WHERE id = ?";
    $stmt = $conn->prepare($sql);

    if ($stmt) {
        $stmt->bind_param("sssi", $nome, $sobrenome, $curso, $id);
        if ($stmt->execute()) {
            echo "<div class='mensagem sucesso'>Cadastro atualizado com sucesso!</div>";
        } else {
            echo "<div class='mensagem erro'>Erro ao atualizar cadastro.</div>";
        }
    } else {
        echo "<div class='mensagem erro'>Falha na preparação da query.</div>";
    }
}
?>
<br>
<a href='atualizarCadastro.php'>Voltar</a>
