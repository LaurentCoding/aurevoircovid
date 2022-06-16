<?php
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
  );
}
  
  add_action('wp_enqueue_scripts', 'tazlo_register_assets');
  
  

  
/*
Création des Custom Post-Type()
*/
function create_custom_campagne(){
  //Fonction proposé par wordpress pour réaliser des Custom Post-type
  register_post_type(
      'campagne',
       array(
        'label' => 'Campagne',
        'description' => 'Suivi de la campagne de vaccination',
        'public' => true,
        'show_ui' => true,
    )
  );
}

add_action('init', 'create_custom_campagne');

/*
Création de la taxonomie associée a mon Post-Type() campagne
*/
function create_taxonomy_campagne(){
  register_taxonomy(
    'tax_campagne',
    'campagne',
    array(
      'labels' => array (
        'name' => 'Campagnes',
        'singular_name' => 'Campagne'
      ),
      'description' => 'Suivi de la vaccination',
      'public' => true,
      'show_ui' => true,
      'hierarchical' => true,
    )
  );
}

add_action('init', 'create_taxonomy_campagne');

function create_custom_mondial(){
   //Fonction proposé par wordpress pour réaliser des Custom Post-type
   register_post_type(
    'mondial',
     array(
      'label' => 'Mondial',
      'description' => 'Suivi des recommendation des l\'OMS',
      'public' => true,
      'menu_icon' => 'dashicons-admin-tools',
      'show_ui' => true,
    )
  );
}
add_action('init', 'create_custom_mondial');
function create_taxonomy_mondial(){
  register_taxonomy(
    'tax_mondial',
    'mondial',
    array(
      'labels' => array (
        'name' => 'Suivis',
        'singular_name' => 'Suivi'
      ),
      'description' => 'Suivi de la progression dans le monde',
      'public' => true,
      'show_ui' => true,
      'hierarchical' => true,
    )
  );
}

add_action('init', 'create_taxonomy_mondial');

function create_custom_humanite(){
   //Fonction proposé par wordpress pour réaliser des Custom Post-type
   register_post_type(
    'humanite',
     array(
      'label' => 'Humanité',
      'description' => 'Comment faire pour sauver l\'humanité',
      'public' => true,
      'show_ui' => true,
    )
  );
}
add_action('init', 'create_custom_humanite');

function create_custom_certificat(){
   //Fonction proposé par wordpress pour réaliser des Custom Post-type
   register_post_type(
    'certificat',
     array(
      'label' => 'Certificat',
      'description' => 'Certificat de vaccination',
      'public' => true,
      'show_ui' => true,
    )
  );
}
add_action('init', 'create_custom_certificat');







