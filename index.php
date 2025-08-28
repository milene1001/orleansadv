<?php
session_start();

// Trigger news fetch once if no articles are in session
if (!isset($_SESSION['news_articles']) || empty($_SESSION['news_articles'])) {
    if (empty($_SESSION['news_fetch_attempted'])) {
        $_SESSION['news_fetch_attempted'] = true;
        header('Location: news.php');
        exit;
    }
}
?>
    <!DOCTYPE HTML>
    <html>
        <head> 
            <title>Caio Orleans - Advocacia e Assessoria Jurídica</title>
            <meta name="description" content="Caio Orleans Advocacia e Assessoria Jurídica. Escritório especializado em direito bancário, consumidor, imobiliário e previdenciário. Atendimento personalizado para empresas e pessoas físicas.">
            <meta name="keywords" content="advocacia, assessoria jurídica, direito bancário, direito do consumidor, direito imobiliário, direito previdenciário, São Benedito, Tianguá, Sobral, Ubajara, Ibiapina, Ceará">
            <meta charset="utf-8" />
            <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />

            <link rel="canonical" href="https://www.caioorleansadv.com.br/" />

            <!-- Open Graph -->
            <meta property="og:title" content="Caio Orleans - Advocacia e Assessoria Jurídica" />
            <meta property="og:description" content="Especializados em direito bancário, consumidor, imobiliário e previdenciário. Atendimento humanizado e personalizado." />
            <meta property="og:image" content="https://www.caioorleansadv.com.br/images/caio-orleans-logo.png" />
            <meta property="og:url" content="https://www.caioorleansadv.com.br/" />
            <meta property="og:type" content="website" />

            <!-- Twitter Card -->
            <meta name="twitter:card" content="summary_large_image" />
            <meta name="twitter:title" content="Caio Orleans - Advocacia e Assessoria Jurídica" />
            <meta name="twitter:description" content="Especializados em direito bancário, consumidor, imobiliário e previdenciário. Atendimento humanizado e personalizado." />
            <meta name="twitter:image" content="https://www.caioorleansadv.com.br/images/caio-orleans-logo.png" />

            <!-- Fonts and CSS -->
            <link rel="preconnect" href="https://fonts.googleapis.com" />
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
            <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Playfair+Display:wght@400;500;600;700&display=swap" rel="stylesheet" />
            <link rel="stylesheet" href="assets/css/main.css" />
            <link rel="stylesheet" href="assets/css/custom.css" />
            <script src="https://kit.fontawesome.com/90ee6c478d.js" crossorigin="anonymous"></script>

            <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
            <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
            <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
            <link rel="manifest" href="/site.webmanifest">

        <!-- Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-K66927NPKW"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'G-K66927NPKW');
        </script>
   </head>

        <body class="homepage is-preload">
            <div id="page-wrapper">
                <!-- Header -->
                <header id="header">
                    <video autoplay muted loop playsinline>
                    <source src="videos/bg-white..mp4" type="video/mp4" />
                    Seu navegador não suporta vídeo em HTML5.
                    </video>
                
                    <!-- Logo -->
                    <div id="logo">
                        <a href="/">
                            <img src="images/caio-orleans-logo.png" alt="Caio Orleans" />
                        </a>
                    </div>

                    <!-- Nav -->
                    <nav id="nav">
                        <ul>
                            <li class="current"><a href="#sobre-nos">Sobre nós</a></li>
                            <li><a href="#areas-de-atuacao">Áreas de atuação</a></li>
                            <li><a href="#ultimas-noticias">Últimas notícias</a></li>
                        </ul>
                    </nav>
                </header>

                <!-- Sobre nós -->
                <section id="sobre-nos" class="wrapper style1">
                    <div class="title">Sobre nós</div>
                    <div class="container">
                        <header class="style1">
                            <h2>Excelência jurídica com atendimento humanizado</h2>
                        </header>
                        
                        <div class="row">
                            <div class="col-6 col-12-medium">
                                <h3>Nossa missão</h3>
                                <p>No escritório Caio de Orleans, cada cliente é atendido com dedicação, clareza e compromisso com resultados. Nosso propósito vai além de resolver conflitos: buscamos orientar, prevenir e construir relações jurídicas seguras e duradouras.</p>
                            </div>
                            <div class="col-6 col-12-medium">
                                <h3>Nossa abordagem</h3>
                                <p>Atuamos com responsabilidade e proximidade em todas as etapas — seja na defesa contra cobranças abusivas, na proteção dos direitos do consumidor ou na conquista de benefícios previdenciários justos.</p>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-12">
                                <header class="style1">
                                    <p class="style2">Com atendimento humanizado e foco na excelência, transformamos conhecimento jurídico em confiança e segurança para quem precisa.</p>
                                </header>
                            </div>
                        </div>										
                    </div>
                </section>

                <!-- Áreas de atuação -->
                <section id="areas-de-atuacao" class="wrapper style2">
                    <div class="title">Áreas de atuação</div>
                    <div class="container">
                        <!-- Image -->
                        <a href="#" class="image featured">
                            <img src="images/areas-de-atuacao-direito.jpg" alt="áreas de atuação" />
                        </a>

                        <!-- Features -->
                        <section id="features">
                            <header class="style1">
                                <h2>Como podemos te ajudar?</h2>
                                <p>Atendimento personalizado e estratégico para proteger seus interesses com segurança jurídica.</p>
                            </header>
                            <div class="feature-list">
                                <div class="row">
                                    <div class="col-6 col-12-medium">
                                        <section>
                                            <h3 class="icon solid fa-balance-scale">Direito Bancário</h3>
                                            <p><strong>Especialização em conflitos bancários:</strong></p>
                                            <ul>
                                                <li>Revisão de contratos bancários</li>
                                                <li>Tarifas abusivas e cobranças indevidas</li>
                                                <li>Fraudes e segurança bancária</li>
                                                <li>Negativação indevida</li>
                                                <li>Responsabilidade civil bancária</li>
                                            </ul>
                                        </section>
                                    </div>
                                    <div class="col-6 col-12-medium">
                                        <section>
                                            <h3 class="icon solid fa-shield-alt">Direito do Consumidor</h3>
                                            <p><strong>Proteção integral dos seus direitos:</strong></p>
                                            <ul>
                                                <li>Produtos com defeito</li>
                                                <li>Negativa de cobertura de planos</li>
                                                <li>Cláusulas abusivas em contratos</li>
                                                <li>Publicidade enganosa</li>
                                                <li>Indenizações por danos morais</li>
                                            </ul>
                                        </section>
                                    </div>
                                    <div class="col-6 col-12-medium">
                                        <section>
                                            <h3 class="icon solid fa-user-shield">Direito Previdenciário</h3>
                                            <p><strong>Conquiste seus benefícios com segurança:</strong></p>
                                            <ul>
                                                <li>Aposentadorias e pensões</li>
                                                <li>Auxílios (doença, acidente, maternidade)</li>
                                                <li>Revisões de benefícios</li>
                                                <li>Processos contra o INSS</li>
                                                <li>Reconhecimento de tempo de contribuição</li>
                                            </ul>
                                        </section>
                                    </div>
                                    <div class="col-6 col-12-medium">
                                        <section>
                                            <h3 class="icon solid fa-home">Direito Imobiliário</h3>
                                            <p><strong>Segurança jurídica em negócios imobiliários:</strong></p>
                                            <ul>
                                                <li>Compra e venda de imóveis</li>
                                                <li>Contratos de locação</li>
                                                <li>Usucapião e regularização</li>
                                                <li>Inventário e partilha</li>
                                                <li>Disputas de propriedade</li>
                                            </ul>
                                        </section>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </section>

                <!-- Conteúdo Jurídico -->
                <section id="ultimas-noticias" class="wrapper style3">
                    <div class="title">Conteúdo Jurídico</div>
                    <div class="container">
                        <header class="style1">
                            <h2>Últimas notícias</h2>
                        </header>
                        
                        <div class="row aln-center">
                            <?php
                            if (isset($_SESSION['news_articles']) && !empty($_SESSION['news_articles'])) {
                                foreach ($_SESSION['news_articles'] as $article) {
                                    $imageUrl = !empty($article['urlToImage']) ? $article['urlToImage'] : 'images/pic02.jpg';
                                    $articleUrl = !empty($article['url']) ? $article['url'] : '#';
                                    $title = !empty($article['title']) ? $article['title'] : 'Artigo Jurídico';
                                    $description = !empty($article['description']) ? $article['description'] : 'Leia mais sobre este artigo jurídico.';
                                    ?>
                                    <div class="col-4 col-12-medium">
                                        <section class="highlight">
                                            <a href="<?php echo $articleUrl; ?>" target="_blank" class="image featured">
                                                <img src="<?php echo htmlspecialchars($imageUrl); ?>" alt="<?php echo htmlspecialchars($title); ?>" onerror="this.src='images/pic02.jpg'" />
                                            </a>
                                            <h3><a href="<?php echo htmlspecialchars($articleUrl); ?>" target="_blank"><?php echo htmlspecialchars($title); ?></a></h3>
                                            <p><?php 
                                                $description = htmlspecialchars($description);
                                                echo strlen($description) > 100 ? substr($description, 0, 100) . '...' : $description;
                                            ?></p>
                                            <ul class="actions mx-auto">
                                                <li><a href="<?php echo htmlspecialchars($articleUrl); ?>" target="_blank" class="button style1">Saiba mais</a></li>
                                            </ul>
                                        </section>
                                    </div>
                                    <?php
                                }
                            } else {
                                // Display default content if no news articles are available
                                ?>
                                <?php
                            }
                            ?>
                        </div>
                    </div>
                </section>

                <!-- Footer -->
                <section id="footer" class="wrapper">
                    <div class="title">Por que nos escolher?</div>
                    <div class="container">
                        <header class="style1">
                            <h2>Excelência jurídica que você pode confiar</h2>
                            <p>Oferecemos mais do que soluções jurídicas — oferecemos escuta, transparência e comprometimento real com cada cliente. Atuamos de forma estratégica, personalizada e ética, garantindo que seus direitos sejam defendidos com excelência, responsabilidade e clareza em cada passo.</p>
                        </header>
                        
                        <div class="row">
                            <div class="col-6 col-12-medium">
                                <h3>Nossos diferenciais</h3>
                                <ul class="style2">
                                    <li><strong>Atendimento personalizado</strong> - Cada caso é único e merece atenção exclusiva</li>
                                    <li><strong>Transparência total</strong> - Você sempre saberá o andamento do seu processo</li>
                                    <li><strong>Resultados efetivos</strong> - Focamos em soluções concretas para seus problemas</li>
                                </ul>
                            </div>
                            <div class="col-6 col-12-medium">
                                <h3>Entre em contato</h3>
                                <section class="feature-list small">
                                    <div class="row">
                                        <div class="col-12">
                                            <section>
                                                <h4 class="icon brands fa-whatsapp">WhatsApp</h4>
                                                <p><a href="https://api.whatsapp.com/send?phone=5588992389350">(88) 9 9238-9350</a><br />
                                                <em>Atendimento de segunda a sexta, das 8h às 18h</em></p>
                                            </section>
                                        </div>
                                        <div class="col-12">
                                            <section>
                                                <h4 class="icon solid fa-envelope">Email</h4>
                                                <p><a href="mailto:contato@caioorleans.adv.br">contato@caioorleans.com.br</a><br />
                                                <em>Resposta em até 24 horas</em></p>
                                            </section>
                                        </div>
                                        <div class="col-12">
                                            <section>
                                                <h4 class="icon brands fa-instagram">Instagram</h4>
                                                <p><a href="https://www.instagram.com/_caio_orleansadv?igsh=cGUwazNtbWJlbnBm">@caio_orleansadv_</a><br />
                                                <em>Dicas jurídicas e atualizações</em></p>
                                            </section>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                </section>
            </div>

            <!-- Floating WhatsApp Button -->
            <a href="https://wa.me/5588992389350" class="whatsapp-float" target="_blank" rel="noopener noreferrer" aria-label="WhatsApp">
                <i class="fa-brands fa-whatsapp"></i>
            </a>

            <!-- Scripts -->
            <script src="assets/js/jquery.min.js"></script>
            <script src="assets/js/jquery.dropotron.min.js"></script>
            <script src="assets/js/browser.min.js"></script>
            <script src="assets/js/breakpoints.min.js"></script>
            <script src="assets/js/util.js"></script>
            <script src="assets/js/main.js"></script>
        </body>
    </html>
