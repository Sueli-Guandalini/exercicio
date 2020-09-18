<?php
    $p = null;
    $p["cabecalho"] = array("Nome do Combo","Desconto","Lanche","Bebida", "Acompanhamento");

    include "conexao.php";

    $sql = "SELECT * FROM lanche";

    $resultado = $conexao->query($sql);

    foreach($resultado as $linha){
        $lanche[$linha["id_lanche"]] = $linha["nome_lanche"];
    }

    $sql = "SELECT * FROM bebida";

    $resultado = $conexao->query($sql);

    foreach($resultado as $linha){
        $bebida[$linha["id_bebida"]] = $linha["nome_bebida"];
    }

    $sql = "SELECT * FROM acompanhamento";

    $resultado = $conexao->query($sql);

    foreach($resultado as $linha){
        $acompanhamento[$linha["id_acompanhamento"]] = $linha["nome_acompanhamento"];
    }


    $sql = "SELECT * FROM combo ORDER BY nome_combo DESC";

    $resultado = $conexao->query($sql);

    foreach($resultado as $linha){
        $combo["0"] = $linha["id_combo"];
        $combo["nome_combo"]=$linha["nome_combo"];
        $combo["desconto_combo"]=$linha["desconto_combo"];
        $combo["cod_lanche"]=$lanche[ $linha["id_lanche"] ];
        $combo["cod_bebida"]=$bebida[ $linha["id_bebida"] ];
        $combo["cod_acompanhamento"]=$acompanhamento[ $linha["id_acompanhamento"] ];
        $p["dados"][]=$combo;
    }
?>