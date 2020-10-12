<?php

$p["id"] = "Carrinho_Produto";
$p["titulo"] = "Carrinho_Produto";

$p["divRow"][0] = '
<div class="row">
    <div class="form-group col-sm-12 col-12">	                            
        <select name="cod_usuario" class="form-control">
            <option>::Selecione Nome::</option>';
        require_once "conexao.php";

        $select = "SELECT id_usuario, nome FROM usuario ";
        $resultado = $conexao->query($select);
        foreach($resultado as $linha){
            $p["divRow"][0] .= '<option value="'.$linha["id_usuario"].'">'.$linha["nome"].'</option>'; 
        }
            
$p["divRow"][0] .= '
        </select>
    </div>
</div>';


$p["divRow"][1] = '
<div class="row">
    <div class="form-group col-sm-12 col-12">	                            
        <select name="cod_usuario" class="form-control">
            <option>::Selecione Sobrenome::</option>';
        require_once "conexao.php";

        $select = "SELECT id_usuario, sobrenome FROM usuario ";
        $resultado = $conexao->query($select);
        foreach($resultado as $linha){
            $p["divRow"][1] .= '<option value="'.$linha["id_usuario"].'">'.$linha["sobrenome"].'</option>'; 
        }
            
$p["divRow"][1] .= '
        </select>
    </div>
</div>';

$p["divRow"][2] = '
<div class="row">
    <div class="form-group col-sm-12 col-12">	                            
        <select name="cod_usuario" class="form-control">
            <option>::Selecione CPF::</option>';
        require_once "conexao.php";

        $select = "SELECT id_usuario, cpf FROM usuario ";
        $resultado = $conexao->query($select);
        foreach($resultado as $linha){
            $p["divRow"][2] .= '<option value="'.$linha["id_usuario"].'">'.$linha["cpf"].'</option>'; 
        }
            
$p["divRow"][2] .= '
        </select>
    </div>
</div>';



$p["divRow"][3] = '
<div class="row">
    <div class="form-group col-sm-6 col-6">	                            
        <select name="cod_produto" class="form-control">
            <option>::Selecione Nome Produto::</option>';
        require_once "conexao.php";

        $select = "SELECT id_produto, nome_produto FROM produto ";
        $resultado = $conexao->query($select);
        foreach($resultado as $linha){
            $p["divRow"][3] .= '<option value="'.$linha["id_produto"].'">'.$linha["nome_produto"].'</option>'; 
        }

$p["divRow"][3] .= '
        </select>
    </div>

    <div class="form-group col-sm-6 col-6">	                            
        <select name="cod_produto" class="form-control">
            <option>::Selecione Descricao::</option>';
        require_once "conexao.php";

        $select = "SELECT id_produto, descricao FROM produto ";
        $resultado = $conexao->query($select);
        foreach($resultado as $linha){
            $p["divRow"][3] .= '<option value="'.$linha["id_produto"].'">'.$linha["descricao"].'</option>'; 
        }
            
$p["divRow"][3] .= '
        </select>
    </div>
</div>';

$p["divRow"][4] = '
<div class="row">
    <div class="form-group col-sm-6 col-6">	                            
        <select name="cod_produto" class="form-control">
            <option>::Selecione Peso::</option>';
        require_once "conexao.php";

        $select = "SELECT id_produto, peso FROM produto ";
        $resultado = $conexao->query($select);
        foreach($resultado as $linha){
            $p["divRow"][4] .= '<option value="'.$linha["id_produto"].'">'.$linha["peso"].'</option>'; 
        }

$p["divRow"][4] .= '
        </select>
    </div>
    
    <div class="form-group col-sm-6 col-6">	                            
        <select name="cod_produto" class="form-control">
            <option>::Selecione Tamanho::</option>';
        require_once "conexao.php";

        $select = "SELECT id_produto, tamanho FROM produto ";
        $resultado = $conexao->query($select);
        foreach($resultado as $linha){
            $p["divRow"][4] .= '<option value="'.$linha["id_produto"].'">'.$linha["tamanho"].'</option>'; 
        }
            
$p["divRow"][4] .= '
        </select>
    </div>
</div>';

$p["divRow"][5] = '
<div class="row">
    <div class="form-group col-sm-6 col-6">	                            
        <select name="cod_produto" class="form-control">
            <option>::Selecione Cor::</option>';
        require_once "conexao.php";

        $select = "SELECT id_produto, cor FROM produto ";
        $resultado = $conexao->query($select);
        foreach($resultado as $linha){
            $p["divRow"][5] .= '<option value="'.$linha["id_produto"].'">'.$linha["cor"].'</option>'; 
        }

$p["divRow"][5] .= '
        </select>
    </div>
    
    <div class="form-group col-sm-6 col-6">	                            
        <select name="cod_produto" class="form-control">
            <option>::Selecione Tamanho::</option>';
        require_once "conexao.php";

        $select = "SELECT id_produto, tamanho FROM produto ";
        $resultado = $conexao->query($select);
        foreach($resultado as $linha){
            $p["divRow"][5] .= '<option value="'.$linha["id_produto"].'">'.$linha["tamanho"].'</option>'; 
        }
            
$p["divRow"][5] .= '
        </select>
    </div>
</div>';



?>