<?php
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';
require 'PHPMailer/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $formation = $_POST['formation'];

    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->Host       = 'smtp.orange.fr';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'saf97@orange.fr';
        $mail->Password   = 'Secassfor97!'; // à remplacer par mot de passe ou mot de passe d'application
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;

        $mail->setFrom('saf97@orange.fr', 'SAF97');
        $mail->addAddress($email);

        $mail->Subject = 'Confirmation d\'inscription';
        $mail->Body    = "Bonjour $prenom $nom,\n\nVotre inscription à la formation $formation est bien enregistrée.";

        $mail->send();
        echo 'Inscription réussie. Un mail de confirmation vous a été envoyé.';
    } catch (Exception $e) {
        echo "Erreur lors de l'envoi du mail : {$mail->ErrorInfo}";
    }
}
?>