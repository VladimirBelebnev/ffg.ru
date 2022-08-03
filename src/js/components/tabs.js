const newsTabs = () => {
    const btns = document.querySelectorAll('.news-page__btn'),
        content = document.querySelectorAll('.news-page__item');

    const showContent = (selector) => {
        if (selector === 'all') {
            content.forEach(item => {
                item.classList.remove('hidden');
            });
        } else {
            content.forEach(item => {
                item.getAttribute('id') === selector ? item.classList.remove('hidden') : item.classList.add('hidden');
            });
        }
    };

    const showActiveBtn = (target) => {
        btns.forEach(btn => {
            btn.classList.remove('active');
        });

        target.classList.add('active');
    };

    btns.forEach(btn => {
        btn.addEventListener('click', event => {
            const target = event.target;

            if (target.classList.contains('news-page__btn')) {
                switch (target.getAttribute('id')) {
                    case 'local':
                        showContent('local');
                        showActiveBtn(target);
                        break;
                    case 'kray':
                        showContent('kray');
                        showActiveBtn(target);
                        break;
                    case 'rus':
                        showContent('rus');
                        showActiveBtn(target);
                        break;
                    case 'spartak':
                        showContent('spartak');
                        showActiveBtn(target);
                        break;
                    case 'vista':
                        showContent('vista');
                        showActiveBtn(target);
                        break;
                    default:
                        showContent(target.getAttribute('id'));
                        showActiveBtn(target);
                }
            }
        });
    });
};

newsTabs();