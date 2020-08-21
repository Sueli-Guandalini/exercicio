<?php

    include "classeJogador.php";
    include "classeTime.php";
    include "classeJogo.php";
    include "classeCampeonato.php";


    $nome = "Carlos";
    $idade = "17";
    $posicao = "Ataque";
    $nacionalidade = "Brasileiro";
    $jog = new Jogador($nome,$idade,$posicao,$nacionalidade);
    
    $nomeTime = "Palmeiras";
    $vitorias = "4";
    $derrotas = "0";
    $empates = "1";

    $time = new Time($nomeTime,$jogador,$vitorias,$derrotas,$empates);

    $time->exibe();

?>
