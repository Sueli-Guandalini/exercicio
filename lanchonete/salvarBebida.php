<?php
    include "classeLayout/classeLayout.php";

    include "configuracaoCabecalho.php";                                       
    $cabecalho = new Cabecalho($p);
    $cabecalho->exibe();

    include "conexao.php";

    $nome_bebida = $_POST["nome_bebida"];
    $descricao_bebida = $_POST["descricao_bebida"];
    $preco_bebida = $_POST["preco_bebida"];


    $insert = "INSERT INTO bebida(nome_bebida, descricao_bebida, preco_bebida)
    VALUES ('$nome_bebida','$descricao_bebida', '$preco_bebida')";

    $conexao->query($insert);

    $titulo = "Bebida";
    $id = "Bebida";

    include "configuracaoBreadCrumb.php";
    $breadcrumb = new BreadCrumb($p);
    $breadcrumb->exibe();

    echo "<h3>Bebida inserida com sucesso</h3>";

    include "configuracaoFooter.php";
    $footer = new Footer($p);
    $footer->exibe();


    include "configuracaoModalBebida.php";
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