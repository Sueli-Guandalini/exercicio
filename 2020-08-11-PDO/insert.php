<?php

    include "conexao.php";

    if(!empty($_POST)){
        $idestado = $_POST["id_estado"];
        $nome = $_POST["nome_estado"];
        $sigla = $_POST["sigla"];


        $insert = "INSERT INTO estado(id_estado,nome_estado,sigla) VALUES ('$idestado','$nome','$sigla')";

        $conexao->query($insert);

        echo "Estado Inserido no Banco de dados. <a href='form_estado.php'>Voltar...</a>";
    }
    else{
        header("location: form_estado.php");
    }

    if(!empty($_POST)){
        $idloja = $_POST["id_loja"];
        $razao = $_POST["razao_social"];
        $nfantasia = $_POST["nome_fantasia"];
        $email = $_POST["email"];
        $codcidade = $_POST["cod_cidade"];


        $insert = "INSERT INTO loja(id_loja, razao_social, nome_fantasia, email, cod_cidade) VALUES ('$idloja','$razao','$nfantasia','$email','$codcidade')";

        $conexao->query($insert);

        echo "Loja Inserida no Banco de dados. <a href='form_loja.php'>Voltar...</a>";
    }
    else{
        header("location: form_loja.php");
    }

    if(!empty($_POST)){
        $idcidade = $_POST["id_cidade"];
        $nome = $_POST["nome"];
        $codestado = $_POST["cod_estado"];


        $insert = "INSERT INTO cidade(id_cidade, nome, cod_estado) VALUES ('$id_cidade','$nome','$codestado')";

        $conexao->query($insert);

        echo "Cidade Inserida no Banco de dados. <a href='form_cidade.php'>Voltar...</a>";
    }
    else{
        header("location: form_cidade.php");
    }


?>



