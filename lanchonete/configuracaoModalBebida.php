<?php

$p["id"] = "Bebida";
$p["titulo"] = "Bebida";


$p["divRow"][0] = '
<div class="row">
    <div class="form-group col-sm-12 col-12">	                            
        <input type="text" name="nome_bebida" 
        id="nome_bebida" class="form-control" placeholder= "Nome bebida..." />
    </div>
</div>';
$p["divRow"][1] = '
<div class="row">
    <div class="form-group col-sm-12 col-12">	                            
        <input type="text" name="descricao_bebida" 
        id="descricao_bebida" class="form-control" placeholder= "Descrição..." />
    </div>
</div>';
$p["divRow"][2] = '
<div class="row">
    <div class="form-group col-sm-12 col-12">	                            
        <input type="number" name="preco_bebida" step="0.01" min="0.01"
        id="preco_bebida" class="form-control" placeholder= "Preço..." />
    </div>
</div>';
?>