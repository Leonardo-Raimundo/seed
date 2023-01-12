
<header>
    <div class="div-logo-header">
        <a href="../php/index.php"><img class="logo-icon" src="../assets/images/logo.png" alt="Logo Seed."></a>
    </div>
</header>

<div class="sidebar">

    <h1 id="profile-name">Olá, Nome!</h1>
    <button id="btn-financial-movement" class="sidebar-buttons" onclick="goToFinMov()">Movimentações financeiras</button> <br>
    <script>
        function goToFinMov() {
            window.location.href = "./user-control-panel.php";
        }
    </script>
    <!-- <button id="btn-monthly-limits" class="sidebar-buttons" onclick="goToMonthlyLimits()">Limites Mensais</button> <br>
    <script>
        function goToMonthlyLimits() {
            window.location.href = "./monthly-limits.php";
        }
    </script>
    <button id="btn-financial-goals" class="sidebar-buttons">Metas Financeiras</button> -->

    <button id="btn-user-config" class="sidebar-buttons" onclick="goToConfig()">Configurações</button>
    <script>
        function goToConfig() {
            window.location.href = "./user-config.php";
        }
    </script>
    <form action="../includes/logout.inc.php" method="post">
        <button id="btn-use-logout" class="sidebar-buttons">Fazer logout</button>
    </form>
</div>