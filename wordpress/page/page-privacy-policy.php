    <?php 
        /* Template Name: privacy-policy */
        get_header();
    ?>

    <main class="main media-page">
        <div class="container">
            <h1 class="title privacy-policy__title"><?php the_title(); ?></h1>
            <div class="comand__descr privacy-policy"><?php the_content(); ?></div>
        </div>
    </main>

    <?php 
        get_footer();
    ?>