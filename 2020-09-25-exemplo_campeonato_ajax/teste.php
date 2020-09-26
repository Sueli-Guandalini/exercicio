<?php

include "classeCampeonato.php";
include "classeJogador.php";
include "classeTime.php";
include "classeJogo.php";


$j1 = new Jogador("Joao","30/01/1990");
$j2 = new Jogador("Jose","20/01/1984");
$j3 = new Jogador("Pelé","20/05/1984");
$j4 = new Jogador("Maradona","20/04/1984");

$t1 = new Time("Santos FC","Santos","SP");
$t1->adiciona_jogador($j3);
$t1->adiciona_jogador($j2);

$t2 = new Time("Fluminense","Rio de Janeiro","RJ");
$t2->adiciona_jogador($j1);
$t2->adiciona_jogador($j4);


$j = new Jogo($t1,$t2,"05/09/2020","21:30");

$c = new Campeonato("Campeonato Brasileiro");

$c->adiciona_jogo($j);

print_r($c);
?>