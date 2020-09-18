<?php
    include "classeLayout/classeLayout.php";

    include "configuracaoCabecalho.php";                                       
    $cabecalho = new Cabecalho($p);
    $cabecalho->exibe();

    include "conexao.php";

    $nome_lanche = $_POST["nome_lanche"];
    $descricao_lanche = $_POST["descricao_lanche"];
    $preco_lanche = $_POST["preco_lanche"];


    $insert = "INSERT INTO lanche(nome_lanche, descricao_lanche, preco_lanche)
    VALUES ('$nome_lanche','$descricao_lanche', '$preco_lanche')";

    $conexao->query($insert);

    $titulo = "Lanche";
    $id = "Lanche";

    include "configuracaoBreadCrumb.php";
    $breadcrumb = new BreadCrumb($p);
    $breadcrumb->exibe();

    echo "<h3>Lanche inserido com sucesso</h3>";

    include "configuracaoFooter.php";
    $footer = new Footer($p);
    $footer->exibe();


    include "configuracaoModalLanche.php";
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