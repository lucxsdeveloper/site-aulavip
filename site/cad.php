<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Aluno</title>
</head>
    <?php
        include("conexao.php");
        
        $nome = $_REQUEST['nome'];
        $endereco = $_REQUEST['endereco'];
        $complemento = $_REQUEST['complemento'];
        $bairro = $_REQUEST['bairro'];
        $CEP = $_REQUEST['CEP'];
        $telefone = $_REQUEST['telefone'];
        $email = $_REQUEST['email'];
        $usuario = $_REQUEST['usuario'];
        $senha = $_REQUEST['senha'];

        // inserindo os dados no banco de dados
        $sql = "INSERT INTO aluno (nome, endereco, complemento, bairro, CEP, telefone, email, usuario, senha) VALUES ('$nome', '$endereco', '$complemento', '$bairro', '$CEP', '$telefone', '$email', '$usuario', '$senha')";
                
                echo $sql;

        //if ($conn->query($sql) === TRUE) {
           // echo "Dados inseridos com sucesso!";
       // } else {
          //  echo "Erro ao inserir os dados: " . $conn->error;
       // }
    ?>