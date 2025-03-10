<?php
    session_start();

    require "ligacao.php";

    // Verificar se o formulário foi enviado
	if ($_SERVER["REQUEST_METHOD"] == "POST") {

		// Função de sanitização
		function test_input($data) {
			$data = trim($data); // Remove espaços em branco no início e no final
			$data = stripslashes($data); // Remove barras invertidas
			$data = htmlspecialchars($data, ENT_QUOTES, 'UTF-8'); // Converte caracteres especiais em HTML seguro
			return $data;
		}

		// Obter e sanitizar os dados do formulário
		$username = test_input($_POST['username']);
		$surname = test_input($_POST['surname']);
		$email = test_input($_POST['email']);
		$password = test_input($_POST['password']);
		$confirmPassword = test_input($_POST['confirmPassword']);
		$nif = test_input($_POST['nif']);
		$phone = test_input($_POST['phone']);
		$dob = test_input($_POST['dob']);
		$gender = test_input($_POST['gender']);
		$postalCode = test_input($_POST['postalCode']);
		$accountType = test_input($_POST['accountType']);
		
		// Validar dados
		if ($password !== $confirmPassword) {
			die("Erro: As palavras-passe não coincidem.");
		}

		// Inserir os dados na base de dados
		$sql = "INSERT INTO usuarios (username, surname, email, password, nif, phone, dob, gender, postalCode, accountType) 
				VALUES ('$username', '$surname', '$email', PASSWORD('$password'), '$nif', '$phone', '$dob', '$gender', '$postalCode', '$accountType')";


		if (mysqli_query($con, $sql)) {
			header("Location: Login.php");
		}
		else {
			header("Location: Login.php");
		}
	}

	

	// Fechar a conexão
	mysqli_close($con);
?>