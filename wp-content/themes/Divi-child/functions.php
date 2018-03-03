<?php

function my_loginlogo() {
echo '<style type="text/css">
    h1 a {
    background-image: url(' . get_template_directory_uri() . '/login/logo.png) !important;
    }
</style>';
}
add_action('login_head', 'my_loginlogo');

function my_loginURL() {
    return 'http://www.sevetistudios.com/';
}
add_filter('login_headerurl', 'my_loginURL');


function my_loginURLtext() {
    return 'Seveti Studios';
}
add_filter('login_headertitle', 'my_loginURLtext');

function enqueue_child_theme_styles() {
wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
}
add_action( 'wp_enqueue_scripts', 'enqueue_child_theme_styles');

?>