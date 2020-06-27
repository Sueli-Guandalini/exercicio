<?php
	
	abstract class Geral{
		public $titulo;
		public $sinopse;
		public $preco;
	
		public function exibe2() {
			echo "Titulo: $this->titulo <br />";
			echo "Sinopse: $this->sinopse <br />";
			echo 'Preço: R$'.number_format($this->preco).' <br />';
		}
	}
?>	
	
	
