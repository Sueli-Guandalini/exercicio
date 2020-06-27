<?php
include "cabecalho.php";
include "classeForm.php";

$v["action"] = "form_geral.php";
$v["method"] = "post";
$f = new Form($v);

$v = null;
$v["name"] = "geral";
$v["required"] = true;
$s = new Select($v);

$v = null;
$v["hidden"] = true;
$v["value"] = "";
$v["label"] = "::Faça uma Escolha::";
$op1 = new Option($v);
$s->adiciona_option($op1);

$v = null;
$v["value"] = "Livro";
$v["label"] = "Livro";
$op2 = new Option($v);
$s->adiciona_option($op2);

$v = null;
$v["value"] = "Filme";
$v["label"] = "Filme";
$op3 = new Option($v);
$s->adiciona_option($op3);

$v = null;
$v["type"] = "submit";
$v["value"] = "Avançar";
$i = new Input($v);

$f->adiciona_entrada($s);
$f->adiciona_entrada($i);

?>
            <p>Bem vindo ao Sistema de Cadastro</p>
            <br />
            <?php
                $f->exibir();
            ?>
        </fieldset>
    </body>
</html>