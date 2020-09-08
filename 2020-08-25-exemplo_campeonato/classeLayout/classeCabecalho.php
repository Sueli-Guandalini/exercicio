<?php

    class Cabecalho{

        private $logo;
        private $alt_logo;
        private $links;

        public function __construct($parametros){
            $this->logo = $parametros["logo"];
            $this->alt_logo = $parametros["alt_logo"];
            $this->links = $parametros["links"];
        }

        public function exibe(){
            echo '
            <!DOCTYPE html>
                <html>
                <head>
                    <meta charset="utf-8" />
                    <meta name="viewport" content="width=device-width, initial-scale=1"/>
                    <title>Página Inicial</title>
                    <link rel="stylesheet" href="css/bootstrap.min.css" />
                    <link rel="stylesheet" href="css/bootstrap-datepicker.min.css" />
                    <link rel="stylesheet" href="css/index.css" />
                    <link rel="stylesheet"
                        href="https://fonts.googleapis.com/icon?family=Material+Icons" />
                </head>
                <body>
                <div class="container"> <!-- abre o container que deverá ser fechado na Classe Footer -->
                    <nav class="navbar navbar-expand-md bg-primary navbar-dark fixed-top"> 
                    <!-- logotipo / brand -->
                    <a href="index.php" class="navbar-brand logotipo">
                        <img src="'.$this->logo.'" class="rounded" alt="'.$this->alt_logo.'" />
                    </a>

                    <!-- botão que aparece quando a tela for pequena -->
                    <button class="navbar-toggler" type="button"
                        data-toggle="collapse" data-target="#menu">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="menu">
                        <ul class="navbar-nav">';
                            foreach($this->links as $i=>$l){
                                echo '<li class="nav-item">
                                        <a class="nav-link" href="'.$l["link"].'">'.
                                        $l["label"]
                                        .'</a>
                                     </li>';
                            }   
                    echo '</ul>            
                    </div>
                </nav>';
        }

    }


?>