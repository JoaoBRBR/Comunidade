<?php 
    include('login/protect.php');
?>
<!DOCTYPE html>
<?php
    include("logica/conexao.php");
    $consulta = "SELECT * FROM projeto ORDER BY idProjeto DESC;";
    $verifica = $con->query($consulta) or die($con->error); 
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta</title>
    <link rel="stylesheet" href="styleA.css" type="text/css">
</head>
<body>
     
    <!--Navegacao-->
    <?php include("cabecalho.php") ?>
    <div class="total">
        <h1 class="meio"  >Consulta Das Solicitações</h1><br>
        <a class="botao verde centro" href="projeto/salvaProjeto.php">Nova Solicitação</a>
    </div>

    <br><br>
    
    <table border="1">
        <tr>
            <th>ID:</th>
            <th>Nome:</th>
            <th>Descrição:</th>
            <th>Data:</th>
            <th>Estado:</th>
            <th>Opções:</th>
        </tr>
        <?php while($dado = $verifica->fetch_array()) { ?>
            <tr>
                <td> <?php echo $dado["idProjeto"];?> </td>
                <td> <?php echo $dado["nome"]; ?> </td>
                <td> 
                    <div  class="some">
                        <?php echo $dado["descricao"]; ?>
                    </div>
                </td>
                <td>
                    <?php 
                        $data = $dado["data"];
                        echo $data[8].$data[9]."/".$data[5].$data[6]."/".$data[0].$data[1].$data[2].$data[3]; 
                    ?>
                </td>
                <td> <?php if( $dado["estado"] == 'sim'){echo 'Feito';}else if( $dado["estado"] == 'nao'){echo 'Não Feito';}else{echo "erro";};?> </td>
                <td>  
                    <a class="botao verde" href="projeto/editaProjeto.php?id=<?php echo $dado["idProjeto"];?>&operacao=editar">Editar</a>
                    <a class="botao vermelho" href="
                        javascript: if(confirm('Tem certeza que quer apagar <?php echo $dado["nome"]; ?> ?'))
                        location.href='projeto/excluir.php?&projeto=<?php echo $dado["idProjeto"];?> ';
                    ">Excluir</a>
                </td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>