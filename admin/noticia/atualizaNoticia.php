<?php 
    include('../login/protect.php');
?>
<?php
/* Verificar se o formulário foi submetido */
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = filter_input(INPUT_POST, 'T_id');
    $novoid = filter_input(INPUT_POST, 'T_novoid');
    $titulo = filter_input(INPUT_POST, 'titulo');
    $texto = filter_input(INPUT_POST, 'texto');
    $foto = $_FILES['foto'];
    $data = filter_input(INPUT_POST, 'data');

    /* validar os dados recebidos do formulario */
    if (empty($id) || empty($titulo) || empty($novoid) || empty($texto) || empty($foto) || empty($data)){
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
    
$ext = explode(".",$foto["name"]);
$ext = $ext[1];

if (($ext == "jpg") || ($ext == "jpeg") || ($ext == "png") || ($ext == "gif")) {
    $nomefoto = date("YmdHis").rand(0000,9999).".".$ext;

    /* texto sql da consulta*/
    $consulta = "UPDATE noticia SET idNoticia='$novoid', titulo='$titulo', texto='$texto', foto='$nomefoto', data='$data' WHERE idNoticia='$id' ";

    /* executar a consulta e testar se ocorreu erro */
    if (!$con->query($consulta)) {
        echo " ERRO - Falha ao executar a consulta: \"$consulta\" <br>" . $con->error;
        $con->close();  /* fechar a ligação */
    }
    else{
        /* percorrer os registos (linhas) da tabela e mostrar na página */
        move_uploaded_file($foto["tmp_name"],"../../assets/uploadNews/".$nomefoto);
            echo "
                <script>
                if (confirm('Atualizado com Sucesso!')) {
                    window.location.replace('../noticias.php');
                }
                </script>
            ";
    }
    $con->close();       /* fechar a ligação */
}