<?php

    include("admin/logica/conexao.php");

    $con->set_charset("utf8");

    $consulta = "SELECT * FROM
    (
     SELECT * FROM galeria ORDER BY idGaleria DESC LIMIT 8
    ) AS sub
    ORDER BY idGaleria ASC;";

    $verifica = $con->query($consulta) or die($con->error); 

?>


<div class="total margTop" id="galeria">
    <h2 style="text-align: center">Galeria</h2>
    <div class="grandFather total">

    <?php while($dado = $verifica->fetch_array()){?>    

        <div class="canva">
            <a href="assets/uploadImages/<?php echo $dado["foto"]; ?>" rel="shadowbox[rio]">
                <img width="100%" src="assets/uploadImages/<?php echo $dado["foto"]; ?>">
            </a>
        </div>

    <?php }?>

    </div>

    <a class="meioBotao" href="galeria.php">Ver Todas Imagens</a>

</div>