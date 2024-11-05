<?php
    //incluir o arquivo de conexão com o banco
    include_once "conexao.php";

    try {
        $select = $con->prepare("SELECT * FROM tarefas");
        $select->execute();
        echo "<br>";
        
        while ( $result = $select->fetch()) {
            // variável local  campo bd
            $idTarefa = $result['idTarefa'];
            $idUsuario = $result['fkUsuario'];
            $tarefa = $result['tarefa'];
            $inicio = $result['inicio'];
            $termino = $result['termino'];

            echo "ID da Tarefa: ".$idTarefa." - ID do Usuário: ".$idUsuario." - Tarefa: ".$tarefa." - data de Inicio: ".$inicio." - Data de término: ".$termino."<br>";

        } 
    } catch (PDOException $e) {
        echo "Erro: " . $e->getMessage();
    }

?>