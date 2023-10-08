// creation de la fonction d'animation de texte de style machine à écrire
function typeWriter(element, text, index, speed) {
  if (index < text.length) {
    element.innerHTML += text.charAt(index);
    index++;
    setTimeout(function () {
      typeWriter(element, text, index, speed);
    }, speed);
  }
}

let typewriter = document.getElementById("typewriter");

// Appeler la fonction typeWriter avec les éléments et les textes appropriés
typeWriter(typewriter, headline.innerText, 0, 50);