<?php

$p["id"] = "Combo";
$p["titulo"] = "Combo";

$p["divRow"][0] = '
<div class="row">
    <div class="form-group col-sm-6 col-6">							
        <input type="text" name="nome_combo" id="nome_combo"
                class="form-control" 
                placeholder="Nome do combo..." />
    </div>
    <div class="form-group col-sm-6 col-6">	                            
        <input type="number" name="desconto_combo" 
                id="desconto_combo" class="form-control" 
                placeholder="Desconto do combo..."/>
    </div>
</div>';


$p["divRow"][1] = '
<div class="row">
    <div class="form-group col-sm-12 col-12">	                            
        <select name="cod_lanche" class="form-control">
            <option>::Selecione Lanche::</option>';
        require_once "conexao.php";

        $select = "SELECT id_lanche, nome_lanche FROM lanche ORDER BY nome_lanche";
        $resultado = $conexao->query($select);
        foreach($resultado as $linha){
            $p["divRow"][1] .= '<option value="'.$linha["id_lanche"].'">'.$linha["nome_lanche"].'</option>'; 
        }
            
$p["divRow"][1] .= '
        </select>
    </div>
</div>';

$p["divRow"][2] = '
<div class="row">
    <div class="form-group col-sm-12 col-12">	                            
        <select name="cod_bebida" class="form-control">
            <option>::Selecione Bebida::</option>';
        require_once "conexao.php";

        $select = "SELECT id_bebida, nome_bebida FROM bebida ORDER BY nome_bebida";
        $resultado = $conexao->query($select);
        foreach($resultado as $linha){
            $p["divRow"][2] .= '<option value="'.$linha["id_bebida"].'">'.$linha["nome_bebida"].'</option>'; 
        }
            
$p["divRow"][2] .= '
        </select>
    </div>
</div>';

$p["divRow"][3] = '
<div class="row">
    <div class="form-group col-sm-12 col-12">	                            
        <select name="cod_acompanhamento" class="form-control">
            <option>::Selecione Acompanhamento::</option>';
        require_once "conexao.php";

        $select = "SELECT id_acompanhamento, nome_acompanhamento FROM acompanhamento ORDER BY nome_acompanhamento";
        $resultado = $conexao->query($select);
        foreach($resultado as $linha){
            $p["divRow"][3] .= '<option value="'.$linha["id_acompanhamento"].'">'.$linha["nome_acompanhamento"].'</option>'; 
        }
            
$p["divRow"][3] .= '
        </select>
    </div>
</div>';


?>