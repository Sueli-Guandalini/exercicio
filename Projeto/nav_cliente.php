<?php
    include("conexao.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <title>Página Inicial</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/bootstrap-datepicker.min.css" />
    <link rel="stylesheet" href="css/index.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:300;400;700&display=swap" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:300;400;700&display=swap" rel="stylesheet">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">
                    
    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.0.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/981ce2b7f1.js" crossorigin="anonymous"></script>
    <!-- Progress Bar -->
    <script src="js/progress.min.js"></script>
    <!-- Parallax -->
    <script src="https://cdn.jsdelivr.net/parallax.js/1.4.2/parallax.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

</head>
<body>
<!-- Primeira Barra de navegação  -->
    <nav class="navbar navbar-principal" >
        <a href="#" class="navbar-brand">
            <img id="logo" src="img/logo.png" >
        </a>

        
        <!-- Botão de entrar ou cadastrar -->
        
        <div class="float-left"></div>
            <?php
                if(isset($_SESSION["usuario"]["permissao"])){
                    echo $_SESSION["usuario"]["nome_usuario"];
                    echo ' (<a href="logout.php"> sair</a>)';
                }else{
                    echo '<button type="button" class="btn btn-dark" data-toggle="modal" data-target=".bd-example-modal-lg">
                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path d="M13.468 12.37C12.758 11.226 11.195 10 8 10s-4.757 1.225-5.468 2.37A6.987 6.987 0 0 0 8 15a6.987 6.987 0 0 0 5.468-2.63z"/>
                        <path fill-rule="evenodd" d="M8 9a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                        <path fill-rule="evenodd" d="M8 1a7 7 0 1 0 0 14A7 7 0 0 0 8 1zM0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8z"/>
                      </svg>
                      Entre ou cadastre-se
                </button>';
                }
            ?>
            
			
        </div>
        


        <!--Modal do cadastro de usuario-->
        <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="login-form col-xs-10 offset-xs-1 
                col-sm-6 offset-sm-3 
                col-md-4 offset-md-4">
                <header>
                    <h1><img class="img-fluid" src="img/Slide1.jpg" /></h1>
                    <h2 class="text-center">Entre com seu <b>usuário</b> e <b>senha</b></h2>
                </header>
                <form action="autenticaLogin.php" method="POST" name="form_login">
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="material-icons">account_circle</i>
                            </div>
                            <input type="text" name="login" 
                             class="form-control" placeholder="Nome de usuário"
                             required="required" />
                        </div>
                    </div>
                    <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="material-icons">lock</i>
                                </div>
                                <input type="password" name="senha" class="form-control password" id="senha" data-cript="sha1, md5" placeholder="Senha" required="required"  />
                            </div>
                    </div>
                    <footer>
                        <div class="float-right">
                            <button type="button" id="login"
                            class="btn btn-primary">Entrar</button>
                        </div>
                    </footer>
                </form>
                <div class="float-left"></div>
                    <button class="btn btn-default btn-cadastrar btn-dark " data-toggle="modal" data-target="#NovoUsuario">
                        Cadastrar</button>
                </div>
            </div>
        
            <div class="modal" tabindex="-1" role="dialog" id="NovoUsuario">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Novo Usuário</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="php/salvarUsuario.php" method="post">
                        <div class="modal-body ">
                                
                            <div class="row">
                                <div class="form-group col-sm-6 col-xs-12">
                                    <label for="nome">Nome</label>
                                    <input type="text" name="nome" id="nome" class="form-control so-texto" required="required" />
                                </div>
                                <div class="form-group col-sm-6 col-xs-12">
                                    <label for="Sobrenome">Sobrenome</label>
                                    <input type="text" name="Sobrenome" id="Sobrenome" class="form-control" required="required"/>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-sm-6 col-xs-12">
                                    <label for="cpf">CPF</label>
                                    <input type="text" name="cpf" id="cpf" class="form-control" required="required"/>
                                </div>
                                <div class="form-group col-sm-6 col-xs-12">
                                    <label for="rg">RG</label>
                                    <input type="text" name="rg" id="rg" class="form-control" required="required"/>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-sm-6 col-xs-12">
                                    <label for="data_nascimento">Data Nascimento</label>
                                    <input type="date" name="data_nascimento" id="data_nascimento" class="form-control" required="required"/>
                                </div>
                                <div class="form-group col-sm-6 col-xs-12">
                                    <label for="telefone">Telefone</label>
                                    <input type="tel" name="telefone" id="telefone" class="form-control" required="required"/>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-sm-6 col-xs-12">
                                    <label for="rua">Rua</label>
                                    <input type="text" name="rua" id="rua" class="form-control" required="required"/>
                                </div>
                                <div class="form-group col-sm-6 col-xs-12">
                                    <label for="numero">Numero</label>
                                    <input type="text" name="numero" id="numero" class="form-control" required="required"/>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-sm-6 col-xs-12">
                                    <label for="compl">Complemento</label>
                                    <input type="text" name="compl" id="compl" class="form-control" />
                                </div>
                                <div class="form-group col-sm-6 col-xs-12">
                                    <label for="bairro">Bairro</label>
                                    <input type="text" name="bairro" id="bairro" class="form-control" required="required"/>
                                </div>
                            </div>
                        
                            <div class="row">
                                <div class="form-group col-sm-6 col-xs-12">
                                    <label for="cidade">Cidade</label>
                                    <input type="text" name="cidade" id="cidade" class="form-control" required="required"/>
                                </div>
                                <div class="form-group col-sm-6 col-xs-12">
                                    <label for="estado">UF</label>
                                    <input type="text" name="estado" id="estado" class="form-control" required="required"/>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-sm-6 col-xs-12">
                                    <label for="cep">CEP</label>
                                    <input type="text" name="cep" id="cep" class="form-control" required="required"/>
                                </div>
                            </div>

                            <div class="modal-header">
                                <h5 class="modal-title">Informação para o acesso</h5>
                            </div>
                            <br/>
                            <div class="row">
                                <div class="form-group col-sm-6 col-xs-12">
                                    <label for="nome_usuario">Nome Usuário</label>
                                    <input type="text" name="nome_usuario" id="nome_usuario" class="form-control" required="required"/>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-sm-6 col-xs-6">
                                    <label for="senha">Senha</label>
                                    <input type="password" name="senha" class="form-control password" data-cript="sha1, md5" id="senhaNova" placeholder="Senha" required="required"  />
                                </div> 
                                <div class="form-group col-xs-6">
							        <label for="senha">Confirmação de Senha</label>
							        <input type="password" name="senha" class="form-control password" data-cript="sha1, md5" id="senhaConfirmacao" placeholder="Senha" required="required" />
						        </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="reset" class="btn btn-danger">Limpar</button>
                            <button type="submit" class="btn btn-primary">Salvar</button>
                        </div>
                    </form>
                  </div>
                </div>
            </div>
            </div>
            </div>
          </div>

        


          <!-- Botão de central de suporte -->
        <div>
            <button type="button" class="btn btn-dark">
                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-telephone-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M2.267.98a1.636 1.636 0 0 1 2.448.152l1.681 2.162c.309.396.418.913.296 1.4l-.513 2.053a.636.636 0 0 0 .167.604L8.65 9.654a.636.636 0 0 0 .604.167l2.052-.513a1.636 1.636 0 0 1 1.401.296l2.162 1.681c.777.604.849 1.753.153 2.448l-.97.97c-.693.693-1.73.998-2.697.658a17.47 17.47 0 0 1-6.571-4.144A17.47 17.47 0 0 1 .639 4.646c-.34-.967-.035-2.004.658-2.698l.97-.969z"/>
                </svg>
                Central de Suporte</button>
        </div>

        <div>
                <button type="button" class="btn btn-dark">
                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cart-check" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
                        <path fill-rule="evenodd" d="M11.354 5.646a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L8 8.293l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                    </svg>
                    CARRINHO
                </button>
        </div>
    </nav>

    <P>
        <!-- Segunda Barra de navegação  -->
        <nav class="navbar nav-tabs" >

           <!-- <li class="active"><a data-toggle="tab" href="#home" id="link">Home</a></li>-->
            
            <div>
                <button type="button" class="btn btn-dark">
                    <a data-toggle="tab" href="#menu1" id="link">BLUSA</a>
                </button>
            </div>

            <div>
                <button type="button" class="btn btn-dark">
                    <a data-toggle="tab" href="#menu2" id="link">BODY</a>                    
                </button>
            </div>

            <div>
                <button type="button" class="btn btn-dark">
                    <a data-toggle="tab" href="#menu3" id="link">CALÇA</a>
                </button>
            </div>

            <div>
                <button type="button" class="btn btn-dark">
                    <a data-toggle="tab" href="#menu4" id="link">JARDINEIRA</a>
                </button>
            </div>

            <div>
                <button type="button" class="btn btn-dark">
                    <a data-toggle="tab" href="#menu5" id="link">MACACÃO</a>
                </button>
            </div>

            <div>
                <button type="button" class="btn btn-dark">
                    <a data-toggle="tab" href="#menu6" id="link">VESTIDO</a>
                </button>
            </div>

            <div>
                <button type="button" class="btn btn-dark">
                    <a data-toggle="tab" href="#menu7" id="link">SHORT</a>
                </button>
            </div>
          
              <!-- Botão de pesquisa -->
            <form class="form-inline">
                <input class="form-control mr-sm-2" type="search" placeholder="Pesquisar" aria-label="Pesquisar">
                <button class="btn btn-dark my-2 my-sm-0" type="submit">Pesquisar</button>
            </form>
            
        </nav>
    </P>




<!--Carrosel de fotos -->

    <div class="container-fluid">
            <div id="mainSlider" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#mainSlider" data-slide-to="0" class="active"></li>
                    <li data-target="#mainSlider" data-slide-to="1"></li>

                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="img/Slide1.jpg" class="d-block w-100" alt="maos">
                        <div class="carousel-caption d-none d-md-block">
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/foto.png" class="d-block w-100" alt="arcolgel">
                        <div class="carousel-caption d-none d-md-block">
                        </div>
                    </div>

                </div>
                <a href="#mainSlider" class="carousel-control-prev" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a href="#mainSlider" class="carousel-control-next" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>


   <!--Carrosel de fotos 
      
      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img/Slide1.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="img/foto.png" class="d-block w-100" alt="...">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>-->


      <!--Continucação da barra de navegação dinâmica -->
        <div class="tab-content">
            <!--<div id="home" class="tab-pane fade in active">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>-->

                <div id="menu1" class="tab-pane fade">
                    <h3>BLUSA</h3>
                    <p>
                        <!--foto da nossa vendas -->
                        <div id="team-area">
                            <div class="container">
                                <div class="row">
                                    <div class="col-12">
                                    </div>
                                    <div class="col-md-3">
                                        <div class="card">
                                            <img src="img/blusa.jpg" class="card-img-responsiva" alt="Imagem de Perfil 1">
                                            <div class="card-body">

                                                
                                                        <?php
                                                        //iniciando a conexão com o banco de dados 
                                                        $cx = mysqli_connect("localhost:3307", "root", "usbw");
                                                        
                                                        //selecionando o banco de dados 
                                                        $db = mysqli_select_db($cx, "lojaroupa");
                                                        
                                                        //criando a query de consulta à tabela criada 
                                                        $sql = mysqli_query($cx, "SELECT * FROM produto where id_produto = 1") or die( 
                                                        mysqli_error($cx) //caso haja um erro na consulta 
                                                        );
                                                        
                                                        //pecorrendo os registros da consulta. 
                                                        while($aux = mysqli_fetch_assoc($sql)) { 
                                                            echo "".$aux["nome_produto"]."<br /><br />"; 
                                                            
                                                            echo "Preço: ".$aux["preco"]."<br />"; 
                                                        }
                                                        
                                                        ?>
                                                
                                                <!--Modal para compra de roupa -->
                                                <button class="btn btn-dark" data-toggle="modal" data-target=".bd-example-modal-xl">Ver mais</button>

                                                <div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-xl">
                                                    <div class="modal-content">
                                                    ...
                                                    </div>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="card">
                                            <img src="img/blusa1.jpg" class="card-img-responsiva" alt="Imagem de Perfil 2">
                                            <div class="card-body">
                                                <h5 class="card-title">Blusa Elegante</h5>
                                                <p class="card-text">R$ 65,00</p>
                                                <button type="button" class="btn btn-dark">Ver mais</button>
                                            </div>
                                        </div>
                                    </div>
                        
                                    <div class="col-md-3">
                                        <div class="card">
                                            <img src="img/blusa2.jpg" class="card-img-responsiva" alt="Imagem de Perfil 3">
                                            <div class="card-body">
                                                <h5 class="card-title">Blusa Feminina Listrada</h5>
                                                <p class="card-text">R$ 24,99</p>
                                                <button type="button" class="btn btn-dark">Ver mais</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="card">
                                            <img src="img/blusa3.jpg" class="card-img-responsiva" alt="Imagem de Perfil 4">
                                            <div class="card-body">
                                                <h5 class="card-title">Blusa Florida Gola Canoa Manga Longa Babado</h5>
                                                <p class="card-text"> R$ 28,75</p>
                                                <button type="button" class="btn btn-dark">Ver mais</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </p>

                    <p>
                        <!--foto da nossa vendas -->
                        <div id="team-area">
                            <div class="container">
                                <div class="row">
                                    <div class="col-12">
                                    </div>
                                    <div class="col-md-3">
                                        <div class="card">
                                            <img src="img/blusa4.jpg" class="card-img-responsiva" alt="Imagem de Perfil 1">
                                            <div class="card-body">
                                                <h5 class="card-title">Blusa Feminina Tule Bufante Poa Manga </h5>
                                                <p class="card-text">R$ 45,00</p>
                                                <button type="button" class="btn btn-dark">Ver mais</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="card">
                                            <img src="img/blusa5.jpg" class="card-img-responsiva" alt="Imagem de Perfil 2">
                                            <div class="card-body">
                                                <h5 class="card-title">Blusa Feminina Vazada Manga Curta</h5>
                                                <p class="card-text">R$ 19,99</p>
                                                <button type="button" class="btn btn-dark">Ver mais</button>
                                            </div>
                                        </div>
                                    </div>
                        
                                    <div class="col-md-3">
                                        <div class="card">
                                            <img src="img/blusa6.jpg" class="card-img-responsiva" alt="Imagem de Perfil 3">
                                            <div class="card-body">
                                                <h5 class="card-title">Blusa de Laise com Botões</h5>
                                                <p class="card-text">R$ 49,99</p>
                                                <button type="button" class="btn btn-dark">Ver mais</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="card">
                                            <img src="img/blusa7.jpg" class="card-img-responsiva" alt="Imagem de Perfil 4">
                                            <div class="card-body">
                                                <h5 class="card-title">Flare Detalhes Renda Branca</h5>
                                                <p class="card-text">R$ 49,90</p>
                                                <button type="button" class="btn btn-dark">Ver mais</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </p>

                </div>

                <div id="menu2" class="tab-pane fade">
                    <h3>BODY</h3>
                    <p>
                           <!--foto da nossa vendas -->
                           <div id="team-area">
                            <div class="container">
                                <div class="row">
                                    <div class="col-12">
                                    </div>
                                    <div class="col-md-3">
                                        <div class="card">
                                            <img src="img/body.jpg" class="card-img-responsiva" alt="Imagem de Perfil 1">
                                            <div class="card-body">
                                                <h5 class="card-title">Jhon Doe</h5>
                                                <p class="card-text">Software Developer</p>
                                                <button type="button" class="btn btn-dark">Ver mais</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="card">
                                            <img src="img/body1.jpg" class="card-img-responsiva" alt="Imagem de Perfil 2">
                                            <div class="card-body">
                                                <h5 class="card-title">Body Feminino Cigana Ombro</h5>
                                                <p class="card-text">R$ 38,70</p>
                                                <button type="button" class="btn btn-dark">Ver mais</button>
                                            </div>
                                        </div>
                                    </div>
                        
                                    <div class="col-md-3">
                                        <div class="card">
                                            <img src="img/body2.jpg" class="card-img-responsiva" alt="Imagem de Perfil 3">
                                            <div class="card-body">
                                                <h5 class="card-title">Paul Baker</h5>
                                                <p class="card-text">Project Manager</p>
                                                <button type="button" class="btn btn-dark">Ver mais</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="card">
                                            <img src="img/body3.jpg" class="card-img-responsiva" alt="Imagem de Perfil 4">
                                            <div class="card-body">
                                                <h5 class="card-title">Karina Katarina</h5>
                                                <p class="card-text">UX/UI Designer</p>
                                                <button type="button" class="btn btn-dark">Ver mais</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </p>

                    <!--foto da nossa vendas -->
                    <div id="team-area">
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                </div>
                                <div class="col-md-3">
                                    <div class="card">
                                        <img src="img/body4.jpg" class="card-img-responsiva" alt="Imagem de Perfil 1">
                                        <div class="card-body">
                                            <h5 class="card-title">Jhon Doe</h5>
                                            <p class="card-text">Software Developer</p>
                                            <button type="button" class="btn btn-dark">Ver mais</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="card">
                                        <img src="img/body5.jpg" class="card-img-responsiva" alt="Imagem de Perfil 2">
                                        <div class="card-body">
                                            <h5 class="card-title">Maria Mariana</h5>
                                            <p class="card-text">SEO Consultant</p>
                                            <button type="button" class="btn btn-dark">Ver mais</button>
                                        </div>
                                    </div>
                                </div>
                    
                                <div class="col-md-3">
                                    <div class="card">
                                        <img src="img/body6.jpg" class="card-img-responsiva" alt="Imagem de Perfil 3">
                                        <div class="card-body">
                                            <h5 class="card-title">Paul Baker</h5>
                                            <p class="card-text">Project Manager</p>
                                            <button type="button" class="btn btn-dark">Ver mais</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="card">
                                        <img src="img/body7.jpg" class="card-img-responsiva" alt="Imagem de Perfil 4">
                                        <div class="card-body">
                                            <h5 class="card-title">Body Feminino Lupo Loba </h5>
                                            <p class="card-text">R$ 49,90</p>
                                            <button type="button" class="btn btn-dark">Ver mais</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </p>

                </div>

                <div id="menu3" class="tab-pane fade">
                    <h3>CALÇA</h3>
                    <p>
                           <!--foto da nossa vendas -->
                           <div id="team-area">
                            <div class="container">
                                <div class="row">
                                    <div class="col-12">
                                    </div>
                                    <div class="col-md-3">
                                        <div class="card">
                                            <img src="img/calca.jpg" class="card-img-responsiva" alt="Imagem de Perfil 1">
                                            <div class="card-body">
                                                <h5 class="card-title">Jhon Doe</h5>
                                                <p class="card-text">Software Developer</p>
                                                <button type="button" class="btn btn-dark">Ver mais</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="card">
                                            <img src="img/calca1.jpg" class="card-img-responsiva" alt="Imagem de Perfil 2">
                                            <div class="card-body">
                                                <h5 class="card-title">Maria Mariana</h5>
                                                <p class="card-text">SEO Consultant</p>
                                                <button type="button" class="btn btn-dark">Ver mais</button>
                                            </div>
                                        </div>
                                    </div>
                        
                                    <div class="col-md-3">
                                        <div class="card">
                                            <img src="img/calca2.jpg" class="card-img-responsiva" alt="Imagem de Perfil 3">
                                            <div class="card-body">
                                                <h5 class="card-title">Paul Baker</h5>
                                                <p class="card-text">Project Manager</p>
                                                <button type="button" class="btn btn-dark">Ver mais</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="card">
                                            <img src="img/calca3.jpg" class="card-img-responsiva" alt="Imagem de Perfil 4">
                                            <div class="card-body">
                                                <h5 class="card-title">Karina Katarina</h5>
                                                <p class="card-text">UX/UI Designer</p>
                                                <button type="button" class="btn btn-dark">Ver mais</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </p>

                    <!--foto da nossa vendas -->
                    <div id="team-area">
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                </div>
                                <div class="col-md-3">
                                    <div class="card">
                                        <img src="img/calca4.jpg" class="card-img-responsiva" alt="Imagem de Perfil 1">
                                        <div class="card-body">
                                            <h5 class="card-title">Jhon Doe</h5>
                                            <p class="card-text">Software Developer</p>
                                            <button type="button" class="btn btn-dark">Ver mais</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="card">
                                        <img src="img/calca5.jpg" class="card-img-responsiva" alt="Imagem de Perfil 2">
                                        <div class="card-body">
                                            <h5 class="card-title">Maria Mariana</h5>
                                            <p class="card-text">SEO Consultant</p>
                                            <button type="button" class="btn btn-dark">Ver mais</button>
                                        </div>
                                    </div>
                                </div>
                    
                                <div class="col-md-3">
                                    <div class="card">
                                        <img src="img/calca6.jpg" class="card-img-responsiva" alt="Imagem de Perfil 3">
                                        <div class="card-body">
                                            <h5 class="card-title">Paul Baker</h5>
                                            <p class="card-text">Project Manager</p>
                                            <button type="button" class="btn btn-dark">Ver mais</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="card">
                                        <img src="img/calca7.jpg" class="card-img-responsiva" alt="Imagem de Perfil 4">
                                        <div class="card-body">
                                            <h5 class="card-title">Karina Katarina</h5>
                                            <p class="card-text">UX/UI Designer</p>
                                            <button type="button" class="btn btn-dark">Ver mais</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </p>

                </div>

                <div id="menu4" class="tab-pane fade">
                    <h3>JARDINEIRA</h3>
                    <p>

                           <!--foto da nossa vendas -->
                           <div id="team-area">
                            <div class="container">
                                <div class="row">
                                    <div class="col-12">
                                    </div>
                                    <div class="col-md-3">
                                        <div class="card">
                                            <img src="img/jardineira.jpg" class="card-img-responsiva" alt="Imagem de Perfil 1">
                                            <div class="card-body">
                                                <h5 class="card-title">Jhon Doe</h5>
                                                <p class="card-text">Software Developer</p>
                                                <button type="button" class="btn btn-dark">Ver mais</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="card">
                                            <img src="img/jardineira1.jpg" class="card-img-responsiva" alt="Imagem de Perfil 2">
                                            <div class="card-body">
                                                <h5 class="card-title">Maria Mariana</h5>
                                                <p class="card-text">SEO Consultant</p>
                                                <button type="button" class="btn btn-dark">Ver mais</button>
                                            </div>
                                        </div>
                                    </div>
                        
                                    <div class="col-md-3">
                                        <div class="card">
                                            <img src="img/jardineira2.jpg" class="card-img-responsiva" alt="Imagem de Perfil 3">
                                            <div class="card-body">
                                                <h5 class="card-title">Paul Baker</h5>
                                                <p class="card-text">Project Manager</p>
                                                <button type="button" class="btn btn-dark">Ver mais</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="card">
                                            <img src="img/jardineira3.jpg" class="card-img-responsiva" alt="Imagem de Perfil 4">
                                            <div class="card-body">
                                                <h5 class="card-title">Karina Katarina</h5>
                                                <p class="card-text">UX/UI Designer</p>
                                                <button type="button" class="btn btn-dark">Ver mais</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </p>

                    <!--foto da nossa vendas -->
                    <div id="team-area">
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                </div>
                                <div class="col-md-3">
                                    <div class="card">
                                        <img src="img/jardineira4.jpg" class="card-img-responsiva" alt="Imagem de Perfil 1">
                                        <div class="card-body">
                                            <h5 class="card-title">Jhon Doe</h5>
                                            <p class="card-text">Software Developer</p>
                                            <button type="button" class="btn btn-dark">Ver mais</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="card">
                                        <img src="img/jardineira5.jpg" class="card-img-responsiva" alt="Imagem de Perfil 2">
                                        <div class="card-body">
                                            <h5 class="card-title">Maria Mariana</h5>
                                            <p class="card-text">SEO Consultant</p>
                                            <button type="button" class="btn btn-dark">Ver mais</button>
                                        </div>
                                    </div>
                                </div>
                    
                                <div class="col-md-3">
                                    <div class="card">
                                        <img src="img/jardineira6.jpg" class="card-img-responsiva" alt="Imagem de Perfil 3">
                                        <div class="card-body">
                                            <h5 class="card-title">Paul Baker</h5>
                                            <p class="card-text">Project Manager</p>
                                            <button type="button" class="btn btn-dark">Ver mais</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="card">
                                        <img src="img/jardineira7.jpg" class="card-img-responsiva" alt="Imagem de Perfil 4">
                                        <div class="card-body">
                                            <h5 class="card-title">Karina Katarina</h5>
                                            <p class="card-text">UX/UI Designer</p>
                                            <button type="button" class="btn btn-dark">Ver mais</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </p>

                </div>

                <div id="menu5" class="tab-pane fade">
                    <h3>MACACÃO</h3>
                    <p>
                           <!--foto da nossa vendas -->
                           <div id="team-area">
                            <div class="container">
                                <div class="row">
                                    <div class="col-12">
                                    </div>
                                    <div class="col-md-3">
                                        <div class="card">
                                            <img src="img/macacao.jpg" class="card-img-responsiva" alt="Imagem de Perfil 1">
                                            <div class="card-body">
                                                <h5 class="card-title">Jhon Doe</h5>
                                                <p class="card-text">Software Developer</p>
                                                <button type="button" class="btn btn-dark">Ver mais</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="card">
                                            <img src="img/macacao1.jpg" class="card-img-responsiva" alt="Imagem de Perfil 2">
                                            <div class="card-body">
                                                <h5 class="card-title">Maria Mariana</h5>
                                                <p class="card-text">SEO Consultant</p>
                                                <button type="button" class="btn btn-dark">Ver mais</button>
                                            </div>
                                        </div>
                                    </div>
                        
                                    <div class="col-md-3">
                                        <div class="card">
                                            <img src="img/macacao2.jpg" class="card-img-responsiva" alt="Imagem de Perfil 3">
                                            <div class="card-body">
                                                <h5 class="card-title">Paul Baker</h5>
                                                <p class="card-text">Project Manager</p>
                                                <button type="button" class="btn btn-dark">Ver mais</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="card">
                                            <img src="img/macacao3.jpg" class="card-img-responsiva" alt="Imagem de Perfil 4">
                                            <div class="card-body">
                                                <h5 class="card-title">Karina Katarina</h5>
                                                <p class="card-text">UX/UI Designer</p>
                                                <button type="button" class="btn btn-dark">Ver mais</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </p>

                    <!--foto da nossa vendas -->
                    <div id="team-area">
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                </div>
                                <div class="col-md-3">
                                    <div class="card">
                                        <img src="img/macacao4.jpg" class="card-img-responsiva" alt="Imagem de Perfil 1">
                                        <div class="card-body">
                                            <h5 class="card-title">Jhon Doe</h5>
                                            <p class="card-text">Software Developer</p>
                                            <button type="button" class="btn btn-dark">Ver mais</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="card">
                                        <img src="img/macacao5.jpg" class="card-img-responsiva" alt="Imagem de Perfil 2">
                                        <div class="card-body">
                                            <h5 class="card-title">Maria Mariana</h5>
                                            <p class="card-text">SEO Consultant</p>
                                            <button type="button" class="btn btn-dark">Ver mais</button>
                                        </div>
                                    </div>
                                </div>
                    
                                <div class="col-md-3">
                                    <div class="card">
                                        <img src="img/macacao6.jpg" class="card-img-responsiva" alt="Imagem de Perfil 3">
                                        <div class="card-body">
                                            <h5 class="card-title">Paul Baker</h5>
                                            <p class="card-text">Project Manager</p>
                                            <button type="button" class="btn btn-dark">Ver mais</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="card">
                                        <img src="img/macacao7.jpg" class="card-img-responsiva" alt="Imagem de Perfil 4">
                                        <div class="card-body">
                                            <h5 class="card-title">Karina Katarina</h5>
                                            <p class="card-text">UX/UI Designer</p>
                                            <button type="button" class="btn btn-dark">Ver mais</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </p>

                </div>

                <div id="menu6" class="tab-pane fade">
                    <h3>VESTIDO</h3>
                    <p>
                        
                           <!--foto da nossa vendas -->
                           <div id="team-area">
                            <div class="container">
                                <div class="row">
                                    <div class="col-12">
                                    </div>
                                    <div class="col-md-3">
                                        <div class="card">
                                            <img src="img/vestido.jpg" class="card-img-responsiva" alt="Imagem de Perfil 1">
                                            <div class="card-body">
                                                <h5 class="card-title">Jhon Doe</h5>
                                                <p class="card-text">Software Developer</p>
                                                <button type="button" class="btn btn-dark">Ver mais</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="card">
                                            <img src="img/vestido1.jpg" class="card-img-responsiva" alt="Imagem de Perfil 2">
                                            <div class="card-body">
                                                <h5 class="card-title">Maria Mariana</h5>
                                                <p class="card-text">SEO Consultant</p>
                                                <button type="button" class="btn btn-dark">Ver mais</button>
                                            </div>
                                        </div>
                                    </div>
                        
                                    <div class="col-md-3">
                                        <div class="card">
                                            <img src="img/vestido2.jpg" class="card-img-responsiva" alt="Imagem de Perfil 3">
                                            <div class="card-body">
                                                <h5 class="card-title">Paul Baker</h5>
                                                <p class="card-text">Project Manager</p>
                                                <button type="button" class="btn btn-dark">Ver mais</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="card">
                                            <img src="img/vestido3.jpg" class="card-img-responsiva" alt="Imagem de Perfil 4">
                                            <div class="card-body">
                                                <h5 class="card-title">Karina Katarina</h5>
                                                <p class="card-text">UX/UI Designer</p>
                                                <button type="button" class="btn btn-dark">Ver mais</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </p>

                    <!--foto da nossa vendas -->
                    <div id="team-area">
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                </div>
                                <div class="col-md-3">
                                    <div class="card">
                                        <img src="img/vestido4.jpg" class="card-img-responsiva" alt="Imagem de Perfil 1">
                                        <div class="card-body">
                                            <h5 class="card-title">Jhon Doe</h5>
                                            <p class="card-text">Software Developer</p>
                                            <button type="button" class="btn btn-dark">Ver mais</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="card">
                                        <img src="img/vestido5.jpg" class="card-img-responsiva" alt="Imagem de Perfil 2">
                                        <div class="card-body">
                                            <h5 class="card-title">Maria Mariana</h5>
                                            <p class="card-text">SEO Consultant</p>
                                            <button type="button" class="btn btn-dark">Ver mais</button>
                                        </div>
                                    </div>
                                </div>
                    
                                <div class="col-md-3">
                                    <div class="card">
                                        <img src="img/vestido6.jpg" class="card-img-responsiva" alt="Imagem de Perfil 3">
                                        <div class="card-body">
                                            <h5 class="card-title">Vestido Evase Laise Botoes Leticia</h5>
                                            <p class="card-text">R$ 99,99</p>
                                            <button type="button" class="btn btn-dark">Ver mais</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="card">
                                        <img src="img/vestido7.jpg" class="card-img-responsiva" alt="Imagem de Perfil 4">
                                        <div class="card-body">
                                            <h5 class="card-title">SHEIN Nó Floral Boho Vestido</h5>
                                            <p class="card-text">R$ 75,99</p>
                                            <button type="button" class="btn btn-dark">Ver mais</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </p>

                </div>

                <div id="menu7" class="tab-pane fade">
                    <h3>SHORT</h3>
                    <p>
                        
                           <!--foto da nossa vendas -->
                           <div id="team-area">
                            <div class="container">
                                <div class="row">
                                    <div class="col-12">
                                    </div>
                                    <div class="col-md-3">
                                        <div class="card">
                                            <img src="img/short.jpg" class="card-img-responsiva" alt="Imagem de Perfil 1">
                                            <div class="card-body">
                                                <h5 class="card-title">Jhon Doe</h5>
                                                <p class="card-text">Software Developer</p>
                                                <button type="button" class="btn btn-dark">Ver mais</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="card">
                                            <img src="img/short1.jpg" class="card-img-responsiva" alt="Imagem de Perfil 2">
                                            <div class="card-body">
                                                <h5 class="card-title">Maria Mariana</h5>
                                                <p class="card-text">SEO Consultant</p>
                                                <button type="button" class="btn btn-dark">Ver mais</button>
                                            </div>
                                        </div>
                                    </div>
                        
                                    <div class="col-md-3">
                                        <div class="card">
                                            <img src="img/short2.jpg" class="card-img-responsiva" alt="Imagem de Perfil 3">
                                            <div class="card-body">
                                                <h5 class="card-title">Paul Baker</h5>
                                                <p class="card-text">Project Manager</p>
                                                <button type="button" class="btn btn-dark">Ver mais</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="card">
                                            <img src="img/short3.jpg" class="card-img-responsiva" alt="Imagem de Perfil 4">
                                            <div class="card-body">
                                                <h5 class="card-title">Shorts Feminino Casual Com Fechamento De Zíper</h5>
                                                <p class="card-text">R$ 99,60</p>
                                                <button type="button" class="btn btn-dark">Ver mais</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </p>

                    <!--foto da nossa vendas -->
                    <div id="team-area">
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                </div>
                                <div class="col-md-3">
                                    <div class="card">
                                        <img src="img/short4.jpg" class="card-img-responsiva" alt="Imagem de Perfil 1">
                                        <div class="card-body">
                                            <h5 class="card-title">Jhon Doe</h5>
                                            <p class="card-text">Software Developer</p>
                                            <button type="button" class="btn btn-dark">Ver mais</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="card">
                                        <img src="img/short5.jpg" class="card-img-responsiva" alt="Imagem de Perfil 2">
                                        <div class="card-body">
                                            <h5 class="card-title">Maria Mariana</h5>
                                            <p class="card-text">SEO Consultant</p>
                                            <button type="button" class="btn btn-dark">Ver mais</button>
                                        </div>
                                    </div>
                                </div>
                    
                                <div class="col-md-3">
                                    <div class="card">
                                        <img src="img/short6.jpg" class="card-img-responsiva" alt="Imagem de Perfil 3">
                                        <div class="card-body">
                                            <h5 class="card-title">SHORTS SAIA JEANS</h5>
                                            <p class="card-text">R$ 108,85</p>
                                            <button type="button" class="btn btn-dark">Ver mais</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="card">
                                        <img src="img/short7.jpg" class="card-img-responsiva" alt="Imagem de Perfil 4">
                                        <div class="card-body">
                                            <h5 class="card-title">Short Murau Rose</h5>
                                            <p class="card-text">R$ 49,90</p>
                                            <button type="button" class="btn btn-dark">Ver mais</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </p>

                </div>
            </div>
        </div>


         <!-- Rodapé -->
    <!-- <footer>
        <div id="contact-area">
            <div class="container">
                <div class="row">
                   <div class="col-md-12">
                       <h3 class="main-title">Entre em Contato Conosco</h3>
                   </div>
                   <div class="col-md-4 contact-box">
                        <i class="fas fa-phone"></i>
                        <p><span class="contact-title">Ligue para:</span>(16) 9999-9999</p>
                        <p><span class="contact-title">Horários:</span>8:00 - 19:00</p>
                   </div>
            </div>
            <div id="copy-area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <p>Desenvolvido por <a href="https://www.amoresolidariedade.com.br" target="_blank">Amor e Solidariedade</a> &COPY; 2020</p>
                        </div>
                    </div>
                </div>
   
        </div>
    </footer> -->

     
    <!--Script do projeto -->
    <script src="js/scripts.js"></script>
</body>
</html>
