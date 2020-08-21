<?php
    class Jogo{
        private $time1;
        private $time2;

        public function __construct($t1,$t2){
            $this->time1 = $t1;
            $this->time2 = $t2;
        }

        public function exibe_jogo(){
            echo "Jogo: $this->time1 (X $this->time2).";
        }
    }
?>