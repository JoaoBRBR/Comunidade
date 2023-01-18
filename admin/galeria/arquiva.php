<?php 
    include('../login/protect.php');
?>

<?php
//aqui salvamos dados de um form no banco de dados de
//salva.php

    $nome = $_POST['nome'];
    $foto = $_FILES['foto'];


    //var_dump($foto);

    $ext = explode(".",$foto["name"]);


    $ext = $ext[1];
    //echo $ext;

    if (($ext == "jpg") || ($ext == "jpeg") || ($ext == "png") || ($ext == "gif")) {

        include_once'../logica/conexao.php';



     

        $nomefoto = date("YmdHis").rand(0000,9999).".".$ext;

     

        $sql = "insert into galeria values(null,'".$nome."','".$nomefoto."');";

       

        if(mysqli_query($con,$sql)){
            // mensagem de que gravou... E mover a imagem para apasta
            move_uploaded_file($foto["tmp_name"],"../../assets/uploadImages/".$nomefoto);
            echo "
                <script>
                if (confirm('Salvo com Sucesso!')) {
                    window.location.replace('../galeria.php');
                }
                </script>
            ";
        }else{

            echo" Erro ao gravar";

        }

        // fechar a conexao


    } elseif($foto["size"] > 1024 * 800){
        echo "Tamanho excedido!";
    }else {
        echo " Só aceitamos arquivos de imagem este tipo de arquivo é inválido.";
    }

?>