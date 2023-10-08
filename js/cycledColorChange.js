// script de changement de couleur
function changerCouleur() {
    // Récupérez les valeurs des variables couleurs CSS dynamiquement
    let fithColor = getComputedStyle(document.documentElement).getPropertyValue(
      "--fith_color"
    );
    let secondColor = getComputedStyle(document.documentElement).getPropertyValue(
      "--second-color"
    );
    let thirdColor = getComputedStyle(document.documentElement).getPropertyValue(
      "--third-color"
    );
    let fourthColor = getComputedStyle(document.documentElement).getPropertyValue(
      "--fourth-color"
    );
  
    //   changement des couleurs aléatoire ici
    // on implemente les couleurs du css dans les couleurs aléatoire
    let couleurs = [fithColor, secondColor, thirdColor, fourthColor, fithColor];
  
    // Sélectionnez chaque elements individuellement
    let icons = document.querySelectorAll(".social-media i");
    let icons_a = document.querySelectorAll(".social-media a");
    let abouts = document.querySelectorAll(".about");
    let portfolios = document.querySelectorAll(".portfolio");
    let links = document.querySelectorAll(".navbar a");
  
    // Mélangez les couleurs
    couleurs.sort(function () {
      return 0.5 - Math.random();
    });
  
    icons.forEach(function (icon, index) {
      let randomColor = couleurs[index];
      icon.style.color = randomColor;
    });
  
    icons_a.forEach(function (icon, index) {
      let randomColor = couleurs[index];
  
      icon.addEventListener("mouseenter", function () {
        this.style.background = randomColor;
      });
  
      icon.addEventListener("mouseleave", function () {
        this.style.background = "transparent";
      });
    });
  
    links.forEach(function (link, index) {
      let randomColor = couleurs[index];
      link.style.color = randomColor;
    });
  
    abouts.forEach(function (about, index) {
      let randomColor = couleurs[index];
      about.style.background = randomColor;
    });
  
    portfolios.forEach(function (portfolio, index) {
      let randomColor = couleurs[index];
      portfolio.style.background = randomColor;
    });

  }
  
  // Appelez la fonction changerCouleur au chargement de la page
  changerCouleur();