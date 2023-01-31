<!DOCTYPE html>
<html lang="pt">
<head>
    <link rel="stylesheet" type="text/css" href="shadowbox/shadowbox.css">
    <script type="text/javascript" src="shadowbox/shadowbox.js"></script>
    <script type="text/javascript">
        Shadowbox.init();
    </script>

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-E90TEVB0EJ"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-E90TEVB0EJ');
    </script>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
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
    <meta name="keywords" content="banqueta, amabanqueta,ama, angra dos reis, associação, moradores, cachoeira,">
</head>
<body>
    <!--contador-->
    <?php include("partes/contador.php") ?>

    <!--Banner-->
    <img id="bannerImg" src="assets/banner.png" width="100%" alt="baner com logo">

    <!--Navegacao-->
    <?php include("partes/header.php") ?>

    <!--Carrocel-->
    <?php include("partes/slider.php") ?>

    <!--grade-->
    <?php include("partes/grade.php") ?>

    <a class="meioBotao" href="noticias.php">Todas Notícias</a>

    <!--Carrocely-->
    <?php include("partes/slidery.php") ?>
    
    <!--Carrocelx-->
    <?php include("partes/sliderx.php") ?>

    <!--Quem somos-->
    <div class="fundo">
        <div id="somos" class="total justo margTop">
            <h2 class="tituloGrande2">Quem Somos</h2>
                <img src="assets/grupo.jpeg" alt="grupo">
                <p>Uma gestão que foi eleita democraticamente, apresentando as propostas de trabalho. Nós da Diretoria da Associação de Moradores e Amigos da Banqueta, sendo moradores do Bairro, em parceria com a comunidade, vamos realizar ações tragam melhoria e qualidade de vida para o bairro, conquistando beneficios para toda comunidade. Conte conosco, pois juntos conquistaremos um bairro melhor.</p>
                <p>DIRETORIA (2022 -2024)</p>
                <p>Período de vigência dos cargos: dezembro 2022 até dezembro 2024.</p>
                <p>Presidente – Felipe Voto</p>    
                <p>Vice-presidente- Pernambuco</p>
                <p>1º Secretária- Adilene</p>
                <p>2º Secretária – Kelly Mara</p>
                <p>1º Tesoureiro- Fernando Santiago</p>
                <p>2º Tesoureiro - Marquinho</p>
                <p>Diretor de Patrimônio: Ricardo</p>
                <p>Diretora Social: Carol Melo</p>
            </div>
        </div>
    </div>

    <!--Associe-se-->
    <div class="fundo">
        <div class="total associe margTop">
            <h2 class="tituloGrande2">Associe-se</h2>
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
    </div>

    <!--propaganda-->
    <?php include("partes/slidePubli.php") ?>

    <!--Publicidade-->
    <div class="fundo">
        <div class="total associe margTop justo">
            <h2 class="tituloGrande2">Publicidade</h2>
            <div id="publi">
                <div>
                    <img src="assets/publi.png" alt="associese">
                </div>
                <div>
                    <p>Propaganda no site da AMA Banqueta</p>
                    <p>A AMA Banqueta criou seu site para divulgar notícias do interesse dos moradores e amigos da Banqueta, principalmente notícias que diz respeito a qualidade de vida dos moradores, e referente as nossas reivindicações para soluções para os problemas do bairro que tanto sofreu com o crescimento desordenado.
                    Uma das funções da AMA Banqueta é a transparência, e o site é um dos canais de comunicação entre os moradores e as autoridades, no intuito de que as nossas reivindicações sejam ouvidas e solucionadas.
                    Pensando também  com outra forma de contribuir com quem mora na Banqueta e no entorno, disponibilizamos alguns espaços no site para dar visibilidade aos empreendimentos e serviços oferecidos aos moradores do bairro.
                    Por que anunciar no site da AMA Banqueta?</p>
                </div>
            </div>
            <div>
                <p>É uma oportunidade de divulgar as atividades profissionais no bairro, um incentivo para que os moradores procurem esses anunciantes dando-lhes preferência.</p>
                <p>Como anunciar?</p>
                <p>Para anunciar é necessário enviar um e-mail para <a href="index.php#fale">amabanqueta@gmail.com</a> informando o interesse em divulgar seu negócio e retornaremos com informações sobre a arte para publicação e as condições para a iniciar o anúncio.O valor será de: </p>
                <p>R$ 60,00 por 3 meses;</p>
                <p>R$ 100,00 por 6 meses;</p>
                <p>R$ 180,00 por 12 meses;</p>
                <p>O valor será destinado para cobrir as despesas da AMA Banqueta, assim como de projetos, atividades sociais e/ou manutenção do site da AMA Banqueta.</p>
            </div>
        </div>
    </div>

    <!--solicitaçoes-->
    <div class="fundo">
        <?php include("partes/solicita.php") ?>
    </div>

    <!--Galeria-->
    <div class="fundo">
        <?php include("partes/galeria.php") ?>
    </div>

    <!--fale conosco-->
    <div class="fundo">
        <div id="faleconosco" class="textos grade2 total margTop">
            <h2 class="tituloGrande2">Fale Conosco</h2>
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
                            <input required placeholder="Nome" type="text" name="nome" id="first-name">
                        </label>

                        <label for="phone">
                            <input required placeholder="Telefone" type="tel" name="telefone" id="phone">
                        </label>

                        <label for="email">
                            <input required placeholder="E-mail" type="email" name="email" id="email">
                        </label>

                        <textarea required placeholder="Mensagem" resize="false" id="message" name="mensagem"></textarea>
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
    </div>
    <!--outros em breve-->

    <!--footer-->
    <?php include("partes/footer.php") ?>
</body>
</html>