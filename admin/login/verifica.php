<?php
    
    include_once'../logica/conexao.php';
    
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    $consulta = "SELECT * FROM usuario WHERE usuario = '$usuario' LIMIT 1";
    $verifica = $con->query($consulta) or die($con->error); 
    $user = $verifica->fetch_assoc();
    
    
    if($senha == "********"){

        if(!isset($_SESSION)){
            session_start();
        }
        $_SESSION['usuario'] = $usuario;
        
        header("Location: ../nimda.php");
    }else{
        echo "
            <script>
            if (confirm('Senha Ou Usuario Incorreto!')) {
                window.location.replace('login.php');
            }
            </script>
        ";
    }