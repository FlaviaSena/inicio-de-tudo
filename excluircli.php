<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exclusão de dados - PETSHOP</title>
    
    <style>
      body{background: radial-gradient(circle, rgba(34,193,195,1) 0%, rgba(253,45,45,0.1431706460674157) 51%);}
    </style>    


</head>

<body>
<h1>Exclusão de dados - PETSHOP</h1>
<hr>

<?php

include('menucolab.html');

include('conexao.php');

$cpfcli = $_GET['cpfcli'];

echo "Deletando os dados do funcionário cujo CPF é <b>".$cpfcli."</b></br></br>";

    $query = "DELETE FROM cliente WHERE cpfcli = '$cpfcli'";

    $apaga = $conectadb -> query($query);

        if ($apaga) {
            echo "<b>Os dados foram deletados com sucesso.</b><br>
            <a href='pesquisarcli.php'>Nova pesquisa</a><br> <a href='listageralcli.php'>Voltar à Lista Geral de Clientes</a>";
        } else {
            echo "Erro ao excluir dados do funcionário.<br>
            <a href='pesquisarcli.php'>Nova pesquisa</a>";
        }

include('menucolab.html');

?>
</body>
</html>
