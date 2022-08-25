const tabs = () => {
    const tabsMainBtns = document.querySelectorAll('.tournaments__main-btn'),
          tabsMainContent = document.querySelectorAll('.tournaments__main-tab'),
          tabsSecondaryBtns = document.querySelectorAll('.tournaments__btn'),
          tabsSecondaryContent = document.querySelectorAll('.tournaments__content'),
          comandsBtns = document.querySelectorAll('.comands__btn'),
          comandsContent = document.querySelectorAll('.comands__items'),
          tournamentsLinks = document.querySelectorAll('.tournaments__link');

    const showContent = (content, selector) => {
        if (content === tabsMainContent || content === tabsSecondaryContent) {
            content.forEach(item => {
                item.dataset.tournaments === selector ? item.classList.remove('hidden') : item.classList.add('hidden');
            });
        } else if (content === comandsContent) {
            content.forEach(item => {
                item.dataset.comands === selector ? item.classList.remove('hidden') : item.classList.add('hidden');
            });
        }
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

    const writeInLocalstorageLinkSelector = (links) => {
        links.forEach(link => {
            link.addEventListener('click', function () {
                localStorage.setItem('tournaments-link', JSON.stringify(this.dataset.tournaments));
            });
        });
    };

    writeInLocalstorageLinkSelector(tournamentsLinks);

    const showContentWithLocalstorage = () => {
        window.addEventListener('DOMContentLoaded', () => {
            const tournamentsStorage = JSON.parse(localStorage.getItem('tournaments-link'));

            switch (tournamentsStorage) {
                case 'local-tab':
                    showContent(tabsMainContent, tournamentsStorage);
                    showActiveBtn(tabsMainBtns, tournamentsStorage);
                    showContent(tabsSecondaryContent, 'nfl');
                    showActiveBtn(tabsSecondaryBtns, 'nfl');
                    break;
                case 'kray-tab':
                    showContent(tabsMainContent, tournamentsStorage);
                    showActiveBtn(tabsMainBtns, tournamentsStorage);
                    showContent(tabsSecondaryContent, 'vishaya-liga');
                    showActiveBtn(tabsSecondaryBtns, 'vishaya-liga');
                    break;
                case 'vishaya-liga':
                    showContent(tabsMainContent, 'kray-tab');
                    showActiveBtn(tabsMainBtns, 'kray-tab');
                    showContent(tabsSecondaryContent, tournamentsStorage);
                    showActiveBtn(tabsSecondaryBtns, tournamentsStorage);
                    break;
                case 'kubok-gubernatora':
                    showContent(tabsMainContent, 'kray-tab');
                    showActiveBtn(tabsMainBtns, 'kray-tab');
                    showContent(tabsSecondaryContent, tournamentsStorage);
                    showActiveBtn(tabsSecondaryBtns, tournamentsStorage);
                    break;
                case 'kubok-kraya':
                    showContent(tabsMainContent, 'kray-tab');
                    showActiveBtn(tabsMainBtns, 'kray-tab');
                    showContent(tabsSecondaryContent, tournamentsStorage);
                    showActiveBtn(tabsSecondaryBtns, tournamentsStorage);
                    break;
                case 'nfl':
                    showContent(tabsMainContent, 'local-tab');
                    showActiveBtn(tabsMainBtns, 'local-tab');
                    showContent(tabsSecondaryContent, tournamentsStorage);
                    showActiveBtn(tabsSecondaryBtns, tournamentsStorage);
                    break;
                case 'zimnie-pervenstvo':
                    showContent(tabsMainContent, 'local-tab');
                    showActiveBtn(tabsMainBtns, 'local-tab');
                    showContent(tabsSecondaryContent, tournamentsStorage);
                    showActiveBtn(tabsSecondaryBtns, tournamentsStorage);
                    break;
                case 'kubok-glavi':
                    showContent(tabsMainContent, 'local-tab');
                    showActiveBtn(tabsMainBtns, 'local-tab');
                    showContent(tabsSecondaryContent, tournamentsStorage);
                    showActiveBtn(tabsSecondaryBtns, tournamentsStorage);
                    break;
                case 'pervenstvo-goroda':
                    showContent(tabsMainContent, 'local-tab');
                    showActiveBtn(tabsMainBtns, 'local-tab');
                    showContent(tabsSecondaryContent, tournamentsStorage);
                    showActiveBtn(tabsSecondaryBtns, tournamentsStorage);
                    break;
            }

            localStorage.removeItem('tournaments-link');
        });
    };

    showContentWithLocalstorage();

    const showContentOnClick = (btns) => {
        btns.forEach(btn => {
            btn.addEventListener('click', function () {
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
                    case 'local-comands':
                        showContent(comandsContent, 'local-comands');
                        showActiveBtn(comandsBtns, this);
                        break;
                    case 'kray-comands':
                        showContent(comandsContent, 'kray-comands');
                        showActiveBtn(comandsBtns, this);
                        break;
                }
            });
        });
    };

    showContentOnClick(tabsMainBtns);
    showContentOnClick(tabsSecondaryBtns);
    showContentOnClick(comandsBtns);
};

tabs();