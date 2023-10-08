function addLevitationEffectByClass(className) {
    const elements = document.querySelectorAll(`.${className}`);

    elements.forEach(element => {
        element.addEventListener('mouseover', () => {
            element.style.animation = 'levitate 0.5s infinite alternate';
        });

        element.addEventListener('mouseout', () => {
            element.style.animation = '';
        });
    });
}

// Elements affecté par cet effet 

addLevitationEffectByClass('levitatingElement');