    <?php 
        /* Template Name: tournaments */
        get_header();
    ?>

    <main class="tournaments main">
        <div class="container">
            <h1 class="header-title">Турниры</h1>
            <div class="tournaments__menu">
                <div class="tournaments__wrap-btn">
                    <button class="tournaments__main-btn active" id="kray-tab">краевые турниры</button>
                    <button class="tournaments__main-btn" id="local-tab">местные турниры</button>
                </div>
                <div class="tournaments__main-tab" data-tournaments="kray-tab">
                    <button class="tournaments__btn active" id="vishaya-liga">Высшая лига</button>
                    <button class="tournaments__btn" id="kubok-gubernatora">Кубок Губернатора</button>
                    <button class="tournaments__btn" id="kubok-kraya">Кубок Края</button>
                </div>
                <div class="tournaments__main-tab hidden" data-tournaments="local-tab">
                    <button class="tournaments__btn" id="nfl">НФЛ</button>
                    <button class="tournaments__btn" id="zimnie-pervenstvo">Зимнее первенство</button>
                    <button class="tournaments__btn" id="kubok-glavi">Кубок Главы</button>
                    <button class="tournaments__btn" id="pervenstvo-goroda">Первенство города</button>
                </div>
            </div>
            <div class="tournaments__content" data-tournaments="vishaya-liga">
                <div class="tournaments-content__wrap">
                    <h4 class="tournaments-content__header">Чемпионат Краснодарского края по футболу 2022 года</h4>
                    <div class="tournaments-content__bg">
                        <?php echo do_shortcode("[table id=1 /]"); ?>
                    </div>
                </div>
                <div class="tournaments-content__wrap">
                    <h4 class="tournaments-content__header">Лучшие игроки</h4>
                     <?php echo do_shortcode("[table id=6 /]"); ?>
                </div>
            </div>
            <div class="tournaments__content hidden" data-tournaments="kubok-gubernatora">
                <div class="tournaments-content__wrap">
                    <h4 class="tournaments-content__header">Кубок Губернатора - Первенство Краснодарского края по футболу 2022 года</h4>
                    <div class="tournaments-content__bg">
                        <?php echo do_shortcode("[table id=2 /]"); ?>
                    </div>
                </div>
                <div class="tournaments-content__wrap">
                    <h4 class="tournaments-content__header">Лучшие игроки</h4>
                    <?php echo do_shortcode("[table id=7 /]"); ?>
                </div>
            </div>
            <div class="tournaments__content hidden" data-tournaments="kubok-kraya">
                <div class="tournaments-content__wrap">
                    <h4 class="tournaments-content__header">Чемпионат Краснодарского края по футболу 2022 года</h4>
                    <div class="tournaments-content__bg">
                       <div class="tournaments-content__table"></div>
                    </div>
                </div>
                <div class="tournaments-content__wrap">
                    <h4 class="tournaments-content__header">Лучшие игроки</h4>
                    <table class="tournaments-content__player" cellspacing="0"></table>
                </div>
            </div>
            <div class="tournaments__content hidden" data-tournaments="nfl">
                <div class="tournaments-content__wrap">
                    <h4 class="tournaments-content__header">Чемпионат Краснодарского края по футболу 2022 года</h4>
                    <div class="tournaments-content__bg">
                        <div class="tournaments-content__table"></div>
                    </div>
                </div>
                <div class="tournaments-content__wrap">
                    <h4 class="tournaments-content__header">Лучшие игроки</h4>
                    <table class="tournaments-content__player" cellspacing="0"></table>
                </div>
            </div>
            <div class="tournaments__content hidden" data-tournaments="zimnie-pervenstvo">
                <div class="tournaments-content__wrap">
                    <h4 class="tournaments-content__header">Чемпионат Краснодарского края по футболу 2022 года</h4>
                    <div class="tournaments-content__bg">
                        <div class="tournaments-content__table"></div>
                    </div>
                </div>
                <div class="tournaments-content__wrap">
                    <h4 class="tournaments-content__header">Лучшие игроки</h4>
                    <table class="tournaments-content__player" cellspacing="0"></table>
                </div>
            </div>
            <div class="tournaments__content hidden" data-tournaments="kubok-glavi">
                <div class="tournaments-content__wrap">
                    <h4 class="tournaments-content__header">Чемпионат Краснодарского края по футболу 2022 года</h4>
                    <div class="tournaments-content__bg">
                        <div class="tournaments-content__table"></div>
                    </div>
                </div>
                <div class="tournaments-content__wrap">
                    <h4 class="tournaments-content__header">Лучшие игроки</h4>
                    <table class="tournaments-content__player" cellspacing="0"></table>
                </div>
            </div>
            <div class="tournaments__content hidden" data-tournaments="pervenstvo-goroda">
                <div class="tournaments-content__wrap">
                    <h4 class="tournaments-content__header">Чемпионат Краснодарского края по футболу 2022 года</h4>
                    <div class="tournaments-content__bg">
                        <div class="tournaments-content__table"></div>
                    </div>
                </div>
                <div class="tournaments-content__wrap">
                    <h4 class="tournaments-content__header">Лучшие игроки</h4>
                    <table class="tournaments-content__player" cellspacing="0"></table>
                </div>
            </div>
        </div>
    </main>

    <?php 
        get_footer();
    ?>