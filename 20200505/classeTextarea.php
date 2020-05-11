<?php

class Textarea{
	public $name;
	public $placeholder;
	public $rows;
	public $cols;
	
	public function __construct($parametros){
		$this->name = $parametros["name"];
		$this->placeholder = $parametros["placeholder"];
		$this->rows = $parametros["rows"];
		$this->cols = $parametros["cols"];
	}
}
?>