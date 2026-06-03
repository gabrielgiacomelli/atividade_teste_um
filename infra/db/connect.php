<?php


    // Endereço do servidor do banco.
    // "localhost" significa que o banco está na mesma máquina.
    $host = "localhost";

    // Usuário do banco de dados.
    $user = "root";

    // Senha do usuário do banco.
    $pass = "root";

    // Nome do banco de dados que será utilizado.
    $db = "sistema_simples_m1";

    // Cria uma conexão com o banco utilizando a classe mysqli.
    // Passa host, usuário, senha e nome do banco.
    $conn = new mysqli($host,$user,$pass,$db);

    // Verifica se ocorreu algum erro na conexão.
    if($conn->connect_error){

        // Encerra o programa e mostra a mensagem de erro.
        die("Erro na conexão!");
    }else{

        // Executa JavaScript no navegador.
        // A mensagem aparecerá no Console (F12).
        echo "<script>console.log('Banco conectado com sucesso!')</script>";
    };

?>
