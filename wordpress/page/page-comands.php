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
                    <?php 
							$my_posts = get_posts( array(
								'numberposts' => -1,
								'tag'    => 'local_comands',
								'orderby'     => 'date',
								'order'       => 'DESC',
								'include'     => array(),
								'exclude'     => array(),
								'meta_key'    => '',
								'meta_value'  =>'',
								'post_type'   => '',
								'suppress_filters' => true, 
							) );

							global $post;

							foreach( $my_posts as $post ){
								setup_postdata( $post );
								?>
                    <a href="<?php the_permalink(); ?>" class="comands__item">
                        <?php $logo = get_field('logo'); ?>
                        <img class="comands__photo" src="<?php echo $logo['url']; ?>"
								alt="<?php echo $logo['alt']; ?>">
                        <p class="comands__name"><?php the_field('comand_name'); ?></p>
                    </a>
                    <?php
							}
							wp_reset_postdata();
						?>
                </div>
                <div class="comands__items hidden" data-comands="kray-comands">
                    <?php 
							$my_posts = get_posts( array(
								'numberposts' => -1,
								'tag'    => 'kray_comands',
								'orderby'     => 'date',
								'order'       => 'DESC',
								'include'     => array(),
								'exclude'     => array(),
								'meta_key'    => '',
								'meta_value'  =>'',
								'post_type'   => '',
								'suppress_filters' => true, 
							) );

							global $post;

							foreach( $my_posts as $post ){
								setup_postdata( $post );
								?>
                    <a href="<?php the_permalink(); ?>" class="comands__item">
                        <?php $logo = get_field('logo'); ?>
                        <img class="comands__photo" src="<?php echo $logo['url']; ?>"
								alt="<?php echo $logo['alt']; ?>">
                        <p class="comands__name"><?php the_field('comand_name'); ?></p>
                    </a>
                    <?php
							}
							wp_reset_postdata();
						?>
                </div>
            </div>
        </div>
    </main>

    <?php 
        get_footer();
    ?>
