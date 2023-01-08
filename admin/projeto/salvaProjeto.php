<?php 
    include('../login/protect.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salva</title>
    <link rel="stylesheet" href="../styleA.css" type="text/css">
</head>
<style>
    #texto{
        width: 400px;
        height: 900px;
    }
</style>
<body>
    <!--Aqui Temos o formulario que comunica com arquiva.php-->
    <div class="total">
        <h1 class="meio">Criar Solicitação</h1><br>
    </div>

    <form method="POST" action="arquiva.php">
        <input type="text" name="nome" id="nome" placeholder="NOME"><br>
        <textarea name="descricao" id="descricao" placeholder="DESCRIÇÃO"></textarea>
        <div>Não Realizado<input type="radio" name="estado" value="nao"></div>
        <div>Realizado<input type="radio" name="estado" value="sim"></div>
        <input class="menor" type="date" name="data" id="data"><br>
        <input class="menor" type="submit" value="Salvar">
    </form>
</body>
</html>

