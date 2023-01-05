<?php
//aqui salvamos dados de um form no banco de dados de
//salva.php

    $usuario = $_POST['usuario'];
    $senha = password_hash($_POST['senha'],PASSWORD_DEFAULT);
    
    include("../logica/conexao.php");
     
    $sql = "insert into usuario values(null,'".$usuario."','".$senha."');"; 

    if(mysqli_query($con,$sql)){
        echo "
            <script>
            if (confirm('Gravado com Sucesso!')) {
                window.location.replace('../nimda.php');
            }
            </script>
        ";
    }else{
        echo" Erro ao gravar";
    }

?>