<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Title and Icon -->
    <title>Clipper - Contabilidade</title>
    <link rel="shortcut icon" href="./media/images/clipper-resumed-logo.ico" type="image/x-icon"> 

    <!-- Styles -->
    <link rel="stylesheet" href="./styles/global.css?v=<?php echo microtime() ?>">
    <link rel="stylesheet" href="./styles/header.css?v=<?php echo microtime() ?>">
    <link rel="stylesheet" href="./styles/posts.css?v=<?php echo microtime() ?>">
    <link rel="stylesheet" href="./styles/footer.css?v=<?php echo microtime() ?>">

</head>
<body class="master">
    <header>
        <section class="HeaderContainer">
            <img id="LogoResumed" src="./media/images/clipper-resumed-logo.webp?v=<?php echo microtime() ?>" alt="Clipper Contabilidade Logo Resumida">
            <div class="Mobile-Menu">
                <div class="Mobile-Menu-Line-1"></div>
                <div class="Mobile-Menu-Line-2"></div>
                <div class="Mobile-Menu-Line-3"></div>
            </div>
            <div class="Header-Options">
                <a class="Header-Option" href="#start">INICIO</a>
                <a class="Header-Option" href="#aboutus">QUEM SOMOS</a>
                <a class="Header-Option" href="#services">SERVIÇOS</a>
                <a class="Header-Option" href="#team">TIME</a>
                <a class="Header-Option" href="#contactus">CONTATE-NOS</a>
                <a class="Header-Option network" id="whatsapp_menu" href="https://api.whatsapp.com/send?1=pt_BR&phone=5583999367236">
                    <img src="./media/images/whatsapp-icon.webp?v=<?php echo microtime() ?>" alt="whats" >
                    <h3>(83) 99936-7236</h3>
                </a>
            </div>
        </section>
        <div class="Line"></div>
    </header>
    <main>

        <section class="Info-Post" id="start">
            <img id="clipperContLogo" src="./media/images/clipper-full-logo.webp?v=<?php echo microtime() ?>" alt="Clipper Contabilidade Logo">
            <div class="start-text">
                <h2>Soluções</h2>
                <h2>Contábeis e</h2>
                <h2>Corporativas</h2>
            </div>
        </section>

        <section class="Info-Post aboutus" id="aboutus">
            <div class="aboutus-text">
                <h1>Quem Somos</h1>
                <p>Somos um escritório de contabilidade jovem. Temos como principal propósito contribuir com a gestão de resultados dos nossos clientes, levando sempre informações úteis para ajuda-los em suas tomadas de decisão e levar seus negócios para um próximo nível. </p>
            </div>
        </section>

        <section class="Info-Post" id="services">
            <h1>Serviços</h1>
            <div class="services-line">
                <div class="services-card">
                    <img src="./media/images/cont_icon.webp?v=<?php echo microtime() ?>" alt="financeiro">
                    <h3>Contabilidade Empresarial</h3>
                    <span>▸ Análises;<br>▸ Lançamentos;<br>▸ Procedimentos contábeis empresariais;<br>▸ Aberturas, baixas, ajuste fiscal.</span>
                </div>
                <div class="services-card">
                    <img src="./media/images/imp-rend-icon.webp?v=<?php echo microtime() ?>" alt="financeiro">
                    <h3> Imposto de Renda</h3>
                    <span>▸ Declaração de ajuste anual do imposto de renda de pessoas físicas.</span>
                </div>
                <div class="services-card">
                    <img src="./media/images/gest-pp-icon.webp?v=<?php echo microtime() ?>" alt="financeiro">
                    <h3>Gestão de Funcionário</h3>
                    <span>▸ Contratação;<br>▸ Gerenciamento;<br>▸ A Terceirização do departamento pessoal.</span>
                </div>
                <div class="services-card">
                    <img src="./media/images/e-social-icon.webp?v=<?php echo microtime() ?>" alt="financeiro">
                    <h3>E-social</h3>
                    <span>▸ Lançamentos;<br>▸ Contratação;<br>▸ Gerenciamento do e-social doméstico.</span>
                </div>
                <div class="services-card">
                    <img src="./media/images/finan-merc-icon.webp?v=<?php echo microtime() ?>" alt="financeiro">
                    <h3>Mercado Financeiro</h3>
                    <span>▸ Análise de carteiras;<br>▸ Gerenciamento de ativos;<br>▸ Procedimentos de apuração fiscal na bolsa.</span>
                </div>
                <div class="services-card">
                    <img src="./media/images/MEI.webp?v=<?php echo microtime() ?>" alt="financeiro">
                    <h3>Gestão do MEI</h3>
                    <span>▸ Controle de compras e vendas;<br>▸ Gerenciamento do funcionário;<br>▸ Gestão financeira;<br>▸ Consultorias financeiras.</span>
                </div>
                <div class="services-card">
                    <img src="./media/images/tax.webp?v=<?php echo microtime() ?>" alt="financeiro">
                    <h3>Planejamento Tributário</h3>
                    <span>▸ Definição da melhor opção para o enquadramento tributário e fiscal.</span>
                </div>
            </div>

        </section>

        <section class="Info-Post" id="team">
            <h1>Nosso Time</h1>
            <div class="team-imagebook">
                <img id="team-background" src="./media/images/clipper-team-2.webp?v=<?php echo microtime() ?>" alt="Equipe da Clipper">
                <div class="Team-group">
                    <div class="Team-person" id="rafael-card">
                        <img src="./media/images/rafael.webp?v=<?php echo microtime() ?>" alt="rafael-card">
                        <h2>Rafael Rodrigues</h2>
                        <p>Coordenador</p>
                        <p>Dep. Comercial</p>
                    </div>
                    <div class="Team-person" id="wellyson-card">
                        <img src="./media/images/wellyson.webp?v=<?php echo microtime() ?>" alt="wellyson-card">
                        <h2>Wellyson Costa</h2>
                        <p>Coordenador</p>
                        <p>Dep. Pessoal</p>
                    </div>
                    <div class="Team-person" id="wilmara-card">
                        <img src="./media/images/wilmara.webp?v=<?php echo microtime() ?>" alt="Wilmara">
                        <h2>Wilmara de Medeiros</h2>
                        <p>Coordenadora</p>
                        <p>Dep. Fiscal</p>
                    </div>
                </div>
            </div>

        </section>

        <section class="Info-Post" id="contactus">
            <?php
                require_once 'vendor/autoload.php';
                if (isset($_POST["get-started-name"]) && !empty($_POST['get-started-email'])) {
                    $name = $_POST['get-started-name'];
                    $email = $_POST['get-started-email'];
                    $message = $message = "Olá, gostaria de solicitar um orçamento!<br/>Meu e-mail: " . $email;

                    $transport = (new Swift_SmtpTransport('smtp.hostinger.com', 465, 'tls'))
                        ->setUsername('contato@clippercont.com')
                        ->setPassword('Manoal@123');
                    $transport->setStreamOptions(array('ssl' => array('allow_self_signed' => true, 'verify_peer' => false)));

                    $mailer = new Swift_Mailer($transport);

                    $message = (new Swift_Message(time() . ' - Orçamento'))
                        ->setFrom($email)
                        ->setTo('contato@clippercont.com')
                        ->setBody($message, 'text/html');

                    $result = $mailer->send($message);
                }
            ?>

            
            <form method="POST" action="/"  autocomplete="off">
                <h1>Solicite um Orçamento</h1>
                <input class="Form-Item" id="form-name" type="text" placeholder="Nome" name="get-started-name" required>
                <span></span>
                <input class="Form-Item" id="form-email" type="email" placeholder="E-mail" name="get-started-email" required>
                <span></span>
                <textarea class="Form-Item" id="form-content" type="text" placeholder="Mensagem" name="get-started-message" required rows="20" cols="40"></textarea>
                <span></span>
                <button class="Form-Button" id="send-mail" type="submit">Enviar</button>
            </form>
        </section>

    </main>
    <footer>

        <div class="container-map ajust-footer">
            <h3>Nosso Escritório</h3>
            <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d989.7572592952217!2d-34.87725377088393!3d-7.122632568922689!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7ace809d1194ad1%3A0xca3d1f60ba97b1ab!2sR.%20Machado%20de%20Assis%2C%2081a%20-%20Centro%2C%20Jo%C3%A3o%20Pessoa%20-%20PB%2C%2058013-330!5e0!3m2!1spt-BR!2sbr!4v1646963183859!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            <p>R. Machado de Assis, 81a - Centro, João Pessoa - PB, 58013-330</p>
        </div>

        <div class="container-links">
            <h3>Links Úteis</h3>
            <a href="https://servicos.receita.fazenda.gov.br/servicos/cnpjreva/cnpjreva_solicitacao.asp">Consulta CNPJ</a>
            <a href="https://sispmjp.joaopessoa.pb.gov.br:8080/nfse/login.jsf">Emissão NF - PMJP</a>  
            <a href="https://www.gov.br/empresas-e-negocios/pt-br/empreendedor">Empresas e Negócios</a>  
            <a href="https://consopt.www8.receita.fazenda.gov.br/consultaoptantes">Consulta Optantes</a>
            <a href="https://www8.receita.fazenda.gov.br/SimplesNacional/Servicos/Grupo.aspx?grp=t&area=1">Portal Simples Nacional</a>
            <a href="https://www4.sefaz.pb.gov.br/atf/">Secretaria Executiva da Receita</a>
        </div>

        <div class="container-network ajust-footer">
            <h3>Redes Sociais</h3>
            <div class="social-networks"> 
                <a class="network" id="whatsapp" href="https://api.whatsapp.com/send?1=pt_BR&phone=5583999367236">
                    <img src="./media/images/whatsapp-icon.webp?v=<?php echo microtime() ?>" alt="whats" >
                    <h3>(83) 99936-7236</h3>
                </a>
                <a class="network" id="instagram"  target="_blank" href="https://www.instagram.com/clippercont/">
                    <img src="./media/images/instagram.webp?v=<?php echo microtime() ?>" alt="instagram">
                    <h3>@Clippercont</h3>
                </a>
            </div>
        </div>

    </footer>
    <div class="container-copyright">
        <h3>Todos os direito reservados desde 2022 ©</h3>
    </div>
    <script src="./scripts/mobile-menu.js?v=<?php echo microtime() ?>"></script>
</body>
</html>