<?php

$p["id"] = "Usuario";
$p["titulo"] = "Usuario";

$p["divRow"][0] = '
<div class="row">
    <div class="form-group col-sm-6 col-6">							
        Usuario:<input type="text" name="nome_usuario" id="nome_usuario"
        class="form-control"   />
    </div>
    <div class="form-group col-sm-6 col-6">							
        E-mail:<input type="email" name="email" 
        id="email" class="form-control" />
    </div>
</div>';

$p["divRow"][1] = '
<div class="row">
    <div class="form-group col-sm-6 col-6">							
        Senha:<input type="password" name="senha" id="senha"
        class="form-control"  />
    </div>
    <div class="form-group col-sm-6 col-6">							
        Permissao:<input type="int" name="permissao" 
        id="permissao" class="form-control" />
    </div>
</div>';

$p["divRow"][2] = '
<div class="row">
    <div class="form-group col-sm-6 col-6">							
        <input type="text" name="nome" id="nome"
                class="form-control" 
                placeholder="Nome..." />
    </div>
    <div class="form-group col-sm-6 col-6">							
        <input type="text" name="sobrenome" id="sobrenome"
                class="form-control" 
                placeholder="Sobrenome..." />
    </div>
</div>';

$p["divRow"][3] = '
<div class="row">
    <div class="form-group col-sm-4 col-4">							
        Data Nascimento: <input type="date" name="data_nascimento" 
                                id="data_nascimento" class="form-control" />
    </div>
    <div class="form-group col-sm-8 col-8">							
        Rua/Av.:<input type="text" name="rua" id="rua"
        class="form-control"   />
    </div>
</div>';

$p["divRow"][4] = '
<div class="row">
    <div class="form-group col-sm-4 col-4">							
        <input type="number" name="numero" id="numero"
            class="form-control" min="0" placeholder="Numero...." />
    </div>
    <div class="form-group col-sm-4 col-4">							
        <input type="text" name="compl" id="compl"
            class="form-control"  placeholder="Complemento...." />
    </div>
    <div class="form-group col-sm-4 col-4">							
        <input type="text" name="bairro" id="bairro"
            class="form-control"  placeholder="Bairro...." />
    </div>
</div>';

$p["divRow"][5] = '
<div class="row">
    <div class="form-group col-sm-6 col-6">	                            
        <input type="text" name="cidade" id="cidade" 
            class="form-control" placeholder="Cidade..." />
    </div>
    <div class="form-group col-sm-3 col-3">	                            
        <input type="text" name="estado" id="estado" 
            class="form-control" placeholder="Estado..." />
    </div>
    <div class="form-group col-sm-3 col-3">	                            
        <input type="text" name="cep" id="cep" 
        class="form-control" placeholder="Cep..." />
    </div>
</div>';

$p["divRow"][6] = '
<div class="row">
    <div class="form-group col-sm-4 col-4">							
        <input type="tel" name="telefone" id="telefone"
        class="form-control"  placeholder="Telefone...." />
    </div> 
    <div class="form-group col-sm-4 col-4">							
        <input type="text" name="cpf" id="cpf"
        class="form-control"  placeholder="CPF...." />
    </div>
    <div class="form-group col-sm-4 col-4">							
        <input type="text" name="rg" id="rg"
        class="form-control"  placeholder="RG...." />
    </div>
</div>';


?>