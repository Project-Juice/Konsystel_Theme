<?php
	function load_styles_and_scripts() {

  //wczytywanie CSS
  wp_register_style (
    'bootstrap-styles',
    'http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.css');
  wp_enqueue_style (
    'bootstrap-styles'
  );

  wp_enqueue_style (
    'main-styles',
    get_stylesheet_uri()
  );

  wp_enqueue_style (
    'font-awesome-style',
    'http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css'
  );


  // wczytywanie JS

  wp_enqueue_script (
    'jquery',
    'http://code.jquery.com/jquery-1.11.0.min.js',
    false,
    '1.11.0',
    true
  );

  wp_enqueue_script (
    'bootstrap-scripts',
    'http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js',
    false,
    '3.2.0',
    true
  );

}
add_action('wp_enqueue_scripts', 'load_styles_and_scripts');
	register_nav_menus(array(

    'main-nav' => 'Gorne menu strony'

));

?>
