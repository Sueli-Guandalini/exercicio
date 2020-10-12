<?php
    print_r($_POST);
    include "conexao.php";

    $email = $_POST["login"];
    $senha = $_POST["senha"];

    $select = "SELECT id_usuario, email, permissao,nome_usuario FROM usuario 
                WHERE email=:email AND senha=:senha";
    
    $stmt = $conexao->prepare($select);

    $stmt->bindValue(":email",$email);
    $stmt->bindValue(":senha",$senha);

    $stmt->execute();

    if($stmt->rowCount()==1){
        session_start();
        $linha = $stmt->fetch();
        $_SESSION["usuario"]=$linha; 
        
        header("location: index.php");
    }
    else{
        echo "Não autenticou";
       
    }

?>