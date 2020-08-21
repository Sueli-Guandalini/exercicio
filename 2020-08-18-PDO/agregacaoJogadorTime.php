<?php

    include "classeJogador.php";
    include "classeTime.php";
    include "classeJogo.php";

    $jog1 = new Jogador ("Carlos", "17","Ataque","Brasileiro");
    $jog2 = new Jogador ("Nilton", "18","Goleiro","Argentino");
    $jog3 = new Jogador ("Beto", "17","Defesa","Brasileiro");
    $jog4 = new Jogador ("Ronaldo", "18","Meio Campo","Brasileiro");

    $t = new Time();

    $t->add_jogador($jog1);
    $t->add_jogador($jog2);
    $t->add_jogador($jog3);
    $t->add_jogador($jog4);

    $t->exibe_jogadores();

?>

