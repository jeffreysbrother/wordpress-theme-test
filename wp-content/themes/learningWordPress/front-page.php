<?php

get_header();

if(have_posts()) :
  while(have_posts()) : the_post();

  the_content();

  endwhile;

  else :
    echo '<p>No content found</p>';

  endif;


  //posts loop begins here
  $opinionPosts = new WP_Query('cat=5&posts_per_page=2');

  if($opinionPosts->have_posts()) :
  while($opinionPosts->have_posts()) : $opinionPosts->the_post(); ?>
  	<h2><?php the_title(); ?></h2>
  <?php endwhile;

  else :
   	//fallback to no content message
  endif;
  wp_reset_postdata();


  get_footer();

?>
