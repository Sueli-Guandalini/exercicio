<?php

    include "conexao.php";


    $insert = "INSERT INTO loja( razao_social, nome_fantasia, email, cod_cidade) 
                    VALUES (:r,:n,:e,:c)";

    $stmt = $conexao->prepare($insert);

    $stmt->bindValue(":r",$_POST["razao_social"]);
    $stmt->bindValue(":n",$_POST["nome_fantasia"]);
    $stmt->bindValue(":e",$_POST["email"]);
    $stmt->bindValue(":c",$_POST["cod_cidade"]);

    $stmt->execute();

    echo "Loja Inserida no Banco de dados. 
    <a href='index.php'>Voltar...</a>";
    
?>





    