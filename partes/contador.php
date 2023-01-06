<?php
    include("admin/logica/conexao.php");
    $consulta = "SELECT * FROM contador;";
    $verifica = $con->query($consulta) or die($con->error); 

    $dado = $verifica->fetch_array();
    $conta = $dado['visitas']+1;
    $consulta = "UPDATE contador SET visitas='$conta' WHERE id='1' ";
    $verifica = $con->query($consulta) or die($con->error); 
?>