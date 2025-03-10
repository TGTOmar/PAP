<?php
session_start();

// Verificar se o usuário está logado
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

require('ligacao.php');

// Verificar se a conexão foi estabelecida
if (!$con) {
    die("Erro na conexão com o banco de dados.");
}

// Obter informações do usuário
$user_id = $_SESSION['user_id'];
$query = "SELECT * FROM usuarios WHERE id = ?";
$stmt = mysqli_prepare($con, $query);
mysqli_stmt_bind_param($stmt, "i", $user_id);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
$user = mysqli_fetch_assoc($result);

mysqli_stmt_close($stmt);
mysqli_close($con);

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil - Coimbra MMA</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #000;
            color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .profile-container {
            background-color: #111;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(255, 255, 255, 0.2);
            width: 100%;
            max-width: 400px;
            text-align: center;
        }
        .profile-container h1 {
            color: #900;
        }
        .profile-container p {
            margin: 10px 0;
        }
        .profile-container a {
            color: #900;
            text-decoration: none;
            margin-top: 15px;
            display: inline-block;
            font-size: 0.9rem;
        }
        .profile-container a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="profile-container">
        <h1>Perfil do Usuário</h1>
        <?php if ($user): ?>
            <p><strong>Nome de Usuário:</strong> <?php echo htmlspecialchars($user['username']); ?></p>
            <p><strong>Email:</strong> <?php echo htmlspecialchars($user['email']); ?></p>
            <!-- Adicione mais informações do usuário conforme necessário -->
        <?php else: ?>
            <p>Usuário não encontrado.</p>
        <?php endif; ?>
        <a href="logout.php">Sair</a>
    </div>
</body>
</html>