 <?php
        include("../infra/db/connect.php");

        
        if($_SERVER["REQUEST_METHOD"] == "POST"){

            $IdDoUsuario = $_POST['id'];
        
            $sql = "DELETE FROM usuarios WHERE id = $IdDoUsuario";
        
            if($conn->query($sql) === TRUE){
                echo "<script> alert('Usuário excluído com sucesso!')</script>";
            }else{
                echo "<script> alert('Erro ao excluir usuário')</script>";
            }
     }
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excluir Usuário</title>
</head>
<body>
    <form method="POST">
        <h3>Excluir Usuário</h3>
        <label>Digite o ID do usuário que deseja excluir:</label><br>
        <input type="text" name="id">
        <button type="submit">Excluir</button>
    </form>

    <?php
    include("components/table.php");
    ?>

<a href="home.php">Voltar para Home</a>
   
</body>
</html>