<?php

require_once "classeForm3.php";
include "cabecalho.php";


		if(!empty($_SESSION["Form3"])){

			echo '<p><b>Listar Cadastro</b></p>';
			foreach($_SESSION["Form3"] as $g){
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