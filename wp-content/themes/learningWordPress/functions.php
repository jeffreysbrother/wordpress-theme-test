<?php

function learningWordPress_resources() {
  wp_enqueue_style('normalize', get_template_directory_uri() . '/css/normalize.css');
  wp_enqueue_style('style', get_template_directory_uri() . '/css/style.css');
}

add_action('wp_enqueue_scripts', 'learningWordPress_resources');

//get top ancestor
function get_top_ancestor_id() {

  global $post;

  if($post->post_parent) {
    $ancestors = array_reverse(get_post_ancestors($post->ID));
    return $ancestors[0];
  }

  return $post->ID;
}

//does page have children
function has_children() {
  global $post;

  $pages = get_pages('child_of=' . $post->ID);
  return count($pages);
}

//customize excerpt word count Length
function custom_excerpt_length() {
  return 66;
}

add_filter('excerpt_length', 'custom_excerpt_length');

//Theme setup
function learningWordPress_setup() {

    //Navigation menus
    register_nav_menus(array(
      'primary' => __( 'Primary Menu' ),
      'footer' => __( 'Footer Menu' ),
    ));

    //add featured image support
    add_theme_support('post-thumbnails');
    add_image_size('small-thumbnail', 180, 120, true);
    add_image_size('banner-image', 920, 210, array('left', 'top'));

    //add post format support
    add_theme_support('post-formats', array('aside', 'gallery', 'link'));

    //enable widgets
    register_sidebar( array(
     'name'          => 'Home right sidebar',
     'id'            => 'home_right_1',
     'before_widget' => '<div>',
     'after_widget'  => '</div>',
     'before_title'  => '<h2 class="rounded">',
     'after_title'   => '</h2>',
    ) );
}

add_action('after_setup_theme', 'learningWordPress_setup');
