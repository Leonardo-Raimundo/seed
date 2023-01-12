<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Configurações</title>
    <link rel="icon" type="image/x-icon" href="../assets/icons/favicon.png">
    <link rel="stylesheet" href="../css/control-panel.css">
</head>

<body>

    <?php
        require "../includes/include-header-sidebar.php";
    ?>

    <div class="form-popup" id="form-update-user">
        <form action="/a_definir.php" class="form-container" method="post">
            <fieldset>
                <!-- <button type="button" class="btn-fechar-form" onclick="closeFormSignUp()"><img id="ico-fechar" src="../assets/icons/fechar-ico.png" alt=""></button> -->

                <h1 class="h1-forms">Alterar dados de usuário</h1>

                <label class="label-alinha" for="username">Alterar Nome:</label>
                <input type="text" placeholder="Insira seu nome" name="username"> <br>

                <label class="label-alinha" for="email">Alterar Email:</label>
                <input type="email" placeholder="Insira seu melhor e-mail" name="email">

                <div class="divider1-div"></div>

                <label class="label-alinha" for="user-psw">Senha Antiga:</label>
                <input type="password" placeholder="Insira sua senha atual" name="user-psw"> <br>

                <label class="label-alinha" for="psw-confirm">Nova senha:</label>
                <input type="password" placeholder="Crie uma senha forte" name="psw-confirm"> <br>

                <label class="label-alinha" for="psw-confirm">Confirme a senha:</label>
                <input type="password" placeholder="Confirme a nova senha" name="psw-confirm"> <br>

                <div class="div-cad-ou-log">
                    <button type="submit" class="btn-cadastrar">Confirmar</button>
                </div>

                <div>
                    <label id="lbl-excluir">Excluir conta</label>
                    <div class="divider1-div"></div>
                    <p>Quando excluída, sua conta não poderá ser recuperada.</p>
                    <button type="submit" class="btn-excluir">Excluir conta</button>
                </div>
            </fieldset>
        </form>
    </div>
</body>

</html>