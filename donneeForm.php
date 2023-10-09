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

      <i class="bx bx-menu" id="menu-icon"></i>

      <nav class="navbar" >
        <a href="#home" class="active">Home</a>
        <a href="#about">About</a>
        <a href="#services">My skills</a>
        <a href="#portfolio">Portfolio</a>
        <a href="#contact">Contact</a>
      </nav>
    </header>

    </div>

    <!-- home section design -->
    <section class="home" id="home">
      <div class="home-content">
        <h3>Hello,</h3>
        <h1>My name is Rodrigue Baste</h1>
        <h3 id="typewriterHome"></h3>
        <div class="social-media" >
          <a href="https://www.facebook.com/Alexis.R.Baste/" target="_blank"><i class="bx bxl-facebook-circle"></i></a>
          <a href="#"><i class="bx bxl-twitter"></i></a>
          <a href="https://www.instagram.com/baste_alexis/" target="_blank"><i class="bx bxl-instagram-alt"></i></a>
          <a href="https://www.linkedin.com/in/rodrigue-b-81a615116/" target="_blank"><i class="bx bxl-linkedin"></i></a>
        </div>
        <a href="documents\CV.pdf" class="btn" target="_blank" >Download CV</a>
      </div>
      <div class="home-img">
        <img src="images/home.png" alt="" class="levitatingElement"/>
      </div>
    </section>

    <!-- thanks message after posting the form -->
    <?php
    // Récupérer les données du formulaire
    $nom = $_POST['nom'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    // Connexion à la base de données
    $servername = "192.168.1.11";
    $username = "root";
    $password = "*******";
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


