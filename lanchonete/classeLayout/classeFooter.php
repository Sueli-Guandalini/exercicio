<?php

    class Footer{
        private $titulo; //
        private $id_titulo; //

        public function __construct($parametros){
            $this->titulo = $parametros["titulo"]; //exemplo: Bebida Quente
            $this->id_titulo = $parametros["id_titulo"]; //exemplo: bebidaQuente
        }


        public function exibe(){
            echo '
            <footer class="row">
                <div class="col-sm-6">
                    <button type="button" class="btn btn-primary"
                        data-toggle="modal" data-target="#novo'.$this->id_titulo.'">
                        Novo(a) '.$this->titulo.'
                    </button>
                </div>
            </footer>
        </div> <!-- fecha o container aberto na classe Cabecalho -->
            ';
        }

    }

?>