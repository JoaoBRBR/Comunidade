<?php 
    include('../login/protect.php');
?>
<?php
//aqui salvamos dados de um form no banco de dados de
//salva.php

    $nome = $_POST['nome'];
    $descricao = $_POST['descricao'];
    $estado = $_POST['estado'];
    $data = $_POST['data'];

    echo $estado;
        include_once'../logica/conexao.php';     

        $sql = "insert into projeto values(null,'".$nome."','".$descricao."','".$estado."','".$data."');";

       

        if(mysqli_query($con,$sql)){
            echo "
                <script>
                if (confirm('Salvo com Sucesso!')) {
                    window.location.replace('../projetos.php');
                }
                </script>
            ";
        }else{
            echo" Erro ao gravar";
        }
?>