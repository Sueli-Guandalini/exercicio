<?php
    session_start();
    include "classeForm1.php";

    
    $g = new Form1($_POST);


    $_SESSION["Form1"][] = $g;

?>

<meta charset="UTF-8" />
<script>
    window.alert("Cadastro realizado com sucesso! \nRedirecionando para página inicial de seleção.");
    window.location.href= "index.php";
</script>
