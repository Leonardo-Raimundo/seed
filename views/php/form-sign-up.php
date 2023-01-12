<?php
session_start();
?>

<div class="form-popup" id="form-sign-up">
    <form action="form-sign-up.php" class="form-container" method="post">
        <fieldset>
            <button type="button" class="btn-fechar-form" onclick="closeFormSignUp()"><img id="ico-fechar" src="../assets/icons/fechar-ico.png" alt=""></button>

            <h1 class="h1-forms">Cadastro</h1>
            <!-- <p>comece a plantar suas sementes hoje.</p> -->

            <label class="label-alinha" for="username">Nome:</label>
            <input type="text" placeholder="Insira seu nome" name="nome" required>

            <label class="label-alinha" for="email">Email:</label>
            <input type="email" placeholder="Insira seu melhor e-mail" name="email" required>

            <label class="label-alinha" for="user-psw">Senha:</label>
            <input type="password" placeholder="Insira uma senha forte" name="senha" required>

            <!-- <label class="label-alinha" for="psw-confirm">Confirme a senha:</label>
            <input type="password" placeholder="Confirme sua senha" name="senhaConfirma" required> -->

            <div class="div-cad-ou-log">
                <button type="submit" name="cadastrar" class="btn-cadastrar">Cadastrar</button>
                <label style="font-family:'Istok web'">ou faça&nbsp</label>
                <button type="button" class="btn-logar" id="btn-ou-login" onclick="openFormLogin()">Login</button>
            </div>
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

if (isset($_POST['cadastrar'])) {
    require_once "../includes/cadastrar-usuarios.inc.php";
}
require_once "../includes/desconectar.inc.php";
?>