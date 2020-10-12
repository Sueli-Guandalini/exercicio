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
            if(basename($_SERVER['PHP_SELF'],'.php')!="login"){
                include "validacaoUsuario.php";
            }

         
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
                        href="https://fonts.googleapis.com/css2?family=Roboto:300;400;700&display=swap" />
                    <link rel="stylesheet" 
                        href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" />
                    <link rel="stylesheet"
                        href="https://fonts.googleapis.com/icon?family=Material+Icons" />
                        <link href="https://fonts.googleapis.com/css2?family=Roboto:300;400;700&display=swap" rel="stylesheet">
                        <!-- Bootstrap -->
                        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
                        <link rel="stylesheet" href="css/styles.css">
                    
                        <!-- Scripts -->
                        <script 
                        src="https://code.jquery.com/jquery-3.5.0.min.js" 
                        integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" 
                        crossorigin="anonymous"></script>
                        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
                        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
                        <!-- Font Awesome -->
                        <script src="https://kit.fontawesome.com/981ce2b7f1.js" crossorigin="anonymous"></script>
                        <!-- Progress Bar -->
                        <script src="js/progress.min.js"></script>
                        <!-- Parallax -->
                        <script src="https://cdn.jsdelivr.net/parallax.js/1.4.2/parallax.min.js"></script>
                        <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
                        rel="stylesheet">
                </head>
                <body>
                <div class="container"> <!-- abre o container que deverá ser fechado na Classe Footer -->';
                if(isset($_SESSION['usuario']['permissao']) && $_SESSION['usuario']['permissao'] == "1"){

                    
                    echo' <nav class="navbar navbar-expand-md bg-primary navbar-dark fixed-top" > 
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
                        if(basename($_SERVER['PHP_SELF'],'.php')!="login"){
                         
                            foreach($this->links as $i=>$l){
                                echo '<li class="nav-item">
                                        <a class="nav-link" href="'.$l["link"].'">'.
                                        $l["label"]
                                        .'</a>
                                     </li>';
                            }  
                            echo '<li class="nav-item">
                                        <a class="nav-link" href="logout.php">(SAIR)</a>
                                     </li>';
                        }      
                    echo '</ul>  
                              
                    </div>

                   
                </nav>';
            }else{
                include "nav_cliente.php";
            }
        }

    }


?>