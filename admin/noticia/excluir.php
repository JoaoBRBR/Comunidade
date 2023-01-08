<?php 
    include('../login/protect.php');
?>
<?php
    include("../logica/conexao.php");
    $usu_codigo = intval($_GET['noticia']);
    $sql_code = "DELETE FROM noticia WHERE idNoticia = '$usu_codigo'";
    $sql_query = $con->query($sql_code) or die($con->error);

    if($sql_query){
        echo "<script>location.href ='../noticias.php?';</script>";
    }else{
        echo "<script>alert('Nao foi possivel deletar.');location.href ='../noticias.php?';</script>";
    }

?>
