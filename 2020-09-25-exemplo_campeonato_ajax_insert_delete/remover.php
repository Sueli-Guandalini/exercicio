<?php
    /*include "classeLayout/classeLayout.php";

        include "configuracaoCabecalho.php";                                       
        $cabecalho = new Cabecalho($p);
        $cabecalho->exibe();

        include "configuracaoBreadCrumb.php";
        $breadcrumb = new BreadCrumb($p);
        $breadcrumb->exibe();
    */
        include "conexao.php";

        $tabela = $_POST["tabela"];
        $valor = $_POST["id"];
                   
        $delete = "DELETE FROM $tabela WHERE id_$tabela='$valor'";

        $conexao->query($delete);

        echo "1";

    /*    echo '<div id="conteudo">
                    <h3>Removido com sucesso.</h3>            
                </div>';

        $rodape = new Rodape();
        $rodape->exibe();
    */
?>