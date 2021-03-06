<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesquisa Refinada - Base de Colaboradores - PETSHOP</title>

    <style>
      body{background: radial-gradient(circle, rgba(34,193,195,1) 0%, rgba(253,45,45,0.1431706460674157) 51%);}
    </style>    


</head>

<body>

<!--TÍTULO NA PÁGINA-->
<h1>Pesquisa Refinada - Base de Colaboradores - PETSHOP</h1>
<hr>



<!--FORMULÁRIO PARA INSERÇÃO DA MATRÍCULA PARA PESQUISA NO BANCO DE DADOS-->

    <form class="d-flex" action="" method="post">
        
        <input type="text" autocomplete="off" name="matriculacolab" placeholder="Matrícula">

        <input class="btn btn-outline-primary" type="submit" value="Buscar dados">

    </form>



    <!--CÓDIGO PHP - LISTAR DADOS DO DE TODOS OS COLABORADORES-->
<?php

include('conexao.php');

@$matricula = $_POST['matriculacolab'];

$sql = mysqli_query($conectadb, "SELECT * FROM colaborador WHERE matriculacolab = '$matricula'");

    while ($dado = mysqli_fetch_array($sql)) {

        $nome = $dado['nomecolab'];
        $cpf = $dado['cpfcolab'];
        $matricula = $dado['matriculacolab'];

        echo "<br>";
        echo "MATRÍCULA: $matricula<br>";
        echo "NOME: $nome<br>";
        echo "CPF: $cpf<br>";

    echo "<a href='editarcolab.php?matriculacolab=".$matricula."'>Editar dados do colaborador ".$nome."?</a>";
    echo " | ";
    echo "<a href='excluircolab.php?matriculacolab=".$matricula."'>Excluir dados do colaborador ".$nome."?</a>";
    echo "<hr>";
    }


?>
<br>
<hr>
<?php

include('menucolab.html');

?>

<!--
    <footer>
        <p>Projeto desenvolvido no Curso Técnico em Informática do SENAC 2022</p>
    </footer>
<-->

</body>

</html>