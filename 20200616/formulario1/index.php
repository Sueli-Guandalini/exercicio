<?php
include "cabecalho.php";
include "classeForm.php";

$v["action"] = "form1.php";
$v["method"] =  "post";
$f = new Form($v);

?>

Bem vindo aos exemplos de modificadores de acesso.
            <p>Sistema de Cadastro</p>
            <br />
            <?php
                $f->exibir();
            ?>
        </fieldset>
    </body>
</html>