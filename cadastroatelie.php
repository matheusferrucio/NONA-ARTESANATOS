<div class="container cadastro-content">
    <h1>Cadastro de Ateliê</h1>
    <form action="cadastro.php" method="post">
        <div class="w100 cnpj">
            <label for="cnpj">CNPJ</label>
            <input class="w100" type="number" name="cnpj" id="cnpj" placeholder="Digite o CNPJ da sua empresa...">
        </div><!-- cnpj -->
        <div class="w100 email">
            <label for="emailatelie">E-mail</label>
            <input class="w100" type="email" name="emailatelie" id="emailatelie" placeholder="Digite o e-mail da sua empresa...">
        </div><!-- email -->
        <div class="w100 centralizar nomes">
            <div class="w50 nome-fantasia">
                <label for="nomefantasia">Nome fantasia</label>
                <input class="w100" class="w100" type="text" name="nomefantasia" id="nomefantasia" placeholder="Digite o nome fantasia...">
            </div>
            <div class="w50 nome">
                <label for="nomeatelie">Nome</label>
                <input class="w100" type="text" name="nomeatelie" id="nomeatelie" placeholder="Digite o nome da sua empresa...">
            </div>
        </div><!-- nomes -->
        <div class="w100 razao-social">
            <label for="razaosocial">Razão social</label>
            <input class="w100" type="text" name="razaosocial" id="razaosocial" placeholder="Digite a razão social...">
        </div><!-- razao-social -->
        <div class="w100 centralizar codigo-descri-cnae">
            <div class="w30 codigo-cnae">
                <label for="codigcnae">Código CNAE</label>
                <input class="w100" type="number" name="codigocnae" id="codigocnae" placeholder="Digite o código CNAE...">
            </div>
            <div class="w70 desc-cnae">
                <label for="desccnae">Descrição CNAE</label>
                <input class="w100" type="text" name="desccnae" id="desccnae" placeholder="Digite a descrição CNAE...">
            </div>
        </div><!-- codigo-descri-cnae -->
        <div class="w100 centralizar ddd-telefone">
            <div class="w20 ddd">
                <label for="dddatelie">DDD</label>
                <input class="w100" type="number" name="dddatelie" id="dddatelie" placeholder="DDD...">                    
            </div>
            <div class="w80 telefone">
                <label for="telefoneatelie">Telefone</label>
                <input class="w100" type="number" name="telefoneatelie" id="telefoneatelie" placeholder="Digite o telefone da empresa...">
            </div>
        </div><!--- ddd-telefone -->
        <div class="w100 centralizar cep-pais-uf">
            <div class="w40 cep">
                <label for="cepatelie">CEP</label>
                <input class="w100" type="number" name="cepatelie" id="cepatelie" placeholder="CEP do estabelecimento...">
            </div>
            <div class="w40 pais">
                <label for="pais">País</label>
                <input class="w100" type="text" name="pais" id="pais" placeholder="País de origem...">
            </div>
            <div class="w20 uf">
                <label for="uf">UF</label>
                <input class="w100" type="text" name="uf" id="uf" placeholder="UF...">
            </div>
        </div><!-- cep-pais-uf -->
        <div class="w100 centralizar cidade-rua">
            <div class="w50 cidade">
                <label for="cidade">Cidade</label>
                <input class="w100" type="text" name="cidade" id="cidade" placeholder="Cidade da empresa...">
            </div>
            <div class="w50 rua">
                <label for="rua">Rua</label>
                <input class="w100" type="text" name="rua" id="rua" placeholder="Rua do estabelecimento...">
            </div>
        </div><!-- cidade-rua -->
        <div class="w100 centralizar bairro-numero">
            <div class="w70 bairro">
                <label for="bairro">Bairro</label>
                <input class="w100" type="text" name="bairro" id="bairro" placeholder="Bairro da empresa">
            </div>
            <div class="w30 numero-estabelecimento">
                <label for="numero">Número</label>
                <input class="w100" type="number" name="numero" id="numero" placeholder="0000">
            </div>
        </div>
        <div class="w100 centralizar aviso-importante">
            <img src="<?php echo ENDERECO_SITE; ?>img/caution.png" alt="imagem de atenção">
            <span>ATENÇÃO! É importante preencher todos os campos.</span>
        </div>
        <div class="w100 centralizar botao-cadastrar">
            <input type="submit" value="Cadastrar-se" class="w100">
        </div>
    </form>
</div>