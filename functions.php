<?php

  /**
   * Enqueue scripts
   *
   * @param string $handle Script name
   * @param string $src Script url
   * @param array $deps (optional) Array of script names on which this script depends
   * @param string|bool $ver (optional) Script version (used for cache busting), set to null to disable
   * @param bool $in_footer (optional) Whether to enqueue the script before </head> or before </body>
   */
  function divi_child_scripts() {
    $parent_style = 'divi-style'; // This is 'twentyfifteen-style' for the Twenty Fifteen theme.

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
      get_stylesheet_directory_uri() . '/style.css',
      array( $parent_style ),
      wp_get_theme()->get('Version')
    );
  }

  add_action( 'wp_enqueue_scripts', 'divi_child_scripts' );

function yearsc_func( $atts ){
  return date('Y');
}
add_shortcode( 'year', 'yearsc_func' );
