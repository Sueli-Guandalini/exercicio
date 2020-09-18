<?php
    include "classeLayout/classeLayout.php";

    include "configuracaoCabecalho.php";                                       
    $cabecalho = new Cabecalho($p);
    $cabecalho->exibe();

    include "conexao.php";

    $nome_combo = $_POST["nome_combo"];
    $desconto_combo = $_POST["desconto_combo"];
    $cod_lanche = $_POST["cod_lanche"];
    $cod_bebida = $_POST["cod_bebida"];
    $cod_acompanhamento = $_POST["cod_acompanhamento"];
    
    $insert = "INSERT INTO bebida(nome_combo, desconto_combo, cod_lanche, cod_bebida, cod_acompanhamento )
    VALUES ('$nome_combo','$desconto_combo','$cod_lanche','$cod_bebida','$cod_acompanhamento')";

    $conexao->query($insert);

    $titulo = "Combo";
    $id = "Combo";

    include "configuracaoBreadCrumb.php";
    $breadcrumb = new BreadCrumb($p);
    $breadcrumb->exibe();

    echo "<h3>Combo inserido com sucesso</h3>";

    include "configuracaoFooter.php";
    $footer = new Footer($p);
    $footer->exibe();

    include "configuracaoModalCombo.php";
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