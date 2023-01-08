<head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
</head>

<?php
    if(!isset($_SESSION)){
        session_start();
    }

    if(!isset($_SESSION['usuario'])){
        die("Você não pode acessar essa página, pois não está logado! <a href='login/login.php'>logar<a>");
    }
?>