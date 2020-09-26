<?php
 /*   include "classeLayout/classeLayout.php";

    include "configuracaoCabecalho.php";                                       
    $cabecalho = new Cabecalho($p);
    $cabecalho->exibe();
*/
include "conexao.php";

header("Content-Type: Application/json");

$nome = $_POST["nome"];
$data_nascimento = $_POST["data_nascimento"];
$cidade = $_POST["cidade"];
$uf = $_POST["uf"];
$numero_camisa = $_POST["numero_camisa"];
$cod_time = $_POST["cod_time"];

$insert = "INSERT INTO jogador(nome,data_nascimento,numero_camisa,cidade,uf,cod_time)
     VALUES ('$nome','$data_nascimento','$numero_camisa','$cidade','$uf','$cod_time')";


$conexao->query($insert);

$select = "SELECT * FROM view_jogador";

$resultado = $conexao->query($select);

foreach($resultado as $linha){
    $tabela[] = $linha;
}
echo json_encode($tabela);

/*
$titulo = "Jogador";
$id = "Jogador";

include "configuracaoBreadCrumb.php";
$breadcrumb = new BreadCrumb($p);
$breadcrumb->exibe();

echo "<h3>Jogador inserido com sucesso</h3>";

include "configuracaoFooter.php";
$footer = new Footer($p);
$footer->exibe();


include "configuracaoModalJogador.php";
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
*/
?>