<?php

    include("admin/logica/conexao.php");

    $consulta = "SELECT * FROM noticia ORDER BY idNoticia DESC;";

    $verifica = $con->query($consulta) or die($con->error); 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>noticias</title>
    <link rel="stylesheet" href="assets/style.css" type="text/css">
    <script src="https://kit.fontawesome.com/b81d6c9818.js" crossorigin="anonymous"></script>
</head>
<body>
    
    <!--Navegacao-->
    <?php include("partes/header.php") ?>
    
    <br><br><br>

    <div class="total">
    <?php while($dado = $verifica->fetch_array()) { ?>
        <div class="noticia">
            <div class="noticiaImg">
                <img src="assets\uploadNews\<?php echo $dado["foto"]; ?>" alt="<?php echo $dado["titulo"]; ?>" alt="">
            </div>
            <div class="noticiaTexto">
                <a href="verNoticia.php?id=<?php echo $dado["idNoticia"];?>&operacao=ver">
                    <h2> <?php echo $dado["titulo"]; ?> </h2>
                    <p><?php 
                        for($i = 0; $i < 200;$i++){
                            echo $dado["texto"][$i]; 
                        }
                        echo "...";
                    ?></p>
                    <p><?php 
                        $data = $dado["data"];
                        echo $data[8].$data[9]."/".$data[5].$data[6]."/".$data[0].$data[1].$data[2].$data[3]; 
                    ?></p>
                </a>
            </div>
        </div>
        <hr>
    <?php } ?>
    </div>

</body>
</html>