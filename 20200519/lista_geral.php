<?php

require_once "classeFilmes.php";
require_once "classeLivro.php";
include "cabecalho.php";


		if(!empty($_SESSION["geral"])){

			echo '<p><b>Lista Geral</b></p>';
			foreach($_SESSION["geral"] as $g){
				print_r(get_class($g));
				$g->exibe();
			}

		}else{
			echo '<p>Nenhum cadastro realizado</p>';
		}
?>
		</fieldset>
	</body>
</html>