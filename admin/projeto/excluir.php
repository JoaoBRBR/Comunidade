<?php 
    include('../login/protect.php');
?>
<?php
    include("../logica/conexao.php");
    $usu_codigo = intval($_GET['projeto']);
    $sql_code = "DELETE FROM projeto WHERE idProjeto = '$usu_codigo'";
    $sql_query = $con->query($sql_code) or die($con->error);

    if($sql_query){
        echo "<script>location.href ='../projetos.php?';</script>";
    }else{
        echo "<script>alert('Nao foi possivel deletar.');location.href ='../projetos.php?';</script>";
    }

?>
