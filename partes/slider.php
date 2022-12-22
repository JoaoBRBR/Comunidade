<?php
    include("admin/logica/conexao.php");

    $consulta = "SELECT * FROM
    (
     SELECT * FROM noticia ORDER BY idNoticia DESC LIMIT 3
    ) AS sub
    ORDER BY idNoticia DESC;";

    $verifica = $con->query($consulta) or die($con->error); 
?>

<div class="total">
    <div class="slider">
        <div class="slides" id="primeiroElemento">

            <!--botoes-->
            <input type="radio" name="radio-btn" id="radio1">
            <input type="radio" name="radio-btn" id="radio2">
            <input type="radio" name="radio-btn" id="radio3">
            
            <!--imagens-->
            <?php while($dado = $verifica->fetch_array()) { ?>
                <div class="slide"> 
                    <img src="assets/uploadNews/<?php echo $dado["foto"]; ?>" alt="teste">
                    <div class="titulo">
                        <h2><?php echo $dado["titulo"]; ?></h2>
                    </div>
                </div>
            <?php } ?>
        </div>

        <!--navegatione manual-->
        <div class="navigation-manual">
            <label for="radio1" class="manual-btn"></label>
            <label for="radio2" class="manual-btn"></label>
            <label for="radio3" class="manual-btn"></label>
        </div>

    </div>
</div>

<script>
    //script para o carrosel
    var counter = 1;
    setInterval(function(){
        document.getElementById("radio"+counter).checked = true;
        counter++;
        if(counter>3){
            counter = 1;
        }
    },4000);

    document.querySelector(".slide").setAttribute("class","slide first");

</script>