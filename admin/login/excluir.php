<?php 
    include('login/protect.php');
?>
<?php
    include("../logica/conexao.php");
    $usu_codigo = intval($_GET['usuario']);
    $sql_code = "DELETE FROM usuario WHERE idUsuario = '$usu_codigo'";
    $sql_query = $con->query($sql_code) or die($con->error);

    if($sql_query){
        echo "<script>location.href ='../administradores.php?';</script>";
    }else{
        echo "<script>alert('Nao foi possivel deletar.');location.href ='../administracao.php?';</script>";
    }

?>
