<?php

include_once "conexao.php";

session_start();
$idTarefa = $_SESSION['id'];

if($_SERVER ['REQUEST_METHOD'] == 'GET'){
    $tarefa = $_GET['tarefa'];
    $inicio = $_GET['inicio'];
    $termino = $_GET['termino'];

    $update = $con -> prepare('UPDATE tarefas SET tarefa=:tarefa, inicio=:inicio, termino=:termino WHERE idTarefa=:idTarefa');

    $update->bindParam('tarefa', $tarefa);
    $update->bindParam('inicio', $inicio);
    $update->bindParam('termino', $termino);
    $update->bindParam('idTarefa', $idTarefa);

    // Executar o update
    $update->execute();
    header('location: listaTarefas.php');
}

?>