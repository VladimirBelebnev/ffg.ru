    <?php 
        /* Template Name: sports-schools */
        get_header();
    ?>

    <main class="sports-schools main">
        <div class="container">
            <h1 class="header-title">спортшколы</h1>
            <div class="sports-schools__wrap">
                <?php 
                    $my_posts = get_posts( array(
                        'numberposts' => -1,
                        'category'    => 23,
                        'orderby'     => 'date',
                        'order'       => 'DESC',
                        'include'     => array(),
                        'exclude'     => array(),
                        'meta_key'    => '',
                        'meta_value'  =>'',
                        'post_type'   => 'post',
                        'suppress_filters' => true, 
                    ) );

                    global $post;

                    foreach( $my_posts as $post ){
                        setup_postdata( $post );
                        ?>
                    <a href="<?php the_permalink(); ?>" class="sports-schools__block">
                        <?php $image = get_field('photo'); ?>
                        <img class="sports-schools__photo" src="<?php echo $image['url']; ?>"
                            alt="<?php echo $image['alt']; ?>">
                    <div class="sports-schools__content">
                        <h3 class="header-title sports-schools__name"><?php the_title(); ?></h3>
                        <p class="sports-schools__desc"><?php the_field('descr'); ?></p>
                    </div>
                </a>
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