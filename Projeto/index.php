<?php

    include "classeLayout/classeLayout.php";

        include "configuracaoCabecalho.php";                                       
        $cabecalho = new Cabecalho($p);
        $cabecalho->exibe();

        include "configuracaoBreadCrumb.php";
        $breadcrumb = new BreadCrumb($p);
        //$breadcrumb->exibe();

      
                

        $rodape = new Rodape();
        $rodape->exibe();

?>
   
   