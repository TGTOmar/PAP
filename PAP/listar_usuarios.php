<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuários Registrados</title>
    <style>
        body {
            background-color: #f9f9f9;
            font-family: Arial, sans-serif;
        }
        .container {
            width: 100%;
            max-width: 800px;
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
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Usuários Registrados</h1>
        <table>
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Apelido</th>
                    <th>Email</th>
                    <th>NIF</th>
                    <th>Telefone</th>
                    <th>Data de Nascimento</th>
                    <th>Sexo</th>
                    <th>Código Postal</th>
                    <th>Tipo de Conta</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Verificar se o arquivo existe
                if (file_exists("usuarios.txt")) {
                    $file = fopen("usuarios.txt", "r");
                    
                    // Ler cada linha do arquivo e exibir os dados
                    while (($line = fgets($file)) !== false) {
                        $userData = explode(",", $line);
                        echo "<tr>";
                        echo "<td>" . htmlspecialchars($userData[0]) . "</td>";
                        echo "<td>" . htmlspecialchars($userData[1]) . "</td>";
                        echo "<td>" . htmlspecialchars($userData[2]) . "</td>";
                        echo "<td>" . htmlspecialchars($userData[3]) . "</td>";
                        echo "<td>" . htmlspecialchars($userData[4]) . "</td>";
                        echo "<td>" . htmlspecialchars($userData[5]) . "</td>";
                        echo "<td>" . htmlspecialchars($userData[6]) . "</td>";
                        echo "<td>" . htmlspecialchars($userData[7]) . "</td>";
                        echo "<td>" . htmlspecialchars($userData[8]) . "</td>";
                        echo "</tr>";
                    }

                    fclose($file);
                } else {
                    echo "<tr><td colspan='9'>Nenhum usuário registrado.</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>