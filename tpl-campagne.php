<?php
/* Template Name: Modèle page campagne
 */
?>
<?php get_header() ?>
<article>
  <h2><?php the_field('title_1') ?></h2>
  <p><?php the_field('article_1') ?></p>
</article>

<article>
  <h2><?php the_field('title_2') ?></h2>
  <p><?php the_field('article_2') ?></p>
</article>


<?php get_footer() ?>      