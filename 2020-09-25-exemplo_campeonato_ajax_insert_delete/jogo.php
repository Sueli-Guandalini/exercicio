<?php
    include "classeLayout/classeLayout.php";

        include "configuracaoCabecalho.php";                                       
        $cabecalho = new Cabecalho($p);
        $cabecalho->exibe();

        $titulo = "Jogo";
        $id = "Jogo";    
        
        include "configuracaoBreadCrumb.php";
        $breadcrumb = new BreadCrumb($p);
        $breadcrumb->exibe();

        include "configuracaoRowCabecalho.php";
        $rowCabecalho = new RowCabecalho($p);
        $rowCabecalho->exibe();
    
        include "configuracaoTabelaJogo.php";
        //voltamos nos próximos capítulos....
        $tabela = new Tabela($p);
        $tabela->exibe();
        
        include "configuracaoFooter.php";
        $footer = new Footer($p);
        $footer->exibe();

        include "configuracaoModalJogo.php";
        $modal = new Modal($p);
        $modal->exibe();        


        $rodape = new Rodape();
        $rodape->exibe();        

        ?>
