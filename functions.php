<?php
/* Ajoute la prise en charge des images mises en avant */
add_theme_support ('post_thumbnails');

/* Ajouter automatiquement le titre du site dans l'en-tête du site */
add_theme_support ('title_tags');

/* Fonction menu */

  register_nav_menus(array(
    'main'=> 'MenuPrincipal',
    'footer' => 'Bas de page',
  ));


function tazlo_register_assets() {
    /* Mise en place du css */
  wp_enqueue_style(
    'tazlo-theme',
    get_template_directory_uri().'/assets/css/styles.css',
    array(),
    '1.0'
  );
      
  wp_enqueue_script(
    'tazlo-burger',
    get_template_directory_uri().'/assets/js/hamburger.js',
    array(),
    '1.0'
  );
}
  
  add_action('wp_enqueue_scripts', 'tazlo_register_assets');
  
  

  







