    <?php

    // Percorrer array 
    $nomes = ["Caio", "Marcos", "Diego"];

    foreach($nomes as $nome) {
        echo $nome . "<br>";
    }


    // Percorrer array Associativo
    $notasAtividade = [
        "Caio" => 10 ,
        "Marcos" => 8 ,
        "Diego" => 9
    ];

    foreach($notasAtividade as $nome => $nota) {
        echo $nome . " nota: " . $nota . "<br>";
    }
    // Percorrer dois arrays Associativos
    $notasAtividade = [
        "Caio" => 10 ,
        "Marcos" => 8 ,
        "Diego" => 9
    ];

    $notasProva = [
        "Caio" => 9 ,
        "Marcos" => 7 ,
        "Diego" => 6
    ];

    foreach($notasAtividade as $nome => $nota) {
        $prova = $notasProva[$nome];

        echo $nome . " nota: " . $nota . "<br>";
        echo $nome . " nota: " . $prova . "<br>";
    }

    ?>