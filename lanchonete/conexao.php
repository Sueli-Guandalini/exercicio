<?php

    $sgbd = "mysql";
    $local = "localhost:3307";
    $nome_bd = "lanchonete";
    $usuario = "root";
    $senha = "usbw";

    $conexao = new PDO("$sgbd:host=$local;dbname=$nome_bd",$usuario,$senha);

?>

