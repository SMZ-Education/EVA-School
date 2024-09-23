<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $nom = htmlspecialchars($_POST['nom']);
    $prenom = htmlspecialchars($_POST['prenom']);
    $date_naissance = htmlspecialchars($_POST['date_naissance']);
    $lieu_naissance = htmlspecialchars($_POST['lieu_naissance']);
    $nationalite = htmlspecialchars($_POST['nationalite']);
    $prenom_pere = htmlspecialchars($_POST['prenom_pere']);
    $profession_pere = htmlspecialchars($_POST['profession_pere']);
    $prenom_mere = htmlspecialchars($_POST['prenom_mere']);
    $profession_mere = htmlspecialchars($_POST['profession_mere']);
    $repondant_financier = htmlspecialchars($_POST['repondant_financier']);
    $adresse = htmlspecialchars($_POST['adresse']);
    $tel_domicile = htmlspecialchars($_POST['tel_domicile']);
    $tel_portable = htmlspecialchars($_POST['tel_portable']);
    $boite_postale = htmlspecialchars($_POST['boite_postale']);

    // Email details
    $to = "evaschool@yahoo.fr";
    $subject = "Nouvelle inscription à l'École EVA";
    
    // Compose the email message
    $message = "Nom: $nom\n";
    $message .= "Prénom de l'enfant: $prenom\n";
    $message .= "Date de naissance: $date_naissance\n";
    $message .= "Lieu de naissance: $lieu_naissance\n";
    $message .= "Nationalité: $nationalite\n";
    $message .= "Prénom du père: $prenom_pere\n";
    $message .= "Profession du père: $profession_pere\n";
    $message .= "Prénom de la mère: $prenom_mere\n";
    $message .= "Profession de la mère: $profession_mere\n";
    $message .= "Répondant financier: $repondant_financier\n";
    $message .= "Adresse: $adresse\n";
    $message .= "Tel. Domicile: $tel_domicile\n";
    $message .= "Tel. Portable: $tel_portable\n";
    $message .= "Boîte Postale: $boite_postale\n";

    // Additional headers
    $headers = "From: no-reply@evaschool.com\r\n";
    $headers .= "Reply-To: no-reply@evaschool.com\r\n";
    $headers .= "Content-Type: text/plain; charset=utf-8\r\n";

    // Send email
    if (mail($to, $subject, $message, $headers)) {
        echo "Formulaire soumis avec succès!";
    } else {
        echo "Une erreur s'est produite lors de l'envoi du formulaire.";
    }
}
?>
