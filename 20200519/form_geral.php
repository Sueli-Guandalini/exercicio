<?php
include "classeInput.php";
include "classeTextarea.php";
include "cabecalho.php";

echo'<form action="recebe_form_geral.php" method="POST">';

if(($_POST["geral"] == 'Filme')  || ($_POST["geral"] == 'Livro')){

    $valor["type"]= "text";
    $valor["name"]= "titulo";
    $valor["placeholder"]= "Título...";

    $i = new Input($valor);

    $valor= null;
    $valor["name"]= "sinopse";
    $valor["rows"]= 3;
    $valor["cols"]=30;
    $valor["placeholder"]= "Sinopse...";

    $t = new Textarea($valor);

    $valor= null;
    $valor["type"]= "number";
    $valor["name"]= "preco";
    $valor["min"]= 1;
    $valor["step"]= 0.01;
    $valor["placeholder"]= "Preço...";

    $i = new Input($valor);

    if($_POST["geral"]=='Filme'){

        $valor["type"]= "number";
        $valor["name"]= "tempo";
        $valor["min"]= 1;
        $valor["step"]= 1;
        $valor["placeholder"]= "Tempo de duração...";

        $i = new Input($valor);

        $valor= null;
        $valor["type"]= "text";
        $valor["name"]= "produtora";
        $valor["placeholder"]= "Produtora...";

        $i = new Input($valor);

    } else{

        $valor["type"]= "number";
        $valor["name"]= "paginas";
        $valor["min"]= 1;
        $valor["step"]= 1;
        $valor["placeholder"]= "Número de páginas...";

        $i = new Input($valor);

        $valor= null;
        $valor["type"]= "text";
        $valor["name"]= "editora";
        $valor["placeholder"]= "Editora...";

        $i = new Input($valor);
    }

    $valor["type"]= "submit";
    $valor["value"]= "Cadastrar";

    $i = new Input($valor);
    echo'<input name="geral" value='.$_POST["geral"].'/>';
}
?>
      </form>
    </fieldset>
  </body>
</html>
