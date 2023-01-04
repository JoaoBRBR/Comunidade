<?php
    //esse arquivo serve apenas para conectar no servidor;
    $hostname = "localhost";
    $bancodedados = "banqueta";
    $user = "root";
    $pass = "";

    $con = mysqli_connect($hostname,$user,$pass,$bancodedados);