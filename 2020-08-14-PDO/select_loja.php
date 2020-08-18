<?php   
    include "menu.php";
    include "conexao.php";

    $select = "SELECT * FROM loja";

    $stmt = $conexao->prepare($select);

    $stmt->execute();

    while($linha = $stmt->fetch()){
        echo "ID: ".$linha["id_loja"]."<br />";
        echo "razao Social: ".$linha["razao_social"]."<br />";
        echo "Nome: ".$linha["nome_fantasia"]."<br />";
        echo "E-mail: ".$linha["email"]."<br />";
        echo "Código Cidade: ".$linha["cod_cidade"]."<br /><hr />";
    }

?>
