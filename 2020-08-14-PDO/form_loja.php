<?php   
    include "menu.php";
?>
    <form method="post" name="f" action="insert_loja.php">

        <input type="text" name="razao_social" placeholder="Razão Social..." />
        <input type="text" name="nome_fantasia" placeholder="Nome Fantasia..." />
        <input type="email" name="email" placeholder="E-mail..." />
        <input type="number" name="cod_cidade" placeholder="Código Cidade..." />
        <button>Enviar</button>
    </form>
    </body>
</html>