<?php

$dbhost = "127.0.0.1";
$dbuserName = "root";
$dbpassword = "senai.123";
$dbName = "projeto";

$conexao = new mysqli($dbhost,$dbuserName,$dbpassword,$dbName);

if($conexao -> connect_errno)
{
    echo("errp de conexao");
}
else
{
    echo("conexao realizada com sucesso");
} 

if(isset($_POST['submit']))
{

    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];                                       
    $telefone = $_POST['telefone'];
    $endereco = $_POST['endereco'];
    $email = $_POST['email'];

    $result = mysqli_query ($conexao, "INSERT INTO cadastrocliente(nome,cpf,telefone,endereco,email) values ('$nome', '$cpf', ' $telefone', ' $endereco' , ' $email')");


}

      

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <form action="cadastro.php" method="POST">
        <label for="nome">nome</label><br>
        <input type="text" nome="nome" id="nome"><br>
        <label for="cpf">CPF</label><br>
        <input type="text" nome="cpf" id="cpf"><br>
        <label for="telefone">telefone</label><br>
        <input type="text" nome="telefone" id="telefone"><br>
        <label for="email">email</label><br>
        <input type="text" nome="email" id="email"><br>
        <label for="endereco">endereco</label><br>
        <input type="text" nome="endereco" id="endereco"><br>
        
        <input type="submit" name="submit">

        
    </form>
</body>
</html>