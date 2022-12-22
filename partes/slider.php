<?php
    include("admin/logica/conexao.php");
    
    $consulta = "SELECT * FROM noticia";
    $verifica = $con->query($consulta) or die($con->error); 
    //$consulta = "SELECT * FROM noticia  ORDER BY idNoticia DESC LIMIT 2";

    $f = true;
?>
<div class="total">
    <div class="slider">
        <div class="slides">
            <!--botoes-->
            <input type="radio" name="radio-btn" id="radio1">
            <input type="radio" name="radio-btn" id="radio2">
            <input type="radio" name="radio-btn" id="radio3">
            
            <!--imagens-->


            <div class="slide first" id="first"> 
                <img src="a1.jpg" alt="teste">
                <div class="titulo">
                    <h2>teste</h2>
                </div>
            </div>
            <div class="slide" id="first"> 
                <img src="a2.jpg" alt="teste">
                <div class="titulo">
                    <h2>teste</h2>
                </div>
            </div>
            <div class="slide" id="first"> 
                <img src="a3.jpg" alt="teste">
                <div class="titulo">
                    <h2>teste</h2>
                </div>
            </div>

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
        var counter = 1;
        setInterval(function(){
            document.getElementById("radio"+counter).checked = true;
            counter++;
            if(counter>3){
                counter = 1;
            }
        },4000);
    </script>