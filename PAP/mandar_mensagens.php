<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Destinatário
    $to = "omar07augusto@gmail.com";
    $subject = "Mensagem de Contato - Coimbra MMA";

    // Corpo do e-mail
    $body = "Nome: $name\n";
    $body .= "Email: $email\n";
    $body .= "Mensagem:\n$message\n";

    // Cabeçalhos
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "X-Mailer: PHP/" . phpversion();

    // Enviar e-mail
    if (mail($to, $subject, $body, $headers)) {
        echo "<script>alert('Mensagem enviada com sucesso!'); window.location.href='contato.php';</script>";
    } else {
        echo "<script>alert('Erro ao enviar a mensagem.'); window.location.href='contato.php';</script>";
    }
} else {
    header("Location: contato.php");
    exit();
}
?>
