<?php

    class Jogador{
        private $nome;
        private $idade;
        private $posicao;
        private $nacionalidade;
        private $time;

        public function __construct($n,$i,$p,$nac, Time $t){
            $this->nome = $n;
            $this->idade = $i;
            $this->posição = $p;
            $this->nacionalidade = $nac;
            $this->time = $t;
        }

        public function exibe_jogador(){
            echo "Jogador:
                $this->nome.
                $this->idade.
                $this->posicao.
                $this->nacionalidade.";
                $this->exibe_time();
        }
    }
?>