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
        <h1 class="meio">Criar Noticia</h1><br>
    </div>

    <form method="POST" action="arquiva.php" enctype="multipart/form-data">
        <input type="text" name="titulo" id="titulo" placeholder="TÍTULO"><br>
        <input type="text" name="texto"  placeholder="link do colaborador"><br>
        <input class="menor" type="file" name="foto" id="foto">
        (A imagem deve ter um tamanho 940 x 130 pixels!)
        <br>
        <input class="menor" type="date" name="data" id="data"><br>
        <input class="menor" type="submit" value="Salvar">
    </form>
</body>
</html>

