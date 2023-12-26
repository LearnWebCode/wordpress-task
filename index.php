<?php

get_header(); ?>

<div class="max-w-4xl mx-auto px-4">

  <div class="prose max-w-full">
    <?php if (have_posts()) {
      while(have_posts()) {
        the_post(); ?>
        <div>
          <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
          <?php echo wp_trim_words(get_the_content(), 40, '...') ?>
        </div>
      <?php }
    } ?>
  </div>
</div>

<?php get_footer();