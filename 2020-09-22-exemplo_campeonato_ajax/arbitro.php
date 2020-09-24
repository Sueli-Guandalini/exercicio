<?php
    include "classeLayout/classeLayout.php";

        include "configuracaoCabecalho.php";                                       
        $cabecalho = new Cabecalho($p);
        $cabecalho->exibe();

        $titulo = "Árbitro";
        $id = "Arbitro";    
        
        include "configuracaoBreadCrumb.php";
        $breadcrumb = new BreadCrumb($p);
        $breadcrumb->exibe();

        include "configuracaoRowCabecalho.php";
        $rowCabecalho = new RowCabecalho($p);
        $rowCabecalho->exibe();

        include "configuracaoTabelaArbitro.php";
        $tabela = new Tabela($p);
        $tabela->exibe();
        
        include "configuracaoFooter.php";
        $footer = new Footer($p);
        $footer->exibe();
        include "configuracaoModalArbitro.php";
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