<?php
    require_once "classeGeral.php";

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

        public function exibe(){
            echo "<nav>";            
            $this->exibe2();
            echo "Tempo de duração: $this->tempo <br />";
            echo "Produtora: $this->produtora <hr />";
            echo "</nav>";
        }
    }
?>