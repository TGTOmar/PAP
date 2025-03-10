<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato - Coimbra MMA</title>
    <style>
        /* Estilo principal */
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #000;
            color: #fff;
        }
        header {
            background-color: #900;
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
        nav a:hover {
            color: #900;
        }
        .contact-container {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 80vh;
            background-color: #111;
            padding: 40px 20px;
        }
        .contact-form {
            background-color: #222;
            padding: 40px;
            border-radius: 10px;
            width: 100%;
            max-width: 600px;
            border: 1px solid #900;
        }
        .contact-form h2 {
            text-align: center;
            margin-bottom: 20px;
            font-size: 2rem;
        }
        .contact-form input, .contact-form textarea {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #900;
            border-radius: 5px;
            background-color: #333;
            color: #fff;
            font-size: 1rem;
        }
        .contact-form textarea {
            resize: vertical;
            height: 150px;
        }
        .contact-form button {
            width: 100%;
            padding: 12px;
            background-color: #900;
            color: #fff;
            border: none;
            border-radius: 5px;
            font-size: 1.2rem;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .contact-form button:hover {
            background-color: #700;
        }
        footer {
            text-align: center;
            padding: 20px;
            background-color: #111;
            color: #aaa;
        }
        footer a {
            color: #900;
            text-decoration: none;
        }
        footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <!-- Cabeçalho -->
    <header>
        <img src="images.png" alt="Logotipo" class="logo">
        <h1>Coimbra MMA</h1>
    </header>
    
    <!-- Navegação -->
    <nav>
        <a href="Login.php">Inicio</a>
        <a href="muay_thai.php">Muay Thai</a>
        <a href="boxe.php">Boxe</a>
        <a href="#karate">Karate</a>
        <a href="#jiujitsu">Jiu-Jitsu</a>
        <a href="evento.php">Eventos</a>
        <a href="plano_treino.php">Pack de Aulas</a>
        <a href="Loja.php">Loja</a>
    </nav>
    
    <!-- Seção de Contato -->
    <div class="contact-container">
        <form class="contact-form" action="mandar_mensagens.php" method="POST">
            <h2>Entre em Contato</h2>
            <input type="text" name="name" placeholder="Seu Nome" required>
            <input type="email" name="email" placeholder="Seu Email" required>
            <textarea name="message" placeholder="Sua Mensagem" required></textarea>
            <button type="submit">Enviar Mensagem</button>
        </form>
    </div>

    <!-- Rodapé -->
    <footer>
        <p>© 2024 Coimbra MMA. Todos os direitos reservados. <a href="#top">Voltar ao topo</a></p>
    </footer>
</body>
</html>
