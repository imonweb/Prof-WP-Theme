<?php 
/*  
* Template Name: Gallery
*/
get_header(); ?>

  <main class="container page section">
    <?php while(have_posts(  ) ):  the_post(); ?>
      <h1 class="text-center text-primary"><?php the_title(); ?></h1>

    <?php //the_content(); 
      $gallery = get_post_gallery( get_the_ID(), false );

      $gallery_images_ids = explode(',', $gallery['ids']);
  
      // echo "<pre>";
      // var_dump($gallery_images_ids );
      // echo "</pre>";
    ?>

    <ul class="gallery-images">
      <?php 
        $i = 0;
        foreach($gallery_images_ids as $id):
          $size = ($i === 3 || $i == 6) ?  'portrait' : 'square';
          // $image = wp_get_attachment_image_src( $id, 'square' ); 
          $imageThumb = wp_get_attachment_image_src( $id, $size ); 
          // $image = wp_get_attachment_image_src( $id, $size ); 
          $image = wp_get_attachment_image_src( $id, 'large' ); 
          // echo $i;
      ?>
          <a href="<?php echo $image[0]; ?>" data-lightbox="gallery">
            <!-- <img src="<?php //echo $image[0]; ?>" alt=""> -->
            <img src="<?php echo $imageThumb[0]; ?>" alt="">
            <?php
              // echo basename(get_page_template());
              ?>
          </a>
      <?php $i++; endforeach;
      ?>
    </ul>

    <?php endwhile; ?>
     
  </main>


<?php get_footer(); ?>