<?php

$p["id"] = "Arbitro";
$p["titulo"] = "Árbitro";


$p["divRow"][0] = '
<div class="row">
    <div class="form-group col-sm-12 col-12">	                            
        <input type="text" name="nome" 
        id="nome" class="form-control" placeholder= "Nome Árbritro..." />
    </div>
</div>';


$p["divRow"][1] = '
<div class="row">
    <div class="form-group col-sm-12 col-12">	                            
        Data Nascimento<input type="date" name="data_nascimento" 
        id="data_nascimento" class="form-control" />
    </div>
</div>';


$p["divRow"][2] = '
<div class="row">
    <div class="form-group col-sm-8 col-8">	                            
        <input type="text" name="cidade" 
        id="cidade" class="form-control" placeholder="Digite a cidade" ... />
    </div>
    <div class="form-group col-sm-4 col-4">	                            
    <input type="text" name="uf" 
    id="uf" class="form-control" placeholder= "UF..." />
</div>
</div>';
?>