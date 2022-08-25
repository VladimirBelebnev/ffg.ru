    <?php 
        /* Template Name: referees */
        get_header();
    ?>

    <main class="spartak main referees">
        <div class="container">
            <h1 class="header-title comand-player__header">Судьи</h1>
            <div class="player__wrap referees__wrap">
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
                            'post_type'   => 'referees',
                            'suppress_filters' => true, 
                        ) );

                        global $post;

                        foreach( $my_posts as $post ){
                            setup_postdata( $post );
                            ?>
                        <div class="player__card">
                            <div class="player__front">
                                 <?php $image = pods_image_url(get_post_meta($id, 'referee_photo', true), null); ?>
                                <img class="player__photo" src="<?php echo $image; ?>" alt="referee name">
                                <h3 class="player__title player__ftitle"><?php the_title(); ?></h3>
                            </div>
                            <div class="player__back" style="background: url(<?php echo get_template_directory_uri(); ?>/assets/img/card-bg.png) center no-repeat">
                                <h3 class="player__title"><?php the_title(); ?></h3>
                                <p class="player__date">Дата рождения: <b><?php echo get_post_meta(get_the_ID(), 'referee_date', true) ?></b></p>
                                <p class="player__position">Категория: <b><?php echo get_post_meta(get_the_ID(), 'referee_category', true) ?></b></p>
                            </div>
                        </div>
                    <?php
                        }
                        wp_reset_postdata();
				    ?>
            </div>
        </div>
    </main>

    <?php 
        get_footer();
    ?>