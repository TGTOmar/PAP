<?php
session_start();

// Conectar à base de dados
include("ligacao.php");

// Verificar se os dados do formulário foram enviados
if (!isset($_POST['username']) && !isset($_POST['password'])) {
    die("Erro: Dados do formulário não enviados.");
}

$user = trim($_POST['username']);
$pass = trim($_POST['password']);


// Preparar consulta segura
$sql = "SELECT * FROM usuarios WHERE username = '$user'";
$result = mysqli_query($con,$sql);

if (!$result) {
    echo "Erro ao executar a query!";
}

$num_obetido = mysqli_num_rows($result);


if ($num_obetido > 0 ) {

    $user_data = mysqli_fetch_assoc($result);
    
    // Verificar a senha corretamente
    $pwdHASH = hash("sha512", $pass);

    if($pwdHASH == $user_data['password']) { // Use === para comparação exata
        $_SESSION['user_id'] = $user_data['id'];
        header("Location: Login.php");
        exit();
    }   
}

// Exibir alerta e redirecionar caso falhe
echo "<script>
        alert('Nome de usuário ou senha incorretos!');
        window.location.href = 'Pagina_login.php'; // Certifique-se de que o nome do arquivo está correto
      </script>";

mysqli_close($con);
?>
