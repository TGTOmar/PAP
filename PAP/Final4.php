<?php
session_start();
include('ligacao.php');
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
            background-color: #000;
            font-family: Arial, sans-serif;
            color: #fff;
        }

        .container {
            width: 100%;
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            background-color: #222;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(255, 0, 0, 0.5);
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .logo {
            margin-right: 10px;
            width: 50px;
        }

        h1 {
            font-size: 24px;
            margin-bottom: 20px;
            color: #ff0000;
        }

        form {
            display: flex;
            flex-direction: column;
            width: 100%;
        }

        input,
        select {
            margin-bottom: 15px;
            padding: 10px;
            border: 1px solid #ff0000;
            border-radius: 4px;
            font-size: 14px;
            background-color: #444;
            color: #fff;
        }

        button {
            padding: 10px;
            background-color: #ff0000;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #cc0000;
        }

        .error {
            color: #ffcc00;
            margin-bottom: 15px;
        }
    </style>
</head>

<body>
    <div class="container">
        <img src="images.png" alt="Logotipo" class="logo"> <!-- Adicionando logotipo -->
        <h1>Novo Registo</h1>
    </div>

    <div class="container">
        <form method="POST" action="inserir.php">
            <input type="text" name="username" placeholder="Nome de Utilizador" required>
            <input type="text" name="surname" placeholder="Apelido" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Palavra-passe" required>
            <input type="password" name="confirmPassword" placeholder="Confirmar Palavra-passe" required>
            <input type="text" name="nif" placeholder="NIF (9 dígitos)" required>
            <input type="text" name="phone" placeholder="Número de Telemóvel" required>
            <input type="date" name="dob" placeholder="Data de Nascimento" required>
            <select name="gender" required>
                <option value="">Selecione o Sexo</option>
                <option value="Masculino">Masculino</option>
                <option value="Feminino">Feminino</option>
            </select>
            <input type="text" name="postalCode" placeholder="Código Postal (1234-567)" required>
            <select name="accountType" required>
                <option value="">Tipo de Conta</option>
                <option value="Particular">Particular</option>
                <option value="Empresarial">Empresarial</option>
            </select>
            <div>
                <input type="checkbox" name="acceptTerms" required>
                <label for="acceptTerms">Aceito os <a href="termos.php" target="_blank">Termos e Condições</a></label>
            </div>
            <button type="submit">Registrar</button>
        </form>
    </div>
</body>

</html>

