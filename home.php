<!-- -------------------- CARROSEL DE IMAGENS -------------------- -->
<div class="container">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <!-- indicadores de qual slide estamos, aquelas listras em baixo -->
        <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <!-- carousel-inner é o container que contém as imagens do slider -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="./img/0.jpg" alt="Primeiro Slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="./img/1.jpg" alt="Segundo Slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="./img/2.jpg" alt="Terceiro Slide">
            </div>
        </div>
        <!-- botão de voltar slide -->
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Anterior</span>
        </a>
        <!-- botão de passar slide -->
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Próximo</span>
        </a>
    </div>
</div>

<!-- -------------------- IMAGENS PROMOCIONAIS -------------------- -->
<section class="promo-img">
    <div class="container imagens-promocionais">
        <div class="img-item">
            <img src="<?php echo ENDERECO_SITE; ?>img/girafa.jpg" alt="">
            <div class="etiqueta">
                <a href="<?php echo ENDERECO_SITE; ?>maisprodutos">Amigurumi</a>
            </div>
            <div class="titulo-img">
                <h1>Conheça nosso amigurumis clicando no botão abaixo</h1>
                <a href="<?php echo ENDERECO_SITE; ?>maisprodutos">Saiba mais</a>
            </div>
        </div>
        <div class="img-item">
            <img src="<?php echo ENDERECO_SITE; ?>img/mdf.jpg" alt="">
            <div class="etiqueta">
                <a href="<?php echo ENDERECO_SITE; ?>maisprodutos">MDF</a>
            </div>
            <div class="titulo-img">
                <h1>Veja as nossas peças em MDF clicando no botão abaixo</h1>
                <a href="<?php echo ENDERECO_SITE; ?>maisprodutos">Saiba mais</a>
            </div>
        </div>
        <div class="img-item">
            <img src="<?php echo ENDERECO_SITE; ?>img/pinceis.jpg" alt="">
            <div class="etiqueta">
                <a href="<?php echo ENDERECO_SITE; ?>maisprodutos">Pinceis</a>
            </div>
            <div class="titulo-img">
                <h1>Procure o melhor pincel para você clicando no botão abaixo</h1>
                <a href="<?php echo ENDERECO_SITE; ?>maisprodutos">Saiba mais</a>
            </div>
        </div>
    </div><!-- container -->
</section>


