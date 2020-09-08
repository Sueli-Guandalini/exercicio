<?php
    include "classeLayout/classeLayout.php";

    include "configuracaoCabecalho.php";                                       
    $cabecalho = new Cabecalho($p);
    $cabecalho->exibe();

include "conexao.php";

$nome = $_POST["nome"];
$cidade = $_POST["cidade"];
$uf = $_POST["uf"];

$insert = "INSERT INTO time(nome,cidade,uf) VALUES ('$nome','$cidade','$uf')";

$conexao->query($insert);

$titulo = "Time";
$id = "Time";

include "configuracaoBreadCrumb.php";
$breadcrumb = new BreadCrumb($p);
$breadcrumb->exibe();

echo "<h3>Time inserido com sucesso</h3>";

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