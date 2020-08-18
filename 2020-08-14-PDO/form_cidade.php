<?php
    include "menu.php";
    include "conexao.php";
    $select = "SELECT * FROM estado ORDER BY sigla";
    //PDOStatement
    $stmt = $conexao->prepare($select);
    $stmt->execute();

?> 
    <form method="post" name="f" action="insert_cidade.php">

        <input type="text" name="nome" placeholder="Nome Cidade.." />
        <select name="cod_estado">
            <option>::selecione um estado::</option>
        <?php
            while($linha=stmt->fetch()){
                $cod_estado = $linha["id_estado"];
                $sigla = $linha["sigla"];
                echo "<option value='$cod_estado'>$sigla</option>";
            }    
        ?>
        </select>
        <button>Enviar</button>
    </form>
    </body>
</html>