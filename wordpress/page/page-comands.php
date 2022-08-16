    <?php 
        /* Template Name: comands */
        get_header();
    ?>

    <main class="sports-schools main comands">
        <div class="container">
            <h1 class="header-title">Команды</h1>
            <div class="comands__menu">
                <button class="comands__btn active" id="local-comands">Команды ЛФК МО Геленджик</button>
                <button class="comands__btn" id="kray-comands">Футбольные клубы Геленджика</button>
            </div>
            <div class="comands__block">
                <div class="comands__items" data-comands="local-comands">
                    <a href="https://ffgel.ru/rssm" class="comands__item">
                        <img class="comands__photo" src="./img/rssm-logo.png" alt="comand logo">
                        <p class="comands__name">РССМ</p>
                    </a>
                    <a href="#" class="comands__item">
                        <img class="comands__photo" src="./img/rssm-logo.png" alt="comand logo">
                        <p class="comands__name">Cпарта</p>
                    </a>
                    <a href="#" class="comands__item">
                        <img class="comands__photo" src="./img/rssm-logo.png" alt="comand logo">
                        <p class="comands__name">Волна</p>
                    </a>
                    <a href="#" class="comands__item">
                        <img class="comands__photo" src="./img/rssm-logo.png" alt="comand logo">
                        <p class="comands__name">Побережье</p>
                    </a>
                    <a href="#" class="comands__item">
                        <img class="comands__photo" src="./img/rssm-logo.png" alt="comand logo">
                        <p class="comands__name">Ника</p>
                    </a>
                    <a href="#" class="comands__item">
                        <img class="comands__photo" src="./img/rssm-logo.png" alt="comand logo">
                        <p class="comands__name">Софи</p>
                    </a>
                    <a href="#" class="comands__item">
                        <img class="comands__photo" src="./img/rssm-logo.png" alt="comand logo">
                        <p class="comands__name">Ветераны</p>
                    </a>
                    <a href="#" class="comands__item">
                        <img class="comands__photo" src="./img/rssm-logo.png" alt="comand logo">
                        <p class="comands__name">Геленстрой</p>
                    </a>
                    <a href="#" class="comands__item">
                        <img class="comands__photo" src="./img/rssm-logo.png" alt="comand logo">
                        <p class="comands__name">Чемпион ММА</p>
                    </a>
                    <a href="#" class="comands__item">
                        <img class="comands__photo" src="./img/rssm-logo.png" alt="comand logo">
                        <p class="comands__name">Черноморец</p>
                    </a>
                    <a href="#" class="comands__item">
                        <img class="comands__photo" src="./img/rssm-logo.png" alt="comand logo">
                        <p class="comands__name">Юность</p>
                    </a>
                    <a href="#" class="comands__item">
                        <img class="comands__photo" src="./img/rssm-logo.png" alt="comand logo">
                        <p class="comands__name">Кабардинка</p>
                    </a>
                    <a href="#" class="comands__item">
                        <img class="comands__photo" src="./img/rssm-logo.png" alt="comand logo">
                        <p class="comands__name">Византия</p>
                    </a>
                    <a href="#" class="comands__item">
                        <img class="comands__photo" src="./img/rssm-logo.png" alt="comand logo">
                        <p class="comands__name">KingBeer</p>
                    </a>
                </div>
                <div class="comands__items hidden" data-comands="kray-comands">
                    <a href="https://ffgel.ru/spartak" class="comands__item">
                        <img class="comands__photo" src="./img/spartak-logo.png" alt="comand logo">
                        <p class="comands__name">Cпартак Геленджик</p>
                    </a>
                    <a href="#" class="comands__item">
                        <img class="comands__photo" src="./img/vista-logo.png" alt="comand logo">
                        <p class="comands__name">Vista</p>
                    </a>
                </div>
            </div>
        </div>
    </main>

    <?php 
        get_footer();
    ?>