<?php



function stas_files()
{
  wp_enqueue_script('main-stas-js', get_theme_file_uri('/build/index.js'), NULL, '1.0', true);
  wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700&display=swap');
  wp_enqueue_script('smoothscroll', '//unpkg.com/smoothscroll-polyfill@0.4.4/dist/smoothscroll.min.js');
  wp_enqueue_style('stas_main_styles', get_theme_file_uri('/build/index.css'));
}

add_action('wp_enqueue_scripts', 'stas_files');

function stas_features()
{
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
  //   add_image_size('professorLandscape', 400, 260, true);
  //   add_image_size('professorPortrait', 480, 650, true);
  //   add_image_size('pageBanner', 1500, 350, true);
}

add_action('after_setup_theme', 'stas_features');
