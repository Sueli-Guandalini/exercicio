<?php
include "cabecalho.php";
?>
    <form method="post" action="recebe_filmes.php">
        <input type="text" name="titulo" placeholder="Título..." /> <br />
        <input type="text" name="sinopse" placeholder="Sinopse..." /> <br />
        <input type="number" name="preco" min="1" step="0.01" placeholder="Preço..." /> <br />
        <input type="number" name="tempo" min="1" step="0.01" placeholder="Tempo de Duração..." /> <br />
        <input type="text" name="produtora" placeholder="Produtora do Filme..." /> <br />
        <input type="Submit" value="Enviar"  /> <br />
    </form>
</body>
</html>