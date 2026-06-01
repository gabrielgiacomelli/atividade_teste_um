<?php

    //inicia uma seção PHP
    //A seção permite que guarde informações enquanto o usuário navega entre as páginas.
    session_start();

    // Inclui o arquivo responsável pela conexão com o banco de dados.
    // É como "copiar e colar" o conteúdo desse arquivo aqui.
    include("infra/db/connect.php");

    // Verifica se a página recebeu dados através do método POST.
    // Isso acontece quando o usuário clica no botão do formulário.
    if($_SERVER['REQUEST_METHOD'] == "POST"){

        // Recebe o valor digitado no campo "usuario".
        // O name do input é "usuario", então usamos $_POST["usuario"].
        $usuario = $_POST["usuario"];

        // Recebe o valor digitado no campo "senha".
        $senha = $_POST["senha"];
        

        // Monta um comando SQL.
        // Esse comando procura um usuário que tenha o usuário e senha informados.
        $sql = "SELECT * FROM usuarios WHERE usuario = '$usuario' AND senha = '$senha'";

        // Executa o comando SQL acima.
        // O resultado da consulta fica armazenado em $resultado.
        $resultado = $conn->query($sql);

        // Verifica se encontrou pelo menos 1 registro.
        if ($resultado->num_rows > 0){

            // Cria uma variável de sessão chamada "usuario".
            // Ela ficará disponível enquanto o usuário estiver logado.
            $_SESSION["usuario"] = $usuario;

            // Redireciona para a página home.
            header("Location: public/home.php");

             // Interrompe a execução do código imediatamente.
            exit();
        }else{

            // Caso nenhum usuário seja encontrado,
            // cria uma mensagem de erro.
            $erro = "Usuário ou senha inválidos!";
        }
    }
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Sitema de Login Simples</h1>

       <!--
        Formulário de login.

        method="POST"
        significa que os dados serão enviados
        escondidos no corpo da requisição.
        O nome dos campos é definido pelo atributo "name".
        -->
    <form method="POST">
        <label>Usuário:</label>

        <!--     name="usuario"
            é o nome usado pelo PHP para capturar o valor.
            Por isso usamos:
            $_POST["usuario"]
        -->
        <input type="text" name="usuario">
        <br>
        <label>Senha:</label>
        <input type="password" name="senha">
        <br>
        <?php
        

            // Verifica se a variável $erro existe.
            // Ela só existe quando o login falha.
            if(isset($erro)){

            // Exibe a mensagem de erro na tela.
                echo $erro;
            };

            /*
                Esse erro serve para informar ao usuário
                que o login não foi encontrado.

                Sem ele, o usuário clicaria em Entrar
                e nada aconteceria, ficando sem entender
                o motivo.
            */


        
        ?>
        <br>
        <button type="submit">Entrar</button>
    </form>

</body>
</html>

<!-- <?php ... ?> :
Delimita o início e o fim de um bloco PHP.
Tudo dentro dessas tags será interpretado pelo servidor PHP.

session_start() :
Inicia uma sessão.
Permite armazenar informações do usuário entre diferentes páginas.

include("arquivo.php") :
Importa outro arquivo para dentro do código atual.
Muito usado para conexões com banco de dados, menus e configurações.

$_SERVER :
Array especial que contém informações do servidor e da requisição.

$_SERVER['REQUEST_METHOD'] :
Informa qual método HTTP foi usado para acessar a página.
Os mais comuns são GET e POST.

if() :
Estrutura de decisão.
Executa um bloco de código apenas se a condição for verdadeira.

$_POST :
Array especial que recebe os dados enviados por formulários com method="POST".

$_POST["nome"] :
Captura o valor de um campo cujo name é "nome".

$variavel :
Cria ou acessa uma variável.
Toda variável em PHP começa com "$".

$sql :
Variável que armazena a consulta SQL.

SELECT :
Comando SQL usado para buscar dados no banco.

* :
Significa "todas as colunas".

FROM :
Indica de qual tabela os dados serão buscados.

WHERE :
Define uma condição para a busca.

AND :
Exige que duas condições sejam verdadeiras ao mesmo tempo.

$conn :
Variável que normalmente guarda a conexão com o banco.

$conn->query($sql) :
Executa uma consulta SQL no banco de dados.

$resultado :
Variável que guarda o retorno da consulta.

$resultado->num_rows :
Quantidade de registros encontrados pela consulta.

$_SESSION :
Array especial usado para armazenar informações da sessão.

$_SESSION["usuario"] :
Cria ou acessa uma variável de sessão chamada "usuario".

header() :
Envia cabeçalhos HTTP.
Muito usado para redirecionamentos.

header("Location: pagina.php") :
Redireciona o usuário para outra página.

exit() :
Interrompe a execução do código imediatamente.

else :
Executa um bloco de código quando o if for falso.

isset() :
Verifica se uma variável existe e possui valor.

echo :
Exibe conteúdo na tela.

-->