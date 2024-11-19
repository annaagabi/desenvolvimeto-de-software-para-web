<?php
    //incluir o arquivo de conexão com o banco
    include_once "conexao.php";
    date_default_timezone_set('America/Sao_Paulo');

    try {
        $select = $con->prepare("SELECT * FROM tarefas");
        $select->execute();
        echo "<br><h1 style='margin: 10px; text-align: center'>Tarefas Cadastradas</h1>";
?>

<!-- HTML -->
<table border="1" style="border-collapse: collapse; margin: 50px auto;">
    <tr style="padding: 10px">
        <th style="padding: 10px">Usuário</th>
        <!-- <th>ID da Tarefa</th> -->
        <th>Tarefa</th>
        <th>Início</th>
        <th>Término</th>
        <th colspan="2">Ações</th>
    </tr>

<!-- </table> -->


<?php 
        while ( $result = $select->fetch()) {
            // variável local  campo bd
            $idTarefa = $result['idTarefa'];
            $idUsuario = $result['fkUsuario'];
            $tarefa = $result['tarefa'];
            $inicio = $result['inicio'];
            $termino = $result['termino'];

            echo "<tr style='padding: 10px;'>" ;
                echo "<td style='padding: 10px; text-align:center'>".$idUsuario."</td>";
                echo "<td style='padding: 10px; text-align:center'>".$idTarefa." - ".$tarefa."</td>";
                // echo "<td>".$tarefa."</td>";
                // echo "<td style='padding: 10px; text-align:center'>".$inicio."</td>";


                echo "<td style='padding: 10px; text-align:center'>".date('d/m/y', strtotime($inicio))."</td>"; //date exibe a data no formato dia-mes-ano
                if ($termino!="0000-00-00")
                {
                    echo "<td>".date('d/m/y',strtotime($termino))."</td>";
                }
                else
                {  
                    echo "<td>".''."</td>";
                }

                // Passa para url os parametros da tarefa
                echo "<td style='padding: 10px; text-align:center'><a href='edita.php?idTarefa=$idTarefa'><img src='assets/imagem/editar.png' alt='' style='width: 25px'></a></td>";
                echo "<td style='padding: 10px; text-align:center'><a href='exclui.php?idTarefa=$idTarefa'><img src='assets/imagem/lixeira.png' alt='' style='width: 30px'></a></td>";
            echo "</tr>";
                

            // echo "ID da Tarefa: ".$idTarefa." - ID do Usuário: ".$idUsuario." - Tarefa: ".$tarefa." - data de Inicio: ".$inicio." - Data de término: ".$termino."<br>";

        } 
        echo "</table>";

    } catch (PDOException $e) {
        echo "Erro: " . $e->getMessage();
    }

?>

<!-- Código da Professora -->


<!-- <?php
    //incluir o arquivo de conexão com o banco
    include_once "conexao.php";
    date_default_timezone_set('America/Sao_Paulo');
    
    try {
        $select = $con->prepare("SELECT * FROM tarefas");
        $select->execute();
      
        echo "<h1 style='text-align:center;'>Tarefas cadastradas</h1>";
        ?> 
        <table border="1" style="border-collapse: collapse;margin:0 auto;">
            <tr>
                <th>Usuário</th>
                <th>Tarefa</th>
                <th>Início</th>
                <th>Término</th>
                <th colspan="2">Ações</th>
            </tr>

        <?php
        while ($result = $select->fetch()) {
            $idTarefa=$result['codigo'];
            //variável local     campo bd.
            $idUsuario=$result['idUsuario'];
            $tarefa=$result['tarefa'];
            $inicio=$result['inicio'];
            $termino=$result['termino'];

            echo "<tr>";
                echo "<td>".$idUsuario."</td>";
                echo "<td>".$idTarefa."-".$tarefa."</td>";
                echo "<td>".date('d/m/y', strtotime($inicio))."</td>";
                if ($termino!="0000-00-00")
                {
                    echo "<td>".date('d/m/y',strtotime($termino))."</td>";
                }
                else
                {   echo "<td>".''."</td>";}
                               
                echo "<td style='text-align:center;'><a href='editar.php?idTarefa=$idTarefa'><img src='assets/imagens/lapis.png' style='width: 40%;' title='Alterar a tarefa'></a></td>";
                echo "<td style='text-align:center;'><a href='excluir.php?idTarefa=$idTarefa'><img src='assets/imagens/lixo.png' style='width: 40%;' title='Excluir a tarefa'></a></td>";
                
                
        }
        echo "</tr>";
        echo "</table>";
    } catch (PDOException $e) {
        echo "Erro: " . $e->getMessage();
    }


?> -->

