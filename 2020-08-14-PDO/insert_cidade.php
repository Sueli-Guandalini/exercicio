<?php
    
    include "conexao.php";

    $insert = "INSERT INTO cidade( nome, cod_estado) 
                    VALUES (:n,:c)";

    $stmt = $conexao->prepare($insert);

    $stmt->bindValue(":n",$_POST["nome"]);
    $stmt->bindValue(":c",$_POST["cod_estado"]);

    $stmt->execute();

    echo "Cidade Inserida no Banco de dados. 
        <a href='index.php'>Voltar...</a>";

        
?>



