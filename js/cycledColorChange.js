function shuffle(array) {
  for (let i = array.length - 1; i > 0; i--) {
    const j = Math.floor(Math.random() * (i + 1));
    [array[i], array[j]] = [array[j], array[i]];
  }
}
function changerCouleur() {
  let couleurs = [
    getComputedStyle(document.documentElement).getPropertyValue("--fith_color"),
    getComputedStyle(document.documentElement).getPropertyValue("--second-color"),
    getComputedStyle(document.documentElement).getPropertyValue("--third-color"),
    getComputedStyle(document.documentElement).getPropertyValue("--fourth-color"),
    getComputedStyle(document.documentElement).getPropertyValue("--fith_color")
  ];

  //   changement des couleurs aléatoire ici
  // Shuffle the colors
  shuffle(couleurs);

  // Sélectionnez chaque elements individuellement
  let icons = document.querySelectorAll(".social-media i");
  let icons_a = document.querySelectorAll(".social-media a");
  let abouts = document.querySelectorAll(".about ");
  let portfolios = document.querySelectorAll(".portfolio");
  let links = document.querySelectorAll(".navbar a");
  let skills = document.querySelectorAll(".services-box");

  // Mélangez les couleurs une deuxieme fois
  couleurs.sort(function () {
    return 0.5 - Math.random();
  });


  //affectation des couleurs aux divers elements
  icons.forEach(function (icon) {
    let randomColor = couleurs[1];
    icon.style.color = randomColor;
  });

  icons_a.forEach(function (icon) {
    let randomColor = couleurs[1];

    icon.addEventListener("mouseenter", function () {
      this.style.background = randomColor;
    });

    icon.addEventListener("mouseleave", function () {
      this.style.background = "transparent";
    });
  });

  links.forEach(function (link) {
    let randomColor = couleurs[1];
    link.style.color = randomColor;
  });
  abouts.forEach(function (about) {
    let aboutSection = document.querySelector('.about');
    let randomColor = couleurs[1];
    aboutSection.style.backgroundColor = randomColor;
  });

  portfolios.forEach(function (portfolio) {
    let portfolioSection = document.querySelector('.portfolio');
    let randomColor = couleurs[1];
    portfolioSection.style.background = randomColor;
  });

  skills.forEach(function (skill) {
    let randomColor = couleurs[1];
    skill.style.background = randomColor;
  });

}
changerCouleur();