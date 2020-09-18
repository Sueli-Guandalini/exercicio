<?php

$p["id"] = "Lanche";
$p["titulo"] = "Lanche";


$p["divRow"][0] = '
<div class="row">
    <div class="form-group col-sm-12 col-12">	                            
        <input type="text" name="nome_lanche" 
        id="nome_lanche" class="form-control" placeholder= "Nome lanche..." />
    </div>
</div>';
$p["divRow"][1] = '
<div class="row">
    <div class="form-group col-sm-12 col-12">	                            
        <input type="text" name="descricao_lanche" 
        id="descricao_lanche" class="form-control" placeholder= "Descrição..." />
    </div>
</div>';
$p["divRow"][2] = '
<div class="row">
    <div class="form-group col-sm-12 col-12">	                            
        <input type="number" name="preco_lanche" step="0.01" min="0.01"
        id="preco_lanche" class="form-control" placeholder= "Preço..." />
    </div>
</div>';
?>