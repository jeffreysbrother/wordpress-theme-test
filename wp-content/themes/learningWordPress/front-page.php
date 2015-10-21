<?php

get_header();

if(have_posts()) :
  while(have_posts()) : the_post();

  the_content();

  endwhile;

  else :
    echo '<p>No content found</p>';

  endif; ?>


  <div class="home-columns clearfix">
    <div class="one-half">
        <?php //first posts loop begins here
        $artPosts = new WP_Query('cat=5&posts_per_page=2');

        if($artPosts->have_posts()) :
        while($artPosts->have_posts()) : $artPosts->the_post(); ?>
          <h2><?php the_title(); ?></h2>
        <?php endwhile;

        else :
          //fallback to no content message
        endif;
        wp_reset_postdata(); ?>
    </div>


    <div class="one-half last">
        <?php //second posts loop begins here
        $sportsPosts = new WP_Query('cat=4&posts_per_page=2');

        if($sportsPosts->have_posts()) :
        while($sportsPosts->have_posts()) : $sportsPosts->the_post(); ?>
          <h2><?php the_title(); ?></h2>
        <?php endwhile;

        else :
          //fallback to no content message
        endif;
        wp_reset_postdata(); ?>
    </div>

  </div>


<?php
  get_footer();
?>
