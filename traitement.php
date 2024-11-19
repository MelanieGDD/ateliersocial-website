<?php
// Récupération des données du formulaire
$nom = $_POST['nom'];
$email = $_POST['email'];
$message = $_POST['message'];

// Configuration pour l'envoi des emails
$to = "melanietravaille@gmail.com"; // Adresse destinataire
$subject = "Nouveau message depuis votre site web";
$headers = "From: $nom <$email>\r\n";

// Envoi de l'email à l'administrateur
mail($to, $subject, $message, $headers);

// Envoi d'un email de confirmation à l'utilisateur
$to_user = $email;
$subject_user = "Confirmation de votre message";
$message_user = "Nous avons bien reçu votre message. Nous vous répondrons dans les meilleurs délais.";
mail($to_user, $subject_user, $message_user, $headers);

// Message de confirmation à afficher sur la page
echo "Votre message a été envoyé avec succès.";
?>
