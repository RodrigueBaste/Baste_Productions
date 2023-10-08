<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $servername = "192.168.1.11"; // L'adresse IP du serveur MySQL
    $username = "root"; // Le nom d'utilisateur MySQL
    $password = "HunterX2011!"; // Le mot de passe MySQL
    $dbname = "contacts"; // Le nom de la base de données
    
    // Établir une connexion
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    // Vérifier la connexion
    if ($conn->connect_error) {
      die("La connexion a échoué : " . $conn->connect_error);
    }
    
    echo "Connexion réussie";
    
    // Vous pouvez maintenant exécuter des requêtes SQL ici
    $sql = "SELECT * FROM nom_de_la_table";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
    // Traiter les données
    } else {
  echo "Aucun résultat trouvé";
}
    // Fermer la connexion
    $conn->close();




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