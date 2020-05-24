<?php
include "cabecalho.php";

echo'
<form action="recebe_form_receita.php method="POST">
	<fieldset>
	<h3><u>Cadastro de receitas</u></h3>
	<p>
	<select name="tipo">
		<option value="::tipo receita::">::tipo receita::</option>
		<option value="bolos">Bolos</option>
		<option value="salgados">Salgados</option>
		<option value="saladas">Saladas</option>
	</select>
	</p>
	<p>
	<textarea name="ingredientes" placeholder="Lista de ingredientes..." rows="4" cols="30"></textarea>
	</p>
	<p>
	<textarea name="preparo" placeholder="Modo de Preparo..." rows="4" cols="30"></textarea>
	</p>
	<p>
	<textarea name="nome" placeholder="Nome da receita..." rows="2" cols="30"></textarea>
	</p>
	<p>
	<input type="submit" value="Cadastrar"/>
	</p>
	</fieldset>
</form>';

?>
</body>
</html>

