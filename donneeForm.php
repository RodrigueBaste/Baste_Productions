<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nom = $_REQUEST["nom"];
        $email = $_REQUEST["email"];
        $message = $_REQUEST["message"];

        $to = "rodrigue.baste@proton.me";
        $subject = "Nouveau message du formulaire de contact";
        $body = "Nom: $nom\nE-mail: $email\n\nMessage:\n$message";

        if (mail($to, $subject, $body)) {
            echo "Votre message a été envoyé avec succès.";
        } else {
            echo "Une erreur s'est produite lors de l'envoi du message.";
        }
    }
    ?>
</body>
</html>