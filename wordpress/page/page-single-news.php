    <?php 
        /* Template Name: single-news-page */
        /* Template Post Type: post */
        get_header();
    ?>

     <main class="single-news">
        <div class="single-news__wrap">
            <?php $image = get_field('news_thumbnail'); ?>
			<img class="single-news__photo" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
            <div class="single-news__block">
                <div class="container">
                    <div class="single-news__header">
                        <p class="single-news__date"><?php the_time('j F Y в H:i'); ?></p>
                        <h1 class="header-title single-news__title"><?php the_title(); ?></h1>
                        <p class="single-news__descr"><?php the_field('news_descr'); ?></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="single-news__content">
            <div class="container">
                <div class="single-news__text">
                    <?php the_content(); ?>
                    <p class="single-news__info"><?php the_field('news_info'); ?></p>
                </div>
                <div class="single-news__share">
                    <p>Поделиться статьей:</p>
                    <div class="single-news__share-wrap">
                        <a href="https://telegram.me/share/url?url=<?php the_permalink(); ?>" target="_blank">
                            <svg viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M17.5 0C7.8321 0 0 7.83323 0 17.5C0 27.1668 7.83323 35 17.5 35C27.1679 35 35 27.1668 35 17.5C35 7.83323 27.1668 0 17.5 0ZM26.0953 11.9892L23.2231 25.524C23.0108 26.4837 22.4395 26.7163 21.6424 26.2647L17.2674 23.0402L15.1573 25.0724C14.9247 25.305 14.7271 25.5026 14.2755 25.5026L14.586 21.0497L22.6935 13.7245C23.0469 13.414 22.6156 13.2379 22.1494 13.5484L12.1292 19.8563L7.81065 18.5082C6.87242 18.2124 6.85097 17.57 8.00823 17.1184L24.8805 10.6118C25.664 10.3295 26.3482 10.8026 26.0942 11.9881L26.0953 11.9892Z"
                                    fill="#0077B6" />
                            </svg>
                        </a>
                        <a href="https://vk.com/share.php?url=<?php the_permalink(); ?>" target="_blank">
                            <svg viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="17.5" cy="17.5" r="17.5" fill="#0077B6" />
                                <rect x="6" y="10" width="24" height="16" fill="white" />
                                <path
                                    d="M6.9301 8.66255C4.46994 10.8153 2.1001 10.2261 2.1001 17.1555V20.3074C2.1001 27.2369 4.46994 24.7099 6.9301 26.8625C9.39041 29.0153 8.96822 30.7125 16.8876 30.7125H19.1626C27.0821 30.7125 28.6199 29.7153 31.0801 27.5625C33.5403 25.4099 32.6901 25.3994 32.6901 18.4699V15.7596C32.6901 8.83005 31.802 9.76525 29.3417 7.61255C26.8816 5.45991 26.2071 2.80005 18.2876 2.80005H16.8876C8.96814 2.80005 9.39033 6.50991 6.9301 8.66255ZM5.99385 12.1152H9.98971C10.121 17.9595 13.0667 20.435 15.4001 20.9454V12.1152H19.1626V17.1555C21.4667 16.9386 23.8876 14.6417 24.7042 12.1152H28.4667C28.1589 13.4255 27.5454 14.6662 26.6647 15.7596C25.7839 16.853 24.6548 17.7757 23.348 18.4699C24.8071 19.1037 26.0959 20.0013 27.1292 21.1034C28.1624 22.2054 28.9165 23.4868 29.3417 24.8628H25.2001C24.8185 23.6676 24.0418 22.5976 22.9677 21.7871C21.8936 20.9767 20.5699 20.4619 19.1626 20.3074V24.8628H18.7105C10.7335 24.8628 6.18346 20.0777 5.99385 12.1152Z"
                                    fill="#0077B6" />
                            </svg>
                        </a>
                    </div>
                </div>
                <?php echo do_shortcode("[anycomment]"); ?>

            </div>
        </div>
    </main>

    <?php 
        get_footer();
    ?>