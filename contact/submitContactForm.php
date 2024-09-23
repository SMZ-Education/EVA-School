<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize input data to prevent XSS attacks
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Email details
    $to = "evaschool@yahoo.fr";
    $subject = "Nouveau message de contact de $name";
    
    // Compose the email message
    $email_message = "Nom: $name\n";
    $email_message .= "Email: $email\n";
    $email_message .= "Message: \n$message\n";

    // Additional headers
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=utf-8\r\n";

    // Send email
    if (mail($to, $subject, $email_message, $headers)) {
        echo "Votre message a été envoyé avec succès!";
    } else {
        echo "Une erreur s'est produite lors de l'envoi de votre message.";
    }
}
?>
