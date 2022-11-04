<?php include('config.php'); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nona artesanatos</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"> <!-- bootstrap -->
    <link rel="stylesheet" href="<?php echo ENDERECO_SITE; ?>css/lightslider.css">
    <link rel="stylesheet" href="<?php echo ENDERECO_SITE; ?>css/style.css">                    <!-- meu css -->
    <link rel="stylesheet" href="<?php echo ENDERECO_SITE; ?>css/login.css">                    <!-- css da tela de login -->
    <link rel="stylesheet" href="<?php echo ENDERECO_SITE; ?>css/cadastros.css">                <!-- cadastro de cliente -->
    <link rel="stylesheet" href="<?php echo ENDERECO_SITE; ?>css/produto.css">                  <!-- estilo da tela de produto -->
    <link rel="stylesheet" href="<?php echo ENDERECO_SITE; ?>css/maisprodutos.css">             <!-- estilo da tela de todos os produtos -->
    <link rel="stylesheet" href="<?php echo ENDERECO_SITE; ?>css/sobrenos.css">                 <!-- estilo da págian sobre nós -->
    <link rel="stylesheet" href="<?php echo ENDERECO_SITE; ?>css/perfil.css">
    <script src="https://kit.fontawesome.com/62e5760e2b.js" crossorigin="anonymous"></script>   <!-- fontawesome -->
