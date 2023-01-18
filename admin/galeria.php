<?php 
    include('login/protect.php');
?>
<!DOCTYPE html>
<?php
    include("logica/conexao.php");
    $consulta = "SELECT * FROM galeria;"; // ORDER BY idPublicidade DESC
    $verifica = $con->query($consulta) or die($con->error); 
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta</title>
    <link rel="stylesheet" href="styleA.css" type="text/css">
</head>
<body>
     
    <!--Navegacao-->
    <?php include("cabecalho.php") ?>
    <div class="total">
        <h1 class="meio"  >Consulta Das Fotos</h1><br>
    </div>
    <div class="total">
        <a class="botao verde centro" href="galeria/salvaNoticia.php">Nova Publicidade</a>
    </div>

    <br><br>
    
    <table border="1">
        <tr>
            <th>ID:</th>
            <th>Nome:</th>
            <th>Imagem:</th>
            <th>Opções:</th>
        </tr>
        <?php while($dado = $verifica->fetch_array()) { ?>
            <tr>
                <td> <?php echo $dado["idGaleria"];?> </td>
                <td> <?php echo $dado["nome"]; ?> </td>
                <td> <img width="200px" height="200px" src="..\assets\uploadImages\<?php echo $dado['foto']; ?>" alt="<?php echo $dado['nome']; ?>"></td>
                <td>  
                    <a class="botao vermelho" href="
                        javascript: if(confirm('Tem certeza que quer apagar <?php echo $dado["nome"]; ?> ?'))
                        location.href='galeria/excluir.php?&noticia=<?php echo $dado["idGaleria"];?> ';
                    ">Excluir</a>
                </td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>