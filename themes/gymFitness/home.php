<?php get_header(); ?>

  <main class="container page section">
    <?php while(have_posts(  ) ):  the_post(); ?>
      <h2><?php the_title(); ?></h2>
    <?php endwhile; ?>
  </main>

<?php get_footer(); ?>