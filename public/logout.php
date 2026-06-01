<?php

    // Inicia ou acessa a sessão atual.
    // É necessário para que o PHP consiga manipular a sessão.
    session_start();

    // Remove todos os dados da sessão.
    // Na prática, "desloga" o usuário.
    session_destroy();

    // Redireciona o usuário para a página de login.
    header("Location: ../index.php");

    // Interrompe a execução do código.
    // Garante que nada mais seja executado após o redirecionamento.
    exit();

?>