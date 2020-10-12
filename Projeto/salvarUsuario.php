<?php

include "validacaoUsuario.php";

if($_SESSION["usuario"]["permissao"]!="2"){

include "conexao.php";

header("Content-Type: Application/json");

$nome_usuario = $_POST["nome_usuario"];
$email = $_POST["email"];
$senha = $_POST["senha"];
$permissao = $_POST["permissao"];
$nome = $_POST["nome"];
$sobrenome = $_POST["sobrenome"];
$data_nascimento = $_POST["data_nascimento"];
$rua = $_POST["rua"];
$numero = $_POST["numero"];
$compl = $_POST["compl"];
$bairro = $_POST["bairro"];
$cidade = $_POST["cidade"];
$estado = $_POST["estado"];
$telefone = $_POST["telefone"];
$cep = $_POST["cep"];
$cpf = $_POST["cpf"];
$rg = $_POST["rg"];

$insert = "INSERT INTO usuario(nome_usuario, senha, permissao, email, nome, sobrenome, data_nascimento, rua, 
            numero, compl, bairro, cidade, estado, telefone, cep, cpf, rg ) 
                VALUES ('$nome_usuario','$email','$senha','$permissao','$nome','$sobrenome','$data_nascimento',
                '$rua','$numero','$compl','$bairro','$cidade','$estado','$telefone','$cep','$cpf','$rg')";



$select = "SELECT * FROM usuario ORDER BY nome";

$resultado = $conexao->query($select);


foreach($resultado as $linha){
    $tabela[] = $linha;
}

echo json_encode($tabela, JSON_UNESCAPED_UNICODE);
}
else{
    header("location: login.php");
}

?>