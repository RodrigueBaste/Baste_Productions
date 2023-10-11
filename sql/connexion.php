<?php

    // Connexion à la base de données
    $servername = "localhost";
    $username = "id21380302_rodriguebaste";
    $password = "HunterXHunter2011!";
    $dbname = "id21380302_portfolio";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Vérifier la connexion
    if ($conn->connect_error) {
        die("La connexion a échoué : " . $conn->connect_error);
    }

    // Fermer la connexion à la base de données
    // $conn->close();
?>