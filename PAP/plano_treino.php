<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Planos de Aula - Coimbra MMA</title>
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
        .planos-container {
            text-align: center;
            padding: 40px 20px;
        }
        .info-inscricao {
            margin-bottom: 20px;
            padding: 15px;
            background-color: #111;
            border: 1px solid #900;
            border-radius: 10px;
            display: inline-block;
        }
        .planos {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 20px;
        }
        .plano {
            background-color: #222;
            padding: 20px;
            border-radius: 10px;
            border: 1px solid #900;
            text-align: center;
            width: 200px;
        }
        .plano h3 {
            color: #ffcc00;
        }
        .plano p {
            font-size: 1.5rem;
            font-weight: bold;
        }
        .plano button {
            background-color: #900;
            color: #fff;
            border: none;
            padding: 10px;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
            font-size: 1rem;
        }
        .plano button:hover {
            background-color: #700;
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
        <h1>Coimbra MMA</h1>
    </header>
    
    <!-- Navegação -->
    <nav>
        <a href="Login.php">Início</a>
        <a href="muay_thai.php">Muay Thai</a>
        <a href="boxe.php">Boxe</a>
        <a href="#karate">Karate</a>
        <a href="#jiujitsu">Jiu-Jitsu</a>
        <a href="evento.php">Eventos</a>
        <a href="contato.php">Contato</a>
        <a href="Loja.php">Loja</a>
    </nav>

    <!-- Conteúdo dos planos -->
    <div class="planos-container">
        <div class="info-inscricao">
            <p><strong>Nota:</strong> A inscrição tem um custo adicional devido à taxa de joia e seguro, que são pagos apenas uma vez por ano.</p>
        </div>
        <h2>Escolha seu Plano</h2>
        <div class="planos">
            <div class="plano">
                <h3>2X Semana</h3>
                <p>€25/mês</p>
                <button>Comprar</button>
            </div>
            <div class="plano">
                <h3>3X Semana</h3>
                <p>€35/mês</p>
                <button>Comprar</button>
            </div>
            <div class="plano">
                <h3>Joia + Seguro</h3>
                <p>€40</p>
                <button>Comprar</button>
            </div>
            <div class="plano">
                <h3>Trânsito Livre</h3>
                <p>€40/mês</p>
                <button>Comprar</button>
            </div>
            <div class="plano">
                <h3>Muay e Jiu-Jitsu</h3>
                <p>€50/mês</p>
                <button>Comprar</button>
            </div>
        </div>
    </div>

    <!-- Rodapé -->
    <footer>
        <p>© 2024 Coimbra MMA. Todos os direitos reservados.</p>
        <p xmlns:cc="http://creativecommons.org/ns#" xmlns:dct="http://purl.org/dc/terms/"><span property="dct:title">Coimbra MMA site</span> by <a rel="cc:attributionURL dct:creator" property="cc:attributionName" href="https://www.linkedin.com/in/omar-augusto-359341345/">Omar Taha Augusto</a> is licensed under <a href="https://creativecommons.org/licenses/by-nc-nd/4.0/?ref=chooser-v1" target="_blank" rel="license noopener noreferrer" style="display:inline-block;">CC BY-NC-ND 4.0<img style="height:22px!important;margin-left:3px;vertical-align:text-bottom;" src="https://mirrors.creativecommons.org/presskit/icons/cc.svg?ref=chooser-v1" alt=""><img style="height:22px!important;margin-left:3px;vertical-align:text-bottom;" src="https://mirrors.creativecommons.org/presskit/icons/by.svg?ref=chooser-v1" alt=""><img style="height:22px!important;margin-left:3px;vertical-align:text-bottom;" src="https://mirrors.creativecommons.org/presskit/icons/nc.svg?ref=chooser-v1" alt=""><img style="height:22px!important;margin-left:3px;vertical-align:text-bottom;" src="https://mirrors.creativecommons.org/presskit/icons/nd.svg?ref=chooser-v1" alt=""></a></p> 
    </footer>
</body>
</html>