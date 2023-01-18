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
        <h1 class="meio">Salvar Imagem</h1><br>
    </div>

    <form method="POST" action="arquiva.php" enctype="multipart/form-data">
        <input type="text" name="nome" id="nome" placeholder="Nome"><br>
        <input class="menor" type="file" name="foto" id="foto">
        <br>
        <input class="menor" type="submit" value="Salvar">
    </form>
</body>
</html>

