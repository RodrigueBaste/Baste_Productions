function openPopup(elementId) {
    const popup = document.getElementById(elementId);
    popup.style.display = 'flex';
    window.addEventListener('keydown', function(event) {
        if (event.key === 'Escape') {
            closePopup(elementId);
        }
    });
}

function closePopup(elementId) {
    const popup = document.getElementById(elementId);
    popup.style.display = 'none';
    window.removeEventListener('keydown', function(event) {
        if (event.key === 'Escape') {
            closePopup(elementId);
        }
    });
}
