<?php

$p["id"] = "Venda";
$p["titulo"] = "Venda";

$p["divRow"][0] = '
<div class="row">
    <div class="form-group col-sm-12 col-12">	                            
        <select name="cod_usuario" class="form-control">
            <option>::Selecione Cliente::</option>';
        require_once "conexao.php";

        $select = "SELECT id_usuario, nome, sobrenome, cpf FROM usuario ORDER BY nome";
        $resultado = $conexao->query($select);
        foreach($resultado as $linha){
            $p["divRow"][0] .= '<option value="'.$linha["id_usuario"].'">
            '.$linha["nome"].'  '.$linha["sobrenome"].'  '.$linha["cpf"]'</option>'; 
        }
            
$p["divRow"][0] .= '
        </select>
    </div>
</div>';

$p["divRow"][1] = '
<div class="row">
    <div class="form-group col-sm-4 col-4">							
        horário: <input type="time" name="horario" id="horario"
            class="form-control" />
    </div>
    <div class="form-group col-sm-8 col-8">							
        Data: <input type="date" name="data" id="data"
                class="form-control" />
    </div>
</div>';

$p["divRow"][2] = '
<div class="row">
    <div class="form-group col-sm-4 col-4">							
        <select name="status" class="form-control">
            <option>::Selecione Status::</option>;
            <option value="finalizada">finalizada</option>;
            <option value="nova">nova</option>;
            <option value="cancelada">cancelada</option>;
        </select>
    </div>
    <div class="form-group col-sm-8 col-8">							
        Valor: <input type="number" name="valor" id="valor"
                class="form-control" />
    </div>
</div>';

$p["divRow"][3] = '
<div class="row">
    <div class="form-group col-sm-4 col-4">							
        Endereco de entrega: <input type="text" name="endereco_entrega" id="endereco_entrega"
                class="form-control" />
    </div>
    <div class="form-group col-sm-8 col-8">							
        Valor do frete: <input type="number" name="valor_frete" id="valor_frete"
                class="form-control" />
    </div>
</div>';


?>
