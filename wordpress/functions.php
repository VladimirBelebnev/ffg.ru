<?php

function ffgel_assets() {

	wp_enqueue_style( 'maincss', get_template_directory_uri() . '/assets/css/main.css' );

    wp_enqueue_style( 'vendor', get_template_directory_uri() . '/assets/css/vendor.css' );

    wp_enqueue_script( 'mainjs', get_template_directory_uri() . '/assets/js/main.js', array(), '20151215', true );
}

add_action('wp_enqueue_scripts', 'ffgel_assets');

show_admin_bar(false);

add_theme_support('title-tag');

add_theme_support('post-thumbnails', array('slider'));

add_filter( 'use_default_gallery_style', '__return_false' );

add_filter('gallery_style', function( $str ){
	return str_replace('border: 2px solid #cfcfcf;', '', $str );
});

add_action( 'wp_footer', 'artabr_lm_footer_scripts' );

add_filter('wpcf7_autop_or_not', '__return_false');

add_filter('wpcf7_form_elements', function($content) {
    $content = preg_replace('/<(span).*?class="\s*(?:.*\s)?wpcf7-form-control-wrap(?:\s[^"]+)?\s*"[^\>]*>(.*)<\/\1>/i', '\2', $content);

    return $content;
});

// function wph_noadmin() {
//     if (is_admin() && !current_user_can('administrator')) {
//         wp_redirect(home_url());
//         exit;
//     } }
// add_action('init', 'wph_noadmin');

function user_set_default_displayname($user_id) {

    $user = get_userdata($user_id);

    $args = array(
        'ID' => $user_id,
        'display_name' => $user->user_nicename,
    );

    wp_update_user( $args );
}
add_action('user_register', 'user_set_default_displayname', 90);

