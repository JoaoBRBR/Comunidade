<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
    
<form action="verifica.php" method="POST">
    Nome: <br>
    <input type="text" name="usuario"><br>
    Senha: <br>
    <input type="password" name="senha"><br>
    <br>
    <button type="submit">Entrar</button>
</form>
</body>
</html>