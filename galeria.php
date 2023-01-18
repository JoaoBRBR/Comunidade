
<!DOCTYPE html>
<html lang="pt">
<head>
    <link rel="stylesheet" type="text/css" href="shadowbox/shadowbox.css">
    <script type="text/javascript" src="shadowbox/shadowbox.js"></script>
    <script type="text/javascript">
        Shadowbox.init();
    </script>

    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>galeria</title>
    <link rel="stylesheet" href="assets/style.css" type="text/css">
    <script src="https://kit.fontawesome.com/b81d6c9818.js" crossorigin="anonymous"></script>
</head>
<body>
    
    <!--Navegacao-->
    <?php include("partes/header.php") ?>

    <!--propaganda-->
    <?php include("partes/slidePubli.php") ?>
    <br><br><br>
    
    <div class="total margTop" id="galeria">
        <h2 style="text-align: center">Galeria</h2>
        <div class="grandFather total">

            <?php
                
                include("admin/logica/conexao.php");

                $con->set_charset("utf8");

                $consulta = "SELECT * FROM galeria;";

                $verifica = $con->query($consulta) or die($con->error); 
            
            while($dado = $verifica->fetch_array()){?>    

                <div class="canva">
                    <a href="assets/uploadImages/<?php echo $dado["foto"]; ?>" rel="shadowbox[rio]">
                        <img width="100%" src="assets/uploadImages/<?php echo $dado["foto"]; ?>">
                    </a>
                </div>

            <?php }?>

        </div>
    </div>

    <!--footer-->
    <?php include("partes/footer.php") ?>
</body>
</html>