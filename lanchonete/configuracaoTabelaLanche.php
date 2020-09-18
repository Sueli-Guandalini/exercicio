<?php
    $p = null;
    $p["cabecalho"] = array("Nome","Descrição","Preço");

    include "conexao.php";

    $sql = "SELECT * FROM lanche ORDER BY nome_lanche";

    $resultado = $conexao->query($sql);

    foreach($resultado as $linha){
        $p["dados"][]=$linha;
    }
?>