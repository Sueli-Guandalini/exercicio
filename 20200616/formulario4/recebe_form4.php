<?php
    session_start();
    include "classeForm4.php";

    
    $g = new Form4($_POST);


    $_SESSION["Form4"][] = $g;

?>

<meta charset="UTF-8" />
<script>
    window.alert("Cadastro realizado com sucesso! \nRedirecionando para página inicial de seleção.");
    window.location.href= "index.php";
</script>
