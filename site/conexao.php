<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>conexão</title>
</head>

    <?php 
        // configurações do database
        $nomeServer = "localhost";
        $usuarioBanco = "cristiano";
        $senhaBanco = "Cris191004";
        $banco = "aulavip";

         // conexão com o banco de dados
         $conn = new mysqli($nomeServer, $usuarioBanco, $senhaBanco, $banco);
         if ($conn->connect_error) {
             die("Falha na conexão com o banco de dados: " . $conn->connect_error);
         } else{
            echo "Conectado";
         }
    ?>