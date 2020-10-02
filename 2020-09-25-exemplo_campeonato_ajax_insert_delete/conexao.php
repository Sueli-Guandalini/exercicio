<?php

    $sgbd = "mysql";
    $local = "localhost";
    $nome_bd = "futebol";
    $usuario = "root";
    $senha = "";

    $conexao = new PDO("$sgbd:host=$local;dbname=$nome_bd",$usuario,$senha);

?>