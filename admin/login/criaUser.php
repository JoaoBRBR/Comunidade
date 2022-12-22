<?php 
    include('protect.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LogIn</title>
</head>
<style>
    body{
        display:flex;
        justify-content:center;
        align-items:center;
        height:100vh;
    }
    form{
        padding:20px;
        border-radius:20px;
        background-color: gray;
    }
</style>
<body>
    <form action="salvaSenha.php" method="post">
        Nome: <br>
        <input type="text" name="usuario" id="usuario" placeholder="usuario"><br>
        Senha: <br>
        <input type="text" name="senha" id="senha" placeholder="senha"><br>
        <br>
        <button type="submit">Cadastrar</button>
    </form>
</body>
</html>