<?php

include_once "conexao.php";

if($_SERVER ['REQUEST_METHOD'] == 'GET'){
    $idUsuario = $_GET['usuario'];
    $tarefa = $_GET['tarefa'];
    $inicio = $_GET['inicio'];
    $termino = $_GET['termino'];

    $insert = $con -> prepare('INSERT INTO tarefas (tarefa, inicio, termino, fkUsuario) VALUES (:tarefa, :inicio, :termino, :idUsuario)');

    $insert->bindParam('tarefa', $tarefa);
    $insert->bindParam('inicio', $inicio);
    $insert->bindParam('termino', $termino);
    $insert->bindParam('idUsuario', $idUsuario);

    // Executar o insert
    if($insert->execute()){
        header('location: listaTarefas.php');

    }else{
        header('location: tarefas.php');
        // echo 'Erro ao cadastrar tarefa';
    }
}

?>