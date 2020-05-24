<?php
include "cabecalho.php";
?>
    <form method="post" action="recebe_livro.php">
        <input type="text" name="titulo" placeholder="Título..." /> <br />
        <input type="text" name="sinopse" placeholder="Sinopse..." /> <br />
        <input type="number" name="preco" min="1" step="0.01" placeholder="Preço..." /> <br />
        <input type="number" name="quantpaginas" placeholder="Quantidade de Páginas..." /> <br />
        <input type="text" name="editora" placeholder="Editora..." /> <br />
        <input type="Submit" value="Enviar"  /> <br />
    </form>
</body>
</html>
