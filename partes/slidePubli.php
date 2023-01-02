<?php
    include("admin/logica/conexao.php");

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
        $foto = [];
        $x=0;
        while($dado = $verifica->fetch_array()) {
            $foto[$x] = $dado["foto"];
            $x++;
        }

        
            echo "
                <div class='mySlides fade paiPubli'>
                    <img src='assets/uploadAds/".$foto[0]."'>
                    <img src='assets/uploadAds/".$foto[1]."'>
                    <img src='assets/uploadAds/".$foto[2]."'>
                    <img src='assets/uploadAds/".$foto[3]."'>
                </div>
                <div class='mySlides fade paiPubli'>
                    <img src='assets/uploadAds/".$foto[4]."'>
                    <img src='assets/uploadAds/".$foto[5]."'>
                    <img src='assets/uploadAds/".$foto[6]."'>
                    <img src='assets/uploadAds/".$foto[7]."'>
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