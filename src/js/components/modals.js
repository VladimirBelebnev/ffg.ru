const modals = () => {
    const questionModal = document.querySelector('.modal-question'),
          btnQuestionModal = document.querySelector('.modal-question__btn'),
          closeBtnQuestionModal = document.querySelector('.modal-question .modal__close');

    const showModal = (selector) => {
        selector.classList.remove('hidden');
    };

    const hideModal = (selector) => {
        selector.classList.add('hidden');
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
};

modals();