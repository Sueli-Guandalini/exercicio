<?php

    class Time{
        private $nome;
        private $jogadores;
        private $cidade;
        private $estado;

        public function __construct($nome,$cidade,$estado){
            $this->nome=$nome;
            $this->cidade=$cidade;
            $this->estado=$estado;
        }

        public function adiciona_jogador(Jogador $j){
            $this->jogadores[] = $j;
        }

    }


?>