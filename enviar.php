<?php


    $nome = $_POST['nome'] . " " . $_POST['ultimo'];
    $email = $_POST['email'];
    $to = $_POST['for'];
    $subject = $_POST['subject'];
    $corpo_email = $_POST['corpo'];

    $msg = $corpo_email;


    mail($to, $subject, $msg);





















?>