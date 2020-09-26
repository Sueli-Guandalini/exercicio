<?php

$p["id"] = "Jogador";
$p["titulo"] = "Jogador";

$p["divRow"][0] = '
<div class="row">
    <div class="form-group col-sm-12 col-12">							
        <input type="text" name="nome" id="nome"
                class="form-control" 
                placeholder="Nome do Jogador..." />
    </div>
</div>';


$p["divRow"][1] = '
<div class="row">
    <div class="form-group col-sm-6 col-6">	                            
        <input type="date" name="data_nascimento" 
        id="dataNascimento" class="form-control" />
    </div>
    <div class="form-group col-sm-6 col-6">	                            
        <input type="number" name="numero_camisa" 
        id="numero_camisa" class="form-control" placeholder="Número camisa..." />
    </div>
</div>';

$p["divRow"][2] = '
<div class="row">
    <div class="form-group col-sm-12 col-12">	                            
        <select name="cod_time" class="form-control">
            <option>::Selecione Time::</option>';
        require_once "conexao.php";

        $select = "SELECT id_time, nome FROM time ORDER BY nome";
        $resultado = $conexao->query($select);
        foreach($resultado as $linha){
            $p["divRow"][2] .= '<option value="'.$linha["id_time"].'">'.$linha["nome"].'</option>'; 
        }
            
$p["divRow"][2] .= '
        </select>
    </div>
</div>';

$p["divRow"][3] = '
<div class="row">
    <div class="form-group col-sm-8 col-8">	                            
        <input type="text" name="cidade" 
            id="cidade" class="form-control" placeholder="Digite a cidade..." />
    </div>
    <div class="form-group col-sm-4 col-4">	                            
        <input type="text" name="uf" 
            id="uf" class="form-control" placeholder="UF..." />
    </div>
</div>';
?>