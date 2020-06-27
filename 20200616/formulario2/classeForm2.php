<?php

    class Form2 {
        public $nome;
        public $peso;
        public $datanasc;
        public $cpf;

        public function __construct($valores){
            $this->nome = $valores["nome"];
            $this->peso = $valores["peso"];
            $this->datanasc = $valores["datanasc"];
            $this->cpf = $valores["cpf"];
        }
        public function exibe(){
            echo "<fieldset>";           
            echo "Nome: $this->nome <br />";
            echo "Peso: $this->peso <br />";
            echo "Data Nasc.: $this->datanasc <br />";
            echo "Cpf: $this->cpf <br />";
            echo "</fieldset>";
        }
    }
?>