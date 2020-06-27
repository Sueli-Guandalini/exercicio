<?php
    session_start();
    include "classeForm3.php";

    
    $g = new Form3($_POST);


    $_SESSION["Form3"][] = $g;

?>

<meta charset="UTF-8" />
<script>
    window.alert("Cadastro realizado com sucesso! \nRedirecionando para página inicial de seleção.");
    window.location.href= "index.php";
</script>
