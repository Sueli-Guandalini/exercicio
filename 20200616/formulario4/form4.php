<?php

include "cabecalho.php";
require_once "classeForm.php";

$v["method"]="post";
$v["action"]="recebe_form4.php";
$f = new Form($v);

echo "<p><u>Formulário 4:</u></p>";

$v = null;
$v["type"]= "text";
$v["name"]= "nome";
$v["placeholder"]= "NOME...";
$i = new Input($v);
$f->adiciona_entrada($i);

$v = null;
$v["type"]= "checkbox";
$v["name"] = "musica";
$v["label"] = "GOSTO MUSICAL";
$v["labelOpcoes"][0]= "ROCK";
$v["labelOpcoes"][1]= "FUNK";
$v["labelOpcoes"][2]= "SERTANEJO";
$v["labelOpcoes"][3]= "PAGODE";
$v["labelOpcoes"][4]= "MPB";
$v["labelOpcoes"][5]= "CLÁSSICA";
$v["labelOpcoes"][6]= "GOSPEL";
$v["valueOpcoes"][0]= "ROCK";
$v["valueOpcoes"][1]= "FUNK";
$v["valueOpcoes"][2]= "SERTANEJO";
$v["valueOpcoes"][3]= "PAGODE";
$v["valueOpcoes"][4]= "MPB";
$v["valueOpcoes"][5]= "CLÁSSICA";
$v["valueOpcoes"][6]= "GOSPEL";
$i = new InputOpcoes($v);
$f->adiciona_entrada($i);

$v = null;
$v["type"]= "submit";
$v["value"]= "Enviar";
$i = new Input($v);
$f->adiciona_entrada($i);

$v = null;
$v["type"]= "reset";
$v["value"]= "Limpar";
$i = new Input($v);
$f->adiciona_entrada($i);


$f->exibir();

?>
  </fieldset>
  </body>
</html>
   
