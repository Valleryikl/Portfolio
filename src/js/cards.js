const cards = document.querySelectorAll('.card');

cards.forEach(card => {
    let offsetX, offsetY, isDragging = false;

    card.addEventListener('mousedown', (e) => {
        isDragging = true;
        offsetX = e.clientX - card.offsetLeft;
        offsetY = e.clientY - card.offsetTop;
        card.style.zIndex = 1000;
    });

    document.addEventListener('mousemove', (e) => {
        if (!isDragging) return;
        card.style.left = (e.clientX - offsetX) + 'px';
        card.style.top = (e.clientY - offsetY) + 'px';
    });

    document.addEventListener('mouseup', () => {
        isDragging = false;
        card.style.zIndex = '';
    });
});