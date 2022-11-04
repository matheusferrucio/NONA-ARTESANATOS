<div class="container form-login">
    <h1>Login</h1>
    <form class="w100 centralizar" action="login.php" method="post">
        <input class="w100" type="email" name="emaillogin" id="emaillogin" placeholder="Digite o seu e-mail de login...">
        <input class="w100" type="password" name="senhalogin" id="senhalogin" placeholder="Digite a sua senha...">
        <div class="w100 esqueci-senha">
            <a href="<?php echo ENDERECO_SITE; ?>esquecisenha">Esqueceu sua senha ?</a>
        </div>
        <input class="w30" type="submit" value="Entrar">
    </form>
</div>