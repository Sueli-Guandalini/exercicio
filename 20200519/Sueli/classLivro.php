<?php
    require_once "classGeral.php";

    class Livro extends Geral {
        public $quantpaginas;
        public $editora;       
        public function __construct($atributos){
            $this->titulo = $atributos["titulo"];
            $this->sinopse = $atributos["sinopse"];
            $this->preco = $atributos["preco"];
            $this->quantpaginas = $atributos["quantpaginas"];
            $this->editora = $atributos["editora"];
        }
    }
?>