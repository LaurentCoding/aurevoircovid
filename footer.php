
</main>
<footer>
        <?php wp_nav_menu(
            array( 
              'theme_location' => 'footer',
              'container' => 'ul',
              'menu_class' => 'site__footer__menu',));
        ?>

  <div>© AuRevoirCovid 2022</div>
  <a href="<?php echo home_url('/'); ?>">
        <img src="<?php echo get_template_directory_uri(); ?>/img/logoCovid.png" alt="Logo"></a>
  
</footer>
</body>
</html>