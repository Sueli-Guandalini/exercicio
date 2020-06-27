<?php
require_once "classeEntrada.php";

class Input extends Entrada{
    public $type; //null
    
    /*input type: text, email, number, date, hidden, radio, checkbox, submit, button  

        text: name, placeholder, [value, id, class]
        email: name, placeholder, [value]
        number: name, placeholder, [value, min, max, step, id, class]
        date: name, label, [id, class]
        hidden: name, value, [id, class]
        submit: value, [id, class]
        button: value, [id, class] */


    public function __construct($valor){

        $this->type = $valor["type"];
        // is sey -> Está "setado" ou preenchido, ou existe a variável.
        if(isset($valor["name"])){
            $this->name = $valor["name"];
        }
        if(isset($valor["placeholder"])){
            $this->placeholder = $valor["placeholder"];
        }
        if(isset($valor["value"])){
            $this->value = $valor["value"];
        }
        if(isset($valor["required"])){
            $this->required = $valor["required"];
        }
        if(isset($valor["class"])){
            $this->class = $valor["class"];
        }
        if(isset($valor["label"])){
            $this->label = $valor["label"];
        }
    }  

    public function exibir(){
        if($this->label!= null){
            echo "<label>$this->label</label>: ";
        }
        echo "<input type='$this->type' ";

        if($this->name!=null){
            echo "name='$this->name' ";
        }
        if($this->placeholder!=null){
            echo "placeholder='$this->placeholder' ";
        }
        if($this->value!=null){
            echo "value='$this->value' ";
        }
        if($this->class!=null){
            echo "class='$this->class' ";
        }
        if($this->required!=null){
            echo "required";
        }
        echo "/>";
        echo "<br />";
    }
}
?>