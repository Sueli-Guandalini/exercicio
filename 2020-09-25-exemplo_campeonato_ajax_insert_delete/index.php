<?php
    include "classeLayout/classeLayout.php";

        include "configuracaoCabecalho.php";                                       
        $cabecalho = new Cabecalho($p);
        $cabecalho->exibe();

        include "configuracaoBreadCrumb.php";
        $breadcrumb = new BreadCrumb($p);
        $breadcrumb->exibe();

        echo '<div id="home">
                    <h3>Bem vindo ao sistema de campeonatos de futebol</h3>            
                    <p>Neste sistema você pode cadastrar times, jogadores, 
                        campeonatos e jogos. </p>
                        <p>Navegue pelo menu acima para realizar as operações. </p>    
                </div>';

        $rodape = new Rodape();
        $rodape->exibe();

?>
   
   