<?php
    require_once "classGeral.php";

    class Filmes extends Geral {
        public $tempo;
        public $produtora;       
        public function __construct($atributos){
            $this->titulo = $atributos["titulo"];
            $this->sinopse = $atributos["sinopse"];
            $this->preco = $atributos["preco"];
            $this->tempo = $atributos["tempo"];
            $this->produtora = $atributos["produtora"];
        }
    }
?>