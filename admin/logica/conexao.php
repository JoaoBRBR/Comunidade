<?php
    //esse arquivo serve apenas para conectar no servidor;
    $hostname = "null";
    $bancodedados = "null";
    $user = "null";
    $pass = "null";
    $con = mysqli_connect($hostname,$user,$pass,$bancodedados) or die('Ah não! ' . mysqli_connect_error());

    $con->set_charset("utf8");