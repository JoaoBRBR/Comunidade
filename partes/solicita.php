<div id="soli" class="total justo associe margTop">
    <h2>Solicitacões</h2>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores consectetur nesciunt optio atque explicabo repellendus quo rem harum deleniti numquam, minus ut? Et provident accusamus nemo quisquam nobis corrupti explicabo!</p>
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