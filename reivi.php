<!DOCTYPE html>
<html lang="pt">
<head>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-E90TEVB0EJ"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-E90TEVB0EJ');
    </script>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banqueta</title>
    <link rel="stylesheet" href="assets/style.css" type="text/css">
    <script src="https://kit.fontawesome.com/b81d6c9818.js" crossorigin="anonymous"></script>
    <script>
        function fechaAba(){
            document.getElementById("botao").checked = false;
        }
    </script>
    <link rel="icon" type="image/png" href="assets/minilogo.png">
    <meta name="description" content="Site da associação dos moradores da Banqueta, em Angra dos Reis">
    <meta name="keywords" content="banqueta, amabanqueta, angra dos reis, associação, moradores, cachoeira,">
</head>
<body>
    <!--Navegacao-->
    <?php include("partes/header.php") ?>

    <div id="soli" class="total justo associe margTop">
        <h2>Nossas Reivindicações</h2>
        <p>Aqui você pode acompanhar todas as nossas reivindicações, atendendo as necessidades do bairro. Nosso principal objetivo é direcionar e mediar todas as demandas da comunidade.</p>
        <p>Esse é um espaço importante para que nós, moradores, possamos acompanhar não só as reivindicações, mas as que já foram ou não atendidas.</p>
        <p>Outro fator importante é que você pode nos encaminhar no espaço <a href="index.php#fale">FALE CONOSCO</a> outras reivindicações, ainda não demandada para os órgãos competentes, que faremos a formalização.</p>
        
        <div class="gradeSoli">
            <div>
                <h3>Solicitadas</h3>
                <ul>
                    <?php
                        include("admin/logica/conexao.php");
                        $consulta = "SELECT * FROM projeto ORDER BY idProjeto DESC;";
                        $verifica = $con->query($consulta) or die($con->error); 
                    ?>
                    <?php while($dado = $verifica->fetch_array()) { ?>
                        <?php if($dado["estado"]=="nao") {?>
                            <li><?php echo $dado["nome"]; ?><div class="esconde"><?php echo $dado["descricao"]; ?></div></li>
                        <?php } ?>
                    <?php } ?>
                </ul>
            </div>
            <div>
                <h3>Realizadas</h3>
                <ul>
                    <?php
                        include("admin/logica/conexao.php");
                        $consulta = "SELECT * FROM projeto ORDER BY idProjeto DESC;";
                        $verifica = $con->query($consulta) or die($con->error); 
                    ?>
                    <?php while($dado = $verifica->fetch_array()) { ?>
                        <?php if($dado["estado"]=="sim") {?>
                            <li><?php echo $dado["nome"]; ?><div class="esconde"><?php echo $dado["descricao"]; ?></div></li>
                        <?php } ?>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>

    <!--propaganda-->
    <?php include("partes/slidePubli.php") ?>

    <!--footer-->
    <?php include("partes/footer.php") ?>
</body>