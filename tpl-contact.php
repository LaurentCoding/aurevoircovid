<?php
/* Template Name: Modèle page contact */
?>
<?php get_header() ?>
<div class="contact">
<section class="contact_explication">
  <p><?php the_field('explication') ?></p>
</section>
<section class="contact_formulaire">
  <h1><?php the_field('title_contact') ?></h1>
  <?php echo do_shortcode('[contact-form-7 id="77" title="Formulaire de contact 1"]'); ?>
</section>
</div>




<?php get_footer() ?>