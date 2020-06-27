<?php

    class Form4 {
        public $nome;
        public $musica;
       

        public function __construct($valores){
            $this->nome = $valores["nome"];
            $this->musica = $valores["musica"];
           
        }

        public function exibe(){
            echo "<fieldset>";           
            echo "Nome: $this->nome <br /><br />";
            echo "Gosto musical: $this->musica <hr />";
            echo "</fieldset>";
        }
    }
?>