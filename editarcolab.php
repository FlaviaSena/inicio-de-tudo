<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar dados de Colaboradores - PETSHOP</title>
    <style>
      body{background: radial-gradient(circle, rgba(34,193,195,1) 0%, rgba(253,45,45,0.1431706460674157) 51%);}
    </style>    

</head>

<body>


<h1>Editar dados de Colaboradores - PETSHOP</h1>
<hr>

<?php


include('conexao.php');

$matricula = $_GET['matriculacolab'];

$sql = mysqli_query($conectadb, "SELECT * FROM colaborador WHERE matriculacolab = '$matricula'");

$linha = mysqli_fetch_array($sql);

    if($linha) {
        
        echo "
        
        <form action='editarcolab2.php' method='post'>
        
        <table>
        <tr>
        <form>
        <table>
        <tr>
            <td>
                <label>MATRÍCULA</label>
            </td>
            <td>
                <input type='text' name='matriculacolab' value='".$linha['matriculacolab']."'>
            </td>
        </tr>

        <tr>
        <td>
            <label>NOME</label>
        </td>
        <td>
            <input type='text' name='nomecolab' value=".$linha['nomecolab'].">
        </td>
    </tr>

    <tr>
    <td>
        <label>CPF</label>
    </td>
    <td>
        <input type='text' name='cpfcolab' value=".$linha['cpfcolab'].">
    </td>
    </tr>

    <tr>
    <td>
        <label>SENHA</label>
    </td>
    <td>
        <input type='password' name='senhacolab' value=".$linha['senhacolab'].">
    </td>
    </tr>

<td><input type='submit' href='editarcolab2.php 'value='Editar'></button></td>
    </table>
        </form>";

    } else {
        echo "Dados não encontrados.";
    }
    include('menucolab.html');

?>

</body>
</html>