<div class="container produto-content">
    <div class="h100 descricao-produto">
        <h3 class="w100">Nome do produto e mais alguns textos só pra testa espaçamento</h3>
        <p class="w100">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ex unde, atque ducimus minus tempore neque, inventore iusto cupiditate quaerat, aut itaque veniam culpa. Quod, eligendi commodi? Officiis blanditiis labore nostrum! lorem só mais um pouco de texto para testar espaçamento!</p>
        <div class="w100 nome-vendedor">
            <p>Produto vendido e entregue por: <span>Matheus da Cruz Ferrucio</span></p>
        </div>
        <div class="w100 nome-material">
            <span>Material:</span>
            <span>Madeira, MDF, Lã</span>
        </div>
        <div class="w100 cores-produto">
            <div class="cor-produto-item">
                <a cor="vermelho" href="<?php echo ENDERECO_SITE; ?>cor">
                    <div class=""></div>
                </a>
            </div>
            <div class="cor-produto-item">
                <a cor="azul" href="<?php echo ENDERECO_SITE; ?>cor">
                    <div class=""></div>
                </a>
            </div>
            <div class="cor-produto-item">
                <a cor="verde" href="<?php echo ENDERECO_SITE; ?>cor">
                    <div class=""></div>
                </a>
            </div>
            <div class="cor-produto-item">
                <a cor="amarelo" href="<?php echo ENDERECO_SITE; ?>cor">
                    <div class=""></div>
                </a>
            </div>
        </div>
    </div><!-- descricao-produto -->
    <div class="w100 foto-produto">
        <div class="img-item">
            <img class="ajustar-imagem" src="<?php echo ENDERECO_SITE; ?>img/foto1.jpg" alt="">
        </div>
        <div class="img-item">
            <img class="ajustar-imagem" src="<?php echo ENDERECO_SITE; ?>img/foto2.jpg" alt="">
        </div>
        <div class="img-item">
            <img class="ajustar-imagem" src="<?php echo ENDERECO_SITE; ?>img/foto3.jpg" alt="">
        </div>
        <div class="img-item">
            <img class="ajustar-imagem" src="<?php echo ENDERECO_SITE; ?>img/foto4.jpg" alt="">
        </div>
        <div class="img-item">
            <img class="ajustar-imagem" src="<?php echo ENDERECO_SITE; ?>img/foto5.jpg" alt="">
        </div>
        <div class="img-item">
            <img class="ajustar-imagem" src="<?php echo ENDERECO_SITE; ?>img/foto6.jpg" alt="">
        </div>
    </div><!-- foto-produto -->
    <div class="informacoes-produto">
        <div class="w100 centralizar avaliacao-produto">
            <div class="w50 estrelas">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
            </div>
            <div class="w50 num-avaliacoes">
                <span>1000 Avaliações</span>
            </div>
        </div>
        <div class="w100 preco-produto">
            <div class="w100 preco-antigo">
                <span>De: R$<span>200,00</span></span>
            </div>
            <div class="w100 preco-novo">
                <span>Por: R$<span>149,99</span></s>
            </div>
        </div><!-- preco-produto -->
        <div class="w100 tamanhos">
            <p>Tamanhos</p>
            <div class="w100 centralizar tamanhos-item">
                <!-- <input class="w20" type="text" name="tamanho" id="tamanho" value="P"> -->
                <select class="w20" name="tamanho" id="tamanho">
                    <option value="pp">PP</option>
                    <option value="p">P</option>
                    <option value="m">M</option>
                    <option value="g">G</option>
                    <option value="gg">GG</option>
                </select>
                <select class="w50" name="medidas" id="medidas">
                    <option value="1m x 1,50m">1m x 1,50m</option>
                    <option value="1m x 1,70m">1m x 1,70m</option>
                    <option value="1m x 1,90m">1m x 1,90m</option>
                </select>
            </div>
        </div><!-- tamanhos -->
        <div class="w100 frete">
            <p>Calcular frete e prazo</p>
            <div class="w100 cep-frete">
                <input class="w100" type="number" name="cepfrete" id="cepfrete" placeholder="Digite o seu cep...">
            </div>
            <div class="w100 centralizar prazo-medio">
                <div class="w100 centralizar prazo-frete">
                    <p>Prazo até:</p>
                    <p>30/10/2022</p>
                </div>
                <div class="w100 centralizar valor-frete">
                    <p>Valor do frete:</p>
                    <p>R$ 5,00</p>
                </div>
            </div><!-- prazo-medio -->
        </div><!-- frete -->
        <div class="w100 botoes-comprar">
            <div class="w100 centralizar btn-comprar">
                <a class="w80" href="<?php echo ENDERECO_SITE; ?>comprar">Comprar agora</a>
            </div>
            <div class="w100 centralizar btn-add-carrinho">
                <a class="w80" href="<?php echo ENDERECO_SITE; ?>addcarrinho">Adicionar ao carrinho</a>
            </div>
        </div><!-- botoes-comprar -->
    </div><!-- informacoes-produto -->