<!-- -------------------- PRIMEIRO SLIDER DE PRODUTOS -------------------- -->
<div class="container slider-prod">
    <h1>Promoções do dia</h1>
    <section class="slider">
        <ul id="autoWidth" class="cs-hidden autoWidth">
            <li class="item-a">
                <a href="<?php echo ENDERECO_SITE; ?>produto">
                    <div class="box">
                        <div class="slide-img">
                            <img src="<?php echo ENDERECO_SITE; ?>img/cestopalha.jpg" alt="1">
                        </div><!-- slide-img -->
                        <div class="detail-box">
                            <p>Cesto de palha para guradar ou levar coisas e mais algumas palavras só pra preencher espaço</p>
                            <div class="w100 avaliacao">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                            <div class="w100 preco">
                                <h5>De: R$<span>200,00</span></h5>
                                <h2>Por: R$<span>149,99</span></h2>
                            </div>
                        </div><!-- detail-box -->
                    </div>
                </a>
            </li>
            <?php
                for($i = 0; $i < 6; $i++){
                    echo "<li class='item-a'>
                    <a href='produto'>
                        <div class='box'>
                            <div class='slide-img'>
                                <img src='img/cestopalha.jpg' alt='1'>
                            </div><!-- slide-img -->
                            <div class='detail-box'>
                                <p>Cesto de palha para guradar ou levar coisas e mais algumas palavras só pra preencher espaço</p>
                                <div class='w100 avaliacao'>
                                    <i class='fa-solid fa-star'></i>
                                    <i class='fa-solid fa-star'></i>
                                    <i class='fa-solid fa-star'></i>
                                    <i class='fa-solid fa-star'></i>
                                    <i class='fa-solid fa-star'></i>
                                </div>
                                <div class='w100 preco'>
                                    <h5>De: R$<span>200,00</span></h5>
                                    <h2>Por: R$<span>149,99</span></h2>
                                </div>
                            </div><!-- detail-box -->
                        </a>
                    </div>
                </li>";
                }
            ?>
        </ul>
    </section><!-- slider -->
    
    <!-- -------------------- SEGUNDO SLIDER DE PRODUTOS -------------------- -->
    <h1>Produtos mais vendidos</h1>
    <section class="slider">
        <ul id="autoWidth" class="cs-hidden autoWidth">
            <li class="item-a">
                <a href="<?php echo ENDERECO_SITE; ?>produto">
                    <div class="box">
                        <div class="slide-img">
                            <img src="<?php echo ENDERECO_SITE; ?>img/cestopalha.jpg" alt="1">
                        </div><!-- slide-img -->
                        <div class="detail-box">
                            <p>Cesto de palha para guradar ou levar coisas e mais algumas palavras só pra preencher espaço</p>
                            <div class="w100 avaliacao">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                            <div class="w100 preco">
                                <h5>De: R$<span>200,00</span></h5>
                                <h2>Por: R$<span>149,99</span></h2>
                            </div>
                        </div><!-- detail-box -->
                    </a>
                </div>
            </li>
            <?php
                for($i = 0; $i < 6; $i++){
                    echo "<li class='item-a'>
                    <a href='produto'>
                        <div class='box'>
                            <div class='slide-img'>
                                <img src='img/cestopalha.jpg' alt='1'>
                            </div><!-- slide-img -->
                            <div class='detail-box'>
                                <p>Cesto de palha para guradar ou levar coisas e mais algumas palavras só pra preencher espaço</p>
                                <div class='w100 avaliacao'>
                                    <i class='fa-solid fa-star'></i>
                                    <i class='fa-solid fa-star'></i>
                                    <i class='fa-solid fa-star'></i>
                                    <i class='fa-solid fa-star'></i>
                                    <i class='fa-solid fa-star'></i>
                                </div>
                                <div class='w100 preco'>
                                    <h5>De: R$<span>200,00</span></h5>
                                    <h2>Por: R$<span>149,99</span></h2>
                                </div>
                            </div><!-- detail-box -->
                        </a>
                    </div>
                </li>";
                }
            ?>
        </ul>
    </section><!-- slider -->

    <h1>Pra chegar rapidinho na sua casa</h1>
    <section class="slider">
        <ul id="autoWidth" class="cs-hidden autoWidth">
            <li class="item-a">
                <a href="<?php echo ENDERECO_SITE; ?>produto">
                    <div class="box">
                        <div class="slide-img">
                            <img src="<?php echo ENDERECO_SITE; ?>img/cestopalha.jpg" alt="1">
                        </div><!-- slide-img -->
                        <div class="detail-box">
                            <p>Cesto de palha para guradar ou levar coisas e mais algumas palavras só pra preencher espaço</p>
                            <div class="w100 avaliacao">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                            <div class="w100 preco">
                                <h5>De: R$<span>200,00</span></h5>
                                <h2>Por: R$<span>149,99</span></h2>
                            </div>
                        </div><!-- detail-box -->
                    </a>
                </div>
            </li>
            <?php
                for($i = 0; $i < 6; $i++){
                    echo "<li class='item-a'>
                    <a href='produto'>
                        <div class='box'>
                            <div class='slide-img'>
                                <img src='img/cestopalha.jpg' alt='1'>
                            </div><!-- slide-img -->
                            <div class='detail-box'>
                                <p>Cesto de palha para guradar ou levar coisas e mais algumas palavras só pra preencher espaço</p>
                                <div class='w100 avaliacao'>
                                    <i class='fa-solid fa-star'></i>
                                    <i class='fa-solid fa-star'></i>
                                    <i class='fa-solid fa-star'></i>
                                    <i class='fa-solid fa-star'></i>
                                    <i class='fa-solid fa-star'></i>
                                </div>
                                <div class='w100 preco'>
                                    <h5>De: R$<span>200,00</span></h5>
                                    <h2>Por: R$<span>149,99</span></h2>
                                </div>
                            </div><!-- detail-box -->
                        </a>
                    </div>
                </li>";
                }
            ?>
        </ul>
    </section><!-- slider -->
</div><!-- container -->

<section class="w100 imagens-propaganda">
    <div class="container propaganda-content">
        <div class="propaganda-item item1">
            <img class="ajustar-imagem" src="<?php echo ENDERECO_SITE; ?>img/fundo-artesanato1.jpg" alt="">
            <div class="w100 h100 centralizar overlay-propaganda">
                <h2>Temos os melhores produtos para você</h2>
                <a href="<?php echo ENDERECO_SITE; ?>maisprodutos">Veja mais</a>
            </div>
        </div>
        <div class="propaganda-item item2">
            <img class="ajustar-imagem" src="<?php echo ENDERECO_SITE; ?>img/fundo-artesanato3.jpg" alt="">
            <div class="w100 h100 centralizar overlay-propaganda">
                <h2>Temos os melhores produtos para você</h2>
                <a href="<?php echo ENDERECO_SITE; ?>maisprodutos">Veja mais</a>
            </div>
        </div>
        <div class="propaganda-item item3">
            <img class="ajustar-imagem" src="<?php echo ENDERECO_SITE; ?>img/fundo-artesanato2.jpg" alt="">
            <div class="w100 h100 centralizar overlay-propaganda">
                <h2>Temos os melhores produtos para você</h2>
                <a href="<?php echo ENDERECO_SITE; ?>maisprodutos">Veja mais</a>
            </div>
        </div>
    </div>
</section>

