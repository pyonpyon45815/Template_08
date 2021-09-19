<?php 
  function init_func() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');

    register_post_type('item', [
      'labels' => [
        'name' => '商品',
        'singular_name' => '商品',
        'add_new' => '商品を追加',
        'add_new_item' => '商品を追加',
        'edit_item' => '商品を編集',
        'new_item' => '新しい商品',
        'all_items' => 'すべての商品',
        'view_item' => '商品をみる',
        'search_items' => '商品を探す',
        'not_found' => '商品は見つかりませんでした',
        'not_found_in_trash' => 'ゴミ箱は空です',
        'parent_item_colon' => '',
        'menu_name' => '商品'
      ],
      'public' => true,
      'has_archive' => true,
      'hierarchical' => false,
      'menu_position' => 5,
      'menu_icon' => 'dashicons-cart'
    ]);
    register_taxonomy('item_category', 'item', [
      'labels' => [
        'name' => '商品カテゴリー',
      ],
      'hierarchical' => true,
      'show_in_rest' => true,
      ]);
  }
  add_action('init', 'init_func');
?>



<?php
register_post_type(
  'item',
  array('supports' => array('title','editor','thumbnail'))
);
?>


<!-- テスト -->
<?php

function rjs_styles() {
/*  General style.css file
	File is not enqueued because it only contains the theme configuration. 
	CSS is generated inside css/tailwind.prod.css
*/

wp_enqueue_style('tailwindcss', get_template_directory_uri() . '/dist.css', array(), filemtime(get_template_directory() .'/dist.css'), 'all');


} //End of rjs_styles() function

//Load the files, hook them into the enqueue scripts
add_action( 'wp_enqueue_scripts', 'rjs_styles' );








