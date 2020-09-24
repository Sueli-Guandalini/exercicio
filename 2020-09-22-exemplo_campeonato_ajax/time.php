<?php
    include "classeLayout/classeLayout.php";

    include "configuracaoCabecalho.php";                                       
    $cabecalho = new Cabecalho($p);
    $cabecalho->exibe();

    $titulo = "Time";
    $id = "Time";
    include "configuracaoBreadCrumb.php";
    $breadcrumb = new BreadCrumb($p);
    $breadcrumb->exibe();

    include "configuracaoRowCabecalho.php";
    $rowCabecalho = new RowCabecalho($p);
    $rowCabecalho->exibe();

    include "configuracaoTabelaTime.php";
    $tabela = new Tabela($p);
    $tabela->exibe();

    include "configuracaoFooter.php";
    $footer = new Footer($p);
    $footer->exibe();


    include "configuracaoModalTime.php";
    $modal = new Modal($p);
    $modal->exibe();
?>


    

    <script src="js/popper.min.js"></script>
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap-datepicker.min.js"></script>
    <script src="js/bootstrap-datepicker.pt-BR.min.js"></script>
    <script src="js/index.js"></script>
</body>
</html>