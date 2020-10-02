<?php
include "configuracaoCabecalho.php";                                       
$cabecalho = new Cabecalho($p);
$cabecalho->exibe();

include "configuracaoBreadCrumb.php";
$breadcrumb = new BreadCrumb($p);
$breadcrumb->exibe();

include "configuracaoRowCabecalho.php";
$rowCabecalho = new RowCabecalho($p);
$rowCabecalho->exibe();

//include "configuracaoTabela.php";
//voltamos nos próximos capítulos....
$tabela = new Tabela();
$tabela->exibe();

include "configuracaoFooter.php";
$footer = new Footer($p);
$footer->exibe();
?>