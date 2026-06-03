## Descrição

Projeto desenvolvido com o objetivo de aprender e praticar o desenvolvimento web utilizando HTML, PHP e MySQL.

## Função de Exclusão

Começou adicionando um botão na tag A, para redirecionar a uma página feita para deletar usuários, tal tela cuja usa-se 
um input recebendo o ID que o usuário deseja excluir, jogando na linha de sql, fazendo excluir a linha do banco de dados. 

## Arquivos alterados 

Alterei o home, adicionando o botão para levar para delete, além de criar a página delete.

## Trechos Importantes do código

"if($_SERVER["REQUEST_METHOD"] == "POST")" - percebe quando o usuário clica no botão, para executar o código PHP.
$sql = "DELETE FROM usuarios WHERE id = $IdDoUsuario"; - faz a exclusão no banco de dados.

## Dificuldades encontradas

Senti dificuldade em entender o inicio, e em partes solitárias em que os códigos se entrelassavam, causando erro,
e também como fazer a exclusão direto no banco de dados, e tive dificuldades antes de começar, na configuração do XAMPP.

##  Lógica do desenvolvimento

Começa pelo usuário digitando apenas o Id da linha do usuário, tendo o ID, pode-se excluir a linha todo contendo ID, usuário e senha.
Após o usuário informar o ID, o codigo percebe que o botão foi clicado, e procura o id no banco de dados e o exclui.

## Pesquisas utilizadas

Tive necessidade de pesquisa mais com o professor sobre sintaxe e sequencia de codigo, para que ele funcione.

## Objetivos de Aprendizagem

- Utilizar PHP para desenvolvimento back-end.
- Realizar conexão com banco de dados MySQL.
- Aprender controle de sessões e autenticação de usuários.

## Considerações Finais

Este projeto foi desenvolvido para fins educacionais, com o objetivo de praticar conceitos de desenvolvimento web utilizando PHP e MySQL.