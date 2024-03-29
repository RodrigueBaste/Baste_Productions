<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Rodrigue BASTE - Software dev student</title>
    <!-- box icons-->
    <link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"
    />
    <!-- custom css-->
    <link rel="stylesheet" href="css/style.css" />

  </head>
<!-- <body onload="changerCouleur()"> -->
  <body>
    <header class="header">
      <a href="#" class="logo">Portfolio</a>
      <!-- <p class="hellouser"> 
      <?php 
      

      if(isset($_REQUEST['submitbtn']))
      {
          // Récupérer les données du formulaire

        echo "Hi " . $_SESSION['nom'] . " !";

      }
      ?>
      </p> -->

      <i class="bx bx-menu" id="menu-icon"></i>

      <nav class="navbar" >
        <a href="#home" class="active">Home</a>
        <a href="#about">About</a>
        <a href="#services">My skills</a>
        <a href="#portfolio">Projects</a>
        <a href="#contact">Contact Me</a>
      </nav>
    </header>

    <div id="preloader"></div>

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
        <img src="images/home.png" class="levitatingElement"/>
      </div>
    </section>

    <!-- about section design -->
    <section class="about" id="about">
      <div class="about-img">
        <img src="images/home.png" alt="aboutimg" class="levitatingElement"/>
      </div>

      <div class="about_content">
        <h2 class="heading" id="typewriterAbout">About <span>Me</span></h2>
        <p>
          I'm passionate about IT and I'm in the process of carving out my own path with the <span>BTS SIO development option</span>. <br />My thirst for learning
          and determination have enabled me to acquire knowledge of several
          several programming languages, including
          <span
            >HTML, css, C, C++,Python, JavaScript, GDscript, Unreal Visual
            script, et SQL</span
          >. <br />My self-taught background has enabled me to develop
          ability to adapt and learn quickly, as well as a high degree of
          autonomy in my projects. I'm open to collaboration,
          exciting projects and environments that encourage continuous
          growth and continuous learning.
        </p>
        <a href="#" class="btn">Read More</a>
      </div>
    </section>

    <!-- services section design -->
    <section class="services" id="services">
      <h2 class="heading">My <span>Skills</span></h2>      
      <div class="services-container">
        <div class="services-box">
          <i class="bx bx-code-alt"></i>
          <h3>Web Development</h3>
          <p>
            <span>languages</span> mastered :
            <ol>Html</ol>
            <ol>css</ol>
            <ol>JavaScript</ol>
            <ol>PHP</ol>
          </p>
          <a href="#" class="btn" onclick="openPopup('popupWebDev')">Read More</a>
          
        </div>

        <div class="services-box">
          <i class="bx bxs-game"></i>
          <h3>Game Design</h3>
          <p>
            unlocked <span>mastery</span> :
            <ol>Godot</ol>
            <ol>C#</ol>
            <ol>Unreal visual script</ol>
            <ol>Blender</ol>
            <ol>Unreal engine</ol>
            <ol>Adobe Substance painter</ol>
          </p>
          <a href="#" class="btn" onclick="openPopup('popupGameDesign')">Read More</a>
          
        </div>

        <div class="services-box">
          <i class='bx bxs-data'></i>
          <h3>Database</h3>
          <p>
            <span>Databases</span> related skills :
            <ol>SQL</ol>
            <ol>MySQL</ol>
            <ol>Mariadb</ol>
            <ol>UML</ol>
            <ol>MERISE</ol>
          </p>
          <a href="#" class="btn" onclick="openPopup('popupDatabase')">Read More</a>
        </div>

        <div class="services-box">
          <i class='bx bxs-cog'></i>
          <h3>Software</h3>
          <p>
            <span>Software</span> related skills :
            <ol>Python</ol>
            <ol>C</ol>
            <ol>C++</ol>
            <ol>JavaScript</ol>
            <ol>Angular</ol>
            <ol>React Native</ol>
          </p>
          <a href="#" class="btn" onclick="openPopup('popupSoftware')">Read More</a>
        </div>

        <!-- contenu du popup -->
        <div id="popupSoftware" class="popup">
          <div class="popup-content">
            <a class="btn" onclick="closePopup('popupSoftware')"> Close</a>
            <h1>Acquisition :</h1>
            <ol>
              <h2>C, Python : </h2>
              <p> Acquired during 2 years in my <span> degree in physics, chemistry and engineering science</span> and 1 year through personal learning.</p>
              <h2>C++ : </h2>
              <p> Acquired during 1 years through personal learning.</p>
              <h2>C# : </h2>
              <p> Acquired during 1 year through <span>personal learning</span> and during my <span> diploma as a higher technician in IT services for organizations, software solutions and business applications</span>.</p>
              <h2>JavaScript : </h2>
              <p> Acquired over 1 year during my <span> diploma as a higher technician in IT services for organizations, software solutions and business applications</span> and 1 year during my <span>self learning</span>.</p>
            </ol>
          </div>
        </div>

        <div id="popupDatabase" class="popup">
          <div class="popup-content">
            <a class="btn" onclick="closePopup('popupDatabase')"> Close</a>
            <h1>Acquisition :</h1>
            <ol>
              <h2>SQL, MySQL, Mariadb, Database design and management : </h2>
              <p> Acquired over 1 year during my <span> diploma as a higher technician in IT services for organizations, software solutions and business applications</span>.</p>
            </ol>
          </div>
        </div>
        <div id="popupGameDesign" class="popup">
          <div class="popup-content">
            <a class="btn" onclick="closePopup('popupGameDesign')"> Close</a>
            <h1>Acquisition :</h1>
            <ol>
              <h2>Godot, C#, Unreal Visual Script : </h2>
              <p> Acquired over 2 years of <span>self-study</span> and <span>game projects</span>.</p>
              <h2>Blender, Unreal engine, Abode Substance Painter  : </h2>
              <p> Acquired over 4 years of <span>self-study</span> and <span>game projects</span>.</p>
            </ol>
          </div>
        </div>
        
        <div id="popupWebDev" class="popup">
          <div class="popup-content">
            <a class="btn" onclick="closePopup('popupWebDev')"> Close</a>
            <h1>Acquisition :</h1>
            <ol>
              <h2>HTML5, PHP and CSS : </h2>
              <p> Acquired over 1 year during my <span> diploma as a higher technician in IT services for organizations, software solutions and business applications</span>.</p>
              <h2>JavaScript : </h2>
              <p> Acquired over 1 year during my <span> diploma as a higher technician in IT services for organizations, software solutions and business applications</span> and 1 year during my <span>self learning</span>.</p>
              <h2>Angular, React native</h2>
              <p> Acquired during 1 year during my <span>self learning</span>.</p>
            </ol>
          </div>
        </div>

      </div>
    </section>

    <!-- Portfolio section design -->
    <section class="portfolio" id="portfolio" style="background : about: .color">
      <h2 class="heading">Latest <span>Project</span></h2>

      <div class="portfolio-container">

        <!-- premier portfolio -->

        <div class="portfolio-box">
          <img
            src="images/portfolio1.jpg"
            alt="inspiration photo form Hideo Kojima's work"
          />
          <div class="portfolio-layer">
            <h4>Web Design</h4>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet,
              sint.
            </p>
            <a href="#"><i class="bx bx-link-alt"></i></a>
          </div>
        </div>

        <!-- deuxieme portfolio -->

        <div class="portfolio-box">
          <img src="images\portfolioGame.jpg" alt="portfolio1" />
          <div class="portfolio-layer">
            <h4>Game Design</h4>
            <p>
              J'ai développé un jeu avec le moteur d'Unrel engine 5.0 (portage vers 5.2 bientôt terminé)
            </p>
            <a href="GameDocument Design.html" target="_blank"><i class="bx bx-link-alt"></i></a>
          </div>
        </div>
      </div>

    </div>
    </section>

    <!-- contact section design-->
    <section class="contact" id="contact">
      <h2 class="heading">Contact <span>Me !</span></h2>
      <form action="donneeForm.php" method="post" target="blank">
        <div class="input-box">
          <input type="text" placeholder="Full Name" name="nom" required/>
          <input type="email" placeholder="Email Address" name="email" required/>
        </div>
        <div class="input-box">
          <input type="text" placeholder="Phone number" name="phone" required/>
          <input type="text" placeholder="Email Subject" name="message" required/>
        </div>
        <textarea
          name="message"
          id="textareaid"
          cols="30"
          rows="10"
          placeholder="Your Message here"
        ></textarea>
        <input type="submit" value="Send Message" class="btn" name="submitbtn"/>
      </form>
    </section>

    <!-- footer section design  -->
    <footer class="footer" style="color : about: .color;">
      <div class="footer-text">
        <p>Copyright &copy; 2023 by Baste Rodrigue | All rights reserved.</p>
      </div>
      <div class="footer-iconTop">
        <a href="#home"><i class="bx bxs-up-arrow-circle"></i></a>
      </div>
    </footer>


    <!-- requete php ici -->

    <?php
    if (isset($_REQUEST['submitbtn'])) {
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
    }
    
    ?>

    <!-- chargement des scripts -->
    <!-- les scripts doivent etre chargé avant leur execution -->
    <script src="https://unpkg.com/scrollreveal@4.0.7/dist/scrollreveal.min.js"></script>
    <script src="js/script.js"></script>
    <script src="js/revealAnimation.js"></script>
    <script src="js/typeWriterAnimation.js"></script>
    <script src="js/cycledColorChange.js"></script>
    <script src="js/smoothscroll.js"></script>
    <script src="js/levitatingElement.js"></script>
    <script src="js/popup.js"></script>
    <script src="js/preloader.js"></script>

    <!-- execution des scripts -->

  </body>
</html>