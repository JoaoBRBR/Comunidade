<?php

    include("admin/logica/conexao.php");

    
    $pag = (isset($_GET['pagina']))?$_GET['pagina'] : 1;
    
    $con->set_charset("utf8");

    $busca = "SELECT *FROM noticia ORDER BY idNoticia DESC";
    $todos = mysqli_query($con, "$busca");
    
    $registros = "10";
    
    $tr = mysqli_num_rows($todos);
    $tp = ceil($tr/$registros);
    
    $inicio = ($registros*$pag)-$registros;
    $limite = mysqli_query($con, "$busca LIMIT $inicio, $registros");
    
    $anterior = $pag -1;
    $proximo = $pag +1;

?>
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
    <title>noticias</title>
    <link rel="stylesheet" href="assets/style.css" type="text/css">
    <script src="https://kit.fontawesome.com/b81d6c9818.js" crossorigin="anonymous"></script>
</head>
<body>
    
    <!--Navegacao-->
    <?php include("partes/header.php") ?>

    <!--propaganda-->
    <?php include("partes/slidePubli.php") ?>
    <br><br><br>
    
    <div class="total">
    <?php while($dados = mysqli_fetch_array($limite)) { ?>
        <div class="noticia">
            <div class="noticiaImg">
                <img src="assets\uploadNews\<?php echo $dados["foto"]; ?>" alt="<?php echo $dado["titulo"]; ?>" alt="">
            </div>
            <div class="noticiaTexto">
                <a href="verNoticia.php?id=<?php echo $dados["idNoticia"];?>&operacao=ver&modo=n">
                    <h2> <?php echo $dados["titulo"]; ?> </h2>
                    <p><?php 
                        for($i = 0; $i < 200;$i++){
                            echo $dados["texto"][$i]; 
                        }
                        echo "...";
                    ?></p>
                    <p><?php 
                        $data = $dados["data"];
                        echo $data[8].$data[9]."/".$data[5].$data[6]."/".$data[0].$data[1].$data[2].$data[3]; 
                    ?></p>
                </a>
            </div>
        </div>
        <hr>
    <?php } ?>
    </div>

    <div aria-label="Navegação de página exemplo">
        <ul class="pagination">
            <?php
            if($pag >1){
            ?>
            <li class="page-item">
            <a class="page-link" href="?pagina=<?=$anterior;?>" aria-label="Anterior">
                    <span aria-hidden="true">Anterior</span>
                </a>
            </li>
            <?php }?>
            
            <?php
            for($i=1; $i<=$tp; $i++){
                if($pag == $i ){
                    echo "<li class='page-item active'><a class='page-link' href='?pagina=$i'>$i</a></li>";
                }else{
                    echo "<li class='page-item'><a class='page-link' href='?pagina=$i'>$i</a></li>";
                }
            }
            ?>
            
            
            
            <?php 
            if($pag < $tp){
            ?>
            <li class="page-item">
                <a class="page-link" href="?pagina=<?=$proximo;?>" aria-label="Próximo">
                    <span aria-hidden="true">Próximo</span>
                    
                </a>
            </li>
            <?php }?>
        </ul>
    </div>

    <!--footer-->
    <?php include("partes/footer.php") ?>
</body>
</html>