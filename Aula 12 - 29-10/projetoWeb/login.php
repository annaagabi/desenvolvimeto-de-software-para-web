<?php
// Incluir o arquivo de conexão com o banco de dados
include_once "conexao.php";

// Vamos pegar o conteúdo digitado pelo usuário e armazenar nas variáveis de memória
if($_SERVER ['REQUEST_METHOD'] == 'POST'){// $_SERVER é uma variável superglobal
    // POST - Usar variável superglobal $_POST
    // GET - Usar a variável superglobal $_GET
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $select= $con -> query("SELECT * FROM usuarios WHERE email='$email'"); 
    
    // Vamos procurar este email e senha no banco de dados utilizando o comando SELECT
    // $select= $con -> query("SELECT * FROM usuarios WHERE email='$email' AND senha='$senha'"); 

    if ($result = $select -> fetch()){

        // Descriptografando a senha
        $hashArmazenado = $result['senha'];

        if(password_verify($senha, $hashArmazenado)){
            echo 'Senha correta. Login bem sucedido!';

        }else{
            echo 'Senha incorreta';
        }

        header('location: tarefas.php');
        // echo 'Usuário encontrado';

    }else{
        header('location: index.html');
    }
} 

?>