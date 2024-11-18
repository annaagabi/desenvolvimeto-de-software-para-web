<?php

include_once "conexao.php";

if($_SERVER ['REQUEST_METHOD'] == 'POST'){

    $email = $_POST['email'];
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    // Criptografando a senha
    $hash = password_hash($senha, PASSWORD_DEFAULT);

    // Inserindo dados no banco
    $insert = $con->prepare('INSERT INTO usuarios (email, nome, senha) VALUES (:email, :nome, :senha)');

    $insert->bindParam('email', $email);
    $insert->bindParam('nome', $usuario);
    $insert->bindParam('senha', $hash);

    // Executar o insert
    if($insert->execute()){
        header('location:index.html');

    }else{
        header('location:index.html');
        // echo 'Erro ao cadastrar usuario';
    }
}
?>