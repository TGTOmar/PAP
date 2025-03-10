<?php
session_start();

// Só destrói a sessão se o usuário confirmar no JavaScript
if (isset($_GET['logout'])) {
    unset($_SESSION['carrinho']); // Esvazia o carrinho
    session_destroy();
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página com Logout</title>
</head>
<body>

    <a href="#" onclick="confirmarLogout()">Logout</a>

    <script>
        function confirmarLogout() {
            if (confirm("Tem a certeza que quer sair?")) {
                window.location.href = "logout.php?logout=true";
            }
        }
    </script>

</body>
</html>
