<?php

    class Arbitro{
        private $nome;
        private $data_nascimento;
        private $federacao;
        
        public function __construct($nome,$data_nascimento,$federacao){
            $this->nome = $nome;
            $this->data_nascimento = $data_nascimento;
            $this->federacao = $federacao;
        }

    }

?>