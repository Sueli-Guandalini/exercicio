<?php

    if($_POST["geral"] == 'Filme'){
        include "classeFilmes.php";
        $g = new Filmes($_POST);

    }elseif($_POST["geral"] == 'Livro'){
        include "classeLivro.php";
        $g = new Livro($_POST);
    }
    session_start();

    $_SESSION["geral"][] = $g;

?>

<meta charset="UTF-8" />
<script>
    window.alert("Produto cadastrado com sucesso! \nRedirecionando para página inicial de seleção.");
    window.location.href= "index.php";
</script>