<div class="container">
    <h1>Os mais pedidos</h1>
    <section class="slider">
        <ul id="autoWidth" class="cs-hidden autoWidth">
            <li class="item-a">
                <a href="<?php echo ENDERECO_SITE; ?>produto">
                    <div class="box">
                        <div class="slide-img">
                            <img src="<?php echo ENDERECO_SITE; ?>img/cestopalha.jpg" alt="1">
                        </div><!-- slide-img -->
                        <div class="detail-box">
                            <p>Cesto de palha para guradar ou levar coisas e mais algumas palavras só pra preencher espaço</p>
                            <div class="w100 avaliacao">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                            <div class="w100 preco">
                                <h5>De: R$<span>200,00</span></h5>
                                <h2>Por: R$<span>149,99</span></h2>
                            </div>
                        </div><!-- detail-box -->
                    </a>
                </div>
            </li>
            <?php
                for($i = 0; $i < 6; $i++){
                    echo "<li class='item-a'>
                    <a href='produto'>
                        <div class='box'>
                            <div class='slide-img'>
                                <img src='img/cestopalha.jpg' alt='1'>
                            </div><!-- slide-img -->
                            <div class='detail-box'>
                                <p>Cesto de palha para guradar ou levar coisas e mais algumas palavras só pra preencher espaço</p>
                                <div class='w100 avaliacao'>
                                    <i class='fa-solid fa-star'></i>
                                    <i class='fa-solid fa-star'></i>
                                    <i class='fa-solid fa-star'></i>
                                    <i class='fa-solid fa-star'></i>
                                    <i class='fa-solid fa-star'></i>
                                </div>
                                <div class='w100 preco'>
                                    <h5>De: R$<span>200,00</span></h5>
                                    <h2>Por: R$<span>149,99</span></h2>
                                </div>
                            </div><!-- detail-box -->
                        </a>
                    </div>
                </li>";
                }
            ?>
        </ul>
    </section><!-- slider -->

    <h1>Você pode gostar desse também</h1>
    <section class="slider">
        <ul id="autoWidth" class="cs-hidden autoWidth">
            <li class="item-a">
                <a href="<?php echo ENDERECO_SITE; ?>produto">
                    <div class="box">
                        <div class="slide-img">
                            <img src="<?php echo ENDERECO_SITE; ?>img/cestopalha.jpg" alt="1">
                        </div><!-- slide-img -->
                        <div class="detail-box">
                            <p>Cesto de palha para guradar ou levar coisas e mais algumas palavras só pra preencher espaço</p>
                            <div class="w100 avaliacao">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                            <div class="w100 preco">
                                <h5>De: R$<span>200,00</span></h5>
                                <h2>Por: R$<span>149,99</span></h2>
                            </div>
                        </div><!-- detail-box -->
                    </a>
                </div>
            </li>
            <?php
                for($i = 0; $i < 6; $i++){
                    echo "<li class='item-a'>
                    <a href='produto'>
                        <div class='box'>
                            <div class='slide-img'>
                                <img src='img/cestopalha.jpg' alt='1'>
                            </div><!-- slide-img -->
                            <div class='detail-box'>
                                <p>Cesto de palha para guradar ou levar coisas e mais algumas palavras só pra preencher espaço</p>
                                <div class='w100 avaliacao'>
                                    <i class='fa-solid fa-star'></i>
                                    <i class='fa-solid fa-star'></i>
                                    <i class='fa-solid fa-star'></i>
                                    <i class='fa-solid fa-star'></i>
                                    <i class='fa-solid fa-star'></i>
                                </div>
                                <div class='w100 preco'>
                                    <h5>De: R$<span>200,00</span></h5>
                                    <h2>Por: R$<span>149,99</span></h2>
                                </div>
                            </div><!-- detail-box -->
                        </a>
                    </div>
                </li>";
                }
            ?>
        </ul>
    </section><!-- slider -->
</div>

<section class="marcas">
    <div class="container">
        <div class="marca-item centralizar">
            <img class="ajustar-imagem kalunga" src="<?php echo ENDERECO_SITE; ?>img/logo_kalunga.png" alt="">
        </div>
        <div class="marca-item centralizar">
            <img class="ajustar-imagem" src="<?php echo ENDERECO_SITE; ?>img/logo_lepok.png" alt="">
        </div>
        <div class="marca-item centralizar">
            <img class="ajustar-imagem" src="<?php echo ENDERECO_SITE; ?>img/logo_lukscolor.png" alt="">
        </div>
        <div class="marca-item centralizar">
            <img class="ajustar-imagem" src="<?php echo ENDERECO_SITE; ?>img/logo_bic.png" alt="">
        </div>
        <div class="marca-item centralizar">
            <img class="ajustar-imagem" src="<?php echo ENDERECO_SITE; ?>img/logo_tilibra.png" alt="">
        </div>
    </div> <!-- container -->
</section>

