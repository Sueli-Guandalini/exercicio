<?php
    require_once "classeGeral.php";

    class Livro extends Geral{
        public $paginas;
        public $editora;

        public function __construct($atributos){
            $this->titulo = $atributos["titulo"];
            $this->sinopse = $atributos["sinopse"];
            $this->preco = $atributos["preco"];
            $this->paginas = $atributos["paginas"];
            $this->editora = $atributos["editora"];
        }

        public function exibe(){
            echo "<nav>";
            $this->exibe2();
            echo "Quantidade de páginas: $this->paginas <br />";
            echo "Editora: $this->editora <hr />";
            echo "</nav>";
        }  
    }
?>