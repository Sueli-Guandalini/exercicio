<?php
	
	abstract class Geral{
		public $titulo;
		public $sinopse;
		public $preco;
	

		public function __construct($atributos){
			$this->titulo = $atributos["titulo"];
			$this->sinopse = $atributos["sinopse"];
			$this->preco = $atributos["preco"];
		}
		
		public function exibe_geral() {
			echo "Titulo: $this->titulo <br />";
			echo "Sinopse: $this->sinopse <br />";
			echo "Preço: R$'.number_format($this->preco,2).' <br />";
		}
	}
?>	
	
	
