<?php
function add_css()
{
   wp_register_style('first', get_template_directory_uri() . '/assets/styles/navbar.css', false,'1.1','all');
   wp_enqueue_style( 'first');

   wp_register_style('second', get_template_directory_uri() . '/assets/styles/styles.css', false,'1.1','all');
   wp_enqueue_style( 'second');

   wp_register_style('third', get_template_directory_uri() . '/assets/styles/footer.css', false,'1.1','all');
   wp_enqueue_style( 'third');

}
add_action('wp_enqueue_scripts', 'add_css');

function add_script()
{
   wp_register_script('js-script', get_template_directory_uri() . '/assets/js/toggleButton.js', array ( 'jquery' ), 1.1, true);
   wp_enqueue_script( 'js-script');
}

add_action('wp_enqueue_scripts', 'add_script');