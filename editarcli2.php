<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar dados de Clientes - PETSHOP</title>
    <style>
      body{background: radial-gradient(circle, rgba(34,193,195,1) 0%, rgba(253,45,45,0.1431706460674157) 51%);}
    </style>    

</head>

<body>


<h1>Editar dados de Clientes - PETSHOP</h1>
<hr>

<?php
include('conexao.php');

$cpfcli = $_POST['cpfcli'];
$nomecli = $_POST['nomecli'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];
$endereco = $_POST['endereco'];
$senha = $_POST['senha'];

$sql = mysqli_query($conectadb, "UPDATE cliente SET nomecli = '$nomecli' WHERE cpfcli = '$cpfcli'");

$sql2 = mysqli_query($conectadb, "UPDATE cliente SET telefone = '$telefone' WHERE cpfcli = '$cpfcli'");

$sql3 = mysqli_query($conectadb, "UPDATE cliente SET email = '$email' WHERE cpfcli = '$cpfcli'");

$sql4 = mysqli_query($conectadb, "UPDATE cliente SET endereco = '$endereco' WHERE cpfcli = '$cpfcli'");

$sql5 = mysqli_query($conectadb, "UPDATE cliente SET senha = '$senha' WHERE cpfcli = '$cpfcli'");

    if ($sql) {
        echo "Os dados do(a) cliente ".$nomecli." foram alterados com sucesso!";
    } else {
        echo "Ocorreu um erro ao alterar os dados do(a) cliente. Tente novamente.";
    }
    include('menucolab.html');

?>

</body>
</html>