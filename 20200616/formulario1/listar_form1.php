<?php

require_once "classeForm1.php";
include "cabecalho.php";


		if(!empty($_SESSION["Form1"])){

			echo '<p><b>Listar Cadastro</b></p>';
			foreach($_SESSION["Form1"] as $g){
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