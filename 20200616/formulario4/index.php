<?php
include "cabecalho.php";
include "classeForm.php";

$v["action"] = "form4.php";
$v["method"] =  "post";
$f = new Form($v);

?>
            <p>Bem Vindo ao Sistema de Cadastro</p>
            <br />
            <?php
                $f->exibir();
            ?>
        </fieldset>
    </body>
</html>