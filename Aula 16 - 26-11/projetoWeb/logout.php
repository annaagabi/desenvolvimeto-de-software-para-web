<?php

    // fechando banco de dados
    unset($con); // ou $con=null

    session_start();

    // destruindo a variável de sessão
    session_destroy();
    header("location: index.html");
?>