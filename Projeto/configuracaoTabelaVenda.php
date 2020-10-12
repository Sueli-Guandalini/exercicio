<?php
    $p = null;
    $p["cabecalho"] = array("Nome","Sobrenome","CPF","Horario","Data","Status","Valor",
        "Endereco de Entrega","Valor do Frete");

    include "conexao.php";

    $sql = "SELECT * FROM view_venda";

    $resultado = $conexao->query($sql);

    foreach($resultado as $linha){
        
        $p["dados"][]=$linha;
    }
    $p["nome"] = "venda";
?>