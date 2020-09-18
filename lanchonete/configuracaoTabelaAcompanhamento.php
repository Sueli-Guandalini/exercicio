<?php
    $p = null;
    $p["cabecalho"] = array("Nome","Descrição","Preço");

    include "conexao.php";

    $sql = "SELECT * FROM acompanhamento ORDER BY nome_acompanhamento";

    $resultado = $conexao->query($sql);

    foreach($resultado as $linha){
        $p["dados"][]=$linha;
    }
?>