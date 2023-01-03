<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banqueta</title>
    <link rel="stylesheet" href="assets/style.css" type="text/css">
    <script src="https://kit.fontawesome.com/b81d6c9818.js" crossorigin="anonymous"></script>
    <script>
        function fechaAba(){
            document.getElementById("botao").checked = false;
        }
    </script>
</head>
<body>

    <!--Banner-->
    <img id="bannerImg" src="assets/banner.png" width="100%" alt="baner com logo">

    <!--Navegacao-->
    <?php include("partes/header.php") ?>

    <!--Carrocel-->
    <?php include("partes/slider.php") ?>
    
    <!--grade-->
    <?php include("partes/grade.php") ?>

    <!--propaganda-->
    <?php include("partes/slidePubli.php") ?>

    <!--Quem somos-->
    <div id="somos" class="total justo margTop">
        <h2>Quem Somos</h2>
        <img src="assets/grupo.jpeg" alt="grupo">
        <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt similique quibusdam, reiciendis porro ab dolor nam. Placeat voluptatibus explicabo nulla, hic ad quaerat itaque tempora, necessitatibus nemo pariatur expedita quasi?
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt similique quibusdam, reiciendis porro ab dolor nam. Placeat voluptatibus explicabo nulla, hic ad quaerat itaque tempora, necessitatibus nemo pariatur expedita quasi?
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt similique quibusdam, reiciendis porro ab dolor nam. Placeat voluptatibus explicabo nulla, hic ad quaerat itaque tempora, necessitatibus nemo pariatur expedita quasi?
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt similique quibusdam, reiciendis porro ab dolor nam. Placeat voluptatibus explicabo nulla, hic ad quaerat itaque tempora, necessitatibus nemo pariatur expedita quasi?
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt similique quibusdam, reiciendis porro ab dolor nam. Placeat voluptatibus explicabo nulla, hic ad quaerat itaque tempora, necessitatibus nemo pariatur expedita quasi?
        </p>
    </div>

    <!--Associe-se-->
    <div class="total associe margTop">
        <h2>Associe-se</h2>
        <div id="associe">
            <div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus sapiente qui, neque dolorum vero rerum porro blanditiis expedita quaerat perspiciatis reiciendis vitae. Tempore, esse aliquid? Provident consequuntur dicta reiciendis impedit.</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam dicta reprehenderit ipsum culpa tempore temporibus ut! Explicabo alias atque mollitia ea aliquid quos, quam dignissimos error totam fugiat dolorem sit.</p>
            </div>
            <div>
                <img src="assets/associese.png" alt="associese">
            </div>
        </div>
    </div>

    <!--Publicidade-->
    <div class="total associe margTop">
        <h2>Publicidade</h2>
        <div id="publi">
            <div>
                <img src="assets/publi.jpeg" alt="associese">
            </div>
            <div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus sapiente qui, neque dolorum vero rerum porro blanditiis expedita quaerat perspiciatis reiciendis vitae. Tempore, esse aliquid? Provident consequuntur dicta reiciendis impedit.</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam dicta reprehenderit ipsum culpa tempore temporibus ut! Explicabo alias atque mollitia ea aliquid quos, quam dignissimos error totam fugiat dolorem sit.</p>
            </div>
        </div>
    </div>

    <!--solicitaçoes-->
    <?php include("partes/solicita.php") ?>

    <!--fale conosco-->
    <div id="faleconosco" class="textos grade2 total margTop">
        <h2>Fale Conosco</h2>
        <div id="fale">
            
            <div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia beatae nihil, ab doloremque fugiat perspiciatis quos at sed hic ullam autem labore dignissimos qui reprehenderit expedita quaerat sint alias quod.</p>
            </div>
            <div>
                <form class="submission-form" action="https://formsubmit.co/amabanqueta@gmail.com" method="post">
                    <label for="first-name" id="inputNome">
                        <input placeholder="Nome" type="text" name="nome" id="first-name">
                    </label>

                    <label for="phone">
                        <input placeholder="Telefone" type="tel" name="telefone" id="phone">
                    </label>

                    <label for="email">
                        <input placeholder="E-mail" type="email" name="email" id="email">
                    </label>

                    <textarea placeholder="Mensagem" resize="false" id="message" name="mensagem"></textarea>
                    <input class="botao" type="submit" id="sendBtn">
                </form>
            </div>

            
            <!--<form class="submission-form" action="https://formsubmit.co/depois.com" method="post">
                <div class="formAreas left">
                    <label for="first-name">Nome</label>
                    <input type="text" name="nome" id="first-name">
                </div>
                <div class="formAreas right">
                    <label for="phone">Telefone</label>
                    <input type="tel" name="telefone" id="phone">
                </div>
                <label for="email">Email</label>
                <input type="email" name="email" id="email">
                <label for="message">Mensagem</label>
                <textarea resize="false" id="message" name="mensagem"></textarea>
                <input type="submit" value="enviar" id="sendBtn">
            </form>-->
        </div>
    </div>

    <!--outros em breve-->

    <!--footer-->
    <?php include("partes/footer.php") ?>
</body>
</html>