<?php
    $p = null;
    $p["cabecalho"] = array("Nome","Data de Nascimento","Federacao");

    include "conexao.php";

    $sql = "SELECT * FROM arbitro ORDER BY nome";

    $resultado = $conexao->query($sql);

    foreach($resultado as $linha){
        $p["dados"][]=$linha;
    }
?>