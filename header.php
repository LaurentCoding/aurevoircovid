<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset'); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head() ?>
  <link rel="icon" type="image/png" href="screenshot.png" />
  <title>AuRevoirCovid</title>
</head>
<body <?php body_class(); ?>>
  <header>
    <nav class="navbar">
        <a href="<?php echo home_url('/'); ?>">
        <img src="<?php echo get_template_directory_uri(); ?>/img/logoCovid.png" alt="Logo"></a>
        <?php wp_nav_menu(
            array( 
              'theme_location' => 'main', 
              'container' => 'ul', // afin d'éviter d'avoir une div autour 
              'menu_class' => 'site__header__menu', // ma classe personnalisée 
            ) 
        );
        ?>
       
        <button class="nav_button"><a href="">Certificat</a></button>
        <div id="hamburger">
          <span class="bar"></span>
          <span class="bar"></span>
          <span class="bar"></span>
        </div>
    </nav>
  </header>
  <div id="admin" class="administration">
    <button ><a href="http://localhost/aurevoircovid/wp-admin/">Administration</a></button>
  </div>
  <main class="main">
  
