    <?php 
        /* Template Name: single-comand-page */
        /* Template Post Type: post */
        get_header();
    ?>

    <main class="comand main">
            <div class="container">
                <div class="comand__wrap">
                    <h1 class="title comand__header comand__header-mobile"><?php the_title(); ?></h1>
                    <?php $image = get_field('comand_photo'); ?>
                    <img class="comand__photo" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                    <div class="comand__content">
                        <h1 class="title comand__header"><?php the_title(); ?></h1>
                        <div class="comand__descr"><?php the_content(); ?></div>
                    </div>
                </div>
                <div class="comand__player">
                    <h1 class="title comand-player__header">Игроки</h1>
                    <div class="comand-player__content"><?php the_field('comand_players'); ?></div>
                </div>
            </div>
        </main>

    <?php 
        get_footer();
    ?>