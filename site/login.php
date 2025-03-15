<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
    <?php 
         include("conexao.php");

        $loginUsuario = $_POST['usuario'];
        $loginSenha = $_POST['senha'];

        $sqlLogin = "SELECT * FROM aluno WHERE usuario = $loginUsuario AND senha = $loginSenha";
        $result = $conn->query($sqlLogin);
        
        if ($result->num_rows > 0) {
            echo "Login realizado com sucesso!";
        } else {
            echo "Usuário ou senha inválidos.";
        } 
    ?>