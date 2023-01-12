<?php
if (!isset($_SESSION)) {
    session_start();
}
?>

<div class="form-popup" id="form-login">
    <form action="form-login.php" class="form-container" method="post">
        <fieldset>
            <button type="button" class="btn-fechar-form" onclick="closeFormLogin()"><img id="ico-fechar" src="../assets/icons/fechar-ico.png" alt=""></button>

            <h1 class="h1-forms">Login</h1>

            <!-- <label class="label-alinha" for="usuario">Login:</label>
            <input type="text" name="login" required> -->

            <label class="label-alinha" for="usuario">Email:</label>
            <input type="text" name="email" required>

            <label class="label-alinha" for="senha">Senha:</label>
            <input type="password" name="senha" required>

            <button type="submit" name="logar" class="btn-logar" id="btn-login">Logar</button>

            <label style="font-family:'Istok web'">ou&nbsp</label>

            <button type="submit" class="btn-cadastrar" id="btn-cad-form" onclick="openFormSignUp()">Cadastre-se</button>

            <button type="submit" class="btn-esqueceu-senha" onclick="openFormForgotPsw()">Esqueceu sua senha?</button>
        </fieldset>
    </form>
</div>

<?php
require_once "../includes/dados-conexao.inc.php";
require_once "../includes/conectar.inc.php";
require_once "../includes/criar-banco.inc.php";
require_once "../includes/abrir-banco.inc.php";
require_once "../includes/definir-utf8.inc.php";
require_once "../includes/criar-tabela-usuarios.inc.php";

if (isset($_POST['logar'])) {
    require_once "../includes/logar.inc.php";
}
require_once "../includes/desconectar.inc.php";
?>