<?php
    include "classeLayout/classeLayout.php";

    include "configuracaoCabecalho.php";                                       
    $cabecalho = new Cabecalho($p);
    $cabecalho->exibe();

include "conexao.php";

$data = $_POST["data"];
$horario = $_POST["horario"];
$cod_time1 = $_POST["cod_time1"];
$cod_time2 = $_POST["cod_time2"];

$insert = "INSERT INTO jogo(data,horario,cod_time1,cod_time2)
     VALUES ('$data','$horario','$cod_time1','$cod_time2')";


$conexao->query($insert);

$titulo = "Jogo";
$id = "Jogo";

include "configuracaoBreadCrumb.php";
$breadcrumb = new BreadCrumb($p);
$breadcrumb->exibe();

echo "<h3>Jogo inserido com sucesso</h3>";

include "configuracaoFooter.php";
$footer = new Footer($p);
$footer->exibe();


include "configuracaoModalJogo.php";
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