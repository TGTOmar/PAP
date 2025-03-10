<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eventos - Coimbra MMA</title>
    <style>
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
        .event-section {
            padding: 20px;
            background-color: #111;
            color: #fff;
        }
        .event-section h2 {
            text-align: center;
            color: #fff;
        }
        .event {
            background-color: #222;
            border: 1px solid #900;
            padding: 15px;
            margin: 10px 0;
            border-radius: 10px;
        }
        .event h3 {
            margin: 0 0 10px;
            color: #fff;
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
    </style>
</head>
<body>
    <header>
        <img src="images.png" alt="Logotipo" class="logo">
        <h1>Coimbra MMA</h1>
    </header>
    <nav>
        <a href="Login.php">Home</a>
        <a href="#eventos">Eventos</a>
    </nav>
    <section class="event-section">
        <h2>Próximos Eventos</h2>
        <div class="event">
            <h3>Campeonato de Kickboxing Norte</h3>
            <p>Data: 26 e 27 de setembro<br>Local: Matosinhos, Porto</p>
        </div>
        <div class="event">
            <h3>Campeonato Nacional de Muay Thai</h3>
            <p>Data: 24 e 25 de outubro<br>Local: Nazaré, Leiria</p>
        </div>
    </section>
    <footer>
        <p>© 2024 Coimbra MMA. Todos os direitos reservados. <a href="#contato">Contato</a></p>
    </footer>
</body>
</html>
