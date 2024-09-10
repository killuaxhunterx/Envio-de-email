<?php

    $quando_aconteceu = $_POST['quando'];
    $por_quanto_tempo = $_POST['quantos'];
    $descricao_do_alien = $_POST['descricao'];
    $onde_fang_estava = $_POST['estranhos'];
    $email = $_POST['email'];
    $quantos = $_POST['quantidade'];
    $name = $_POST['nome'] . " "  . $_POST['ultimo'];
    $fizeram = $_POST['fizeram'];
   
    $subject = "Aliens me abduziram - Relatório de Abdução";
    $to = "arthurnegaodebsb@gmail.com";
    $msg = $name . "foi abduzido em $quando_aconteceu e esteve ausente por $por_quanto_tempo horas.\n.." .

        "Números de aliens: $quantos\n.." .
        "Descrição dos aliens: $descricao_do_alien\n.." .
        "O que eles fizeram: $fizeram \n.." .
        "Fang foi visto?: $onde_fang_estava \n..";

    mail($to, $subject, $msg, 'From: ' . $email);

    
        echo 'Obrigado por enviar o formulário ' . $name ."! <br>";
        echo 'Você foi abduzido ' . $quando_aconteceu . "<br>";
        echo 'e foi por... ' . $por_quanto_tempo . "<br>";
        echo 'Número de Aliens: ' . $quantos . "<br>";
        echo 'Descreva eles: ' . $descricao_do_alien . "<br>";
        echo 'O que eles fizeram: ' . $fizeram . "<br>";
        echo 'Fang estava lá? ' . $onde_fang_estava . "<br>";
        echo 'Seu endereço de email é: ' . $email . "<br>";

?>