<?php

    include "conexao.php";

    $insert = "INSERT INTO estado(nome_estado, sigla) 
                    VALUES (:n,:s)";

    $stmt = $conexao->prepare($insert);

    $stmt->bindValue(":n",$_POST["nome_estado"]);
    $stmt->bindValue(":s",$_POST["sigla"]);

    $stmt->execute();

    echo "Estado Inserido no Banco de dados. 
        <a href='form_estado.php'>Voltar...</a>";

?>
