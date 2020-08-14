<?php

    include "conexao.php";

    $insert = "INSERT INTO estado(id_estado, nome_estado, sigla) 
                    VALUES (:n,:s)";

    $stmt = $conexao->prepare($insert);

    $stmt->bindValue(":n",$_POST["id_estado"]);
    $stmt->bindValue(":n",$_POST["nome_estado"]);
    $stmt->bindValue(":s",$_POST["sigla"]);

    $stmt->execute();

    echo "Estado Inserido no Banco de dados. 
        <a href='form_estado.php'>Voltar...</a>";

    $insert = "INSERT INTO loja(id_loja, razao_social, nome_fantasia, email, cod_cidade) 
    VALUES (:n,:s)";

    $stmt = $conexao->prepare($insert);

    $stmt->bindValue(":n",$_POST["id_loja"]);
    $stmt->bindValue(":n",$_POST["razao_social"]);
    $stmt->bindValue(":n",$_POST["nome_fantasia"]);
    $stmt->bindValue(":n",$_POST["email"]);
    $stmt->bindValue(":s",$_POST["cod_cidade"]);

    $stmt->execute();

    echo "Loja Inserida no Banco de dados. 
    <a href='form_loja.php'>Voltar...</a>";

    $insert = "INSERT INTO cidade(id_cidade, nome, cod_estado)
    VALUES (:n,:s)";

    $stmt = $conexao->prepare($insert);

    $stmt->bindValue(":n",$_POST["id_cidade"]);
    $stmt->bindValue(":n",$_POST["nome"]);
    $stmt->bindValue(":s",$_POST["cod_estado"]);

    $stmt->execute();

    echo "Cidade Inserida no Banco de dados. 
    <a href='form_cidade.php'>Voltar...</a>";

?>