<?php

include "classeForm.php";
include "cabecalho.php";

$valor["method"]="post";
$valor["action"]="recebe_form_geral.php";
$f = new Form($valor);

$valor["type"]= "text";
$valor["name"]= "titulo";

if($_POST["geral"] == 'Filme'){
    echo '<p><b>Cadastro de Filmes</b></p>';
    $valor["placeholder"]= "Título do filme...";
    $i = new Input($valor);
    $f->adiciona_entrada($i);

    $valor= null;
    $valor["type"]= "number";
    $valor["name"]= "tempo";
    $valor["class"]= "form-control";
    $valor["min"]= 1;
    $valor["step"]= 1;
    $valor["placeholder"]= "Tempo de duração(min)...";
    $i = new Input($valor);
    $f->adiciona_entrada($i);


    $valor= null;
    $valor["type"]= "text";
    $valor["name"]= "produtora";
    $valor["placeholder"]= "Produtora...";
    $i = new Input($valor);
    $f->adiciona_entrada($i);

}else{
    echo '<p><b>Cadastro de Livros</b></p>';
    $valor["placeholder"]= "Título do Livro...";
    $i = new Input($valor);
    $f->adiciona_entrada($i);

    $valor= null;
    $valor["type"]= "number";
    $valor["name"]= "paginas";
    $valor["min"]= 1;
    $valor["step"]= 1;
    $valor["placeholder"]= "Número de páginas...";
    $i = new Input($valor);
    $f->adiciona_entrada($i);

    $valor= null;
    $valor["type"]= "text";
    $valor["name"]= "editora";
    $valor["placeholder"]= "Editora...";
    $i = new Input($valor);
    $f->adiciona_entrada($i);
}

    $valor= null;
    $valor["name"]= "sinopse";
    $valor["rows"]= 3;
    $valor["cols"]= 30;
    $valor["placeholder"]= "Sinopse...";
    $t = new Textarea($valor);
    $f->adiciona_entrada($t);

    $valor= null;
    $valor["type"]= "number";
    $valor["name"]= "preco";
    $valor["min"]= 1;
    $valor["step"]= 0.01;
    $valor["placeholder"]= "Preço...";
    $i = new Input($valor);
    $f->adiciona_entrada($i);

    $valor= null;
    $valor["type"]= "hidden";
    $valor["name"]= "geral";
    $valor["value"]= $_POST["geral"];
    $i = new Input($valor);
    $f->adiciona_entrada($i);

    $valor= null;
    $valor["type"]= "submit";
    $valor["value"]= "Cadastrar";
    $s = new Input($valor);
    $f->adiciona_entrada($s);

    $f->exibir();

?>
    </fieldset>
  </body>
</html>
