<?php   
    include "menu.php";
    include "conexao.php";

    $select = "SELECT id_cidade, nome, sigla FROM cidade
                        INNER JOIN estado
                            ON cidade.cod_estado=estado.id_estado";

    $stmt = $conexao->prepare($select);
    $stmt->execute();

?>
    <form method="post" name="f" action="insert_loja.php">

        <input type="text" name="razao_social" placeholder="Razão Social..." />
        <input type="text" name="nome_fantasia" placeholder="Nome Fantasia..." />
        <input type="email" name="email" placeholder="E-mail..." />
        <select name="cod_cidade">
            <option
        <input type="number" name="cod_cidade" placeholder="Código Cidade..." />
        <button>Enviar</button>
    </form>
    </body>
</html>