</head>
<body>
    <?Php $url = isset($_GET['url']) ? $_GET['url'] : 'home'; ?>

    <header>
        <div class="container">
            <div class="w20 h100 logo-content">
                <a href="<?php echo ENDERECO_SITE; ?>home">
                    <div class="logo"></div>
                </a>
            </div>
            <div class="w70 header">
                <div class="w100 h50 header1">
                    <div class="w80 buscar">
                        <input type="text" name="buscar" id="buscar" placeholder="Buscar por produto...">
                    </div>
                </div><!-- header1 -->
                <div class="w100 h50 header2">
                    <ul id="lista-principal" class="w100 h100 centralizar">
                        <li id="li-principal" class="h100 centralizar link-produtos">
                            <a href="<?php echo ENDERECO_SITE; ?>#">Produtos</a>
                            <i class="fa-solid fa-chevron-down"></i>
                            <nav class="nav-sub-menu">
                                <ul class="sub-menu">
                                    <li><a href="<?php echo ENDERECO_SITE; ?>">Pinceis</a></li>
                                    <li><a href="<?php echo ENDERECO_SITE; ?>">Tintas</a></li>
                                    <li><a href="<?php echo ENDERECO_SITE; ?>">Tapetes</a></li>
                                    <li><a href="<?php echo ENDERECO_SITE; ?>">Vasos</a></li>
                                    <li><a href="<?php echo ENDERECO_SITE; ?>">Amigurumis</a></li>
                                    <li><a href="<?php echo ENDERECO_SITE; ?>">mais produto</a></li>
                                    <li><a href="<?php echo ENDERECO_SITE; ?>">produto</a></li>
                                    <li><a href="<?php echo ENDERECO_SITE; ?>">produto</a></li>
                                    <li><a href="<?php echo ENDERECO_SITE; ?>">produto</a></li>
                                    <li><a href="<?php echo ENDERECO_SITE; ?>">produto</a></li>
                                    <li><a href="<?php echo ENDERECO_SITE; ?>">produto</a></li>
                                    <li><a href="<?php echo ENDERECO_SITE; ?>">produto</a></li>
                                    <li><a href="<?php echo ENDERECO_SITE; ?>">produto</a></li>
                                    <li><a href="<?php echo ENDERECO_SITE; ?>">produto</a></li>
                                    <li><a href="<?php echo ENDERECO_SITE; ?>">produto</a></li>
                                    <li><a href="<?php echo ENDERECO_SITE; ?>">produto</a></li>
                                    <li><a href="<?php echo ENDERECO_SITE; ?>">produto</a></li>
                                    <li><a href="<?php echo ENDERECO_SITE; ?>">produto</a></li>
                                </ul>
                            </nav>
                        </li>
                        <li class="h100 centralizar link-produtos">
                            <a href="<?php echo ENDERECO_SITE; ?>#">Materiais</a>
                            <i class="fa-solid fa-chevron-down"></i>
                        </li>
                        <li class="h100 centralizar link-produtos">
                            <a href="<?php echo ENDERECO_SITE; ?>#">Marcas</a>
                            <i class="fa-solid fa-chevron-down"></i>
                        </li>
                        <li class="h100 centralizar link-produtos">
                            <a href="<?php echo ENDERECO_SITE; ?>#">Promoções</a>
                        </li>
                        <li class="h100 centralizar link-produtos">
                            <a href="<?php echo ENDERECO_SITE; ?>sobrenos">Sobre</a>
                        </li>
                    </ul>
                </div><!-- header2 -->
            </div> <!--- header -->
            <div class="w10 h100 botoes-content">
                <nav class="w100 h100 botoes-header">
                    <ul class="w100 h100 menu-desktop">
                        <li><a href="<?php echo ENDERECO_SITE; ?>">
                            <img src="<?php echo ENDERECO_SITE; ?>img/heart.png" alt="coração normal">
                            <img src="<?php echo ENDERECO_SITE; ?>img/heartb.png" alt="coração bold">
                        </a></li>
                        <li><a href="<?php echo ENDERECO_SITE; ?>perfil">
                            <img src="<?php echo ENDERECO_SITE; ?>img/user.png" alt="user normal">
                            <img src="<?php echo ENDERECO_SITE; ?>img/userb.png" alt="user bold">
                        </a></li>
                        <li><a href="<?php echo ENDERECO_SITE; ?>">
                            <img src="<?php echo ENDERECO_SITE; ?>img/cart.png" alt="cart normal">
                            <img src="<?php echo ENDERECO_SITE; ?>img/cartb.png" alt="cart bold">
                        </a></li> <!-- ícone de carrinho -->
                    </ul>
                    <ul class="menu-mobile">
                        <li><i class="fa-solid fa-bars"></i></li> <!-- ícone de botão hamburguer -->
                        <nav class="w100 botoes-mobile">
                            <li><a href="#"><i class="fa-solid fa-heart"></i></a></li> <!-- ícone de favoritos -->
                            <li><a href="#"><i class="fa-solid fa-user"></i></a></li> <!-- ícone de perfil -->
                            <li><a href="#"><i class="fa-solid fa-cart-shopping"></i></a></li> <!-- ícone de carrinho -->
                        </nav>
                    </ul>
                </nav>
            </div>
        </div> <!-- container -->
    </header>

    <main>
        <section class="container-principal">
            <?php
                if(file_exists($url.'.php')){
                    include($url.'.php');
                }else {
                    include('erro.php');
                }
            ?>
        </section><!-- container-principal -->
    </main>

    <section class="w100 informacoes">
        <div class="container">
            <div class="saiba-mais centralizar">
                <span>Saiba mais</span>
                <i class="fa-solid fa-chevron-down"></i> <!-- seta para baixo -->
            </div>
            <div class="w100 centralizar footer-content">
                <div class="footer-item links-footer">
                    <h3>Informações adicionais</h3>
                    <ul>
                        <li><a href="<?php echo ENDERECO_SITE; ?>sobrenos">Sobre nós</a></li>
                        <li><a href="<?php echo ENDERECO_SITE; ?>">Ajuda</a></li>
                        <li><a href="<?php echo ENDERECO_SITE; ?>">Como posso me tornar um vendedor ?</a></li>
                        <li><a href="<?php echo ENDERECO_SITE; ?>">Políticas de venda</a></li>
                        <li><a href="<?php echo ENDERECO_SITE; ?>cadastrocliente">Cadastro de cliente</a></li>
                        <li><a href="<?php echo ENDERECO_SITE; ?>cadastroartesao">Cadastro de artesão</a></li>
                        <li><a href="<?php echo ENDERECO_SITE; ?>cadastroatelie">Cadastro de ateliê</a></li>
                        <li><a href="<?php echo ENDERECO_SITE; ?>login">Fazer login</a></li>
                    </ul>
                    <div class="w100 redes-sociais">
                        <a href="https://www.instagram.com/dacruz_fer/" target="_blank"><!-- colocar o meu instagram dps -->
                            <i class="fa-brands fa-instagram"></i> <!-- instagram -->
                        </a>
                        <a href="https://www.facebook.com/profile.php?id=100008166731213" target="_blank">
                        <i class="fa-brands fa-facebook"></i> <!-- facebook -->
                        </a>
                        <a href="https://br.linkedin.com/" target="_blank">
                            <i class="fa-brands fa-linkedin"></i> <!-- linkedin -->
                        </a>
                        <a href="https://www.tiktok.com/pt-BR/" target="_blank">
                            <i class="fa-brands fa-tiktok"></i> <!-- tiktok -->
                        </a>
                    </div>
                </div>
                <div class="footer-item fale-conosco">
                    <h3 class="w100">Fale conosco!</h3>
                    <form action="faleconosco.php" method="post" class="w100 centralizar">
                        <input class="w100" type="email" name="email" id="email" placeholder="Digite seu email...">
                        <textarea class="w100" name="mensagem" id="mensagem" placeholder="Deixe aqui a sua mensagem para nós..."></textarea>
                        <input type="submit" value="Enviar">
                    </form>
                </div>
            </div><!-- footer-content -->
        </div>
    </section>

    <footer class="w100 centralizar">
        <h1>Nona artesanatos</h1>
    </footer>

    <!-- script do jquery -->
    <script src="<?php echo ENDERECO_SITE; ?>js/jquery.js"></script>

    <!-- scripts do bootstrap -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <!-- script do slide de produtos -->
    <script src="<?php echo ENDERECO_SITE; ?>js/sliderprod.js"></script>
    <script src="<?php echo ENDERECO_SITE; ?>js/lightslider.js"></script>

    <!-- script carregar páginas dinâmicas -->
    <script src="<?php echo ENDERECO_SITE; ?>js/carregadinamico.js"></script>

    <!-- script do menu dropdown -->
    <script src="<?php echo ENDERECO_SITE; ?>js/dropdown_menu.js"></script>
</body>
</html>