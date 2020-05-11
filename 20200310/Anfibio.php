<?php
	include_once "Animal.php";
	
	class Anfibio extends Animal{
		public $tempo_submerso;
		
		public function __construct($peso, $comprimento, $altura, $cor, $especie, $tempo_submerso){
			parent::__construct($peso, $comprimento, $altura, $cor, $especie);
			$this->tempo_submerso = $tempo_submerso;
		}
		
		public function get_tempo_submerso(){
			return ($this->tempo_submerso);
		}	
	}
?>