<?php

    include("admin/logica/conexao.php");

    $con->set_charset("utf8");

    $consulta = "SELECT * FROM
    (
     SELECT * FROM noticia ORDER BY idNoticia DESC LIMIT 7
    ) AS sub
    ORDER BY idNoticia ASC;";

    $verifica = $con->query($consulta) or die($con->error); 

?>

<div class="total">
    
    <div class="parent">

        <?php $x = 1; 
        while($dado = $verifica->fetch_array()) { 
            if($x<5){?>
                <div class="div<?php echo $x; ?>">
                    <a href="verNoticia.php?id=<?php echo $dado["idNoticia"];?>&operacao=ver&modo=n">
                        <img src="assets/uploadNews/<?php echo $dado["foto"]; ?>" alt="imagem">
                        <div class="titulo">
                            <h2><?php echo $dado["titulo"]; ?></h2>
                        </div>
                    </a>
                </div>
        <?php }$x++;} ?>
        
    </div>
</div>