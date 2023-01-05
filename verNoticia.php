<!DOCTYPE html>
<html lang="pt">
<head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banqueta</title>
    <link rel="stylesheet" href="assets/style.css" type="text/css">
    <script src="https://kit.fontawesome.com/b81d6c9818.js" crossorigin="anonymous"></script>
</head>

<body>

    <!--Navegacao-->
    <?php include("partes/header.php") ?>

    <br><br><br>

    <div class="total">
        <?php
            /* Verificar se foi enviado o pedido para eliminar  */
            if ($_SERVER["REQUEST_METHOD"] == "GET") {
                $id = filter_input(INPUT_GET, 'id');
                $operacao = filter_input(INPUT_GET, 'operacao');

            /* validar os dados recebidos através do pedido */
            if (empty($id) || $operacao!="ver"){
                echo "  Erro, pedido inválido ";
                exit();
            }    
            }
            else{
                echo " Erro, pedido inválido ";
                exit();
            }

            include("admin/logica/conexao.php");

            /* verifica se ocorreu algum erro na ligação */
            if ($con->connect_errno) {
                echo "Falha na ligação: " . $con->connect_error; 
                exit();
            }

            /* definir o charset utilizado na ligação */
            $con->set_charset("utf8");

            /* texto sql da consulta*/
            $consulta = "SELECT * FROM noticia  WHERE idNoticia = '$id' ";

            /* executar a consulta e testar se ocorreu erro */
            if (!$resultado = $con->query($consulta)) {
                echo ' Falha na consulta: '. $con->error;
                $con->close();  /* fechar a ligação */
            }
            else{
            /* obter os dados do registo */
                $dado = $resultado->fetch_assoc();
            ?>

            <div class="verNoticia">
                <img src="assets\uploadNews\<?php echo $dado["foto"]; ?>" alt="imagem">
                <h1><?=$dado['titulo']?></h1>
                <p>
                <?php 
                    $data = $dado["data"];
                    echo $data[8].$data[9]."/".$data[5].$data[6]."/".$data[0].$data[1].$data[2].$data[3]; 
                ?>
                </p>
                <p><?=$dado['texto']?></p>
                <p>
                <?php 
                    $data = $dado["data"];
                    echo $data[8].$data[9]."/".$data[5].$data[6]."/".$data[0].$data[1].$data[2].$data[3]; 
                ?>
                </p>
                <a href="index.php">voltar</a>
            </div>        

        <?php } ?>
    </div>

    <!--propaganda-->
    <?php include("partes/slidePubli.php") ?>
    <br><br><br>

    <!--footer-->
    <?php include("partes/footer.php") ?>
</body>
</html>