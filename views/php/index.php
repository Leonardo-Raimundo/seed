<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="icon" type="image/x-icon" href="../assets/icons/favicon.png"> 
    <title>Home</title>
</head>
<body>
    <!-- Barra de navegação superior -->
    <nav class="navbar">
        <div class="div-logo-header">
            <a href="#"><img class="logo-icon" src="../assets/images/logo.png" alt="Logo Seed."></a>   
        </div>
        
        <ul class="nav-list">
            <li class="list-item"><a href="#home-section">Início</a></li>
            <li class="list-item"><a href="#about-section">Sobre</a></li>
            <li class="list-item"><a href="#resources-section">Recursos</a></li>
        </ul>

        <?php
        require_once "../php/form-sign-up.php";
        require_once "../php/form-login.php";
        require_once "../php/form-forgot-psw.php";
        ?>

        <div class="div-btn-cad-log" >
            <button class="btn-cadastrar" onclick="openFormSignUp()">Cadastre-se</button>
            <button class="btn-logar" onclick="openFormLogin()">Login</button>
        </div>

        <div class="menu">
            <div class="menu-line"></div>
            <div class="menu-line"></div>
            <div class="menu-line"></div>
        </div>
    </nav>

    <main>
        <section id="home-section">
            <div class="div-modelo-texto">
                <img id="modelo-lp" src="../assets/images/modelo-lp.png" alt="Foto de uma modelo segurando uma caneca.">

                <div class="div-org-txt">
                    <h1 id="titulo-landing">Organize suas finanças</h1>
                    <p class="txt-landing">Amet minim mollit non deserunt ullamco est sit aliqua den dolor do amet sint. Velit officia consequat duis enim velit mollit. </p>
                    
                    <button class="btn-cadastrar" id="btn-cad-landing" onclick="openFormSignUp()">Cadastre-se</button>
                </div>
            </div>
        </section>

        <div class="divider1-div"></div>

        <section id="about-section">
            <div class="div-sobre-seed">
                <div class="div-sobre-ttl-txt">
                    <h1 id="titulo-sobre">Sobre a SEED</h1>
                    <p id="txt-sobre">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse sagittis arcu quis nisi luctus, id accumsan felis tristique. Proin quis bibendum diam. Sed consequat nisl laoreet eros ultricies pellentesque. Nullam in est porta, pellentesque massa vitae, vehicula risus. <br> <br>

                    In placerat, felis vitae sodales dictum, lacus quam pretium mi, ut pretium urna turpis eu dui. Vestibulum id ullamcorper nibh. Donec luctus, nunc finibus elementum suscipit, tortor augue vulputate sapien, vitae feugiat enim augue sed. <br> <br>

                    Quisque id aliquam elit. Suspendisse congue pharetra maximus. Duis rutrum velit a leo euismod dictum. Sed sodales est efficitur arcu tincidunt tincidunt. Curabitur fringilla, risus at feugiat feugiat, nisl nulla tincidunt tellus, elementum elementum lorem nisl eleifend dolor. Nullam eget dui at sem ullamcorper luctus.</p>
                </div>
                <img id="app-demo-img" src="../assets/images/app-demo" alt="">
            </div>
        </section>

        <div class="divider2-div"></div>

        <section id="resources-section">
            
            <div class="div-title-resources">
                <h1 id="h1-recursos">Recursos</h1>
                <p style="font-family: 'DM sans'">Confira os recursos oferecidos pela aplicação.</p>
            </div>

            <div class="row">
                <div class="column">
                    <div class="card">
                        <h2>Gerenciamento de receitas e despesas</h2>
                        <p>Lorem ipsum capsidi deram caru et les.</p>
                    </div>
                </div>

                <div class="column">
                    <div class="card">  
                        <h2>Gestão de metas de longo prazo</h2>
                        <p>Lorem ipsum capsidi deram caru et les.</p>
                    </div>
                </div>

                <div class="column">
                    <div class="card">
                        <h2>Definição de limites financeiros mensais</h2>
                        <p>Lorem ipsum capsidi deram caru et les.</p>
                    </div>
                </div>
            </div>
        </section>

        <script src="../js/functions-open-close-forms.js"></script>
    </main>
    
    <footer>
        <div class="footer">
            <div class="div-info-footer">
                <img id="logo-footer" src="../assets/images/logo-footer.png" alt="">
                <p>©2022 SEED</p>
                <p>Todos os direitos reservados</p>
            </div>
        </div>
    </footer>
</body>

</html>