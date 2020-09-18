<?php
    $p = null;
    $p["cabecalho"] = array("Nome","Descrição","Preço");

    include "conexao.php";

    $sql = "SELECT * FROM bebida ORDER BY nome_bebida";

    $resultado = $conexao->query($sql);

    foreach($resultado as $linha){
        $p["dados"][]=$linha;
    }
?>