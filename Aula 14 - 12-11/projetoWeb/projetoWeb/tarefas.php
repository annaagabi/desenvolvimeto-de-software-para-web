<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciador de Tarefas</title>

     <!-- Bootstrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
     <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

    <main class="login-container">
        <h1>Lista de Tarefas</h1>
        <div>
            <form action="gravaTarefa.php" method="get">
                <div class="mb-3">
                    <label for="usuario" class="form-label">Id usuario</label>
                    <input type="text" name="usuario" id="usuario" class="form-control"
                           value= <?php session_start(); echo $_SESSION['idUsuario'].'-'.$_SESSION['nome'];?> readonly> <!-- Mostra o id do usuario -->
                </div>
                <div class="mb-3">
                    <label for="tarefa" class="form-label">Nome da Tarefa</label>
                    <input type="text" name="tarefa" id="tarefa" maxLength="100" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="inicio" class="form-label">Data de Inicio</label>
                    <input type="date" name="inicio" id="inicio" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="termino" class="form-label">Data de Término</label>
                    <input type="date" name="termino" id="termino" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary" value="Enviar">Enviar</button>
               <a href="listaTarefas.php"><button type="button" class="btn btn-primary" value="Mostrar tarefas">Mostrar Tarefas</button></a>
            </form>
        </div>
    </main>

     <!-- Bootstrap JS -->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    
</body>
</html>