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
        if (typeof target === 'string') {
            btns.forEach(btn => {
                btn.getAttribute('id') === target ? btn.classList.add('active') : btn.classList.remove('active');
            });
        } else {
            btns.forEach(btn => {
                btn.classList.remove('active');
            });
            target.classList.add('active');
        }
    };

    const links = document.querySelectorAll('.news__link');

    links.forEach(link => {
        link.addEventListener('click', function() {
            localStorage.setItem('news-link', JSON.stringify(this.getAttribute('id')));    
        });
    });

    window.addEventListener('DOMContentLoaded', () => {
        if (localStorage.getItem('news-link')) {
            showContent(JSON.parse(localStorage.getItem('news-link')));
            showActiveBtn(JSON.parse(localStorage.getItem('news-link')));
        }
        
        localStorage.removeItem('news-link');
    });

    btns.forEach(btn => {
        btn.addEventListener('click', function() {
            if (this && this.classList.contains('news-page__btn')) {
                switch (this.getAttribute('id')) {
                    case 'local':
                        showContent('local');
                        showActiveBtn(this);
                        break;
                    case 'kray':
                        showContent('kray');
                        showActiveBtn(this);
                        break;
                    case 'rus':
                        showContent('rus');
                        showActiveBtn(this);
                        break;
                    case 'spartak':
                        showContent('spartak');
                        showActiveBtn(this);
                        break;
                    case 'vista':
                        showContent('vista');
                        showActiveBtn(this);
                        break;
                    default:
                        showContent(this.getAttribute('id'));
                        showActiveBtn(this);
                }
            }
        });
    });
};

newsTabs();