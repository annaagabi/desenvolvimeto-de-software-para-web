<?php
// Criar o arquivo de conexão com o banco de dados

// Variáveis
$host = "localhost";
$db = "tarefas";
$user = "root";
$password = "";

try{
    $con = new PDO( // PDO - PHP Data Object - Classe exclusiva para trabalhar com banco de dados
        "mysql:host=$host;
        dbname=$db",
        $user,
        $password);
    // echo "Conexão bem sucedida";

} catch(PDOException $e){
    echo "Erro ao conectar. " .$e -> getMessage(); // Echo é um comando que joga a mensagem na tela
}

?>