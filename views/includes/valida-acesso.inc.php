<?php

session_start();
if (!isset($_SESSION['conectado']) or $_SESSION['conectado'] != true) {
    exit("<p style='width: 50%; border: 1px solid #777;
  padding: 20px; text-align: center; margin: 20px auto;'> Efetuae cadastro ou o login para acessar este conteúdo. <br> 
  <a href='../php/form-login.php' style='color: #000; text-align: center;'> Ir para a página de login </a>
  </p>");
}
