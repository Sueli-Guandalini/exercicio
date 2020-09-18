<?php
    include "classeLayout/classeLayout.php";

    include "configuracaoCabecalho.php";                                       
    $cabecalho = new Cabecalho($p);
    $cabecalho->exibe();

    include "conexao.php";

    $nome_acompanhamento = $_POST["nome_acompanhamento"];
    $descricao_acompanhamento = $_POST["descricao_acompanhamento"];
    $preco_acompanhamento = $_POST["preco_acompanhamento"];


    $insert = "INSERT INTO bebida(nome_acompanhamento, descricao_acompanhamento, preco_acompanhamento)
    VALUES ('$nome_acompanhamento','$descricao_acompanhamento', '$preco_acompanhamento')";

    $conexao->query($insert);

    $titulo = "Acompanhamento";
    $id = "Acompanhamento";

    include "configuracaoBreadCrumb.php";
    $breadcrumb = new BreadCrumb($p);
    $breadcrumb->exibe();

    echo "<h3>Acompanhamento inserido com sucesso</h3>";

    include "configuracaoFooter.php";
    $footer = new Footer($p);
    $footer->exibe();


    include "configuracaoModalAcompanhamento.php";
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