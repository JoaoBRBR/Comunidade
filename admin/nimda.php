<?php 
    include('login/protect.php');
?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administração</title>
    <link rel="stylesheet" href="styleA.css" type="text/css">
</head>
<body>
 
<!--Navegacao-->
<?php include("cabecalho.php") ?>
<h1 class="meio" >Bem Vindo, <?php echo $_SESSION['usuario']; ?></h1>


<?php
    include("logica/conexao.php");
    $consulta = "SELECT * FROM contador WHERE id = '1';";
    $verifica = $con->query($consulta) or die($con->error); 

    $dado = $verifica->fetch_array()
?>

<h3>Número total de Visitantes: <?php echo $dado["visitas"]; ?></h3>


</body>
</html>