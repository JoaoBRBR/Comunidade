<?php 
    include('../login/protect.php');
?>
<html>
    <head>
        <title>Editar Dados</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../styleA.css" type="text/css">
    </head>
    <body>
        
    <?php

        /* Verificar se foi enviado o pedido para eliminar  */
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        $id = filter_input(INPUT_GET, 'id');
        $operacao = filter_input(INPUT_GET, 'operacao');

        /* validar os dados recebidos através do pedido */
        if (empty($id) || $operacao!="editar"){
            echo "  Erro, pedido inválido ";
            exit();
        }    
    }
    else{
       echo " Erro, pedido inválido ";
       exit();
    }

   
    /* estabelece a ligação à base de dados */
    //$ligacao = new mysqli("localhost", "root", "1234", "empresa");
    include("../logica/conexao.php");

    /* verifica se ocorreu algum erro na ligação */
    if ($con->connect_errno) {
        echo "Falha na ligação: " . $con->connect_error; 
        exit();
    }

    /* definir o charset utilizado na ligação */
    $con->set_charset("utf8");

    /* texto sql da consulta*/
    $consulta = "SELECT * FROM projeto  WHERE idProjeto = '$id' ";

    /* executar a consulta e testar se ocorreu erro */
    if (!$resultado = $con->query($consulta)) {
        echo ' Falha na consulta: '. $con->error;
        $con->close();  /* fechar a ligação */
    }
    else{
        /* obter os dados do registo */
        $dado = $resultado->fetch_assoc();
        ?>

        <div class="total">
            <h1 class="meio">Editar Solicitação</h1><br>
        </div>
        
        <form method="POST" action="atualizaProjeto.php">
        Id-<input type="text" name="T_id" value="<?=$dado['idProjeto']?>" readonly> <br>
            <input type="text" name="nome" id="nome" placeholder="NOME" value="<?=$dado['nome']?>"><br>
            <textarea name="descricao" id="descricao" placeholder="DESCRIÇÃO"><?=$dado['descricao']?></textarea>
            <div>Não Realizado<input type="radio" name="estado" value="nao"></div>
            <div>Realizado<input type="radio" name="estado" value="sim"></div>
            <input class="menor" type="date" name="data" id="data" value="<?=$dado['data']?>"><br>
            <input class="menor" type="submit" value="Salvar">
        </form>
        <?php
    }
 ?>
        
    </body>
</html>