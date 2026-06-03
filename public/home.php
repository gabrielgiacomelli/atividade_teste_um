<?php

//inicia a sessão
session_start();

//verifica se existe uma sessão chamada usuário, caso não exista, redireciona para a página de login
if(!isset($_SESSION["usuario"])){
    header("Location: ../index.php");

    //encerra o script para evitar que o restante do código seja executado
    exit();
}

//inclui o arquivo de conexão com o banco de dados
include("../infra/db/connect.php");

//Verifica se o formulário foi enviado
if($_SERVER["REQUEST_METHOD"] == "POST"){

//captura os dados do formulário
    $novoUsuario = $_POST['usuario'];
    $novaSenha = $_POST['senha'];

    //Monta o contato SQL para inserir o novo usuário no banco de dados
    $sql = "INSERT INTO usuarios (usuario,senha) 
    VALUES ('$novoUsuario','$novaSenha')";  

//Executa a consulta SQL e verifica se foi bem sucedida
    if($conn->query($sql) === TRUE){
        echo "<script> alert('Usuário cadastrado com sucesso!')</script>";
    }else{

    //Se ocorrer um erro ao executar a consulta SQL, exibe uma mensagem de erro
        echo "<script> alert('Erro ao cadastrar')</script>";
    }

};

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <h3>Bem-Vindo! <?php echo $_SESSION["usuario"]; ?></h3>
    <a href="logout.php"> Sair</a>

    <hr>
    <h4>Cadastro de Novo Usuário.</h4>
    <form method="POST">
        <label>Usuário:</label>
        <input type="text" name="usuario">
        <br>
        <label>Senha:</label>
        <input type="password" name="senha">
        <br>
        <?php
        
        //Verifica se existe uma variável de erro e, se existir, exibe a mensagem de erro
            if(isset($erro)){
                echo $erro;
            };
        
        ?>
        <br>
        <button type="submit">Cadastrar</button>
    </form>

    
    <form method="POST" action="delete.php">
        <button type="submit">Deletar Usuário</button>
    </form>
    <hr>
    <?php
    //Inclui o arquivo da tabela de usuários, que exibe a lista de usuários cadastrados no banco de dados
    include("components/table.php")

    ?>



</body>
</html>