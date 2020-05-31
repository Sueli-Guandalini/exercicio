<?php
class Input{
    public $type;
    public $name;
    public $placeholder;
    public $value;

    public function __construct($valor){
        $this->type = $valor["type"];

        if($valor["type"] == 'text'  || $valor["type"] == 'number'){
            $this->name = $valor["name"];
            $this->placeholder = $valor["placeholder"];
            $this->exibeText();

        }else{
            $this->value = $valor["value"];
            $this->exibeSubmit();
        }
    }

    public function exibeText(){
        echo "<input type='$this->type' name='$this->name' placeholder='$this->placeholder' required";

        if($this->name == 'preco'){
            echo "min='1' step='0.01'";
        }else if($this->name == 'paginas'  ||  $this->name == 'tempo'){
            echo "min='1' step='1'";
        }
        echo "/>";
    }

    public function exibeSubmit(){
        echo "<input type='$this->type' value='$this->value' required />";
    }
}
?>