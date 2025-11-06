<?php
    // Valida se o $_POST["id"] está vazio
    if(isset($_POST["id"])){
        
        //Conexao com o banco de dados
        include("../conexao/conexao.php");

        // criar variavel do ID 
        $id = $_POST["id"];

        // Prepara a consulta SQL para deletar o cadastro
        $sql = "DELETE FROM usuarios WHERE ID = ?";
        $stmt = $conn->prepare($sql);

        if($stmt) {
            $stmt->bind_param("i", $id);

            //Executa a query
            $stmt->execute();
            header("Location: verificarUsuario.php");
            //Encerra a consulta
            $stmt->close();
        } else {
            echo "<div class='mensagem erro'> Erro na consulta </div>";
        }
        // Encerra conexa 
        $conn->close();

    }


?>