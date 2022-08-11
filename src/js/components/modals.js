const modals = () => {
    const questionModal = document.querySelector('.modal-question'),
          btnQuestionModal = document.querySelector('.modal-question__btn'),
          closeBtnQuestionModal = document.querySelector('.modal-question .modal__close'),
          scroll = calcScroll();

    const showModal = (selector) => {
        selector.classList.remove('hidden');
        // document.body.style.marginRight = `${scroll}px`;
    };

    const hideModal = (selector) => {
        selector.classList.add('hidden');
        // document.body.style.marginRight = '0px';
    };

    btnQuestionModal.addEventListener('click', () => {
        showModal(questionModal);
    });

    closeBtnQuestionModal.addEventListener('click', () => {
        hideModal(questionModal);
    });

    questionModal.addEventListener('click', (event) => {
        if (event.target === questionModal) {
            hideModal(questionModal);
        }
    });

    document.addEventListener('keydown', (event) => {
        if (event.code === 'Escape' && questionModal) {
            hideModal(questionModal);
        }
    });

    function calcScroll() {
        let div = document.createElement('div');

        div.style.width = '50px';
        div.style.height = '50px';
        div.style.overflowY = 'scroll';
        div.style.visibility = 'hidden';

        document.body.appendChild(div);

        let scrollWidth = div.offsetWidth - div.clientWidth;
        div.remove();

        return scrollWidth;
    }
};

modals();