<?php

// template name: special template

get_header();

if(have_posts()) :
  while(have_posts()) : the_post(); ?>

  <article class="post page">
    <h2><?php the_title(); ?></h2>

    <div class="info-box">
      <h4>Disclaimer Title</h4>
      <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
      </p>

    </div>

    <?php the_content();  ?>
  </article>

  <?php endwhile;

  else :
    echo '<p>No content found</p>';

  endif;

  get_footer();

?>
