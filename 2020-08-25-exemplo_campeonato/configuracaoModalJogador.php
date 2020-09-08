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
    <div class="form-group col-sm-12 col-12">	                            
        <input type="date" name="dataNascimento" 
        id="dataNascimento" class="form-control" />
    </div>
</div>';

$p["divRow"][2] = '
<div class="row">
    <div class="form-group col-sm-12 col-12">	                            
        <select name="time" class="form-control">
            <option>::Selecione Time::</option>
            <option>São Paulo</option>
            <option>Santos</option>
            <option>Corinthians</option>
        </select>
    </div>
</div>';
?>