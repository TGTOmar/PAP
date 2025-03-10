
<?php
session_start();

// Verificar se o formulário foi submetido
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = htmlspecialchars($_POST["username"]);
    $surname = htmlspecialchars($_POST["surname"]);
    $email = htmlspecialchars($_POST["email"]);
    $password = htmlspecialchars($_POST["password"]);
    $confirmPassword = htmlspecialchars($_POST["confirmPassword"]);
    $nif = htmlspecialchars($_POST["nif"]);
    $phone = htmlspecialchars($_POST["phone"]);
    $dob = htmlspecialchars($_POST["dob"]);
    $gender = htmlspecialchars($_POST["gender"]);
    $postalCode = htmlspecialchars($_POST["postalCode"]);
    $accountType = htmlspecialchars($_POST["accountType"]);
    $acceptTerms = isset($_POST["acceptTerms"]) ? $_POST["acceptTerms"] : '';

    // Mensagem de erro padrão
    $errorMessage = "";

    // Validação dos campos
    if ($password !== $confirmPassword) {
        $errorMessage = "As palavras-passe não coincidem.";
    } elseif (strlen($username) < 3) {
        $errorMessage = "O nome de utilizador deve ter pelo menos 3 caracteres.";
    } elseif (strlen($password) < 6) {
        $errorMessage = "A palavra-passe deve ter pelo menos 6 caracteres.";
    } elseif (!preg_match("/^\d{9}$/", $nif)) {
        $errorMessage = "O NIF deve conter exatamente 9 dígitos.";
    } elseif (!preg_match("/^\d{9}$/", $phone)) {
        $errorMessage = "O número de telemóvel deve conter exatamente 9 dígitos.";
    } elseif (empty($dob)) {
        $errorMessage = "A data de nascimento é obrigatória.";
    } elseif (empty($gender)) {
        $errorMessage = "O sexo é obrigatório.";
    } elseif (!preg_match("/^\d{4}-\d{3}$/", $postalCode)) {
        $errorMessage = "O Código Postal deve estar no formato 1234-567.";
    } elseif ($acceptTerms !== 'on') {
        $errorMessage = "Você deve aceitar os termos e condições para se registrar.";
    }

    // Se não há erros, exibe a mensagem de sucesso e salva os dados
    if (empty($errorMessage)) {
        echo "<h2>Registro efetuado com sucesso!</h2>";
        echo "<p><strong>Nome de Utilizador:</strong> $username</p>";
        echo "<p><strong>Apelido:</strong> $surname</p>";
        echo "<p><strong>Email:</strong> $email</p>";
        echo "<p><strong>NIF:</strong> $nif</p>";
        echo "<p><strong>Número de Telemóvel:</strong> $phone</p>";
        echo "<p><strong>Data de Nascimento:</strong> $dob</p>";
        echo "<p><strong>Sexo:</strong> $gender</p>";
        echo "<p><strong>Código Postal:</strong> $postalCode</p>";
        echo "<p><strong>Tipo de Conta:</strong> $accountType</p>";

        // Salvar os dados no arquivo
        $file = fopen("usuarios.txt", "a");
        $line = "$username,$surname,$email,$nif,$phone,$dob,$gender,$postalCode,$accountType\n";
        fwrite($file, $line);
        fclose($file);

        // Exibir botão para ir à página de todos os usuários
        echo '<a href="listar_usuarios.php">Ver todos os usuários registrados</a>';

        exit; // Parar a execução do código para não exibir o formulário novamente
    }
}
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Página de Registro Moderna">
    <title>Registro de Utilizador</title>
    <style>
        body {
            background-color: #f9f9f9;
            font-family: Arial, sans-serif;
        }
        .container {
            width: 100%;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            font-size: 24px;
            margin-bottom: 20px;
            color: #333;
        }
        form {
            display: flex;
            flex-direction: column;
        }
        input, select {
            margin-bottom: 15px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 14px;
        }
        button {
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover {
            background-color: #45a049;
        }
        .error {
            color: red;
            margin-bottom: 15px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Novo Registro</h1>
        <form method="POST" action="">
            <input type="text" name="username" placeholder="Nome de Utilizador" required>
            <input type="text" name="surname" placeholder="Apelido" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Palavra-passe" required>
            <input type="password" name="confirmPassword" placeholder="Confirmar Palavra-passe" required>
            <input type="text" name="nif" placeholder="NIF" required>
            <input type="text" name="phone" placeholder="Número de Telemóvel" required>
            <input type="date" name="dob" required>
            <select name="gender" required>
                <option value="">Selecione o Sexo</option>
                <option value="Masculino">Masculino</option>
                <option value="Feminino">Feminino</option>
            </select>
            <select name="accountType" required>
                <option value="">Tipo de Conta</option>
                <option value="Particular">Particular</option>
                <option value="Empresarial">Empresarial</option>
            </select>
            <input type="text" name="postalCode" placeholder="Código Postal" required>
            <div>
                <input type="checkbox" name="acceptTerms" required>
                <label for="acceptTerms">Aceito os <a href="termos.html" target="_blank">Termos e Condições</a></label>
            </div>
            <button type="submit">Registrar</button>
            <div class="error"><?php echo isset($errorMessage) ? $errorMessage : ''; ?></div>
        </form>
    </div>
</body>
</html>
