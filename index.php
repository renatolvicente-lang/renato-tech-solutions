<?php
include "infra/conn.php";
include "../includes/temp_session.php";
session_start();

if(!isset($_SESSION["usuario"])){
  header("Location: public/login.php"); 
  exit(); 
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Home - RTS</title>

  <!-- Fontes -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Gilda+Display&family=Roboto:wght@400;500&display=swap" rel="stylesheet">

  <!-- Ícones (Font Awesome) -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

  <link rel="stylesheet" href="assets/style/style.css">
</head>
<body>

  <!-- Manchas decorativas do fundo -->
  <span class="blob blob-tl"></span>
  <span class="blob blob-tr"></span>
  <span class="blob blob-bl"></span>
  <span class="blob blob-br"></span>

  <main class="card">
    <h1>Renato <span class="destaque">Tech Solutions</span></h1>

    <p class="descricao">
      Soluções em <span class="destaque">manutenção</span> e
      <span class="destaque">suporte técnico</span> para computadores,
      com foco em <span class="destaque">qualidade</span>,
      <span class="destaque">desempenho</span> e
      <span class="destaque">confiabilidade</span>. Trabalhamos com formatação,
      instalação de sistemas, limpeza preventiva, otimização e diagnóstico de
      problemas, buscando prolongar a vida útil dos seus equipamentos e
      proporcionar a melhor experiência tecnológica.
    </p>

    <ul class="servicos">
      <li><i class="fa-brands fa-windows" aria-label="Instalação de sistemas"></i></li>
      <li><i class="fa-solid fa-broom" aria-label="Limpeza preventiva"></i></li>
      <li><i class="fa-solid fa-gauge-high" aria-label="Desempenho"></i></li>
    </ul>

    <img class="foto" src="assets/images/note/cell.jpg" alt="Notebook, celular e caneta sobre uma mesa escura">
  </main>
  
    <section class="atd-card">
    <h2>Quem atendemos?</h2>
    <hr class="atd-divisor">
 
    <ul class="atd-lista">
      <li>
        <i class="fa-solid fa-store"></i>
        <div>
          <strong>Empresas de pequeno porte</strong>
          <span>Manutenção e suporte sem burocracia</span>
        </div>
      </li>
      <li>
        <i class="fa-solid fa-building"></i>
        <div>
          <strong>Empresas de grande porte</strong>
          <span>Atendimento para vários equipamentos</span>
        </div>
      </li>
      <li>
        <i class="fa-solid fa-user"></i>
        <div>
          <strong>Público comum</strong>
          <span>Seu computador pessoal funcionando bem</span>
        </div>
      </li>
    </ul>
  </section>

  <nav class="sv-menu" aria-label="Navegação principal">
    <a href="index.php" class="sv-ativo" aria-label="Início">
      <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 3 2 12h3v8h5v-5h4v5h5v-8h3z"/></svg>
      <span>Início</span>
    </a>
    <a href="public/servicos.php"  aria-current="page" aria-label="Serviços">
      <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M22 19.6 13.4 11a5 5 0 0 0-6.6-6.5l3.2 3.2-2.3 2.3-3.2-3.2A5 5 0 0 0 11 13.4l8.600 8.600z"/></svg>
      <span>Serviços</span>
    </a>
    <a href="contato.php" aria-label="Contato">
      <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M4 4h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H9l-5 4v-4a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2z"/></svg>
      <span>Contato</span>
    </a>
    <a href="sobre.php" aria-label="Sobre">
      <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 12a5 5 0 1 0 0-10 5 5 0 0 0 0 10zm0 2c-4.400 0-8 2.200-8 5v3h16v-3c0-2.800-3.600-5-8-5z"/></svg>
      <span>Sobre</span>

</body>
</html>