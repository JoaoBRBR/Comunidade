<?php 
    include('login/protect.php');
?>
<!DOCTYPE html>
<?php
    include("logica/conexao.php");
    $consulta = "SELECT * FROM publicidade;"; // ORDER BY idPublicidade DESC
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
        <h1 class="meio"  >Consulta Das Publicidades</h1><br>
    </div>

    <br><br>
    
    <table border="1">
        <tr>
            <th>ID:</th>
            <th>Nome:</th>
            <th>arquivo:</th>
            <th>Imagem:</th>
            <th>Data de Cadastro:</th>
            <th>Opções:</th>
        </tr>
        <?php while($dado = $verifica->fetch_array()) { ?>
            <tr>
                <td> <?php echo $dado["idPuplicidade"];?> </td>
                <td> <?php echo $dado["nome"]; ?> </td>
                <td> <?php echo $dado["foto"]; ?> </td>
                <td> <img width="100px" height="100px" src="..\assets\uploadAds\<?php echo $dado["foto"]; ?>" alt="<?php echo $dado["nome"]; ?>"></td>
                <td>
                    <?php 
                        $data = $dado["data"];
                        echo $data[8].$data[9]."/".$data[5].$data[6]."/".$data[0].$data[1].$data[2].$data[3]; 
                    ?>
                </td>
                <td>  
                    <a class="botao verde" href="propaganda/editaNoticia.php?id=<?php echo $dado["idPuplicidade"];?>&operacao=editar">Alterar</a>
                </td>
            </tr>
        <?php } ?>
    </table>

    <br><br><br><br>
    <div class="total">
        <a class="botao verde centro" href="propaganda/salvaNoticia.php">Nova Publicidade</a>
    </div>
</body>
</html>