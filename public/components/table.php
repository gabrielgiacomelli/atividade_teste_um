<h4>Usuários Cadastrados</h4>

// aqui vamos criar uma tabela para exibir os usuários cadastrados no banco de dados
<table border="1" cellpadding="3">

// tr cria uma linha, th cria um cabeçalho para a tabela, td cria uma célula para a tabela
    <tr>
        <th>ID</th>
        <th>Usuário</th>
        <th>Senha</th>
    </tr>

    <?php
    
    // aqui vamos criar uma consulta para selecionar todos os usuários cadastrados no banco de dados
    $sqlTodosUsuarios = "SELECT * FROM usuarios";

    // aqui vamos executar a consulta e armazenar o resultado em uma variável
    $resultadoTodosUsuarios = $conn->query($sqlTodosUsuarios);

    // aqui vamos verificar se a consulta retornou algum resultado
    while($linha = $resultadoTodosUsuarios->fetch_assoc()){
        // fetch_assoc() é um método que retorna um array associativo com os dados da linha atual do resultado da consulta, 
        // ou seja, ele retorna um array onde as chaves são os nomes das colunas da tabela 
        // e os valores são os valores correspondentes a essas colunas para a linha atual do resultado da consulta.

    // aqui vamos exibir os dados dos usuários cadastrados na tabela

        echo "  <tr>
                    <td>". $linha['id'] . "</td>
                    <td>". $linha['usuario'] . "</td>
                    <td>". $linha['senha'] . "</td>
                </tr>
        ";

    }
    
    ?>

</table>