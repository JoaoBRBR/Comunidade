<div id="soli" class="total justo associe margTop">
    <h2>Nossas Reivindicações</h2>
    <p>Aqui você pode acompanhar todas as nossas reivindicações, atendendo as necessidades do bairro. Nosso principal objetivo é direcionar e mediar todas as demandas da comunidade.</p>
    <p>Esse é um espaço importante para que nós, moradores, possamos acompanhar não só as reivindicações, mas as que já foram ou não atendidas.</p>
    <p>Outro fator importante é que você pode nos encaminhar no espaço <a href="index.php#fale">FALE CONOSCO</a> outras reivindicações, ainda não demandada para os órgãos competentes, que faremos a formalização.</p>
    
    <div class="gradeSoli">
        <div>
            <h3>Solicitadas</h3>
            <ul>
                <?php
                    include("admin/logica/conexao.php");
                    $consulta = "SELECT * FROM projeto ORDER BY idProjeto DESC;";
                    $verifica = $con->query($consulta) or die($con->error); 
                ?>
                <?php while($dado = $verifica->fetch_array()) { ?>
                    <?php if($dado["estado"]=="nao") { ?>
                        <li><?php echo $dado["nome"]; ?><div class="esconde"><?php echo $dado["descricao"]; ?></div></li>
                    <?php } ?>
                <?php } ?>
            </ul>
        </div>
        <div>
            <h3>Realizadas</h3>
            <ul>
                <?php
                    include("admin/logica/conexao.php");
                    $consulta = "SELECT * FROM projeto ORDER BY idProjeto DESC;";
                    $verifica = $con->query($consulta) or die($con->error); 
                ?>
                <?php while($dado = $verifica->fetch_array()) { ?>
                    <?php if($dado["estado"]=="sim") { ?>
                        <li><?php echo $dado["nome"]; ?><div class="esconde"><?php echo $dado["descricao"]; ?></div></li>
                    <?php } ?>
                <?php } ?>
            </ul>
        </div>
    </div>
</div>