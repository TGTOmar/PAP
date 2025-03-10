<?php
session_start();    
include('ligacao.php');

?>


<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Coimbra MMA</title>
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
        .login-container {
            background-color: #111;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(255, 255, 255, 0.2);
            width: 100%;
            max-width: 400px;
            text-align: center;
            position: relative;
        }
        .header {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 20px;
        }
        .header img {
            width: 50px;
            height: auto;
            margin-right: 10px;
        }
        .header h1 {
            font-size: 1.8rem;
            color: #900;
            margin: 0;
        }
        .login-container form {
            display: flex;
            flex-direction: column;
        }
        .login-container input {
            padding: 12px;
            margin: 10px 0;
            border: none;
            border-radius: 5px;
            font-size: 1rem;
            background-color: #222;
            color: #fff;
        }
        .login-container input::placeholder {
            color: #aaa;
        }
        .login-container button {
            padding: 12px;
            background-color: #900;
            color: #fff;
            border: none;
            border-radius: 5px;
            font-size: 1rem;
            cursor: pointer;
            transition: background-color 0.3s ease;
            font-weight: bold;
        }
        .login-container button:hover {
            background-color: #700;
        }
        .login-container a {
            color: #900;
            text-decoration: none;
            margin-top: 15px;
            display: inline-block;
            font-size: 0.9rem;
        }
        .login-container a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <div class="header">
            <img src="images.png" alt="Logotipo Coimbra MMA">
            <h1>Login</h1>
        </div>
        <form action="process_login.php" method="POST">
            <input type="text" name="username" id="username" placeholder="Nome de usuário" required>
            <input type="password" name="password" id="password" placeholder="Senha" required>
            <button type="submit">Entrar</button>
        </form>
        <a href="Final4.php">Não tem conta? Cadastre-se</a>
    </div>


    
</body>
</html>
