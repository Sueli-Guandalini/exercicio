<?php

    class Campeonato{
        private $data;
        private $local;
        private $placar;
        private $jogos;
        private $times;
        private $jogadores;

        public function add_jogo(Jogo $j){
            $this->jogos[] = $j;
        }

        public function add_time(Time $t){
            $this->times[] = $t;
        }

        public function add_jogador(Jogador $jog){
            $this->jogadores[] = $jog;
        }

        public function exibe_jogos(){
            foreach($this->jogos as $j){
                $j->exibe_jogo();
                echo "<br />;"
            }

        }

        public function exibe_times(){
            foreach($this->times as $t){
                $t->exibe_time();
                echo "<br />;"
            }

        }

        public function exibe_jogadores(){
            foreach($this->jogadores as $jog){
                $jog->exibe_jogador();
                echo"<br />;"
            }

        }
    }
?>