<?php

include "cabecalho.php";
include "classeForm.php";

$v["method"]="post";
$v["action"]="recebe_form2.php";
$f = new Form($v);

echo "<p><u>Formulário 2:</u></p>";

$v = null;
$v["name"] = "animal";
$v["required"] = true;
$s = new Select($v);

$v = null;
$v["hidden"] = true;
$v["value"] = "";
$v["label"] = "::Animal::";
$op1 = new Option($v);
$s->adiciona_option($op1);

$v = null;
$v["value"] = "Gato";
$v["label"] = "Gato";
$op2 = new Option($v);
$s->adiciona_option($op2);

$v = null;
$v["value"] = "Cachorro";
$v["label"] = "Cachorro";
$op3 = new Option($v);
$s->adiciona_option($op3);
$f->adiciona_entrada($s);

$v= null;
$v["type"]= "text";
$v["name"]= "nome";
$v["placeholder"]= "Nome do animal...";
$i = new Input($v);
$f->adiciona_entrada($i);

$v = null;
$v["type"]= "number";
$v["name"]= "peso";
$v["step"]= 0.01;
$v["placeholder"]= "peso...";
$i = new Input($v);
$f->adiciona_entrada($i);

$v = null;
$v["type"]= "date";
$v["name"]= "datanasc";
$v["label"]= "DATA NASC.";
$v["placeholder"]= "DD/MM/AAAA";
$i = new Input($v);
$f->adiciona_entrada($i);

$v = null;
$v["type"]= "number";
$v["name"]= "cpf";
$v["placeholder"]= "Cpf do proprietário...";
$i = new Input($v);
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
