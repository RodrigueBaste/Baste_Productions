<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Responsive Portfolio</title>
    <!-- box icons-->
    <link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"
    />
    <!-- custom css-->
    <link rel="stylesheet" href="css/style.css" />

  </head>
<body onload="changerCouleur()">
    <header class="header">
      <a href="#" class="logo">Portfolio</a>
    </header>

    </div>

    <!-- thanks message after posting the form -->
    
    <?php
    // Récupérer les données du formulaire
    $nom = $_POST['nom'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

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

    // Préparer et exécuter la requête SQL
    $sql = "INSERT INTO clients (nom, email, phone, message) VALUES ('$nom', '$email', '$phone', '$message')";

    if ($conn->query($sql) === TRUE) {
        echo "Enregistrement créé avec succès.";
    } else {
        echo "Erreur : " . $sql . "<br>" . $conn->error;
    }

    // Fermer la connexion à la base de données
    $conn->close();
    ?>
    <div class="remerciement">

    <h1>Remerciements : </h1>
    <p>Merci <?= $nom ?> de vous etre enregistré.</p>
    </div>


    <!-- footer section design  -->
    <footer class="footer">
      <div class="footer-text">
        <p>Copyright &copy; 2023 by Baste Rodrigue | All rights reserved.</p>
      </div>
      <div class="footer-iconTop">
        <a href="#home"><i class="bx bxs-up-arrow-circle"></i></a>
      </div>
    </footer>

    <!-- chargement des scripts -->
    <!-- les scripts doivent etre chargé avant leur execution -->
    <script src="https://unpkg.com/scrollreveal@4.0.7/dist/scrollreveal.min.js"></script>
    <script src="js/script.js"></script>
    <script src="js/revealAnimation.js"></script>
    <script src="js/typeWriterAnimation.js"></script>
    <script src="js/cycledColorChange.js"></script>
    <script src="js/smoothscroll.js"></script>
    <script src="js/levitatingElement.js"></script>

    <!-- execution des scripts -->

  </body>
</html>