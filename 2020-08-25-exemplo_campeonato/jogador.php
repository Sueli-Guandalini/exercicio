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
    <div class="container">
        <nav class="navbar navbar-expand-md bg-primary navbar-dark fixed-top"> 
            <!-- logotipo / brand -->
            <a href="index.php" class="navbar-brand logotipo">
                <img src="img/logo.png" class="rounded" alt="Logotipo do Campeonato" />
            </a>

            <!-- botão que aparece quando a tela for pequena -->
            <button class="navbar-toggler" type="button"
                data-toggle="collapse" data-target="#menu">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="menu">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="">
                        Campeonato</a></li>
                    <li class="nav-item"><a class="nav-link" href="">
                        Jogo</a></li>
                        <li class="nav-item"><a class="nav-link" href="time.php">
                        Time</a></li>
                    <li class="nav-item"><a class="nav-link" href="jogador.php">
                        Jogadores</a></li>
                </ul>            
            </div>
        </nav>
        <nav>
            <ol class="breadcrumb bread migalha">
                <li class="breadcrumb-item">
                    <a href="">Início</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="">Jogadores</a>
                </li>
                <li class="breadcrumb-item active">
                    Pesquisa
                </li>
            </ol>
        </nav>

        <div class="row cabecalho">
            <div class="col-12 col-md-6">
                <h1>Jogador</h1>
            </div>
            <div class="form-group col-12 col-md-4 offset-md-2 busca">
                <div class="input-group">
                    <input type="text" name="busca" id="busca"
                        class="form-control" 
                        placeholder="Pesquisar jogador..." />
                    <span class="input-group-btn">
                        <button type="button"class="btn btn-default">
                            <i class="material-icons">search</i>
                        </button>
                    </span>
                </div>
            </div>
        </div>

        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover">
                <thead>
                    <tr>
                        <th>Código</th>
                        <th>Nome</th>
                        <th>Data Nascimento</th>
                        <th>Time</th>
                        <th>Cartões</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>12345</td>
                        <td>Pelé</td>
                        <td>01/01/1950</td>
                        <td>------</td>
                        <td>
                            <span class="badge badge-yellow"> - 0 - </span>
                            <span class="badge badge-danger"> - 0 - </span>
                        </td>
                        <td>
                            <a href="" data-toggle="tooltip" title="Editar">
                                <i class="material-icons text-warning">create</i>
                            </a>
                            <a href="" data-toggle="tooltip" title="Excluir">
                                <i class="material-icons text-danger">delete</i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>11111</td>
                        <td>Maradona</td>
                        <td>01/01/1955</td>
                        <td>------</td>
                        <td>
                            <span class="badge badge-yellow"> - 0 - </span>
                            <span class="badge badge-danger"> - 0 - </span>
                        </td>
                        <td>
                            <a href="" data-toggle="tooltip" title="Editar">
                                <i class="material-icons text-warning">create</i>
                            </a>
                            <a href="" data-toggle="tooltip" title="Excluir">
                                <i class="material-icons text-danger">delete</i>
                            </a>
                        </td>
                    </tr>            
                </tbody>
            </table>
        </div>
        <footer class="row">
            <div class="col-sm-6">
                <button type="button" class="btn btn-primary"
                    data-toggle="modal" data-target="#novoJogador">
                    Novo Jogador
                </button>
            </div>
        </footer>
    </div>

    <div class="modal" tabindex="-1" role="dialog" id="novoJogador">
		<div class="modal-dialog" role="document">
		  <div class="modal-content">
			<div class="modal-header">
			  <h5 class="modal-title">Novo Jogador</h5>
			  <button type="button" class="close" data-dismiss="modal" 
			  aria-label="Fechar">
				<span aria-hidden="true">&times;</span>
			  </button>
			</div>
			<form action="" method="post">
				<div class="modal-body">									                    
					<div class="row">
						<div class="form-group col-sm-12 col-12">							
                            <input type="text" name="nome" id="nome"
                                 class="form-control" 
                                 placeholder="Nome do Jogador..." />
						</div>
                    </div>
                    <div class="row">
						<div class="form-group col-sm-12 col-12">	
                            <label>Data Nascimento:</label>						
                            <input type="date" name="data_nascimento" 
                            id="data_nascimento" class="form-control" />
						</div>
                    </div>

                    <div class="row">
						<div class="form-group col-sm-12 col-12">	
                            <select name="cod_time">
						</div>
                    </div>

				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
					<button type="submit" class="btn btn-primary">Salvar</button>
				</div>
			</form>
		  </div>
		</div>
	</div>

    <script src="js/popper.min.js"></script>
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap-datepicker.min.js"></script>
    <script src="js/bootstrap-datepicker.pt-BR.min.js"></script>
    <script src="js/index.js"></script>
</body>
</html>