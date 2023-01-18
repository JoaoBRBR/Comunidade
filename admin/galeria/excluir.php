<?php 
    include('../login/protect.php');
?>
<?php
    include("../logica/conexao.php");
    $usu_codigo = intval($_GET['noticia']);
    $sql_code = "DELETE FROM galeria WHERE idGaleria = '$usu_codigo'";
    $sql_query = $con->query($sql_code) or die($con->error);

    if($sql_query){
        echo "<script>location.href ='../galeria.php?';</script>";
    }else{
        echo "<script>alert('Nao foi possivel deletar.');location.href ='../galeria.php?';</script>";
    }

?>
