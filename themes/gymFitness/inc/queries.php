<?php 

function gymfitness_classes_list() { ?>
  <ul class="classes-list">
    <?php 
      $args = array(
        'post_type' => 'gymfitness_classes',
      );
      // Use WP_Query to append the results into $classes
      $classes = new WP_Query($args);

      while($classes->have_posts()): $classes->the_post();
    ?>
    <li class="gym-class card gradient">
      <?php the_post_thumbnail('mediumSize'); ?>
      <div class="card-content">
        <a href="<?php the_permalink(); ?>"></a>
        <h3><?php the_title(); ?></h3>
      </div>
    </li>

    <?php endwhile; wp_reset_postdata(); ?>
  </ul>
<?php }

 