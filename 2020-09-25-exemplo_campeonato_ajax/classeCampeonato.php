<?php

    class Campeonato{
        private $nome;
        private $jogos;
       
        public function __construct($nome){
            $this->nome = $nome;
        }

        public function adiciona_jogo(Jogo $j){
            $this->jogos[] = $j;
        }

    }


?>