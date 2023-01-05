<?php
    include("admin/logica/conexao.php");

    $con->set_charset("utf8");

    $consulta = "SELECT * FROM publicidade ORDER BY RAND();"; // ORDER BY RAND()

    $verifica = $con->query($consulta) or die($con->error); 

?>


<style>
    /* Fading animation */
    .fade {
    animation-name: fade;
    animation-duration: 1.5s;
    }

    .paiPubli{
        display: flex;
        justify-content:space-between;
    }

    @keyframes fade {
    from {opacity: .4} 
    to {opacity: 1}
    }

</style>

<div class="total margTop">

    <?php      
            $dado1 = $verifica->fetch_assoc();
            $dado2 = $verifica->fetch_assoc();
            $dado3 = $verifica->fetch_assoc();
            $dado4 = $verifica->fetch_assoc();
            $dado5 = $verifica->fetch_assoc();
            $dado6 = $verifica->fetch_assoc();
            $dado7 = $verifica->fetch_assoc();
            $dado8 = $verifica->fetch_assoc();
            echo "
                <div class='mySlides fade paiPubli'>
                    <img src='assets/uploadAds/".$dado1["foto"]."'>
                    <img src='assets/uploadAds/".$dado2["foto"]."'>
                    <img src='assets/uploadAds/".$dado3["foto"]."'>
                    <img src='assets/uploadAds/".$dado4["foto"]."'>
                </div>
                <div class='mySlides fade paiPubli'>
                    <img src='assets/uploadAds/".$dado5["foto"]."'>
                    <img src='assets/uploadAds/".$dado6["foto"]."'>
                    <img src='assets/uploadAds/".$dado7["foto"]."'>
                    <img src='assets/uploadAds/".$dado8["foto"]."'>
                </div>
            ";
        
    ?>
</div>

<script>
let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }

  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    

  slides[slideIndex-1].style.display = "block";  
  setTimeout(showSlides, 7000); // Change image every 2 seconds
}
</script>