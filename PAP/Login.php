<?php
session_start();

// Verifica se o carrinho está vazio
if (empty($_SESSION['carrinho'])) {
    $carrinho = "Carrinho vazio";
} else {
    $carrinho = "Carrinho (" . array_sum($_SESSION['carrinho']) . " itens)";
}

$produtos = [
    "kimono" => ["nome" => "Kimono de Jiu-Jitsu", "preco" => 49.99],
    "luvas" => ["nome" => "Luvas de Boxe", "preco" => 30.00],
    // Adicione mais produtos conforme necessário
];

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coimbra MMA</title>
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
        header .user-menu {
            position: absolute;
            top: 10px;
            right: 10px;
            cursor: pointer;
        }
        header .user-menu img {
            width: 40px;
            height: 40px;
            border-radius: 50%;
        }
        header .dropdown {
            display: none;
            position: absolute;
            right: 0;
            top: 60px;
            background-color: #111;
            padding: 10px;
            border: 1px solid #900;
            border-radius: 5px;
        }
        header .dropdown a {
            color: #fff;
            text-decoration: none;
            display: block;
            padding: 5px 10px;
            margin: 5px 0;
        }
        header .dropdown a:hover {
            background-color: #900;
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
        .banner {
            text-align: center;
            padding: 50px 20px;
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('banner.jpg') no-repeat center;
            background-size: cover;
        }
        .banner h2 {
            font-size: 2.5rem;
            margin: 0;
        }
        .banner p {
            font-size: 1.2rem;
            margin-bottom: 20px;
        }
        .banner .button-container a {
            text-decoration: none;
            display: inline-block;
            padding: 10px 20px;
            margin: 5px;
            background-color: #900;
            color: #fff;
            border-radius: 5px;
            font-size: 1rem;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }
        .banner .button-container a:hover {
            background-color: #700;
        }
        .content {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            padding: 20px;
        }
        .content {
    display: flex;
    flex-wrap: wrap; /* Permite que os itens que não cabem na linha passem para a linha seguinte */
    justify-content: center; /* Alinha os itens no centro */
    gap: 20px; /* Espaçamento entre os cards */
    padding: 20px;
}

.card {
    background-color: #111;
    border: 1px solid #900;
    padding: 20px;
    text-align: center;
    width: 250px; /* Tamanho fixo para todas as cards */
    height: 350px; /* Altura fixa para manter o mesmo tamanho */
    border-radius: 10px;
    display: flex;
    flex-direction: column; /* Garante que a imagem fique em cima do texto */
    justify-content: space-between; /* Garante que o conteúdo seja distribuído igualmente */
}

.card img {
    width: 100%;
    height: 150px; /* A altura da imagem será fixada */
    object-fit: cover; /* Garante que a imagem se ajuste bem dentro do espaço */
    border-radius: 10px;
}

.card h3 {
    margin: 15px 0;
    font-size: 1.2rem; /* Ajusta o tamanho da fonte para um visual mais equilibrado */
}

.card p {
    font-size: 1rem;
    margin-bottom: 15px;
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

        <!-- Menu do usuário -->
        <div class="user-menu">
            <img src="icone.png" alt="Usuário">
            <div class="dropdown">
                <a href="perfil.php">Visualizar Perfil</a>
                <a href="logout.php">Logout</a>
                <div class="carrinho" onclick="window.location.href='carrinho.php';">
                <?php echo $carrinho; ?>
            </div>
        </div>
    </header>
    
    <!-- Navegação -->
    <nav>
        <a href="muay_thai.php">Muay Thai</a>
        <a href="boxe.php">Boxe</a>
        <a href="#karate">Karate</a>
        <a href="jiu-jistu.php">Jiu-Jitsu</a>
        <a href="evento.php">Eventos</a>
        <a href="plano_treino.php">Pack de Aulas</a>
        <a href="Loja.php">Loja</a>
        <a href="Contato.php">Contate-nos</a>
    </nav>
    
    <!-- Banner -->
    <div class="banner">
        <h2>Supere os teus limites</h2>
        <p>Aprenda com os melhores em Muay Thai, Boxe, Karate e Jiu-Jitsu!</p>
        <div class="button-container">
            <a href="Final4.php">Cadastrar-se</a>
            <a href="Pagina_Login.php">Login</a>
        </div>
    </div>
    
    <!-- Conteúdo principal -->
    <section class="content">
        <div class="card" id="muay-thai">
            <img src="Mhuai Thai.jpg" alt="Muay Thai">
            <h3>Muay Thai</h3>
            <p>Domine a arte das oito armas com nossos especialistas.</p>
        </div>
        <div class="card" id="boxe">
            <img src="boxe.jpg" alt="Boxe">
            <h3>Boxe</h3>
            <p>Aprenda técnicas de boxe e melhore sua resistência física.</p>
        </div>
        <div class="card" id="karate">
            <img src="karate.jpeg" alt="Karate">
            <h3>Karate</h3>
            <p>Explore a disciplina e os movimentos do Karate tradicional.</p>
        </div>
        <div class="card" id="jiujitsu">
            <img src="jiujitsu.jpg" alt="Jiu-Jitsu">
            <h3>Jiu-Jitsu</h3>
            <p>Desenvolva suas habilidades em combate corpo-a-corpo.</p>
        </div>
    </section>
    
    <!-- Rodapé -->
    <footer>
        <p>© 2024 Coimbra MMA. Todos os direitos reservados. <a href="#top">Voltar ao topo</a></p>
        <p xmlns:cc="http://creativecommons.org/ns#" xmlns:dct="http://purl.org/dc/terms/"><span property="dct:title">Coimbra MMA site</span> by <a rel="cc:attributionURL dct:creator" property="cc:attributionName" href="https://www.linkedin.com/in/omar-augusto-359341345/">Omar Taha Augusto</a> is licensed under <a href="https://creativecommons.org/licenses/by-nc-nd/4.0/?ref=chooser-v1" target="_blank" rel="license noopener noreferrer" style="display:inline-block;">CC BY-NC-ND 4.0<img style="height:22px!important;margin-left:3px;vertical-align:text-bottom;" src="https://mirrors.creativecommons.org/presskit/icons/cc.svg?ref=chooser-v1" alt=""><img style="height:22px!important;margin-left:3px;vertical-align:text-bottom;" src="https://mirrors.creativecommons.org/presskit/icons/by.svg?ref=chooser-v1" alt=""><img style="height:22px!important;margin-left:3px;vertical-align:text-bottom;" src="https://mirrors.creativecommons.org/presskit/icons/nc.svg?ref=chooser-v1" alt=""><img style="height:22px!important;margin-left:3px;vertical-align:text-bottom;" src="https://mirrors.creativecommons.org/presskit/icons/nd.svg?ref=chooser-v1" alt=""></a></p> 
    </footer>

    <script>
        // Lógica para exibir/ocultar o menu dropdown
        const userMenu = document.querySelector('.user-menu');
        const dropdown = document.querySelector('.dropdown');

        userMenu.addEventListener('click', () => {
            dropdown.style.display = dropdown.style.display === 'block' ? 'none' : 'block';
        });

        // Fechar o menu ao clicar fora
        window.addEventListener('click', (e) => {
            if (!userMenu.contains(e.target)) {
                dropdown.style.display = 'none';
            }
        });


    </script>

<script>
    function confirmarLogout() {
        if (confirm("Tem a certeza que quer sair?")) {
            window.location.href = "logout.php";
        }
    }
</script>

</body>
</html>
