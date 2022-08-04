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
                item.classList.contains(selector) ? item.classList.remove('hidden') : item.classList.add('hidden');
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
        link.addEventListener('click', function () {
            localStorage.setItem('news-link', JSON.stringify(this.dataset.news));
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
        });
    });
};

newsTabs();

const tournamentsTabs = () => {
    const tabsMainBtns = document.querySelectorAll('.tournaments__main-btn'),
          tabsMainContent = document.querySelectorAll('.tournaments__main-tab'),
          tabsSecondaryBtns = document.querySelectorAll('.tournaments__btn'),
          tabsSecondaryContent = document.querySelectorAll('.tournaments__content');

    const showContent = (content, selector) => {
        content.forEach(item => {
            item.classList.contains(selector) ? item.classList.remove('hidden') : item.classList.add('hidden');
        });
    };

    const showActiveBtn = (btns, target) => {
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

    const links = document.querySelectorAll('.tournaments__link');

    // links.forEach(link => {
    //     link.addEventListener('click', function () {
    //         localStorage.setItem('tournaments-link', JSON.stringify(this.dataset.tournaments));
    //     });
    // });

    // window.addEventListener('DOMContentLoaded', () => {
    //     if (localStorage.getItem('tournaments-link')) {
    //         showContent(tabsMainContent, JSON.parse(localStorage.getItem('tournaments-link')));
    //         showActiveBtn(tabsMainBtns, JSON.parse(localStorage.getItem('tournaments-link')));
    //     }

    //     localStorage.removeItem('news-link');
    // });

    tabsMainBtns.forEach(btn => {
        btn.addEventListener('click', function() {
            switch (this.getAttribute('id')) {
                case 'local-tab':
                    showContent(tabsMainContent, 'local-tab');
                    showActiveBtn(tabsMainBtns, this);
                    showContent(tabsSecondaryContent, 'nfl');
                    showActiveBtn(tabsSecondaryBtns, 'nfl');
                    break;
                case 'kray-tab':
                    showContent(tabsMainContent, 'kray-tab');
                    showActiveBtn(tabsMainBtns, this);
                    showContent(tabsSecondaryContent, 'vishaya-liga');
                    showActiveBtn(tabsSecondaryBtns, 'vishaya-liga');
                    break;
            }
        });
    });

    tabsSecondaryBtns.forEach(btn => {
        btn.addEventListener('click', function () {
            switch (this.getAttribute('id')) {
                case 'vishaya-liga':
                    showContent(tabsSecondaryContent, 'vishaya-liga');
                    showActiveBtn(tabsSecondaryBtns, this);
                    break;
                case 'kubok-gubernatora':
                    showContent(tabsSecondaryContent, 'kubok-gubernatora');
                    showActiveBtn(tabsSecondaryBtns, this);
                    break;
                case 'kubok-kraya':
                    showContent(tabsSecondaryContent, 'kubok-kraya');
                    showActiveBtn(tabsSecondaryBtns, this);
                    break;
                case 'nfl':
                    showContent(tabsSecondaryContent, 'nfl');
                    showActiveBtn(tabsSecondaryBtns, this);
                    break;
                case 'zimnie-pervenstvo':
                    showContent(tabsSecondaryContent, 'zimnie-pervenstvo');
                    showActiveBtn(tabsSecondaryBtns, this);
                    break;
                case 'kubok-glavi':
                    showContent(tabsSecondaryContent, 'kubok-glavi');
                    showActiveBtn(tabsSecondaryBtns, this);
                    break;
                case 'pervenstvo-goroda':
                    showContent(tabsSecondaryContent, 'pervenstvo-goroda');
                    showActiveBtn(tabsSecondaryBtns, this);
                    break;
            }
        });
    });

    showContent(tabsSecondaryContent, 'vishaya-liga');
    showActiveBtn(tabsSecondaryBtns, 'vishaya-liga');
};

tournamentsTabs();