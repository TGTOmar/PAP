<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Muay Thai - Coimbra MMA</title>
    <style>
        footer {
    background-color: #111; /* Cor de fundo escura para combinar com o tema */
    color: #fff; /* Texto em branco para destacar sobre o fundo escuro */
    text-align: center; /* Centraliza o texto */
    padding: 20px 0; /* Espaçamento vertical */
    font-size: 1rem; /* Tamanho da fonte */
    margin-top: 50px; /* Espaço acima do rodapé */
    border-top: 2px solid #900; /* Adiciona uma linha vermelha no topo do rodapé para destaque */
}

footer p {
    margin: 0; /* Remove margens para um espaçamento mais controlado */
}
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #000;
            color: #fff;
            overflow-x: hidden;
        }
        .header {
            background-color: #900;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 10px 20px;
        }
        .header img {
            height: 50px;
        }
        .header h1 {
            margin: 0;
            color: #fff;
            font-size: 1.8rem;
            flex: 1;
            text-align: center;
        }
        .profile-icon {
            height: 40px;
            width: 40px;
            border-radius: 50%;
            background: #fff;
        }
        nav {
            background-color: #111;
            text-align: center;
            padding: 10px 0;
        }
        nav a {
            color: #fff;
            text-decoration: none;
            margin: 0 15px;
            font-size: 1rem;
            font-weight: bold;
        }
        .video-background {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: -1;
        }
        .content {
            position: relative;
            text-align: center;
            z-index: 1;
            padding: 50px 20px;
            background: rgba(0, 0, 0, 0.7);
        }

        .icons-section {
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    gap: 20px; /* Espaço entre os ícones */
    padding: 20px;
}

.icon-box {
    text-align: center;
    width: 80px; /* Tamanho reduzido dos ícones */
}

.icon-box img {
    width: 40px; /* Reduz o tamanho das imagens dos ícones */
    height: 40px; /* Ajuste para manter a proporção */
}

.content {
    position: relative;
    text-align: center;
    z-index: 1;
    padding: 50px 20px;
    background: rgba(0, 0, 0, 0.7);
    margin-top: 80px; /* Ajustei para deixar o conteúdo um pouco mais para baixo sem sobrepor ao vídeo */
    border-radius: 10px;
}

.icons-section {
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    gap: 20px;
    padding: 40px 20px;
    margin-top: 20px; /* Ajustei o espaçamento para não ficar muito afastado */
}

.benefits, .pricing {
    text-align: center;
    padding: 30px 20px;
    background: rgba(0, 0, 0, 0.7);
    margin-top: 50px;
}



    </style>
</head>
<body>
    <video class="video-background" autoplay loop muted>
        <source src="WhatsApp Video 2025-01-30 at 21.49.54.mp4" type="video/mp4">
        Seu navegador não suporta vídeos.
    </video>

    <div class="header">
        <img src="images.png" alt="Logo Coimbra MMA">
        <h1>Coimbra MMA</h1>
        <div class="profile-icon"></div>
    </div>
    
    <nav>
        <a href="Login.php">Inicio</a>
        <a href="boxe.php">Boxe</a>
        <a href="#karate">Karate</a>
        <a href="#jiujitsu">Jiu-Jitsu</a>
        <a href="evento.php">Eventos</a>
        <a href="plano_treino.php">Pack de Aulas</a>
        <a href="Loja.php">Loja</a>
    </nav>

    <div class="content">
        <h2>Treinos de Muay Thai</h2>
        <p>O que esperas para te juntares a esta família</p>
    </div>
    
    <div class="icons-section">
        <div class="icon-box">
            <img src="saude.png" alt="Saúde">
            <p><strong>Melhora a tua <span style="color: red;">saúde</span></strong></p>
        </div>
        <div class="icon-box">
            <img src="icon-forca.png" alt="Força">
            <p><strong>Torna-te <span style="color: red;">mais forte</span></strong></p>
        </div>
        <div class="icon-box">
            <img src="icon-velocidade.png" alt="Rápido">
            <p><strong>Mais <span style="color: red;">rápido</span></strong></p>
        </div>
        <div class="icon-box">
            <img src="icon-foco.png" alt="Foco">
            <p><strong>Fica <span style="color: red;">mais focado</span> e elimina o stress</strong></p>
        </div>
        <div class="icon-box">
            <img src="icon-competicao.png" alt="Competições">
            <p><strong>Participa em <span style="color: red;">competições</span></strong></p>
        </div>
    </div>
    
    <div class="benefits">
        <h2>Por que praticar Muay Thai?</h2>
        <p>O Muay Thai proporciona inúmeros benefícios tanto físicos quanto mentais. 
        Ele melhora o condicionamento físico, aumenta a resistência, aprimora a disciplina e fortalece a confiança. 
        Além disso, é uma excelente forma de defesa pessoal e ajuda a aliviar o estresse.</p>
        <p>Seja para competir em alto nível ou simplesmente para manter um estilo de vida saudável e ativo, 
        o Muay Thai é uma escolha incrível. Com a orientação dos nossos treinadores, você pode evoluir 
        no seu próprio ritmo e atingir seus objetivos, seja no esporte ou no lazer.</p>
    </div>
    
    <div class="pricing">
        <h2>Preços</h2>
        <p><strong>Mensalidade:</strong> 50€</p>
        <p><strong>Anualidade:</strong> 500€ (desconto de 100€)</p>
    
    </div>
    
    <footer>
        <p>© 2024 Coimbra MMA. Todos os direitos reservados.</p>
    </footer>
</body>
</html>
