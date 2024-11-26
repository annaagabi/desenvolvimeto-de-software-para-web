<?php
    include_once 'conexao.php';

    // Receber o código da tarefa a ser editada

    // if ternário - na linha sintaxe
    // condição ? ação se condição verdadeira : ação se condição falsa
    $id =  isset($_GET['idTarefa']) ? ($_GET['idTarefa']) : 0; // pega informações da URL, caso não tenha nada coloca 0 como valor

    $select = $con -> prepare('SELECT * FROM tarefas WHERE idTarefa=?');

    $select -> execute([$id]);
    $resultado = $select -> fetch();

    session_start();
    $_SESSION['id'] = $id;

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Tarefas</title>

     <!-- Bootstrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
     <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <div class="login-container">
        <h1>Editar Tarefa</h1>
        <form method="get" action="editaTarefa.php">
            <div class="mb-3">
                <label for="tarefa" class="form-label">Nome da Tarefa</label>
                <input type="text" name="tarefa" id="tarefa" maxLength="100" size=50 class="form-control" value="<?= $resultado['tarefa']; ?>"> 
            </div>
            <div class="mb-3">
                <label for="inicio" class="form-label">Data de Inicio</label>
                <input type="date" name="inicio" id="inicio" class="form-control" value="<?= $resultado['inicio']; ?>">
            </div>
            <div class="mb-3">
                <label for="termino" class="form-label">Data de Término</label>
                <input type="date" name="termino" id="termino" class="form-control" value="<?= $resultado['termino']; ?>">
            </div>
            <a id="mostraTarefas" href="listaTarefas.php"><button type="button" class="btn btn-primary">Voltar</button></a>
            <button type="submit" class="btn btn-primary" value="Alterar">Editar</button>
        </form>
    </div>

     <!-- Bootstrap JS -->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    
</body>
</html>

