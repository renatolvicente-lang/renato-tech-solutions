<?php
include "../infra/conn.php";
include "../includes/temp_session.php";
session_start();
$temp_session = time();

if(!isset($_SESSION["usuario"])){
  header("Location: login.php"); 
  exit(); 
}

if((time()-$temp_session) > 900){
    session_destroy();
    header("Location: login.php");
    exit();
}


?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Serviços - RTS</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Gilda+Display&family=DM+Sans:wght@400;500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../assets/style/style.css">
</head>
<body>

    <span class="blob blob-tl"></span>
    <span class="blob blob-tr"></span>
    <br>
    <span class="blob blob-bl"></span>
    <span class="blob blob-br"></span>

  <main class="sv-painel">
    <header class="sv-topo">
      <h1>Serviços</h1>
      <p>Soluções para deixar seu computador rápido, seguro e do jeito que você precisa.</p>
    </header>

    <section class="sv-lista" aria-label="Lista de serviços">
      <article class="sv-card">
        <img src="../assets/images/note/desktop.jpg" alt="Computador desktop aberto com cabos organizados">
        <h2>Manutenção</h2>
        <p>Limpeza, troca de peças e correção de lentidão ou travamentos.</p>
        <a class="sv-botao"  href="https://wa.me/554784868092?text=Olá!%20Gostaria%20de%20solicitar%20um%20orçamento."
        target="_blank">Solicitar orçamento</a>
      </article>

      <article class="sv-card">
        <img src="../assets/images/note/teclado.jpg" alt="Teclado de notebook com iluminação azul">
        <h2>Notebooks</h2>
        <p>Reparo de teclado, tela e bateria, além de upgrade de memória e SSD.</p>
        <a class="sv-botao"  href="https://wa.me/554784868092?text=Olá!%20Gostaria%20de%20solicitar%20um%20orçamento."
        target="_blank">Solicitar orçamento</a>
      </article>

      <article class="sv-card">
        <img src="../assets/images/note/screen.jpg" alt="Computador all-in-one sobre uma mesa de trabalho">
        <h2>Configuração</h2>
        <p>Instalação de sistema, programas e backup para você começar a usar na hora.</p>
        <a class="sv-botao"  href="https://wa.me/554784868092?text=Olá!%20Gostaria%20de%20solicitar%20um%20orçamento."
        target="_blank">Solicitar orçamento</a>
      </article>
    </section>
  </main>

  <nav class="sv-menu" aria-label="Navegação principal">
    <a href="../index.php"  aria-label="Início">
      <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 3 2 12h3v8h5v-5h4v5h5v-8h3z"/></svg>
      <span>Início</span>
    </a>
    <a href="servicos.php" class="sv-ativo" aria-current="page" aria-label="Serviços">
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
      <a href="public/logout.php" aria-label="Sobre">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><path d="M409 337C418.4 327.6 418.4 312.4 409 303.1L265 159C258.1 152.1 247.8 150.1 238.8 153.8C229.8 157.5 224 166.3 224 176L224 256L112 256C85.5 256 64 277.5 64 304L64 336C64 362.5 85.5 384 112 384L224 384L224 464C224 473.7 229.8 482.5 238.8 486.2C247.8 489.9 258.1 487.9 265 481L409 337zM416 480C398.3 480 384 494.3 384 512C384 529.7 398.3 544 416 544L480 544C533 544 576 501 576 448L576 192C576 139 533 96 480 96L416 96C398.3 96 384 110.3 384 128C384 145.7 398.3 160 416 160L480 160C497.7 160 512 174.3 512 192L512 448C512 465.7 497.7 480 480 480L416 480z"/></svg>
      <span>Log-out</span>
    </nav>
</body>
</html>