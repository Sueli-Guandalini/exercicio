<?php   
    include "menu.php";
    include "conexao.php";

    $select = "SELECT razao_social, nome_fantasia, email,
                        c.nome as n, e.sigla AS s FROM loja AS  l
                        INNER JOIN cidade AS c
                            ON l.cod_cidade=l.id_cidade
                    INNER JOIN estado AS e
                        ON c.cod_estado-e.id_estado";

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
