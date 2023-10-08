// Animation d'apparition des sections
// on declare les variables ici pour les modifier qu'une seule fois
let delayReveal = 700;
let durationReveal = 1000;


/*==================== scroll reveal ====================*/
ScrollReveal().reveal(".home", {
    duration: 1000, // Duration of the animation in milliseconds
    origin: 'bottom', // Animation starting point (bottom of the element)
    distance: '20px', // Distance the element moves during the animation
    delay: delayReveal, // Delay before the animation starts
    easing: 'cubic-bezier(0.5, 0, 0, 1)', // Easing function for the animation
  });
  ScrollReveal().reveal(".about", {
    duration: 1000, // Duration of the animation in milliseconds
    origin: 'bottom', // Animation starting point (bottom of the element)
    distance: '20px', // Distance the element moves during the animation
    delay: delayReveal, // Delay before the animation starts
    easing: 'cubic-bezier(0.5, 0, 0, 1)', // Easing function for the animation
  });
  ScrollReveal().reveal(".services", {
    duration: 1000, // Duration of the animation in milliseconds
    origin: 'bottom', // Animation starting point (bottom of the element)
    distance: '20px', // Distance the element moves during the animation
    delay: delayReveal, // Delay before the animation starts
    easing: 'cubic-bezier(0.5, 0, 0, 1)', // Easing function for the animation
  });
  ScrollReveal().reveal(".portfolio", {
    duration: 1000, // Duration of the animation in milliseconds
    origin: 'bottom', // Animation starting point (bottom of the element)
    distance: '20px', // Distance the element moves during the animation
    delay: delayReveal, // Delay before the animation starts
    easing: 'cubic-bezier(0.5, 0, 0, 1)', // Easing function for the animation
  });
  ScrollReveal().reveal(".contact", {
    duration: 1000, // Duration of the animation in milliseconds
    origin: 'bottom', // Animation starting point (bottom of the element)
    distance: '20px', // Distance the element moves during the animation
    delay: delayReveal, // Delay before the animation starts
    easing: 'cubic-bezier(0.5, 0, 0, 1)', // Easing function for the animation
  });