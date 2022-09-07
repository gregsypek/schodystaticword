<?php

function stas_post_types()
{
  //Cennik
  register_post_type('cennik', array(
    'show_in_rest' => true,
    'supports' => array('title', 'editor', 'thumbnail'),
    'rewrite' => array('slug' => 'cennik'),
    // 'has_archive' => true,
    'public' => true,
    'labels' => array(
      'name' => 'Cenniki',
      'add_new_item' => 'Dodaj Nowy Cennik',
      'edit_item' => 'Edytuj Cennik',
      'all_items' => 'Wszystkie Cenniki',
      'singular_name' => 'Cennik'
    ),
    'menu_icon' => 'dashicons-cart'
  ));
}

add_action('init', 'stas_post_types');
