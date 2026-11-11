<?php
include "infra/conn.php";


session_start();

$temp_session = time();

if(!isset($_SESSION["usuario"])){
  header("Location: public/login.php"); 
  exit(); 
}
if((time()-$temp_session) > 900){
    session_destroy();
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
      <a href="public/users/logout.php" aria-label="Sobre">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><path d="M409 337C418.4 327.6 418.4 312.4 409 303.1L265 159C258.1 152.1 247.8 150.1 238.8 153.8C229.8 157.5 224 166.3 224 176L224 256L112 256C85.5 256 64 277.5 64 304L64 336C64 362.5 85.5 384 112 384L224 384L224 464C224 473.7 229.8 482.5 238.8 486.2C247.8 489.9 258.1 487.9 265 481L409 337zM416 480C398.3 480 384 494.3 384 512C384 529.7 398.3 544 416 544L480 544C533 544 576 501 576 448L576 192C576 139 533 96 480 96L416 96C398.3 96 384 110.3 384 128C384 145.7 398.3 160 416 160L480 160C497.7 160 512 174.3 512 192L512 448C512 465.7 497.7 480 480 480L416 480z"/></svg>
      <span>Log-out</span>
    </nav>
</body>
</html>