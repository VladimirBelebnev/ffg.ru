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
                        <div class="tournaments-content__table"></div>
                    </div>
                </div>
                <div class="tournaments-content__wrap">
                    <h4 class="tournaments-content__header">Лучшие игроки</h4>
                    <table class="tournaments-content__player" cellspacing="0">
                        <tr>
                            <th class="tournaments-player__header tournaments-player__header-left tournaments-player__header-none">№</th>
                            <th class="tournaments-player__header tournaments-player__header-left tournaments-player__header-name">Игрок</th>
                            <th class="tournaments-player__header">Голы</th>
                            <th class="tournaments-player__header">Пен</th>
                        </tr>
                        <tr>
                            <td class="tournaments-player__content tournaments-player__content-padding">1</td>
                            <td class="tournaments-player__content tournaments-player__content-name tournaments-player__content-padding">
                                <p>Краснов Александр</p>
                                <span>"Агрокомплекс"</span>
                            </td>
                            <td class="tournaments-player__content tournaments-player__content-padding">21</td>
                            <td class="tournaments-player__content tournaments-player__content-padding">3</td>
                        </tr>
                        <tr>
                            <td class="tournaments-player__content">2</td>
                            <td class="tournaments-player__content tournaments-player__content-name">
                                <p>Краснов Александр</p>
                                <span>"Агрокомплекс"</span>
                            </td>
                            <td class="tournaments-player__content">11</td>
                            <td class="tournaments-player__content">4</td>
                        </tr>
                        <tr>
                            <td class="tournaments-player__content">3</td>
                            <td class="tournaments-player__content tournaments-player__content-name">
                                <p>Краснов Александр</p>
                                <span>"Агрокомплекс"</span>
                            </td>
                            <td class="tournaments-player__content">10</td>
                            <td class="tournaments-player__content">2</td>
                        </tr>
                        <tr>
                            <td class="tournaments-player__content">4</td>
                            <td class="tournaments-player__content tournaments-player__content-name">
                                <p>Краснов Александр</p>
                                <span>"Агрокомплекс"</span>
                            </td>
                            <td class="tournaments-player__content">9</td>
                            <td class="tournaments-player__content">2</td>
                        </tr>
                        <tr>
                            <td class="tournaments-player__content">5</td>
                            <td class="tournaments-player__content tournaments-player__content-name">
                                <p>Краснов Александр</p>
                                <span>"Агрокомплекс"</span>
                            </td>
                            <td class="tournaments-player__content">9</td>
                            <td class="tournaments-player__content">0</td>
                        </tr>
                        <tr>
                            <td class="tournaments-player__content">6</td>
                            <td class="tournaments-player__content tournaments-player__content-name">
                                <p>Краснов Александр</p>
                                <span>"Агрокомплекс"</span>
                            </td>
                            <td class="tournaments-player__content">9</td>
                            <td class="tournaments-player__content">1</td>
                        </tr>
                        <tr>
                            <td class="tournaments-player__content">7</td>
                            <td class="tournaments-player__content tournaments-player__content-name">
                                <p>Краснов Александр</p>
                                <span>"Агрокомплекс"</span>
                            </td>
                            <td class="tournaments-player__content">8</td>
                            <td class="tournaments-player__content">0</td>
                        </tr>
                        <tr>
                            <td class="tournaments-player__content">8</td>
                            <td class="tournaments-player__content tournaments-player__content-name">
                                <p>Краснов Александр</p>
                                <span>"Агрокомплекс"</span>
                            </td>
                            <td class="tournaments-player__content">7</td>
                            <td class="tournaments-player__content">0</td>
                        </tr>
                        <tr>
                            <td class="tournaments-player__content">9</td>
                            <td class="tournaments-player__content tournaments-player__content-name">
                                <p>Краснов Александр</p>
                                <span>"Агрокомплекс"</span>
                            </td>
                            <td class="tournaments-player__content">6</td>
                            <td class="tournaments-player__content">0</td>
                        </tr>
                        <tr>
                            <td class="tournaments-player__content">10</td>
                            <td class="tournaments-player__content tournaments-player__content-name">
                                <p>Краснов Александр</p>
                                <span>"Агрокомплекс"</span>
                            </td>
                            <td class="tournaments-player__content">6</td>
                            <td class="tournaments-player__content">0</td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="tournaments__content hidden" data-tournaments="kubok-gubernatora">
                <div class="tournaments-content__wrap">
                    <h4 class="tournaments-content__header">Чемпионат Краснодарского края по футболу 2022 года</h4>
                    <div class="tournaments-content__bg">
                        <div class="tournaments-content__table"></div>
                    </div>
                </div>
                <div class="tournaments-content__wrap">
                    <h4 class="tournaments-content__header">Лучшие игроки</h4>
                    <table class="tournaments-content__player" cellspacing="0">
                        <tr>
                            <th class="tournaments-player__header tournaments-player__header-left tournaments-player__header-none">№
                            </th>
                            <th class="tournaments-player__header tournaments-player__header-left tournaments-player__header-name">Игрок
                            </th>
                            <th class="tournaments-player__header">Голы</th>
                            <th class="tournaments-player__header">Пен</th>
                        </tr>
                        <tr>
                            <td class="tournaments-player__content tournaments-player__content-padding">1</td>
                            <td
                                class="tournaments-player__content tournaments-player__content-name tournaments-player__content-padding">
                                <p>Краснов Александр</p>
                                <span>"Агрокомплекс"</span>
                            </td>
                            <td class="tournaments-player__content tournaments-player__content-padding">21</td>
                            <td class="tournaments-player__content tournaments-player__content-padding">3</td>
                        </tr>
                        <tr>
                            <td class="tournaments-player__content">2</td>
                            <td class="tournaments-player__content tournaments-player__content-name">
                                <p>Краснов Александр</p>
                                <span>"Агрокомплекс"</span>
                            </td>
                            <td class="tournaments-player__content">11</td>
                            <td class="tournaments-player__content">4</td>
                        </tr>
                        <tr>
                            <td class="tournaments-player__content">3</td>
                            <td class="tournaments-player__content tournaments-player__content-name">
                                <p>Краснов Александр</p>
                                <span>"Агрокомплекс"</span>
                            </td>
                            <td class="tournaments-player__content">10</td>
                            <td class="tournaments-player__content">2</td>
                        </tr>
                        <tr>
                            <td class="tournaments-player__content">4</td>
                            <td class="tournaments-player__content tournaments-player__content-name">
                                <p>Краснов Александр</p>
                                <span>"Агрокомплекс"</span>
                            </td>
                            <td class="tournaments-player__content">9</td>
                            <td class="tournaments-player__content">2</td>
                        </tr>
                        <tr>
                            <td class="tournaments-player__content">5</td>
                            <td class="tournaments-player__content tournaments-player__content-name">
                                <p>Краснов Александр</p>
                                <span>"Агрокомплекс"</span>
                            </td>
                            <td class="tournaments-player__content">9</td>
                            <td class="tournaments-player__content">0</td>
                        </tr>
                        <tr>
                            <td class="tournaments-player__content">6</td>
                            <td class="tournaments-player__content tournaments-player__content-name">
                                <p>Краснов Александр</p>
                                <span>"Агрокомплекс"</span>
                            </td>
                            <td class="tournaments-player__content">9</td>
                            <td class="tournaments-player__content">1</td>
                        </tr>
                        <tr>
                            <td class="tournaments-player__content">7</td>
                            <td class="tournaments-player__content tournaments-player__content-name">
                                <p>Краснов Александр</p>
                                <span>"Агрокомплекс"</span>
                            </td>
                            <td class="tournaments-player__content">8</td>
                            <td class="tournaments-player__content">0</td>
                        </tr>
                        <tr>
                            <td class="tournaments-player__content">8</td>
                            <td class="tournaments-player__content tournaments-player__content-name">
                                <p>Краснов Александр</p>
                                <span>"Агрокомплекс"</span>
                            </td>
                            <td class="tournaments-player__content">7</td>
                            <td class="tournaments-player__content">0</td>
                        </tr>
                        <tr>
                            <td class="tournaments-player__content">9</td>
                            <td class="tournaments-player__content tournaments-player__content-name">
                                <p>Краснов Александр</p>
                                <span>"Агрокомплекс"</span>
                            </td>
                            <td class="tournaments-player__content">6</td>
                            <td class="tournaments-player__content">0</td>
                        </tr>
                        <tr>
                            <td class="tournaments-player__content">10</td>
                            <td class="tournaments-player__content tournaments-player__content-name">
                                <p>Краснов Александр</p>
                                <span>"Агрокомплекс"</span>
                            </td>
                            <td class="tournaments-player__content">6</td>
                            <td class="tournaments-player__content">0</td>
                        </tr>
                    </table>
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
                    <table class="tournaments-content__player" cellspacing="0">
                        <tr>
                            <th class="tournaments-player__header tournaments-player__header-left tournaments-player__header-none">№
                            </th>
                            <th class="tournaments-player__header tournaments-player__header-left tournaments-player__header-name">Игрок
                            </th>
                            <th class="tournaments-player__header">Голы</th>
                            <th class="tournaments-player__header">Пен</th>
                        </tr>
                        <tr>
                            <td class="tournaments-player__content tournaments-player__content-padding">1</td>
                            <td
                                class="tournaments-player__content tournaments-player__content-name tournaments-player__content-padding">
                                <p>Краснов Александр</p>
                                <span>"Агрокомплекс"</span>
                            </td>
                            <td class="tournaments-player__content tournaments-player__content-padding">21</td>
                            <td class="tournaments-player__content tournaments-player__content-padding">3</td>
                        </tr>
                        <tr>
                            <td class="tournaments-player__content">2</td>
                            <td class="tournaments-player__content tournaments-player__content-name">
                                <p>Краснов Александр</p>
                                <span>"Агрокомплекс"</span>
                            </td>
                            <td class="tournaments-player__content">11</td>
                            <td class="tournaments-player__content">4</td>
                        </tr>
                        <tr>
                            <td class="tournaments-player__content">3</td>
                            <td class="tournaments-player__content tournaments-player__content-name">
                                <p>Краснов Александр</p>
                                <span>"Агрокомплекс"</span>
                            </td>
                            <td class="tournaments-player__content">10</td>
                            <td class="tournaments-player__content">2</td>
                        </tr>
                        <tr>
                            <td class="tournaments-player__content">4</td>
                            <td class="tournaments-player__content tournaments-player__content-name">
                                <p>Краснов Александр</p>
                                <span>"Агрокомплекс"</span>
                            </td>
                            <td class="tournaments-player__content">9</td>
                            <td class="tournaments-player__content">2</td>
                        </tr>
                        <tr>
                            <td class="tournaments-player__content">5</td>
                            <td class="tournaments-player__content tournaments-player__content-name">
                                <p>Краснов Александр</p>
                                <span>"Агрокомплекс"</span>
                            </td>
                            <td class="tournaments-player__content">9</td>
                            <td class="tournaments-player__content">0</td>
                        </tr>
                        <tr>
                            <td class="tournaments-player__content">6</td>
                            <td class="tournaments-player__content tournaments-player__content-name">
                                <p>Краснов Александр</p>
                                <span>"Агрокомплекс"</span>
                            </td>
                            <td class="tournaments-player__content">9</td>
                            <td class="tournaments-player__content">1</td>
                        </tr>
                        <tr>
                            <td class="tournaments-player__content">7</td>
                            <td class="tournaments-player__content tournaments-player__content-name">
                                <p>Краснов Александр</p>
                                <span>"Агрокомплекс"</span>
                            </td>
                            <td class="tournaments-player__content">8</td>
                            <td class="tournaments-player__content">0</td>
                        </tr>
                        <tr>
                            <td class="tournaments-player__content">8</td>
                            <td class="tournaments-player__content tournaments-player__content-name">
                                <p>Краснов Александр</p>
                                <span>"Агрокомплекс"</span>
                            </td>
                            <td class="tournaments-player__content">7</td>
                            <td class="tournaments-player__content">0</td>
                        </tr>
                        <tr>
                            <td class="tournaments-player__content">9</td>
                            <td class="tournaments-player__content tournaments-player__content-name">
                                <p>Краснов Александр</p>
                                <span>"Агрокомплекс"</span>
                            </td>
                            <td class="tournaments-player__content">6</td>
                            <td class="tournaments-player__content">0</td>
                        </tr>
                        <tr>
                            <td class="tournaments-player__content">10</td>
                            <td class="tournaments-player__content tournaments-player__content-name">
                                <p>Краснов Александр</p>
                                <span>"Агрокомплекс"</span>
                            </td>
                            <td class="tournaments-player__content">6</td>
                            <td class="tournaments-player__content">0</td>
                        </tr>
                    </table>
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
                    <table class="tournaments-content__player" cellspacing="0">
                        <tr>
                            <th class="tournaments-player__header tournaments-player__header-left tournaments-player__header-none">№
                            </th>
                            <th class="tournaments-player__header tournaments-player__header-left tournaments-player__header-name">Игрок
                            </th>
                            <th class="tournaments-player__header">Голы</th>
                            <th class="tournaments-player__header">Пен</th>
                        </tr>
                        <tr>
                            <td class="tournaments-player__content tournaments-player__content-padding">1</td>
                            <td
                                class="tournaments-player__content tournaments-player__content-name tournaments-player__content-padding">
                                <p>Краснов Александр</p>
                                <span>"Агрокомплекс"</span>
                            </td>
                            <td class="tournaments-player__content tournaments-player__content-padding">21</td>
                            <td class="tournaments-player__content tournaments-player__content-padding">3</td>
                        </tr>
                        <tr>
                            <td class="tournaments-player__content">2</td>
                            <td class="tournaments-player__content tournaments-player__content-name">
                                <p>Краснов Александр</p>
                                <span>"Агрокомплекс"</span>
                            </td>
                            <td class="tournaments-player__content">11</td>
                            <td class="tournaments-player__content">4</td>
                        </tr>
                        <tr>
                            <td class="tournaments-player__content">3</td>
                            <td class="tournaments-player__content tournaments-player__content-name">
                                <p>Краснов Александр</p>
                                <span>"Агрокомплекс"</span>
                            </td>
                            <td class="tournaments-player__content">10</td>
                            <td class="tournaments-player__content">2</td>
                        </tr>
                        <tr>
                            <td class="tournaments-player__content">4</td>
                            <td class="tournaments-player__content tournaments-player__content-name">
                                <p>Краснов Александр</p>
                                <span>"Агрокомплекс"</span>
                            </td>
                            <td class="tournaments-player__content">9</td>
                            <td class="tournaments-player__content">2</td>
                        </tr>
                        <tr>
                            <td class="tournaments-player__content">5</td>
                            <td class="tournaments-player__content tournaments-player__content-name">
                                <p>Краснов Александр</p>
                                <span>"Агрокомплекс"</span>
                            </td>
                            <td class="tournaments-player__content">9</td>
                            <td class="tournaments-player__content">0</td>
                        </tr>
                        <tr>
                            <td class="tournaments-player__content">6</td>
                            <td class="tournaments-player__content tournaments-player__content-name">
                                <p>Краснов Александр</p>
                                <span>"Агрокомплекс"</span>
                            </td>
                            <td class="tournaments-player__content">9</td>
                            <td class="tournaments-player__content">1</td>
                        </tr>
                        <tr>
                            <td class="tournaments-player__content">7</td>
                            <td class="tournaments-player__content tournaments-player__content-name">
                                <p>Краснов Александр</p>
                                <span>"Агрокомплекс"</span>
                            </td>
                            <td class="tournaments-player__content">8</td>
                            <td class="tournaments-player__content">0</td>
                        </tr>
                        <tr>
                            <td class="tournaments-player__content">8</td>
                            <td class="tournaments-player__content tournaments-player__content-name">
                                <p>Краснов Александр</p>
                                <span>"Агрокомплекс"</span>
                            </td>
                            <td class="tournaments-player__content">7</td>
                            <td class="tournaments-player__content">0</td>
                        </tr>
                        <tr>
                            <td class="tournaments-player__content">9</td>
                            <td class="tournaments-player__content tournaments-player__content-name">
                                <p>Краснов Александр</p>
                                <span>"Агрокомплекс"</span>
                            </td>
                            <td class="tournaments-player__content">6</td>
                            <td class="tournaments-player__content">0</td>
                        </tr>
                        <tr>
                            <td class="tournaments-player__content">10</td>
                            <td class="tournaments-player__content tournaments-player__content-name">
                                <p>Краснов Александр</p>
                                <span>"Агрокомплекс"</span>
                            </td>
                            <td class="tournaments-player__content">6</td>
                            <td class="tournaments-player__content">0</td>
                        </tr>
                    </table>
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
                    <table class="tournaments-content__player" cellspacing="0">
                        <tr>
                            <th class="tournaments-player__header tournaments-player__header-left tournaments-player__header-none">№
                            </th>
                            <th class="tournaments-player__header tournaments-player__header-left tournaments-player__header-name">Игрок
                            </th>
                            <th class="tournaments-player__header">Голы</th>
                            <th class="tournaments-player__header">Пен</th>
                        </tr>
                        <tr>
                            <td class="tournaments-player__content tournaments-player__content-padding">1</td>
                            <td
                                class="tournaments-player__content tournaments-player__content-name tournaments-player__content-padding">
                                <p>Краснов Александр</p>
                                <span>"Агрокомплекс"</span>
                            </td>
                            <td class="tournaments-player__content tournaments-player__content-padding">21</td>
                            <td class="tournaments-player__content tournaments-player__content-padding">3</td>
                        </tr>
                        <tr>
                            <td class="tournaments-player__content">2</td>
                            <td class="tournaments-player__content tournaments-player__content-name">
                                <p>Краснов Александр</p>
                                <span>"Агрокомплекс"</span>
                            </td>
                            <td class="tournaments-player__content">11</td>
                            <td class="tournaments-player__content">4</td>
                        </tr>
                        <tr>
                            <td class="tournaments-player__content">3</td>
                            <td class="tournaments-player__content tournaments-player__content-name">
                                <p>Краснов Александр</p>
                                <span>"Агрокомплекс"</span>
                            </td>
                            <td class="tournaments-player__content">10</td>
                            <td class="tournaments-player__content">2</td>
                        </tr>
                        <tr>
                            <td class="tournaments-player__content">4</td>
                            <td class="tournaments-player__content tournaments-player__content-name">
                                <p>Краснов Александр</p>
                                <span>"Агрокомплекс"</span>
                            </td>
                            <td class="tournaments-player__content">9</td>
                            <td class="tournaments-player__content">2</td>
                        </tr>
                        <tr>
                            <td class="tournaments-player__content">5</td>
                            <td class="tournaments-player__content tournaments-player__content-name">
                                <p>Краснов Александр</p>
                                <span>"Агрокомплекс"</span>
                            </td>
                            <td class="tournaments-player__content">9</td>
                            <td class="tournaments-player__content">0</td>
                        </tr>
                        <tr>
                            <td class="tournaments-player__content">6</td>
                            <td class="tournaments-player__content tournaments-player__content-name">
                                <p>Краснов Александр</p>
                                <span>"Агрокомплекс"</span>
                            </td>
                            <td class="tournaments-player__content">9</td>
                            <td class="tournaments-player__content">1</td>
                        </tr>
                        <tr>
                            <td class="tournaments-player__content">7</td>
                            <td class="tournaments-player__content tournaments-player__content-name">
                                <p>Краснов Александр</p>
                                <span>"Агрокомплекс"</span>
                            </td>
                            <td class="tournaments-player__content">8</td>
                            <td class="tournaments-player__content">0</td>
                        </tr>
                        <tr>
                            <td class="tournaments-player__content">8</td>
                            <td class="tournaments-player__content tournaments-player__content-name">
                                <p>Краснов Александр</p>
                                <span>"Агрокомплекс"</span>
                            </td>
                            <td class="tournaments-player__content">7</td>
                            <td class="tournaments-player__content">0</td>
                        </tr>
                        <tr>
                            <td class="tournaments-player__content">9</td>
                            <td class="tournaments-player__content tournaments-player__content-name">
                                <p>Краснов Александр</p>
                                <span>"Агрокомплекс"</span>
                            </td>
                            <td class="tournaments-player__content">6</td>
                            <td class="tournaments-player__content">0</td>
                        </tr>
                        <tr>
                            <td class="tournaments-player__content">10</td>
                            <td class="tournaments-player__content tournaments-player__content-name">
                                <p>Краснов Александр</p>
                                <span>"Агрокомплекс"</span>
                            </td>
                            <td class="tournaments-player__content">6</td>
                            <td class="tournaments-player__content">0</td>
                        </tr>
                    </table>
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
                    <table class="tournaments-content__player" cellspacing="0">
                        <tr>
                            <th class="tournaments-player__header tournaments-player__header-left tournaments-player__header-none">№
                            </th>
                            <th class="tournaments-player__header tournaments-player__header-left tournaments-player__header-name">Игрок
                            </th>
                            <th class="tournaments-player__header">Голы</th>
                            <th class="tournaments-player__header">Пен</th>
                        </tr>
                        <tr>
                            <td class="tournaments-player__content tournaments-player__content-padding">1</td>
                            <td
                                class="tournaments-player__content tournaments-player__content-name tournaments-player__content-padding">
                                <p>Краснов Александр</p>
                                <span>"Агрокомплекс"</span>
                            </td>
                            <td class="tournaments-player__content tournaments-player__content-padding">21</td>
                            <td class="tournaments-player__content tournaments-player__content-padding">3</td>
                        </tr>
                        <tr>
                            <td class="tournaments-player__content">2</td>
                            <td class="tournaments-player__content tournaments-player__content-name">
                                <p>Краснов Александр</p>
                                <span>"Агрокомплекс"</span>
                            </td>
                            <td class="tournaments-player__content">11</td>
                            <td class="tournaments-player__content">4</td>
                        </tr>
                        <tr>
                            <td class="tournaments-player__content">3</td>
                            <td class="tournaments-player__content tournaments-player__content-name">
                                <p>Краснов Александр</p>
                                <span>"Агрокомплекс"</span>
                            </td>
                            <td class="tournaments-player__content">10</td>
                            <td class="tournaments-player__content">2</td>
                        </tr>
                        <tr>
                            <td class="tournaments-player__content">4</td>
                            <td class="tournaments-player__content tournaments-player__content-name">
                                <p>Краснов Александр</p>
                                <span>"Агрокомплекс"</span>
                            </td>
                            <td class="tournaments-player__content">9</td>
                            <td class="tournaments-player__content">2</td>
                        </tr>
                        <tr>
                            <td class="tournaments-player__content">5</td>
                            <td class="tournaments-player__content tournaments-player__content-name">
                                <p>Краснов Александр</p>
                                <span>"Агрокомплекс"</span>
                            </td>
                            <td class="tournaments-player__content">9</td>
                            <td class="tournaments-player__content">0</td>
                        </tr>
                        <tr>
                            <td class="tournaments-player__content">6</td>
                            <td class="tournaments-player__content tournaments-player__content-name">
                                <p>Краснов Александр</p>
                                <span>"Агрокомплекс"</span>
                            </td>
                            <td class="tournaments-player__content">9</td>
                            <td class="tournaments-player__content">1</td>
                        </tr>
                        <tr>
                            <td class="tournaments-player__content">7</td>
                            <td class="tournaments-player__content tournaments-player__content-name">
                                <p>Краснов Александр</p>
                                <span>"Агрокомплекс"</span>
                            </td>
                            <td class="tournaments-player__content">8</td>
                            <td class="tournaments-player__content">0</td>
                        </tr>
                        <tr>
                            <td class="tournaments-player__content">8</td>
                            <td class="tournaments-player__content tournaments-player__content-name">
                                <p>Краснов Александр</p>
                                <span>"Агрокомплекс"</span>
                            </td>
                            <td class="tournaments-player__content">7</td>
                            <td class="tournaments-player__content">0</td>
                        </tr>
                        <tr>
                            <td class="tournaments-player__content">9</td>
                            <td class="tournaments-player__content tournaments-player__content-name">
                                <p>Краснов Александр</p>
                                <span>"Агрокомплекс"</span>
                            </td>
                            <td class="tournaments-player__content">6</td>
                            <td class="tournaments-player__content">0</td>
                        </tr>
                        <tr>
                            <td class="tournaments-player__content">10</td>
                            <td class="tournaments-player__content tournaments-player__content-name">
                                <p>Краснов Александр</p>
                                <span>"Агрокомплекс"</span>
                            </td>
                            <td class="tournaments-player__content">6</td>
                            <td class="tournaments-player__content">0</td>
                        </tr>
                    </table>
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
                    <table class="tournaments-content__player" cellspacing="0">
                        <tr>
                            <th class="tournaments-player__header tournaments-player__header-left tournaments-player__header-none">№
                            </th>
                            <th class="tournaments-player__header tournaments-player__header-left tournaments-player__header-name">Игрок
                            </th>
                            <th class="tournaments-player__header">Голы</th>
                            <th class="tournaments-player__header">Пен</th>
                        </tr>
                        <tr>
                            <td class="tournaments-player__content tournaments-player__content-padding">1</td>
                            <td
                                class="tournaments-player__content tournaments-player__content-name tournaments-player__content-padding">
                                <p>Краснов Александр</p>
                                <span>"Агрокомплекс"</span>
                            </td>
                            <td class="tournaments-player__content tournaments-player__content-padding">21</td>
                            <td class="tournaments-player__content tournaments-player__content-padding">3</td>
                        </tr>
                        <tr>
                            <td class="tournaments-player__content">2</td>
                            <td class="tournaments-player__content tournaments-player__content-name">
                                <p>Краснов Александр</p>
                                <span>"Агрокомплекс"</span>
                            </td>
                            <td class="tournaments-player__content">11</td>
                            <td class="tournaments-player__content">4</td>
                        </tr>
                        <tr>
                            <td class="tournaments-player__content">3</td>
                            <td class="tournaments-player__content tournaments-player__content-name">
                                <p>Краснов Александр</p>
                                <span>"Агрокомплекс"</span>
                            </td>
                            <td class="tournaments-player__content">10</td>
                            <td class="tournaments-player__content">2</td>
                        </tr>
                        <tr>
                            <td class="tournaments-player__content">4</td>
                            <td class="tournaments-player__content tournaments-player__content-name">
                                <p>Краснов Александр</p>
                                <span>"Агрокомплекс"</span>
                            </td>
                            <td class="tournaments-player__content">9</td>
                            <td class="tournaments-player__content">2</td>
                        </tr>
                        <tr>
                            <td class="tournaments-player__content">5</td>
                            <td class="tournaments-player__content tournaments-player__content-name">
                                <p>Краснов Александр</p>
                                <span>"Агрокомплекс"</span>
                            </td>
                            <td class="tournaments-player__content">9</td>
                            <td class="tournaments-player__content">0</td>
                        </tr>
                        <tr>
                            <td class="tournaments-player__content">6</td>
                            <td class="tournaments-player__content tournaments-player__content-name">
                                <p>Краснов Александр</p>
                                <span>"Агрокомплекс"</span>
                            </td>
                            <td class="tournaments-player__content">9</td>
                            <td class="tournaments-player__content">1</td>
                        </tr>
                        <tr>
                            <td class="tournaments-player__content">7</td>
                            <td class="tournaments-player__content tournaments-player__content-name">
                                <p>Краснов Александр</p>
                                <span>"Агрокомплекс"</span>
                            </td>
                            <td class="tournaments-player__content">8</td>
                            <td class="tournaments-player__content">0</td>
                        </tr>
                        <tr>
                            <td class="tournaments-player__content">8</td>
                            <td class="tournaments-player__content tournaments-player__content-name">
                                <p>Краснов Александр</p>
                                <span>"Агрокомплекс"</span>
                            </td>
                            <td class="tournaments-player__content">7</td>
                            <td class="tournaments-player__content">0</td>
                        </tr>
                        <tr>
                            <td class="tournaments-player__content">9</td>
                            <td class="tournaments-player__content tournaments-player__content-name">
                                <p>Краснов Александр</p>
                                <span>"Агрокомплекс"</span>
                            </td>
                            <td class="tournaments-player__content">6</td>
                            <td class="tournaments-player__content">0</td>
                        </tr>
                        <tr>
                            <td class="tournaments-player__content">10</td>
                            <td class="tournaments-player__content tournaments-player__content-name">
                                <p>Краснов Александр</p>
                                <span>"Агрокомплекс"</span>
                            </td>
                            <td class="tournaments-player__content">6</td>
                            <td class="tournaments-player__content">0</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </main>

    <?php 
        get_footer();
    ?>