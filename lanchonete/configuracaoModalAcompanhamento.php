
<?php

$p["id"] = "Acompanhamento";
$p["titulo"] = "Acompanhamento";


$p["divRow"][0] = '
<div class="row">
    <div class="form-group col-sm-12 col-12">	                            
        <input type="text" name="nome_acompanhamento" 
        id="nome_acompanhamento" class="form-control" placeholder= "Nome acompanhamento..." />
    </div>
</div>';

$p["divRow"][1] = '
<div class="row">
    <div class="form-group col-sm-12 col-12">	                            
        <input type="text" name="descricao_acompanhamento" 
        id="descricao_acompanhamento" class="form-control" placeholder= "Descrição..." />
    </div>
</div>';

$p["divRow"][2] = '
<div class="row">
    <div class="form-group col-sm-12 col-12">	                            
        <input type="number" name="preco_acompanhamento" step="0.01" min="0.01"
        id="preco_acompanhamento" class="form-control" placeholder= "Preço..." />
    </div>
</div>';
?>