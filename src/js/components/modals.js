const modals = () => {
    const questionModal = document.querySelector('.modal-question'),
          btnsQuestionModal = document.querySelectorAll('.modal-question__btns'),
          closeBtnQuestionModal = document.querySelector('.modal-question .modal__close'),
          violationModal = document.querySelector('.modal-violation'),
          btnsViolationModal = document.querySelectorAll('.modal-violation__btns'),
          closeBtnViolationModal = document.querySelector('.modal-violation .modal__close'),
          questionThanksModal = document.querySelector('.modal-question-thanks'),
          closeBtnQuestionThanksModal = document.querySelector('.modal-question-thanks .modal__close'),
          violationThanksModal = document.querySelector('.modal-question-thanks'),
          closeBtnViolationThanksModal = document.querySelector('.modal-question-thanks .modal__close'),
          storeModal = document.querySelector('.modal-store'),
          btnsStore = document.querySelectorAll('.store__btn'),
          closeBtnStoreModal = document.querySelector('.modal-store .modal__close');

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

    const resetForm = (selector) => {
        if (selector.querySelector('form')) {
            selector.querySelector('.form').reset();
        }  
    };

    const closeModal = (btn, modal) => {
        btn.addEventListener('click', () => {
            hideModal(modal);
            resetForm(modal);
        });

        modal.addEventListener('click', (event) => {
            if (event.target === modal) {
                hideModal(modal);
                resetForm(modal);
            }
        });

        document.addEventListener('keydown', (event) => {
            if (event.code === 'Escape' && modal) {
                hideModal(modal);
                resetForm(modal);
            }
        });
    };

    openModal(btnsQuestionModal, questionModal);
    openModal(btnsViolationModal, violationModal);
    openModal(btnsStore, storeModal);
    closeModal(closeBtnQuestionModal, questionModal);
    closeModal(closeBtnViolationModal, violationModal);
    closeModal(closeBtnQuestionThanksModal , questionThanksModal);
    closeModal(closeBtnViolationThanksModal, violationThanksModal);
    closeModal(closeBtnStoreModal, storeModal);
};

window.addEventListener('DOMContentLoaded', () => {
    modals();
});