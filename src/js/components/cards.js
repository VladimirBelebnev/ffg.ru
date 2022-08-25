const cards = () => {
    const cards = document.querySelectorAll('.player__card');

    cards.forEach(card => {
        card.addEventListener('touchstart', () => {
            cards.forEach(item => {
                item.querySelector('.player__front').style.transform = 'rotateY(0deg)';
                item.querySelector('.player__back').style.transform = 'rotateY(180deg)';
            });
            card.querySelector('.player__front').style.transform = 'rotateY(180deg)';
            card.querySelector('.player__back').style.transform = 'rotateY(360deg)';
        });
    });

    window.addEventListener('touchstart', event => {
        if (!event.target.closest('.player__card') || event.target.closest('.player__back')) {
            cards.forEach(card => {
                card.querySelector('.player__front').style.transform = 'rotateY(0deg)';
                card.querySelector('.player__back').style.transform = 'rotateY(180deg)';
            });
        }
    });
};

window.addEventListener('DOMContentLoaded', () => {
    cards();
});