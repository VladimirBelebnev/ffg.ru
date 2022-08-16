<?php

function ffgel_assets() {

	wp_enqueue_style( 'maincss', get_template_directory_uri() . '/assets/css/main.css' );

    wp_enqueue_style( 'vendor', get_template_directory_uri() . '/assets/css/vendor.css' );

    wp_enqueue_script( 'mainjs', get_template_directory_uri() . '/assets/js/main.js', array(), '20151215', true );
}

add_action('wp_enqueue_scripts', 'ffgel_assets');

show_admin_bar(false);

// add_theme_support('title-tag');
// add_theme_support('post-thumbnails');