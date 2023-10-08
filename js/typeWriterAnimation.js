function typewriterAnimation(elementId, phrases, speedUp, normalSpeed) {
  const textToDisplay = document.getElementById(elementId);
  let i = 0;
  let j = 0;
  let currentPhrase = [];
  let isDeleting = false;
  let isEnd = false;

  function loop() {
    isEnd = false;
    textToDisplay.innerHTML = currentPhrase.join('');

    if (i < phrases.length) {
      if (!isDeleting && j <= phrases[i].length) {
        currentPhrase.push(phrases[i][j]);
        j++;
        textToDisplay.innerHTML = currentPhrase.join('');
      }

      if (isDeleting && j <= phrases[i].length) {
        currentPhrase.pop(phrases[i][j]);
        j--;
        textToDisplay.innerHTML = currentPhrase.join('');
      }

      if (j == phrases[i].length) {
        isEnd = true;
        isDeleting = true;
      }

      if (isDeleting && j === 0) {
        currentPhrase = [];
        isDeleting = false;
        i++;
        if (i == phrases.length) {
          i = 0;
        }
      }
    }

    const randomSpeed = Math.random() * (speedUp - normalSpeed) + normalSpeed;
    const time = isEnd ? 2000 : isDeleting ? randomSpeed : normalSpeed;
    setTimeout(loop, time);
  }

  loop();
}

// ajout des phrases ici 
const phrasesHome = [
  'I am more than motivated to go to engineering school.',
  'I am a BTS SIO student specializing in <span class="cursor">Software Solutions and Business Applications</span>. <p>I\'m on my way to ingeneering school.<span class="cursor">|</span></p>'
];
const phrasesAbout = [
  'About <span>Me</span><h3>BTS SIO SLAM student</h3>'
];

// execution de la fontion ici
// pour accelerer il faut diminuer les valeurs speedUp et normalSpeed
typewriterAnimation('typewriterHome', phrasesHome, 10, 50);
typewriterAnimation('typewriterAbout', phrasesAbout, 30, 100);
