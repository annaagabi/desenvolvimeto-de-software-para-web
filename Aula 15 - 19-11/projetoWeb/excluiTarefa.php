<!-- Rotina de Exclusão -->
<?php

    include_once 'conexao.php';
    
    session_start();
    $id=$_SESSION['id'];
    
    $delete = $con -> prepare("DELETE FROM tarefas WHERE idTarefa=:idTarefa");
    $delete -> bindParam('idTarefa', $id);

    $delete -> execute();
    header('location: listaTarefas.php');
?>
