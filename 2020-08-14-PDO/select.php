<?php   
    include "menu.php";
    include "conexao.php";

    $select = "SELECT * FROM estado";

    $resultado = $conexao->query($select);

    foreach($resultado as $linha){
        echo "ID: ".$linha["id_estado"]."<br />";
        echo "nome Estado: ".$linha["nome_estado"]."<br />";
        echo "Sigla: ".$linha["sigla"]."<br /><hr />";
    }

?>