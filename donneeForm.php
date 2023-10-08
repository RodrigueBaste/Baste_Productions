<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
// Récupérer les données du formulaire
$nom = $_POST['nom'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

// Connexion à la base de données
$servername = "192.168.1.11";
$username = "root";
$password = "HunterX2011!";
$dbname = "contacts";

$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifier la connexion
if ($conn->connect_error) {
    die("La connexion a échoué : " . $conn->connect_error);
}

// Préparer et exécuter la requête SQL
$sql = "INSERT INTO nom_de_votre_table (nom, email, phone, message) VALUES ('$nom', '$email', '$phone', '$message')";

if ($conn->query($sql) === TRUE) {
    echo "Enregistrement créé avec succès.";
} else {
    echo "Erreur : " . $sql . "<br>" . $conn->error;
}

// Fermer la connexion à la base de données
$conn->close();
?>
</body>
</html>