<?php

include "cabecalho.php";
require_once "classeForm.php";

$v["method"]="post";
$v["action"]="recebe_form3.php";
$f = new Form($v);

echo "<p><u>Formulário 3:</u></p>";

$v = null;
$v["type"]= "text";
$v["name"]= "nome";
$v["placeholder"]= "NOME...";
$i = new Input($v);
$f->adiciona_entrada($i);

$v = null;
$v["type"]= "email";
$v["name"]= "email";
$v["placeholder"]= "EMAIL...";
$i = new Input($v);
$f->adiciona_entrada($i);

$v = null;
$v["type"]= "radio";
$v["name"] = "sexo";
$v["label"] = "SEXO";
$v["labelOpcoes"][0]= "MASC.";
$v["labelOpcoes"][1]= "FEM.";
$v["valueOpcoes"][0]= "m";
$v["valueOpcoes"][1]= "f";
$i = new InputOpcoes($v);
$f->adiciona_entrada($i);

$v = null;
$v["type"]= "submit";
$v["value"]= "Enviar";
$i = new Input($v);
$f->adiciona_entrada($i);

$f->exibir();

?>
  </fieldset>
  </body>
</html>
   
