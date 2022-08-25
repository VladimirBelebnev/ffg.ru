    <?php
        /* Template Name: User Profile */
        get_header();
    ?>

    <?php
        global $current_user, $wp_roles;
        get_currentuserinfo();

        /* Load the registration file. */
        require_once( ABSPATH . WPINC . '/registration.php' );

        /* If profile was saved, update profile. */
        if ( 'POST' == $_SERVER['REQUEST_METHOD'] && !empty( $_POST['action'] ) && $_POST['action'] == 'update-user' ) {

            /* Update user password. */
            if ( !empty($_POST['pass1'] ) && !empty( $_POST['pass2'] ) ) {
                if ( $_POST['pass1'] == $_POST['pass2'] )
                    wp_update_user( array( 'ID' => $current_user->id, 'user_pass' => esc_attr( $_POST['pass1'] ) ) );
                else
                    $error = __('The passwords you entered do not match.  Your password was not updated.', 'profile');
            }

            /* Update user information. */
            if ( !empty( $_POST['email'] ) )
                update_usermeta( $current_user->id, 'user_email', esc_attr( $_POST['email'] ) );
            if ( !empty( $_POST['first-name'] ) )
                update_usermeta( $current_user->id, 'first_name', esc_attr( $_POST['first-name'] ) );
            if ( !empty( $_POST['last-name'] ) )
                update_usermeta($current_user->id, 'last_name', esc_attr( $_POST['last-name'] ) );

            /* Redirect so the page will show updated info. */
            if ( !$error ) {
                wp_redirect( get_permalink() );
                exit;
            }
        }
    ?>

    <?php 
        if ( is_user_logged_in() ) {
                                    ?><main class="main">
        <div class="container">
            <div class="user__wrap">
                <h2 class="title"><?php the_title(); ?></h2>
                <div class="user__photo">
                    <h4 class="user__title">Фотография</h4>
                    <?php echo do_shortcode('[basic-user-avatars]'); ?>
                </div>
                <div class="user__descr">
                    <h4 class="user__title">Данные</h4>
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <div id="post-<?php the_ID(); ?>">
                        <div class="entry-content entry">
                            <?php the_content(); ?>
                            <?php if ( !is_user_logged_in() ) : ?>
                            <p class="warning">
                                <?php _e('Вы должны войти в систему, чтобы редактировать свой профиль.', 'profile'); ?>
                            </p><!-- .warning -->
                            <?php else : ?>
                            <?php if ( $error ) echo '<p class="error">' . $error . '</p>'; ?>
                            <form method="post" id="adduser" action="<?php the_permalink(); ?>">
                                <p class="form-username">
                                    <label for="first-name"><?php _e('Имя', 'profile'); ?></label>
                                    <input class="text-input" name="first-name" type="text" id="first-name"
                                        value="<?php the_author_meta( 'user_firstname', $current_user->id ); ?>" />
                                </p><!-- .form-username -->
                                <p class="form-username">
                                    <label for="last-name"><?php _e('Фамилия', 'profile'); ?></label>
                                    <input class="text-input" name="last-name" type="text" id="last-name"
                                        value="<?php the_author_meta( 'user_lastname', $current_user->id ); ?>" />
                                </p><!-- .form-username -->
                                <p class="form-submit">
                                    <?php echo $referer; ?>
                                    <input name="updateuser" type="submit" id="updateuser" class="submit button"
                                        value="<?php _e('Обновить данные', 'profile'); ?>" />
                                    <?php wp_nonce_field( 'update-user' ) ?>
                                    <input name="action" type="hidden" id="action" value="update-user" />
                                </p><!-- .form-submit -->
                            </form><!-- #adduser -->
                            <?php endif; ?>
                        </div><!-- .entry-content -->
                    </div><!-- .hentry .post -->
                    <?php comments_template( '', true ); ?>
                    <?php endwhile; ?>
                    <?php else: ?>
                    <p class="no-data">
                        <?php _e('
Извините, ни одна страница не соответствует вашим критериям.', 'profile'); ?>
                    </p><!-- .no-data -->
                    <?php endif; ?>
                </div>
                <div class="user__logout">
                    <a href="http://ffgel.ru/login/?action=logout">Выход</a>
                </div>
            </div>
        </div>
    </main><?php
        } else {
            ?>
        <main class="main">
            <div class="container">
                <p style="width: 100%; color: #333; text-align: center; display: inline-block; padding: 80px 0; margin: 0;">Вы должны войти в систему, чтобы редактировать свой профиль.</з>
            </div>
        </main>
    <?php
        }
    ?>

    <?php 
        get_footer();
    ?>
