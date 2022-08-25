const form = () => {
    document.querySelector('#textarea-1').setAttribute('rows', 4);
    document.querySelector('#textarea-2').setAttribute('rows', 5);

    $('.form').submit(function (event) {
        event.preventDefault();

        let dataAtr = this.dataset.modal;

        function formValidate(selector) {
            let error = 0;
            let formReq = selector.querySelectorAll('._req');

            for (let i = 0; i < formReq.length; i++) {
                const input = formReq[i];

                formRemoveError(input);

                if (input.classList.contains('_email')) {
                    if (emailTest(input)) {
                        formAddError(input);
                        error++;
                    }
                } else if (input.querySelector('input[type ="checkbox"]') && input.querySelector('input[type ="checkbox"]').checked === false) {
                    error++;
                } else {
                    if (input.value === '') {
                        formAddError(input);
                        error++;
                    }
                }
            }

            return error;
        }

        function formAddError(input) {
            input.classList.add('_error');
            input.parentNode.classList.add('_error');
        }

        function formRemoveError(input) {
            input.classList.remove('_error');
            input.parentNode.classList.remove('_error');
        }

        function emailTest(input) {
            return !/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,8}))$/.test(input.value);
        }

        let error = formValidate(this);
        let checkbox = formValidate(this);

        if (error === 0 && checkbox === 0) {
            this.classList.add('_sending');
            $.ajax({
                type: "POST",
                data: $(this).serialize()
            })
            .done(function() {
                const forms = document.querySelectorAll('.form'),
                      modals = document.querySelectorAll('.modal'),
                      thanksQuestionModal = document.querySelector('.modal-question-thanks'),
                      thanksViolationModal = document.querySelector('.modal-violation-thanks');

                modals.forEach(modal => {
                    modal.classList.add('hidden');
                });

                forms.forEach(form => {
                    form.classList.remove('_sending');
                    form.reset();
                });

                function showThanks(selector) {
                    selector.classList.remove('hidden');
                    selector.querySelector('.modal__content').classList.add('animate__animated', 'animate__fadeInDown');
                    setTimeout(() => {
                        selector.classList.add('hidden');
                        selector.querySelector('.modal__content').classList.remove('animate__animated', 'animate__fadeInDown');
                    }, 8000);
                }

                if (dataAtr === 'question') {
                    showThanks(thanksQuestionModal);
                } else if (dataAtr === 'violation') {
                    showThanks(thanksViolationModal);
                }
            });
        } else {
            alert('Проверьте правильность заполнения всех полей формы. С политикой конфиденциальности можно ознакомится на соответствующей странице сайта.');
        }

    });
};

window.addEventListener('DOMContentLoaded', () => {
    form();
});