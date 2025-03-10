<?php
session_start();

// Verifica se o carrinho está vazio
if (empty($_SESSION['carrinho'])) {
    echo "Seu carrinho está vazio!";
    exit;
}

$produtos = [
    "kimono" => ["nome" => "Kimono de Jiu-Jitsu", "preco" => 49.99],
    "luvas" => ["nome" => "Luvas de Boxe", "preco" => 30.00],
    // Adicione mais produtos conforme necessário
];

$total = 0;
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Finalizar Compra - Coimbra MMA</title>
</head>
<body>
    <header>
        <h1>Coimbra MMA - Finalizar Compra</h1>
    </header>

    <section class="content">
        <!-- Título com a imagem do carrinho -->
        <h2>
            <img src="carrinho.png" alt="Carrinho de Compras" style="width: 30px; height: 30px; vertical-align: middle; margin-right: 10px;">
            Seu Carrinho
        </h2>

        <table>
            <tr>
                <th>Produto</th>
                <th>Quantidade</th>
                <th>Preço Unitário</th>
                <th>Total</th>
            </tr>

            <?php
            foreach ($_SESSION['carrinho'] as $produto => $quantidade) {
                if (isset($produtos[$produto])) {
                    $nome = $produtos[$produto]["nome"];
                    $preco = $produtos[$produto]["preco"];
                    $subtotal = $preco * $quantidade;
                    $total += $subtotal;

                    echo "<tr>
                            <td>{$nome}</td>
                            <td>{$quantidade}</td>
                            <td>€{$preco}</td>
                            <td>€{$subtotal}</td>
                          </tr>";
                } else {
                    echo "<tr>
                            <td colspan='4'>Produto não encontrado: {$produto}</td>
                          </tr>";
                }
            }
            ?>
        </table>
        <h3>Total: €<?php echo number_format($total, 2, ',', '.'); ?></h3>

        <form action="processar_compra.php" method="post">
            <button type="submit">Finalizar Compra</button>
        </form>
    </section>
</body>
</html>
