<?php
    include "classeLayout/classeLayout.php";

    include "configuracaoCabecalho.php";                                       
    $cabecalho = new Cabecalho($p);
    $cabecalho->exibe();

include "conexao.php";

$nome = $_POST["nome"];
$data_nascimento = $_POST["data_nascimento"];
$cidade = $_POST["cidade"];
$uf = $_POST["uf"];

$insert = "INSERT INTO arbitro(nome,data_nascimento,cidade,uf) 
                VALUES ('$nome','$data_nascimento','$cidade','$uf')";


$conexao->query($insert);

$titulo = "Árbitro";
$id = "Arbitro";

include "configuracaoBreadCrumb.php";
$breadcrumb = new BreadCrumb($p);
$breadcrumb->exibe();

echo "<h3>Árbitro inserido com sucesso</h3>";

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