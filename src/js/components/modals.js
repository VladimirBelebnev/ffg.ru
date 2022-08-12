const modals = () => {
    const questionModal = document.querySelector('.modal-question'),
          btnsQuestionModal = document.querySelectorAll('.modal-question__btns'),
          closeBtnQuestionModal = document.querySelector('.modal-question .modal__close'),
          violationModal = document.querySelector('.modal-violation'),
          btnsViolationModal = document.querySelectorAll('.modal-violation__btns'),
          closeBtnViolationModal = document.querySelector('.modal-violation .modal__close');

    const showModal = (selector) => {
        selector.classList.remove('hidden');
        selector.querySelector('.modal__content').classList.add('animate__animated', 'animate__fadeInDown');
    };

    const hideModal = (selector) => {
        selector.classList.add('hidden');
        selector.querySelector('.modal__content').classList.remove('animate__animated', 'animate__fadeInDown');
    };

    const openModal = (btns, modal) => {
        btns.forEach(btn => {
            btn.addEventListener('click', () => {
                showModal(modal);
            });
        });
    };

    const closeModal = (btn, modal) => {
        btn.addEventListener('click', () => {
            hideModal(modal);
        });

        modal.addEventListener('click', (event) => {
            if (event.target === modal) {
                hideModal(modal);
            }
        });

        document.addEventListener('keydown', (event) => {
            if (event.code === 'Escape' && modal) {
                hideModal(modal);
            }
        });
    };

    openModal(btnsQuestionModal, questionModal);
    openModal(btnsViolationModal, violationModal);
    closeModal(closeBtnQuestionModal, questionModal);
    closeModal(closeBtnViolationModal, violationModal);
};

modals();