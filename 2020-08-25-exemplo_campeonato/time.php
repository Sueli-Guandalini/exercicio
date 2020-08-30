<?php
    include "classeLayout/classeCabecalho.php";
    include "classeLayout/classeBreadCrumb.php";
    include "classeLayout/classeRowCabecalho.php";
    include "classeLayout/classeFooter.php";

?>
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
        <?php
            include "configuracaoCabecalho.php";                                       
            $cabecalho = new Cabecalho($p);
            $cabecalho->exibe();

            include "configuracaoBreadCrumb.php";
            $breadcrumb = new BreadCrumb($p);
            $breadcrumb->exibe();

            include "configuracaoRowCabecalho.php";
            $rowcabecalho = new RowCabecalho($p);
            $rowcabecalho->exibe();

            include "configuracaoFooter.php";
            $footer = new Footer($p);
            $footer->exibe();

        ?>
        
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover">
                <thead>
                    <tr>
                        <th>Código</th>
                        <th>Nome</th>
                        <th>Cidade</th>
                        <th>Estado</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>12345</td>
                        <td>São Paulo Futebol Clube</td>
                        <td>São Paulo</td>
                        <td>SP</td>                        
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
                        <td>12345</td>
                        <td>Corinthians Futebol Clube</td>
                        <td>São Paulo</td>
                        <td>SP</td>                        
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
                        <td>12345</td>
                        <td>Santos Futebol Clube</td>
                        <td>Santos</td>
                        <td>SP</td>                        
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
        
    </div>

    <div class="modal" tabindex="-1" role="dialog" id="novoTime">
		<div class="modal-dialog" role="document">
		  <div class="modal-content">
			<div class="modal-header">
			  <h5 class="modal-title">Novo Time</h5>
			  <button type="button" class="close" data-dismiss="modal" 
			  aria-label="Fechar">
				<span aria-hidden="true">&times;</span>
			  </button>
			</div>
			<form action="salvar_time.php" method="post">
				<div class="modal-body">									                    
					<div class="row">
						<div class="form-group col-sm-12 col-12">							
                            <input type="text" name="nome" id="nome"
                                 class="form-control" 
                                 placeholder="Nome do Time..." />
						</div>
                    </div>
                    <div class="row">
						<div class="form-group col-sm-8 col-8">	                            
                            <input type="text" name="cidade" 
                            id="cidade" class="form-control" 
                            placeholder="Cidade..." />
                        </div>
                        <div class="form-group col-sm-4 col-4">	                            
                            <input type="text" name="estado" 
                            id="estado" class="form-control" 
                            placeholder="Estado..." />
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