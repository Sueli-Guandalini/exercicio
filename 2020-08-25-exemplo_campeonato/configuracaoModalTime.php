<?php

$p["id"] = "Time";
$p["titulo"] = "Time";

$p["divRow"][0] = '
<div class="row">
    <div class="form-group col-sm-12 col-12">							
        <input type="text" name="nome" id="nome"
                class="form-control" 
                placeholder="Nome do Time..." />
    </div>
</div>';


$p["divRow"][1] = '
<div class="row">
    <div class="form-group col-sm-8 col-8">	                            
        <input type="text" name="cidade" 
        id="cidade" class="form-control" 
        placeholder="Cidade..." />
    </div>
    <div class="form-group col-sm-4 col-4">	                            
        <input type="text" name="uf" 
        id="estado" class="form-control" 
        placeholder="Estado..." />
    </div>
</div>';
?>