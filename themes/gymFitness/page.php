<?php get_header(); ?>

  <main class="container page section no-sidebars">

    <!--========= leafletjs.com // map start ==========-->
    <?php 
    // echo "<pre>";
    // var_dump( get_field('location') );
    // echo "</pre>";
?>
    <!--========= leafletjs.com // map end ==========-->

    <?php get_template_part('template-parts/page', 'loop'); ?>
    
  </main>

<?php get_footer(); ?>

