<?php

include "classeForm.php";
include "cabecalho.php";

$valor["method"]="post";
$valor["action"]="recebe_form1.php";
$f = new Form($valor);

    echo "<p><u>Formulário 1:</u></p>";

    $valor["type"]= "text";
    $valor["name"]= "nome";
    $valor["placeholder"]= "Digite seu nome...";

    $i = new Input($valor);
    $f->adiciona_entrada($i);

    $valor= null;
    $valor["type"]= "email";
    $valor["name"]= "email";
    $valor["placeholder"]= "Email...";

    $i = new Input($valor);
    $f->adiciona_entrada($i);

    $valor= null;
    $valor["type"]= "number";
    $valor["name"]= "idade";
    $valor["step"]= 1;
    $valor["placeholder"]= "Idade...";

    $i = new Input($valor);
    $f->adiciona_entrada($i);

    $valor= null;
    $valor["type"]= "number";
    $valor["name"]= "idade";
    $valor["step"]= 1;
    $valor["placeholder"]= "Idade...";

    $i = new Input($valor);
    $f->adiciona_entrada($i);

    $valor= null;
    $valor["type"]= "number";
    $valor["name"]= "idade";
    $valor["step"]= 1;
    $valor["placeholder"]= "Idade...";

    $i = new Input($valor);
    $f->adiciona_entrada($i);

    $valor= null;
    $valor["type"]= "submit";
    $valor["value"]= "Enviar";

    $s = new Input($valor);
    $f->adiciona_entrada($s);

    $f->exibir();

?>
    </fieldset>
  </body>
</html>
