<?php

    include "classeLayout/classeCabecalho.php";

    $a["logo"] = "img/logo.png";
    $a["alt_logo"] = "Descrição alternativa da logo de cima.";

    $cabecalho = new Cabecalho($a);



    function soma($a,$b){
        return($a+$b);
    }


    soma(1,3);


?>