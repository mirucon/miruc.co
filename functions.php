<?php

if ( !function_exists ( 'loads' ) ) {
  function loads() {
    wp_enqueue_style ( 'materialize-css', '//cdnjs.cloudflare.com/ajax/libs/materialize/0.98.1/css/materialize.min.css' );
    wp_enqueue_style ( 'googlefonts', 'https://fonts.googleapis.com/css?family=Raleway:300,600|Lato' );
    wp_enqueue_script ( 'materlialize-js', '//cdnjs.cloudflare.com/ajax/libs/materialize/0.98.1/js/materialize.min.js', array('jquery') );
    // wp_enqueue_style ( 'main-style', get_template_directory_uri().'/style.css', array('materialize-css') );
    // wp_enqueue_style ( 'dashicons' );
  }
}
add_action( 'wp_enqueue_scripts', 'loads' );
function modify_jquery() {
	if (!is_admin()) {
		wp_deregister_script('jquery');
		wp_register_script('jquery', '//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js', false, '3.2.1');
		wp_enqueue_script('jquery');
	}
}
add_action('init', 'modify_jquery');

if ( !function_exists ( 'site_title' ) ) {
  function site_title() {
    echo '<a href="'.esc_url(home_url()).'" title="',bloginfo('name'),'">';
    if ( get_header_image() ) {
      echo '<img src="<?php header_image(); ?>" alt="<?php bloginfo("name"); ?>" />';
    } else {
      echo bloginfo('name');
    }
    echo '</a>';
  }
}
add_action( 'site_title', 'after_setup_theme' );

function load_ga() { ?>
    <script> (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){ (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o), m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m) })(window,document,'script','https://www.google-analytics.com/analytics.js','ga'); ga('create', 'UA-56308747-7', 'auto'); ga('send', 'pageview'); </script>
    <?php
}
add_action( 'wp_head', 'load_ga' );


/*   Remove Emoji
/* -------------------------------------------------- */
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
