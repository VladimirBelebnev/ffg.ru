    <?php 
        /* Template Name: spartak-page */
        /* Template Post Type: post */
        get_header();
    ?>

    <main class="main spartak">
        <div class="container">
            <div class="spartak__logo">
                <?php $logo = get_field('logo'); ?>
                <img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>">
                <h1 class="header-title">“Спартак”</h1>
            </div>
            <div class="spartak__content">
                <?php $image = get_field('comand_photo'); ?>
                <img class="spartak__photo" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                <div class="spartak__descr"><?php the_content(); ?></div>
            </div>
            <div class="tournaments-content__bg spartak__bg">
                <?php echo do_shortcode("[table id=2 /]"); ?>
            </div>
            <div class="comand__player spartak__player">
                <h1 class="title comand-player__header">Игроки</h1>
                <div class="player__wrap">
                     <?php 
                        $my_posts = get_posts( array(
                            'numberposts' => -1,
                            'category'    => 0,
                            'orderby'     => 'date',
                            'order'       => 'DESC',
                            'include'     => array(),
                            'exclude'     => array(),
                            'meta_key'    => '',
                            'meta_value'  =>'',
                            'post_type'   => 'spartak__players',
                            'suppress_filters' => true, 
                        ) );

                        global $post;

                        foreach( $my_posts as $post ){
                            setup_postdata( $post );
                            ?>
                        <div class="player__card">
                            <div class="player__front">
                                <?php $image = pods_image_url(get_post_meta($id, 'player_photo', true), null); ?>
                                <img class="player__photo" src="<?php echo $image; ?>" alt="player name">
                                <h2 class="header-title player__fnumber"><?php echo get_post_meta(get_the_ID(), 'player_number', true) ?></h2>
                                <h3 class="player__title player__ftitle"><?php the_title(); ?></h3>
                            </div>
                            <div class="player__back" style="background: url(<?php echo get_template_directory_uri(); ?>/assets/img/card-bg.png) center no-repeat">
                                <h3 class="player__title"><?php the_title(); ?></h3>
                                <p class="player__date">Дата рождения: <b><?php echo get_post_meta(get_the_ID(), 'player_date', true) ?></b></p>
                                <p class="player__position">Позиция: <b><?php echo get_post_meta(get_the_ID(), 'player_post', true) ?></b></p>
                                <p class="player__bnumber">Игровой номер: <b><?php echo get_post_meta(get_the_ID(), 'player_number', true) ?></b></p>
                            </div>
                        </div>
                    <?php
                        }
                        wp_reset_postdata();
				    ?>


                    <?php 
                        $my_posts = get_posts( array(
                            'numberposts' => -1,
                            'category'    => 0,
                            'orderby'     => 'date',
                            'order'       => 'DESC',
                            'include'     => array(),
                            'exclude'     => array(),
                            'meta_key'    => '',
                            'meta_value'  =>'',
                            'post_type'   => 'spartak__trainer',
                            'suppress_filters' => true, 
                        ) );

                        global $post;

                        foreach( $my_posts as $post ){
                            setup_postdata( $post );
                            ?>
                        <div class="player__card">
                            <div class="player__front">
                                <?php $image = pods_image_url(get_post_meta($id, 'trainer_photo', true), null); ?>
                                <img class="player__photo" src="<?php echo $image; ?>" alt="trainer name">
                                <h3 class="player__title player__ftitle"><?php the_title(); ?></h3>
                            </div>
                            <div class="player__back" style="background: url(<?php echo get_template_directory_uri(); ?>/assets/img/card-bg.png) center no-repeat">
                                <h3 class="player__title"><?php the_title(); ?></h3>
                                <p class="player__date">Дата рождения: <b><?php echo get_post_meta(get_the_ID(), 'trainer_date', true) ?></b></p>
                                <p class="player__position">Позиция: <b><?php echo get_post_meta(get_the_ID(), 'trainer_post', true) ?></b></p>
                            </div>
                        </div>
                    <?php
                        }
                        wp_reset_postdata();
				    ?>
                </div>
            </div>
        </div>
        <div class="sport-school__contact spartak__contact">
            <h3 class="title sport-school-contact__header">Контакты</h3>
            <div class="sport-school-contact__wrap">
                <div class="sport-school-contact__block">
                    <svg class="sport-school-contact__icon" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M10 0C6.00606 0 2.75676 3.2493 2.75676 7.2432C2.75676 12.1998 9.23875 19.4763 9.51473 19.7836C9.77395 20.0723 10.2265 20.0718 10.4853 19.7836C10.7613 19.4763 17.2432 12.1998 17.2432 7.2432C17.2432 3.2493 13.9939 0 10 0ZM10 10.8875C7.99055 10.8875 6.35578 9.25266 6.35578 7.2432C6.35578 5.23375 7.99059 3.59898 10 3.59898C12.0094 3.59898 13.6442 5.23379 13.6442 7.24324C13.6442 9.2527 12.0094 10.8875 10 10.8875Z"
                            fill="#0077B6" />
                    </svg>
                    <p class="sport-school-contact__info">г. Геленджик, ул. Солнцедарская, д. 1з</p>
                </div>
                <div class="sport-school-contact__block">
                    <svg class="sport-school-contact__icon" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_9_280)">
                            <path
                                d="M17.2324 13.9201C16.0242 12.8867 14.7981 12.2608 13.6047 13.2926L12.8921 13.9162C12.3707 14.3689 11.4014 16.484 7.65347 12.1726C3.90635 7.86665 6.1362 7.19621 6.65835 6.74743L7.37484 6.12304C8.56196 5.08889 8.11396 3.78704 7.25776 2.44694L6.74108 1.63524C5.88098 0.29826 4.9444 -0.579789 3.75415 0.452796L3.11103 1.01475C2.58498 1.39797 1.11454 2.64363 0.757861 5.01006C0.328592 7.84948 1.68274 11.101 4.78518 14.6686C7.88372 18.2378 10.9175 20.0306 13.7912 19.9993C16.1795 19.9736 17.6219 18.692 18.073 18.2261L18.7184 17.6633C19.9056 16.6315 19.168 15.581 17.959 14.5453L17.2324 13.9201Z"
                                fill="#0077B6" />
                        </g>
                        <defs>
                            <clipPath id="clip0_9_280">
                                <rect width="20" height="20" fill="white" />
                            </clipPath>
                        </defs>
                    </svg>
                    <p class="sport-school-contact__info"><a href="callto:+7(99999)9-99-99">+7 (99999) 9-99-99</a></p>
                </div>
                <div class="sport-school-contact__block">
                    <svg class="sport-school-contact__block" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_9_265)">
                            <path
                                d="M19.8239 3.97363L13.7583 10.0002L19.8239 16.0267C19.9335 15.7975 20 15.5441 20 15.2736V4.72672C20 4.45613 19.9335 4.20281 19.8239 3.97363Z"
                                fill="#0077B6" />
                            <path
                                d="M18.2422 2.96875H1.75785C1.48726 2.96875 1.23394 3.03527 1.00476 3.14492L8.75722 10.8583C9.44269 11.5438 10.5574 11.5438 11.2428 10.8583L18.9953 3.14492C18.7661 3.03527 18.5128 2.96875 18.2422 2.96875Z"
                                fill="#0077B6" />
                            <path
                                d="M0.176172 3.97363C0.0665234 4.20281 0 4.45613 0 4.72672V15.2736C0 15.5442 0.0665234 15.7975 0.176172 16.0267L6.24176 10.0002L0.176172 3.97363Z"
                                fill="#0077B6" />
                            <path
                                d="M12.9297 10.8286L12.0714 11.6869C10.9293 12.8291 9.07078 12.8291 7.92863 11.6869L7.07035 10.8286L1.00476 16.8551C1.23394 16.9648 1.48726 17.0313 1.75785 17.0313H18.2422C18.5128 17.0313 18.7661 16.9648 18.9953 16.8551L12.9297 10.8286Z"
                                fill="#0077B6" />
                        </g>
                        <defs>
                            <clipPath id="clip0_9_265">
                                <rect width="20" height="20" fill="white" />
                            </clipPath>
                        </defs>
                    </svg>
                    <a class="sport-school-contact__info" href="mailto:mail@mail.ru">mail@mail.ru</a>
                </div>
            </div>
        </div>
    </main>

    <?php 
        get_footer();
    ?>