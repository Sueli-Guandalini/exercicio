<?php

    include "conexao.php";

    $select = "SELECT * FROM estado";

    $stmt = $conexao->prepare($select);

    $stmt->execute();

    while($linha = $stmt->fetch()){
        echo "ID: ".$linha["id_estado"]."<br />";
        echo "nome Estado: ".$linha["nome_estado"]."<br />";
        echo "Sigla: ".$linha["sigla"]."<br /><hr />";
    }

?>
