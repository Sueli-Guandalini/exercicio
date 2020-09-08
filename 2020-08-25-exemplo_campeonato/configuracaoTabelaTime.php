<?php
    $p = null;
    $p["cabecalho"] = array("Nome","Cidade","Estado");

    include "conexao.php";

    $sql = "SELECT * FROM time ORDER BY nome";

    $resultado = $conexao->query($sql);

    foreach($resultado as $linha){
        $p["dados"][]=$linha;
    }
?>