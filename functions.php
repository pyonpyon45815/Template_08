<?php 
  function init_func() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    set_post_thumbnail_size(600,600,true);
  }
  add_action('init', 'init_func');





