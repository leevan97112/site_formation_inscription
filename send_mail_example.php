<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

$mail = new PHPMailer(true);

try {
    $mail->isSMTP();
    $mail->Host       = 'smtp.orange.fr';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'saf97@orange.fr';
    $mail->Password   = 'Secassfor97!';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port       = 587;

    $mail->setFrom('saf97@orange.fr', 'SAF 97');
    $mail->addAddress('destinataire@example.com');

    $mail->Subject = 'Confirmation d\'inscription';
    $mail->Body    = 'Merci pour votre inscription à la formation.';

    $mail->send();
    echo 'Inscription réussie. Un mail de confirmation a été envoyé.';
} catch (Exception $e) {
    echo "Erreur lors de l\'envoi du mail : {$mail->ErrorInfo}";
}
?>