</div><!-- container -->

<div class="container informacoes-vendedor">
    <div class="foto-vendedor">
        <div class="foto">
            <img class="ajustar-imagem" src="<?php echo ENDERECO_SITE; ?>img/foto1.jpg" alt="">
        </div>
    </div>
    <div class="w30 centralizar-horizontal nome-vendedor">
        <h3>Nome do vendedor</h3>
        <div class="w100 centralizar avaliacao-vendedor">
            <span>Avaliações:</span>
            <div class="estrelas">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
            </div>
        </div>
        <a class="w80" href="<?php echo ENDERECO_SITE; ?>vendedor">Ver mais sobre o vendedor</a>
    </div><!-- nome-vendedor -->
    <div class="w50 dados-vendedor">
        <p>Avaliações: <span>5 mil</span></p>
        <p>Loja desde: <span>01/01/2021</span></p>
        <p>Produtos: <span>100 produtos</span></p>
        <p>Vendas no último mês: <span>863 vendas</span></p>
    </div>
</div>

<div class="container ficha-tecnica">
    <h1>Ficha técnica</h1>
    <table>
        <tr class="cor-diferente">
            <th>Material</th>
            <td>Lã ou qualquer outro que seja o material usado no produto</td>
        </tr>
        <tr>
            <th>Tamanho/Medidas</th>
            <td>1m de largura por 1,50m de comprimento</td>
        </tr>
        <tr class="cor-diferente">
            <th>Código do produto</th>
            <td>34629761</td>
        </tr>
        <tr>
            <th>Fabricante</th>
            <td>Nome do artesão ou da empresa que produziu o produto</td>
        </tr>
        <tr class="cor-diferente">
            <th>Cor</th>
            <td>Verde e amarelo porque aqui é Bolsonaro</td>
        </tr>
        <tr>
            <th>Material</th>
            <td>Lã ou qualquer outro que seja o material usado no produto</td>
        </tr>
        <tr class="cor-diferente">
            <th>Tamanho da embalagem</th>
            <td>2m de altura por x 1m de comprimento</td>
        </tr>
        <tr>
            <th>Peso do produto</th>
            <td>O produto pesa 70kg de pura gostosura</td>
        </tr>
    </table>
</div>

<div class="container">
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

<div class="container">
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

<section class="comentarios">
    <div class="container comentarios-content">
        <div class="w100 centralizar inserir-comentario">
            <div class="foto-usuario">
                <img class="ajustar-imagem" src="<?php echo ENDERECO_SITE; ?>img/foto2.jpg">
            </div>
            <form class="w100 centralizar" action="comentarios" method="post">
                <input class="w80" type="text" name="comentario" id="cometario" placeholder="Dê sua opinião sobre esse produto...">
                <input class="w20" type="submit" value="Comentar">
            </form>
        </div>
        <div class="w100 comentarios-clientes">
            <div>
                <h1>Veja os comentários dos outros clientes</h1>
            </div>
            <div class="w100 centralizar">
                <div class="foto-usuario">
                    <img class="ajustar-imagem" src="<?php echo ENDERECO_SITE; ?>img/foto2.jpg">
                </div>
                <input class="w100" type="text" name="comentario" id="cometario" value="Eu gostei muito desse produto, chegou bem rápido e já estou usando!">
            </div>
            <div class="w100 centralizar">
                <div class="foto-usuario">
                    <img class="ajustar-imagem" src="<?php echo ENDERECO_SITE; ?>img/foto2.jpg">
                </div>
                <input class="w100" type="text" name="comentario" id="cometario" value="Eu gostei muito desse produto, chegou bem rápido e já estou usando!">
            </div>
            <div class="w100 centralizar">
                <div class="foto-usuario">
                    <img class="ajustar-imagem" src="<?php echo ENDERECO_SITE; ?>img/foto2.jpg">
                </div>
                <input class="w100" type="text" name="comentario" id="cometario" value="Eu gostei muito desse produto, chegou bem rápido e já estou usando!">
            </div>
            <div class="w100 centralizar">
                <div class="foto-usuario">
                    <img class="ajustar-imagem" src="<?php echo ENDERECO_SITE; ?>img/foto2.jpg">
                </div>
                <input class="w100" type="text" name="comentario" id="cometario" value="Eu gostei muito desse produto, chegou bem rápido e já estou usando!">
            </div>
            <div class="w100 centralizar">
                <div class="foto-usuario">
                    <img class="ajustar-imagem" src="<?php echo ENDERECO_SITE; ?>img/foto2.jpg">
                </div>
                <input class="w100" type="text" name="comentario" id="cometario" value="Eu gostei muito desse produto, chegou bem rápido e já estou usando!">
            </div>
        </div>
    </div><!-- container -->
</section><!-- comentarios -->