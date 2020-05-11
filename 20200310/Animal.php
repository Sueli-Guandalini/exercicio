<?php
	class Animal{
		public $peso;
		public $comprimento;
		public $altura;
		public $cor;
		public $especie;
		
		public function __construct($peso, $comprimento, $altura, $cor, $especie){
			$this->peso = $peso;
			$this->comprimento = $comprimento;
			$this->altura = $altura;
			$this->cor = $cor;
			$this->especie = $especie;
		}
		
		public function get_peso(){
			return($this->peso);
		}
		
		public function get_comprimento(){
			return($this->comprimento);
		}
		
		public function get_altura(){
			return($this->altura);
		}
		
		public function get_cor(){
			return($this->cor);
		}
		
		public function get_especie(){
			return($this->especie);
		}
		
		public function exibeDados(){
		echo "$tipo.:".$a->getEspecie()."<br />";	
	}
}
?>



