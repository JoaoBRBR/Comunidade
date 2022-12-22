<?php 
    include('login/protect.php');
?>
<!DOCTYPE html>
<?php
    include("logica/conexao.php");
    $consulta = "SELECT * FROM noticia";
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
        <h1 class="meio"  >Consulta Das noticias</h1><br>
        <a class="botao verde centro" href="noticia/salvaNoticia.php">Nova Noticia</a>
    </div>

    <br><br>
    
    <table border="1">
        <tr>
            <th>ID:</th>
            <th>Titulo:</th>
            <th>Texto:</th>
            <th>arquivo:</th>
            <th>Imagem:</th>
            <th>Data de Cadastro:</th>
            <th>Opções:</th>
        </tr>
        <?php while($dado = $verifica->fetch_array()) { ?>
            <tr>
                <td> <?php echo $dado["idNoticia"];?> </td>
                <td> <?php echo $dado["titulo"]; ?> </td>
                <td> 
                    <div  class="some">
                        <?php echo $dado["texto"]; ?>
                    </div>
                </td>
                <td> <?php echo $dado["foto"]; ?> </td>
                <td> <img width="50px" height="50px" src="..\assets\uploadNews\<?php echo $dado["foto"]; ?>" alt="<?php echo $dado["nome"]; ?>"></td>
                <td> <?php echo $dado["data"]; ?> </td>
                <td>  
                    <a class="botao verde" href="noticia/editaNoticia.php?id=<?php echo $dado["idNoticia"];?>&operacao=editar">Editar</a>
                    <a class="botao vermelho" href="
                        javascript: if(confirm('Tem certeza que quer apagar <?php echo $dado["titulo"]; ?> ?'))
                        location.href='noticia/excluir.php?&noticia=<?php echo $dado["idNoticia"];?> ';
                    ">Excluir</a>
                </td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>