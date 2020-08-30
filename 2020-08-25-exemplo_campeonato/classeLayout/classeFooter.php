<?php

    class Footer {
        private $botao;
        private $titulo;

        public function __construct($parametros){
            $this->botao = $parametros["botao"];
            $this->titulo = $parametros["titulo"];
        }

        public function exibe(){
            echo'
                <footer class="row">
                    <div class="col-sm-6">
                        <button type="button" class="btn btn-primary"
                            data-toggle="modal" data-target="'.$this->botao.'">
                            '.$this->titulo.'
                        </button>
                    </div>
                </footer>
                ';
        }
    }
?>