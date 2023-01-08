<?php
    include("admin/logica/conexao.php");

    $con->set_charset("utf8");

    $consulta = "SELECT * FROM
    (
     SELECT * FROM noticiaX ORDER BY idNoticia DESC LIMIT 3
    ) AS sub
    ORDER BY idNoticia DESC;";

    $verifica = $con->query($consulta) or die($con->error); 
?>
<div class="total">
    <div class="sliderx">
        <div class="slidesx">

            <!--botoes-->
            <input type="radio" name="radio-btnx" id="radiox1">
            <input type="radio" name="radio-btnx" id="radiox2">
            <input type="radio" name="radio-btnx" id="radiox3">
            
            <!--imagens-->
            <?php while($dado = $verifica->fetch_array()) { ?>
                <div class="slidex"> 
                    <a href="verNoticia.php?id=<?php echo $dado["idNoticia"];?>&operacao=ver&modo=x">
                        <img src="assets/uploadNewsx/<?php echo $dado["foto"]; ?>" alt="teste">
                    </a>
                </div>
            <?php } ?>
        </div>

        <!--navegatione manual-->
        <div class="navigation-manual">
            <label for="radiox1" class="manual-btn"></label>
            <label for="radiox2" class="manual-btn"></label>
            <label for="radiox3" class="manual-btn"></label>
        </div>

    </div>
</div>

<script>
    //script para o carrosel
    var counter = 1;
    setInterval(function(){
        document.getElementById("radiox"+counter).checked = true;
        counter++;
        if(counter>3){
            counter = 1;
        }
    },4000);

    document.querySelector(".slidex").setAttribute("class","slidex firstx");

</script>