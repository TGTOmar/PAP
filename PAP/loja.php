<?php
session_start();

// Conectar ao banco de dados
include("ligacao.php");

// Inicializa o carrinho se não existir
if (!isset($_SESSION['carrinho'])) {
    $_SESSION['carrinho'] = [];
}

// Consulta para buscar os produtos
$sql = "SELECT id_produto, nome, preco, descricao, ativo, imagens FROM produtos WHERE ativo = 'sim'";
$result = mysqli_query($con, $sql);

// Verifica se existem produtos
$produtos = [];
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $produtos[$row['id_produto']] = [
            'nome' => $row['nome'],
            'preco' => $row['preco'],
            'imagem' => base64_encode($row['imagens']) // Codificando em base64
        ];
    }
} else {
    echo "Nenhum produto encontrado.";
}

// Adiciona um produto ao carrinho
if (isset($_GET['adicionar'])) {
    $produto_id = $_GET['adicionar'];
    
    if (isset($produtos[$produto_id])) {
        if (!isset($_SESSION['carrinho'][$produto_id])) {
            $_SESSION['carrinho'][$produto_id] = 1;
        } else {
            $_SESSION['carrinho'][$produto_id]++;
        }
    }
    
    header("Location: loja.php");
    exit;
}

// Conta itens no carrinho
$totalItens = array_sum($_SESSION['carrinho']);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coimbra MMA - Loja</title>
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
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        .logo img {
            height: 80px;
        }
        nav {
            display: flex;
            gap: 20px;
        }
        nav a {
            color: #fff;
            text-decoration: none;
            font-size: 1.2rem;
            padding: 10px;
        }
        nav a:hover {
            background-color: #700;
            border-radius: 5px;
        }
        .carrinho {
            background: #fff;
            color: #900;
            padding: 10px;
            border-radius: 5px;
            font-weight: bold;
            text-decoration: none;
        }
        .content {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            padding: 20px;
        }
        .card {
            background-color: #111;
            border: 1px solid #900;
            margin: 10px;
            padding: 20px;
            text-align: center;
            width: 250px;
            border-radius: 10px;
        }
        .card img {
            width: 100%;
            max-height: 200px;
            object-fit: cover;
            border-radius: 10px;
        }
        .card .price {
            font-size: 1.3rem;
            color: #900;
            font-weight: bold;
        }
        .button {
            display: inline-block;
            padding: 10px 15px;
            background-color: #900;
            color: #fff;
            border-radius: 5px;
            text-decoration: none;
            margin-top: 10px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <header>
        <div class="logo">
            <img src="images.png" alt="Logo do Clube">
        </div>
        <nav>
            <a href="Login.php">Início</a>
            <a href="muaythai.php">Muay Thai</a>
            <a href="jiujitsu.php">Jiu-Jitsu</a>
            <a href="eventos.php">Eventos</a>
            <a href="loja.php">Loja</a>
        </nav>
        <a href="carrinho.php" class="carrinho">Carrinho (<?= $totalItens ?>)</a>
    </header>

    <section class="content">
        <?php foreach ($produtos as $key => $produto): ?>
            <div class="card">
                <img src="data:image/jpeg;base64,<?= $produto['imagem'] ?>" alt="<?= $produto['nome'] ?>"> <!-- Exibe a imagem codificada em base64 -->
                <h3><?= $produto['nome'] ?></h3>
                <p class="price">€<?= number_format($produto['preco'], 2) ?></p>
                <a href="?adicionar=<?= $key ?>" class="button">Adicionar ao Carrinho</a>
            </div>
        <?php endforeach; ?>
    </section>
</body>
</html>

<?php
// Fechar conexão
mysqli_close($con);
?>
