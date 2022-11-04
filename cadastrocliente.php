<div class="container cadastro-content">
    <h1>Cadastro de Cliente</h1>
    <form action="cadastro.php" method="post">
        <div class="w100 nome-cliente">
            <label for="nome">Nome completo</label>
            <input type="text" name="nome" id="nome" class="w100" placeholder="Digite seu nome completo..." require>
        </div><!-- nome-cliente -->
        <div class="w100 centralizar data-cpf">
            <div class="w50 data-nasc">
                <label for="datanasc">Data de nascimento</label>
                <input type="date" name="datanasc" id="datanasc" class="w100" require>
            </div><!-- data-nasc -->
            <div class="w50 cpf">
                <label for="cpf">CPF</label>
                <input type="number" name="cpf" id="cpf" class="w100" placeholder="Digite seu CPF..." require>
            </div>
        </div>
        <div class="w100 genero">
            <h1>Gênero</h1>
            <div class="w100 centralizar genero-items">
                <div class="w50 centralizar genero-item">
                    <input type="radio" name="sexo" id="masculino">
                    <label for="masculino">Masculino</label>
                </div>
                <div class="w50 centralizar genero-item">
                    <input type="radio" name="sexo" id="feminino">
                    <label for="feminino">Feminino</label>
                </div>
            </div><!-- inputs genero -->
        </div><!-- genero -->
        <div class="w100 centralizar ddd-telefone">
            <div class="w20 ddd">
                <label for="ddd">DDD</label>
                <input class="w100" type="number" name="ddd" id="ddd" placeholder="DDD">
            </div>
            <div class="w80 telefone">
                <label for="telefone">Telefone</label>
                <input class="w100" type="tel" name="telefone" id="telefone" placeholder="Digite o seu telefone...">
            </div>
        </div>
        <div class="w100 email">
            <label for="email">E-mail</label>
            <input type="email" name="email" id="email" class="w100" placeholder="Digite o seu melhor e-mail..." require>
        </div><!-- email -->
        <div class="w100 senha">
            <label for="senha">Senha</label>
            <input type="password" name="senha" id="senha" class="w100" placeholder="Lembre-se de anotar a senha criada" require>
        </div><!-- senha -->
        <div class="w100 centralizar aviso-importante">
            <img src="<?php echo ENDERECO_SITE; ?>img/caution.png" alt="imagem de atenção">
            <span>ATENÇÃO! É importante preencher todos os campos.</span>
        </div>
        <div class="w100 centralizar botao-cadastrar">
            <input type="submit" value="Cadastrar-se" class="w100">
        </div>
    </form>
</div>