<?php get_header(); ?>

  <main class="container page section">
    <?php 
      $category = get_queried_object(); 
    ?>
    <h2 class="text-primary text-center"><?php echo $category->name; ?></h2>
    <div class="text-center">
      <?php echo category_description($category->ID); ?>
    </div>
    <?php get_template_part('template-parts/blog', 'loop' ); ?>
  </main>

<?php get_footer(); ?>