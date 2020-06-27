<?php
    session_start();
    include "classeForm2.php";

    
    $g = new Form2($_POST);


    $_SESSION["Form2"][] = $g;

?>

<meta charset="UTF-8" />
<script>
    window.alert("Cadastro realizado com sucesso! \nRedirecionando para página inicial de seleção.");
    window.location.href= "index.php";
</script>
