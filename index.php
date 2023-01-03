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
    <link rel="icon" type="image/png" href="assets/minilogo.png">
    <meta name="description" content="Site da associação dos moradores da Banqueta, em Angra dos Reis">
    <meta name="keywords" content="banqueta, amabanqueta, angra dos reis, associação, moradores, cachoeira">
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
        <img src="assets/grupo.png" alt="grupo">
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
                <p>Em Breve…</p>
                <p>
                A AMA Banqueta é uma associação sem fins lucrativos, no entanto para subsistir precisa arrecadar dinheiro para manter despesas como: conta de energia, iptu, investir em projetos, ações sociais entre outros.
                Para que a associação arque com suas despesas, recorremos aos moradores e amigos da Banqueta, que se associem.
                </p>
                <p>
                Se você tem interesse em se associar:
                1- Informar por e-mail (amabanqueta@gmail.com):
                Nome, Endereço, telefone e whatsapp <a href="index.php#fale">aqui</a>
                </p>
                <p>
                Se deseja que seu telefone celular seja incluído no Grupo da Associação de Moradores do Whatsapp deve autorizar essa inserção na mesma mensagem de e-mail.
                Assim que a documentação da associação estiver pronta para receber as mensalidades, entraremos em contato.
                O valor será de R$ 60,00 Anual ou R$ 6,00 mensais.
                </p>
            </div>
            <div>
                <img src="assets/associese.jpeg" alt="associese">
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
                <p>Você fala com a AMA Banqueta de 4 formas diferentes:</p>
                <p>1. Envie um email para amabanqueta@gmail.com</p>
                <p>2. Estamos no whatsapp, com um grupo da Associação com notícias e informações sobre nossas atividades e o bairro. Para entrar no Grupo da AMA Banqueta envie um e-mail para amabanqueta@gmail.com com seu nome, endereço e telefone, solicitando fazer parte do grupo.</p>
                <p>3. Estamos, também, no Instagram interagindo com nossos seguidores, nossos vizinhos, colaboradores e diversos perfis institucionais. Visite, nos adicione e compartilhe por lá.</p>
                <p id="mudaTextoA">4. Preencha o formulário ao lado:</p>
                <p id="mudaTextoB">4. Preencha o formulário abaixo:</p>
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