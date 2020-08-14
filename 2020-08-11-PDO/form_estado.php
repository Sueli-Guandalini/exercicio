<?php   
    include "menu.php";
?>
    <form method="post" name="f" action="insert_stmt.php">

        <input type="number" name="id_estado" placeholder="Identidade..." />
        <input type="text" name="nome_estado" placeholder="Nome Estado..." />
        <input type="text" name="sigla" placeholder="Sigla Estado..." />
        <button>Enviar</button>
    </form>
    </body>
</html>