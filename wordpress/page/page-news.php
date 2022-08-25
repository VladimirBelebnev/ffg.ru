    <?php 
        /* Template Name: news */
        get_header();
        $paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;
    ?>

    <main class="news-page main">
        <div class="container">
            <h1 class="header-title">Новости</h1>
            <div class="news-page__menu">
                <a href="https://ffgel.ru/news" class="news-page__btn news-page__btn-all active" id="all-news">Все</a>
                <div class="news-page__wrap">
                    <a href="https://ffgel.ru/news-local" class="news-page__btn" id="local">Местый футбол</a>
                    <a href="https://ffgel.ru/news-kray" class="news-page__btn" id="kray">Краевой футбол</a>
                    <a href="https://ffgel.ru/news-rus" class="news-page__btn" id="rus">Российский футбол</a>
                </div>
                <div class="news-page__wrap">
                    <a href="https://ffgel.ru/news-spartak" class="news-page__btn news-page__btn-comand" id="spartak">«Спартак Геленджик»</a>
                    <a href="https://ffgel.ru/news-vista" class="news-page__btn news-page__btn-comand" id="vista">«Vista»</a>
                </div>
                <div class="news-page__search">
                    <?php echo do_shortcode("[wpdreams_ajaxsearchlite]"); ?>
                </div>
            </div>
            <div class="news-page__block">
                <div>
                    <div class="news-page__items">
                        <?php
                            $the_query = new WP_Query( array(
                                'numberposts' => -1,
                                'category'    => 6,
                                'category_name'  => 'news',
                                'orderby'     => 'date',
                                'order'       => 'DESC',
                                'include'     => array(),
                                'exclude'     => array(),
                                'meta_key'    => '',
                                'meta_value'  =>'',
                                'post_type'   => 'post',
                                'suppress_filters' => true,
                                'posts_per_page' => 12,
                                'paged'          => $paged,
                            ) );

                            while( $the_query->have_posts() ){
                                $the_query->the_post();
                                ?>
                                    <a class="news-page__item" href="<?php the_permalink(); ?>">
                                        <?php $image = get_field('news_thumbnail'); ?>
                                        <img class="news-page__photo" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                                        <div class="news-page__item-wrap">
                                            <p class="news-page__date"><?php the_time('j F Y'); ?></p>
                                            <h4 class="news-page__header"><?php the_title(); ?></h4>
                                            <p class="news-page__descr"><?php the_field('news_descr'); ?></p>
                                        </div>
                                    </a>
                                <?php
                            }
                            wp_reset_postdata();
                        ?>
                    </div>
                    <div class="pagination">
                        <?php
                            $big = 999999999;

                            echo paginate_links( array(
                                'base'    => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                                'current' => max( 1, get_query_var('paged') ),
                                'total'   => $the_query->max_num_pages
                            ) );
                        ?>
                    </div>
                </div>
                <div class="adversting__contact news-page__contact">
                    <h3 class="title">Мы в соцсетях:</h3>
                    <p>Следите за нами в соиацльных сетях, подписывайтесь на новостные паблики, чтобы узнать о событиях клуба первыми!
                    </p>
                    <div class="adversting__icon news-page__icon">
                        <a href="https://t.me/FedFGel">
                            <svg viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M25 0C11.1887 0 0 11.1903 0 25C0 38.8097 11.1903 50 25 50C38.8113 50 50 38.8097 50 25C50 11.1903 38.8097 0 25 0ZM37.279 17.1274L33.1758 36.4629C32.8726 37.8339 32.0565 38.1661 30.9177 37.521L24.6677 32.9145L21.6532 35.8177C21.321 36.15 21.0387 36.4323 20.3935 36.4323L20.8371 30.071L32.4194 19.6065C32.9242 19.1629 32.3081 18.9113 31.6419 19.3548L17.3274 28.3661L11.1581 26.4403C9.81774 26.0177 9.7871 25.1 11.4403 24.4548L35.5435 15.1597C36.6629 14.7565 37.6403 15.4323 37.2774 17.1258L37.279 17.1274Z"
                                    fill="white" />
                            </svg>
                        </a>
                        <a href="https://www.youtube.com/channel/UCZKJ_spSZ-fmnmCdxBakQaQ">
                            <svg viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="25" cy="25" r="25" fill="white" />
                                <path
                                    d="M42.0283 16.856C41.8205 16.1131 41.4244 15.4365 40.8783 14.8917C40.3323 14.3468 39.6548 13.9522 38.9115 13.746C36.1213 13 24.9046 13 24.9046 13C24.9046 13 13.7091 12.9821 10.8899 13.746C10.1477 13.9531 9.4716 14.3481 8.9268 14.8929C8.38199 15.4377 7.98693 16.1139 7.77982 16.856C7.24996 19.7124 6.989 22.6122 7.00036 25.5174C6.99519 28.4085 7.25611 31.294 7.77982 34.1373C7.9876 34.8799 8.38277 35.5565 8.92739 36.1023C9.47201 36.6481 10.1478 37.0447 10.8899 37.2541C13.6801 38 24.9046 38 24.9046 38C24.9046 38 36.0934 38 38.9115 37.2541C39.6548 37.0456 40.3319 36.6494 40.8777 36.1035C41.4236 35.5577 41.8198 34.8806 42.0283 34.1373C42.5416 31.2957 42.7921 28.406 42.7742 25.5174C42.7921 22.6097 42.5472 19.7155 42.0283 16.856ZM21.3215 30.8707V20.1405L30.6583 25.5174L21.3215 30.8707Z"
                                    fill="#0A0A30" />
                            </svg>
                        </a>
                        <a href="https://vk.com/ffgel">
                            <svg viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="25" cy="25" r="25" fill="white" />
                                <rect x="8" y="15" width="36" height="21" fill="#0A0A30" />
                                <path
                                    d="M9.9 12.375C6.38549 15.4504 3 14.6086 3 24.5078V29.0104C3 38.9098 6.38549 35.2998 9.9 38.375C13.4147 41.4503 12.8116 43.875 24.125 43.875H27.375C38.6885 43.875 40.8855 42.4503 44.4 39.375C47.9146 36.2998 46.7 36.2848 46.7 26.3854V22.5136C46.7 12.6143 45.4313 13.9503 41.9166 10.875C38.4021 7.7998 37.4385 4 26.125 4H24.125C12.8115 4 13.4146 9.2998 9.9 12.375ZM8.5625 17.3074H14.2709C14.4584 25.6563 18.6666 29.1928 22 29.922V17.3073H27.375V24.5078C30.6666 24.1979 34.125 20.9167 35.2916 17.3073H40.6666C40.2269 19.1792 39.3505 20.9516 38.0923 22.5136C36.834 24.0756 35.221 25.3937 33.3541 26.3854C35.4386 27.2909 37.2798 28.5732 38.7558 30.1476C40.2318 31.722 41.3092 33.5525 41.9166 35.5183H36C35.4548 33.8108 34.3454 32.2822 32.8109 31.1244C31.2765 29.9666 29.3854 29.2312 27.375 29.0104V35.5183H26.7291C15.3334 35.5183 8.83337 28.6824 8.5625 17.3074Z"
                                    fill="white" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <?php 
        get_footer();
    ?>