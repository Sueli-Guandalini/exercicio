<?php

if($_POST["geral"] =='Filme'){
    require_once "classeFilmes.php";
    
    $g = new Filmes($_POST);

}else if($_POST["geral"] =='Livro'){
    require_once "classeLivro.php";
    
    $g = new Livro($_POST);
}
session_start();

$_SESSION["geral"][] = $g;

?>
Cadastro realizado com sucesso.

</body>
</html>