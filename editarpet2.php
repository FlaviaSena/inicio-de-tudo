<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar dados de Pets - PETSHOP</title>

    <style>
      body{background: radial-gradient(circle, rgba(34,193,195,1) 0%, rgba(253,45,45,0.1431706460674157) 51%);}
    </style>    

</head>

<body>


<h1>Editar dados de Pets - PETSHOP</h1>
<hr>

<?php
include('conexao.php');

$idpet = $_POST['idpet'];
$nomepet = $_POST['nomepet'];
$especie = $_POST['especie'];
$raca = $_POST['raca'];
$cpfcli = $_POST['cpfcli'];
$nomecli = $_POST['nomecli'];

$sql = mysqli_query($conectadb, "UPDATE pet SET nomepet = '$nomepet' WHERE idpet = '$idpet'");

$sql2 = mysqli_query($conectadb, "UPDATE pet SET especie = '$especie' WHERE idpet = '$idpet'");

$sql3 = mysqli_query($conectadb, "UPDATE pet SET raca = '$raca' WHERE idpet = '$idpet'");

$sql4 = mysqli_query($conectadb, "UPDATE pet SET cpfcli = '$cpfcli' WHERE idpet = '$idpet'");

$sql5 = mysqli_query($conectadb, "UPDATE pet SET nomecli = '$nomecli' WHERE idpet = '$idpet'");

    if ($sql) {
        echo "Os dados do(a) colaborador(a) ".$nomecli." foram alterados com sucesso! <br><a href='listageralcli.php'>Voltar à Lista Geral de Colaboradores</p>";
    } else {
        echo "Ocorreu um erro ao alterar os dados do(a) colaborador(a). Tente novamente.";
    }

    include('menucolab.html');

?>

</body>
</html>