<?php

    class Time{
        private $nomeTime;
        private $jogador;
        private $vitorias;
        private $derrotas;
        private $empates;

        public function __construct($nt, Jogador $jog,$v,$d,$emp){
            $this->nomeTime = $nt;
            $this->jogador = $jog;
            $this->vitorias = $v;
            $this->derrotas = $d;
            $this->empates = $emp;
        }

        public function exibe_time(){
            echo "Time:
                $this->nomeTime.";
                $this->exibe_jogadores().;
            echo "$this->vitorias.
                $this->derrotas.
                $this->empates";
        }
    }
?>