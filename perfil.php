<div class="container container-perfil">
    <div class="w100 titulo">
        <h1 class="nome-conta">Matheus da Cruz Ferrucio</h1>
        <div class="centralizar editar">
            <a href="<?php echo ENDERECO_SITE; ?>">
                <i class="fa-solid fa-pen-to-square"></i>
                <span>Editar informações da conta</span>
            </a>
        </div>
    </div>
    <div class="w100 centralizar-horizontal info-conta">
        <div class="w100 email-conta">
            <label for="emailconta">Email: </label>
            <input class="w100" type="text" name="emailconta" id="emailconta" value="algumnome@gmail.com" disabled="">
        </div>
        <div class="w100 senha-conta">
            <label for="senhaconta">Senha:</label>
            <input class="w100" type="password" name="senhaconta" id="senhaconta" value="senha123" disabled="">
        </div>
        <div class="w100 centralizar dados-conta">
            <div class="w33 data-nasc">
                <label for="datanascimento">Data de nascimento</label>
                <input class="w100" type="text" name="datanascimento" id="datanascimento" value="19/07/2004" disabled="">
            </div>
            <div class="w33 cpf-conta">
                <label for="cpfconta">CPF: </label>
                <input class="w100" type="text" name="cpfconta" id="cpfconta" value="222 222 222 22" disabled="">
            </div>
            <div class="w33 telefone-conta">
                <label for="telconta">Telefone:</label>
                <input class="w100" type="text" name="telconta" id="telconta" value="(18) 99999-9999" disabled="">
            </div>
        </div><!-- dados-conta -->
        <div class="w100">
            <label for="sexoconta">Sexo: </label>
            <input class="w100" type="text" name="sexoconta" id="sexoconta" value="Masculino" disabled="">
        </div>
    </div><!-- info-conta -->

    <div class="w100 info-endereco">
        <h1 class="titulo-endereco">Informações de endereço</h1>
        <div class="centralizar editar">
            <a href="<?php echo ENDERECO_SITE; ?>">
                <i class="fa-solid fa-pen-to-square"></i>
                <span>Editar informações de endereço</span>
            </a>
        </div>
        <div class="w100 centralizar endereco">
            <div class="w33">
                <label for="cepconta">CEP</label>
                <input class="w100" type="text" name="cepconta" id="cepconta" value="16052522" disabled="">
            </div>
            <div class="w33">
                <label for="cidadeconta">Cidade</label>
                <input class="w100" type="text" name="cidadeconta" id="cidadeconta" value="Araçatuba" disabled="">
            </div>
            <div class="w33">
                <label for="estadoconta">Estado</label>
                <input class="w100" type="text" name="estadoconta" id="estadoconta" value="SP" disabled="">
            </div>
        </div><!-- endereco -->
        <div class="w100 centralizar rua-num">
            <div class="w80 rua">
                <label for="rua">Rua: </label>
                <input class="w100" type="text" name="rua" id="rua" value="Turosbango turosbago" disabled="">
            </div>
            <div class="w20 numero">
                <label for="numerocasa">Número: </label>
                <input class="w100"  type="text" name="numerocasa" id="numerocasa" value="2022" disabled="">
            </div>
        </div><!-- rua-num -->
    </div>
</div>