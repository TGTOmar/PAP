<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jiu-Jitsu - Coimbra MMA</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            color: #fff;
            background-color: #000;
        }
        header {
            background-color: rgba(221, 12, 12, 0.7);
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
        .banner {
            position: relative;
            width: 100%;
            height: 400px;
            background: url('rafinhasilveirabjj_1740481468403.jpg') no-repeat center center/cover;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
        }
        .banner h2 {
            font-size: 3rem;
            margin: 0;
            color: #fff;
        }
        .banner p {
            font-size: 1.5rem;
            color: #fff;
        }
        .content {
            padding: 20px;
            background-color: #000;
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
            color: rgb(228, 4, 4);
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
    <header>
        <img src="images.png" alt="Logotipo" class="logo">
        <h1>Coimbra MMA - Jiu-Jitsu</h1>
    </header>
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
    <div class="banner">
        <h2>A Arte do Jiu-Jitsu</h2>
        <p>Controle, técnica e estratégia para superar qualquer desafio!</p>
    </div>
    <div class="content">
        <div class="text-box">
            <h3>Sobre o Jiu-Jitsu</h3>
            <p>O Jiu-Jitsu é uma arte marcial que se destaca pelo uso de alavancas e técnicas de solo para imobilizar e dominar o oponente. Baseado na estratégia e no controle, é ideal para autodefesa e competições. A prática do Jiu-Jitsu melhora a resistência, flexibilidade e foco mental.</p>
        </div>
        <div class="gallery">
            <img src="rafinhasilveirabjj_1740481401928.jpg" alt="Jiu-Jitsu 1">
            <img src="rafinhasilveirabjj_1740481425969.jpg" alt="Jiu-Jitsu 2">
            <img src="rafinhasilveirabjj_1740481440935.jpg" alt="Jiu-Jitsu 3">
        </div>
    </div>
    <footer>
        <p>© 2024 Coimbra MMA. Todos os direitos reservados.</p>
    </footer>
</body>
</html>
