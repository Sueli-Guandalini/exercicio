<?php

$p["id"] = "Carrinho";
$p["titulo"] = "Carrinho";

$p["divRow"][0] = '
<div class="row">
    <div class="form-group col-sm-12 col-12">	                            
        <select name="cod_cliente" class="form-control">
            <option>::Selecione Nome::</option>';
        require_once "conexao.php";

        $select = "SELECT id_cliente, nome FROM cliente ";
        $resultado = $conexao->query($select);
        foreach($resultado as $linha){
            $p["divRow"][0] .= '<option value="'.$linha["id_cliente"].'">'.$linha["nome"].'</option>'; 
        }
            
$p["divRow"][0] .= '
        </select>
    </div>
</div>';


$p["divRow"][1] = '
<div class="row">
    <div class="form-group col-sm-12 col-12">	                            
        <select name="cod_cliente" class="form-control">
            <option>::Selecione Sobrenome::</option>';
        require_once "conexao.php";

        $select = "SELECT id_cliente, sobrenome FROM cliente ";
        $resultado = $conexao->query($select);
        foreach($resultado as $linha){
            $p["divRow"][1] .= '<option value="'.$linha["id_cliente"].'">'.$linha["sobrenome"].'</option>'; 
        }
            
$p["divRow"][1] .= '
        </select>
    </div>
</div>';

$p["divRow"][2] = '
<div class="row">
    <div class="form-group col-sm-12 col-12">	                            
        <select name="cod_cliente" class="form-control">
            <option>::Selecione CPF::</option>';
        require_once "conexao.php";

        $select = "SELECT id_cliente, cpf FROM cliente ";
        $resultado = $conexao->query($select);
        foreach($resultado as $linha){
            $p["divRow"][2] .= '<option value="'.$linha["id_cliente"].'">'.$linha["cpf"].'</option>'; 
        }
            
$p["divRow"][2] .= '
        </select>
    </div>
</div>';

?>