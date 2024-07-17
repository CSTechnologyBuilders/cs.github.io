<?php
// Récupération des données du formulaire
$email = $_POST['email'];
$name = $_POST['name'];
$company = $_POST['company'];
$number = $_POST['number'];
$object = $_POST['object'];
$message = $_POST['message'];

// Destinataire de l'e-mail
$to = 'info@cstechnologybuilders.com';

// Sujet de l'e-mail
$subject = 'Nouvelle soumission de formulaire de contact';

// Construction du corps de l'e-mail
$email_body = "Vous avez reçu une nouvelle soumission de formulaire de contact :\n\n";
$email_body .= "Nom: $name\n";
$email_body .= "Email: $email\n";
$email_body .= "Nom de l'entreprise: $company\n";
$email_body .= "Numéro de téléphone: $number\n";
$email_body .= "Objet de la requête: $object\n";
$email_body .= "Message:\n$message\n";

// En-têtes de l'e-mail
$headers = "From: $email\r\n";
$headers .= "Reply-To: $email\r\n";

// Envoi de l'e-mail
if (mail($to, $subject, $email_body, $headers)) {
    echo "Votre message a bien été envoyé.";
} else {
    echo "Une erreur s'est produite lors de l'envoi du message.";
}
?>
