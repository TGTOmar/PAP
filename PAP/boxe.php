<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boxe - Coimbra MMA</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            color: #fff;
            overflow-x: hidden;
            background-color: #000; /* Fundo da página preto */
        }
        header {
            background-color: rgba(221, 12, 12, 0.7); /* Cor de fundo transparente para o cabeçalho */
            padding: 20px;
            text-align: center;
            position: relative;
        }
        header h1 {
            margin: 0;
            color: #fff;
            font-size: 2rem;
        }
        header .logo {
            position: absolute;
            top: 10px;
            left: 10px;
            width: 50px;
            height: 50px;
        }
        nav {
            background-color: #111;
            padding: 10px;
            text-align: center;
        }
        nav a {
            color: #fff;
            text-decoration: none;
            margin: 0 15px;
            font-weight: bold;
        }
        /* Banner de vídeo */
        .banner {
            position: relative;
            width: 100%;
            height: 400px; /* Ajuste a altura do vídeo para ficar apenas no topo */
            overflow: hidden;
        }
        .banner video {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        .banner h2 {
            font-size: 3rem;
            margin: 0;
            color: #fff;
            position: absolute;
            top: 30%;
            left: 50%;
            transform: translateX(-50%);
        }
        .banner p {
            font-size: 1.5rem;
            margin-bottom: 20px;
            color: #fff;
            position: absolute;
            top: 45%;
            left: 50%;
            transform: translateX(-50%);
        }
        .content {
            padding: 20px;
            background-color: #000; /* Fundo preto para o conteúdo */
        }
        .text-box {
            width: 80%;
            max-width: 900px;
            text-align: justify;
            font-size: 1.2rem;
            line-height: 1.6;
            margin-bottom: 30px;
        }
        .text-box h3 {
            font-size: 2rem;
            color:rgb(228, 4, 4);
        }
        .gallery {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            gap: 20px;
            margin-bottom: 30px;
        }
        .gallery img {
            width: 300px;
            height: 200px;
            object-fit: cover;
            border-radius: 10px;
            border: 1px solid #900;
        }
        footer {
            text-align: center;
            padding: 20px;
            background-color: #111;
            color: #aaa;
        }
    </style>
</head>
<body>
    <!-- Cabeçalho -->
    <header>
        <img src="images.png" alt="Logotipo" class="logo">
        <h1>Coimbra MMA - Boxe</h1>
    </header>
    
    <!-- Navegação -->
    <nav>
        <a href="Login.php">Início</a>
        <a href="muay_thai.php">Muay Thai</a>
        <a href="#karate">Karate</a>
        <a href="#jiujitsu">Jiu-Jitsu</a>
        <a href="evento.php">Eventos</a>
        <a href="plano_treino.php">Plano de Aulas</a>
        <a href="Loja.php">Loja</a>
        <a href="contato.php">Contato</a>
        
     
    </nav>
    
    <!-- Banner com vídeo no topo -->
    <div class="banner">
        <video autoplay muted loop>
            <source src="WhatsApp Video 2025-02-11 at 09.42.21.mp4" type="video/mp4">
            Seu navegador não suporta o formato de vídeo.
        </video>
        <h2>O Poder do Boxe</h2>
        <p>Uma arte marcial que combina técnica, força e estratégia para dominar o ringue!</p>
    </div>
    
    <!-- Conteúdo principal -->
    <div class="content">
        <div class="text-box">
            <h3>Sobre o Boxe</h3>
            <p>O Boxe é uma das artes marciais mais antigas e emocionantes, combinando agilidade, força e técnica para dominar o oponente. Neste esporte, os praticantes aprendem a se defender, atacar e se posicionar estrategicamente no ringue. O boxe não é apenas sobre socos, mas também sobre controle mental e físico, desenvolvendo resistência, velocidade e poder de reação. A disciplina e o foco são fundamentais para se tornar um bom boxeador, e é por isso que o Boxe é uma arte marcial que transforma não apenas o corpo, mas também a mente.</p>
            <p>A prática de Boxe também melhora a condição cardiovascular, a coordenação motora e o equilíbrio. Além disso, a intensidade do treino é uma excelente maneira de aliviar o estresse e melhorar a saúde mental.</p>
        </div>
        
        <!-- Galeria de imagens -->
        <div class="gallery">
            <img src="boxe1.jpeg" alt="Boxe 1">
            <img src="boxe2.jpeg" alt="Boxe 2">
            <img src="boxe3.jpeg" alt="Boxe 3">
        </div>
    </div>
    
    <!-- Rodapé -->
    <footer>
        <p>© 2024 Coimbra MMA. Todos os direitos reservados.</p>
    </footer>
</body>
</html>
