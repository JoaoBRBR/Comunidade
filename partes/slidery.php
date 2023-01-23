<?php
    include("admin/logica/conexao.php");

    $con->set_charset("utf8");

    $consulta = "SELECT * FROM
    (
     SELECT * FROM noticiaY ORDER BY idNoticia DESC LIMIT 3
    ) AS sub
    ORDER BY idNoticia DESC;";

    $verifica = $con->query($consulta) or die($con->error); 
?>
<div class="total">
    <div class="slidery">
        <div class="slidesy">

            <!--botoes-->
            <input type="radio" name="radio-btny" id="radioy1">
            <input type="radio" name="radio-btny" id="radioy2">
            <input type="radio" name="radio-btny" id="radioy3">
            
            <!--imagens-->
            <?php while($dado = $verifica->fetch_array()) { ?>
                <div class="slidey"> 
                    <a href="<?php echo $dado["texto"];?>">
                        <img src="assets/uploadNewsx/<?php echo $dado["foto"]; ?>" alt="teste">
                    </a>
                </div>
            <?php } ?>
        </div>

        

    </div>
</div>

<script>
    //script para o carrosel
    var countery = 1;
    setInterval(function(){
        document.getElementById("radioy"+counter).checked = true;
        countery++;
        if(countery>3){
            countery = 1;
        }
    },4000);

    document.querySelector(".slidey").setAttribute("class","slidey firsty");

</script>