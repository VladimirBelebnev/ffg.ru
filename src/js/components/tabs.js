const tabs = () => {
    const newsBtns = document.querySelectorAll('.news-page__btn'),
          newsContent = document.querySelectorAll('.news-page__item'),
          tabsMainBtns = document.querySelectorAll('.tournaments__main-btn'),
          tabsMainContent = document.querySelectorAll('.tournaments__main-tab'),
          tabsSecondaryBtns = document.querySelectorAll('.tournaments__btn'),
          tabsSecondaryContent = document.querySelectorAll('.tournaments__content'),
          mediaBtns = document.querySelectorAll('.media-page__btn'),
          mediaContent = document.querySelectorAll('.media-page__items'),
          comandsBtns = document.querySelectorAll('.comands__btn'),
          comandsContent = document.querySelectorAll('.comands__items'),
          newsLinks = document.querySelectorAll('.news__link'),
          tournamentsLinks = document.querySelectorAll('.tournaments__link'),
          mediaLinks = document.querySelectorAll('.media__link');

    const showContent = (content, selector) => {
        if (content === newsContent) {
            if (selector === 'all-news') {
                content.forEach(item => {
                    item.classList.remove('hidden');
                });
            } else {
                content.forEach(item => {
                    item.dataset.news === selector ? item.classList.remove('hidden') : item.classList.add('hidden');
                });
            }
        } else if (content === tabsMainContent || content === tabsSecondaryContent) {
            content.forEach(item => {
                item.dataset.tournaments === selector ? item.classList.remove('hidden') : item.classList.add('hidden');
            });
        } else if (content === mediaContent) {
            content.forEach(item => {
                item.dataset.media === selector ? item.classList.remove('hidden') : item.classList.add('hidden');
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
        if (links[0].classList.contains('news__link')) {
            links.forEach(link => {
                link.addEventListener('click', function () {
                    localStorage.setItem('news-link', JSON.stringify(this.dataset.news));
                });
            });
        } else if (links[0].classList.contains('tournaments__link')) {
            links.forEach(link => {
                link.addEventListener('click', function () {
                    localStorage.setItem('tournaments-link', JSON.stringify(this.dataset.tournaments));
                });
            });
        } else if (links[0].classList.contains('media__link')) {
            links.forEach(link => {
                link.addEventListener('click', function () {
                    localStorage.setItem('media-link', JSON.stringify(this.dataset.media));
                });
            });
        }
    };

    writeInLocalstorageLinkSelector(newsLinks);
    writeInLocalstorageLinkSelector(tournamentsLinks);
    writeInLocalstorageLinkSelector(mediaLinks);

    const showContentWithLocalstorage = () => {
        window.addEventListener('DOMContentLoaded', () => {
            const tournamentsStorage = JSON.parse(localStorage.getItem('tournaments-link'));
            const newsStorage = JSON.parse(localStorage.getItem('news-link'));
            const mediaStorage = JSON.parse(localStorage.getItem('media-link'));

            if (localStorage.getItem('news-link')) {
                showContent(newsContent, newsStorage);
                showActiveBtn(newsBtns, newsStorage);
            }

            if (localStorage.getItem('media-link')) {
                showContent(mediaContent, mediaStorage);
                showActiveBtn(mediaBtns, mediaStorage);
            }

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
            localStorage.removeItem('news-link');
            localStorage.removeItem('media-link');
        });
    };

    showContentWithLocalstorage();

    const showContentOnClick = (btns) => {
        btns.forEach(btn => {
            btn.addEventListener('click', function () {
                switch (this.getAttribute('id')) {
                    case 'local':
                        showContent(newsContent, 'local');
                        showActiveBtn(newsBtns, this);
                        break;
                    case 'kray':
                        showContent(newsContent, 'kray');
                        showActiveBtn(newsBtns, this);
                        break;
                    case 'rus':
                        showContent(newsContent, 'rus');
                        showActiveBtn(newsBtns, this);
                        break;
                    case 'spartak':
                        showContent(newsContent, 'spartak');
                        showActiveBtn(newsBtns, this);
                        break;
                    case 'vista':
                        showContent(newsContent, 'vista');
                        showActiveBtn(newsBtns, this);
                        break;
                    case 'all-news':
                        showContent(newsContent, 'all-news');
                        showActiveBtn(newsBtns, this);
                        break;
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
                    case 'photo-media':
                        showContent(mediaContent, 'photo-media');
                        showActiveBtn(mediaBtns, this);
                        break;
                    case 'video-media':
                        showContent(mediaContent, 'video-media');
                        showActiveBtn(mediaBtns, this);
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

    showContentOnClick(newsBtns);
    showContentOnClick(tabsMainBtns);
    showContentOnClick(tabsSecondaryBtns);
    showContentOnClick(mediaBtns);
    showContentOnClick(comandsBtns);
};

tabs();