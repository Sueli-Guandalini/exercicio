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

    $select = "SELECT * FROM loja";

    $resultado = $conexao->query($select);

    foreach($resultado as $linha){
        echo "ID: ".$linha["id_loja"]."<br />";
        echo "razao Social: ".$linha["razao_social"]."<br />";
        echo "Nome: ".$linha["nome_fantasia"]."<br />";
        echo "E-mail: ".$linha["email"]."<br />";
        echo "Código Cidade: ".$linha["cod_cidade"]."<br /><hr />";
    }

    $select = "SELECT * FROM cidade";

    $resultado = $conexao->query($select);

    foreach($resultado as $linha){
        echo "ID: ".$linha["id_cidade"]."<br />";
        echo "Nome: ".$linha["nome"]."<br />";
        echo "Código Estado: ".$linha["cod_estado"]."<br /><hr />";
    }


?>