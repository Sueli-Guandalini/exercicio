<?php

    class Form3 {
        public $nome;
        public $email;
        public $sexo;

        public function __construct($valores){
            $this->nome = $valores["nome"];
            $this->email = $valores["email"];
            $this->sexo = $valores["sexo"];
        }

        public function exibe(){
            echo "<fieldset>";           
            echo "Nome: $this->nome <br /><br />";
            echo "Email: $this->email <br />";
            echo "Sexo: $this->sexo <hr />";
            echo "</fieldset>";
        }
    }
?>