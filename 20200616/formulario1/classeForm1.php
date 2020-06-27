<?php

    class Form1 {
        public $nome;
        public $email;
        public $idade;

        public function __construct($valores){
            $this->nome = $valores["nome"];
            $this->email = $valores["email"];
            $this->idade = $valores["idade"];
        }
        public function exibe(){
            echo "<fieldset>";            
            echo "Nome: $this->nome <br /><br />";
            echo "Email: $this->email <br />";
            echo "Idade: $this->idade <br />";
            echo "Idade: $this->idade <br />";
            echo "Idade: $this->idade <br />";
            echo "</fieldset>";
        }
    }
?>