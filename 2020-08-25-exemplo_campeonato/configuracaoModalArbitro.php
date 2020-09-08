<?php

$p["id"] = "Árbitro";
$p["titulo"] = "Árbitro";

$p["divRow"][0] = '
<div class="row">
    <div class="form-group col-sm-12 col-12">							
        <input type="text" name="nome" id="nome"
                class="form-control" 
                placeholder="Nome do Árbitro..." />
    </div>
</div>';


$p["divRow"][1] = '
<div class="row">
    <div class="form-group col-sm-12 col-12">	                            
        <input type="date" name="data_nascimento" 
        id="data_nascimento" class="form-control" />
    </div>
</div>';

$p["divRow"][2] = '
<div class="row">
    <div class="form-group col-sm-12 col-12">	                            
        <select name="federacao" class="form-control">
            <option>::Selecione Federacao::</option>
            <option>GO</option>
            <option>SP</option>
            <option>RJ</option>
            <option>BA</option>
            <option>PR</option>
        </select>
    </div>
</div>';
?>