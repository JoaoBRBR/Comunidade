<?php
/* Verificar se o formulário foi submetido */
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = filter_input(INPUT_POST, 'T_id');
    $nome = filter_input(INPUT_POST, 'nome');
    $descricao = filter_input(INPUT_POST, 'descricao');
    $estado = filter_input(INPUT_POST, 'estado');
    $data = filter_input(INPUT_POST, 'data');

    /* validar os dados recebidos do formulario */
    if (empty($id) || empty($nome) || empty($descricao) || empty($estado) || empty($data)){
        echo "Todos os campos do formulário devem conter valores ";
        exit();
    }    
}
else{
   echo " ERRO - Não foi possível executar a operação editar. ";
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
 
    /* texto sql da consulta*/
    $consulta = "UPDATE projeto SET idProjeto='$id',nome='$nome', descricao='$descricao', estado='$estado', data='$data' WHERE idProjeto='$id' ";

    /* executar a consulta e testar se ocorreu erro */
    if (!$con->query($consulta)) {
        echo " ERRO - Falha ao executar a consulta: \"$consulta\" <br>" . $con->error;
        $con->close();  /* fechar a ligação */
    }
    else{
        echo "
                <script>
                if (confirm('Atualizado com Sucesso!')) {
                    window.location.replace('../projetos.php');
                }
                </script>
            ";
    }
    $con->close();       /* fechar a ligação */