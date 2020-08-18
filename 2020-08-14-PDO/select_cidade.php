<?php   
    include "menu.php";
    include "conexao.php";

    $select = "SELECT c.nome as n, e.sigla as s FROM cidade as c
                    INNER JOIN estado as e
                        ON c.cod_estado = e.id_estado";

    $stmt = $conexao->prepare($select);

    $stmt->execute();

    while($linha = $stmt->fetch()){
        echo "ID: ".$linha["id_cidade"]."<br />";
        echo "nome Cidade: ".$linha["n"]."<br />";
        echo "Sigla Estado: ".$linha["s"]."<br /><hr />";
    }

?>
