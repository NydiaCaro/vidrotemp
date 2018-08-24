<?php 

function register_enqueue_style(){
	$theme_data = wp_get_theme();

wp_register_style('mitema','https://fonts.googleapis.com/css?family=Merriweather:300,400|Montserrat:400,700');


wp_register_style('animate-css', get_theme_file_uri ('css/animate.css'), null, $theme_data->get('Version'), 'screen');

wp_register_style('icomoon-css', get_theme_file_uri ('css/icomoon.css'), null, $theme_data->get('Version'), 'screen');

wp_register_style('themify-css', get_theme_file_uri ('css/themify-icons.css'), null, $theme_data->get('Version'), 'screen');


wp_register_style('bootstrap-css', get_theme_file_uri ('css/bootstrap.css'), null, $theme_data->get('Version'), 'screen');

wp_register_style('carousel-css', get_theme_file_uri ('css/owl.carousel.min.css'), null, $theme_data->get('Version'), 'screen');

wp_register_style('default-css', get_theme_file_uri ('css/owl.theme.default.min.css'), null, $theme_data->get('Version'), 'screen');

wp_register_style('style-css', get_theme_file_uri ('css/style.css'), null, $theme_data->get('Version'), 'screen');


wp_enqueue_style('mitema-css');
wp_enqueue_style('animate-css');
wp_enqueue_style('icomoon-css');
wp_enqueue_style('themify-css');
wp_enqueue_style('bootstrap-css');
wp_enqueue_style('carousel-css');
wp_enqueue_style('default-css');
wp_enqueue_style('style-css');



}

add_action( 'wp_enqueue_scripts', 'register_enqueue_style' );





function register_enqueue_scripts(){
	$theme_data = wp_get_theme();

wp_deregister_script('jquery');
wp_deregister_script('jquery-migrate');


wp_register_script('modernizr', get_parent_theme_file_uri('js/modernizr-2.6.2.min.js'), array('jQuery_migrate'), null, true);

wp_register_script('jquery.min', get_parent_theme_file_uri('js/jquery.min.js'), array('jQuery_migrate'), null, true);

wp_register_script('jquery.easing', get_parent_theme_file_uri('js/jquery.easing.1.3.js'), array('jQuery_migrate'), null, true);

wp_register_script('bootstrap', get_parent_theme_file_uri('bootstrap.min.js'), array('jQuery_migrate'), null, true);

wp_register_script('jquery.waypoints', get_parent_theme_file_uri('jquery.waypoints.min.js'), array('jQuery_migrate'), null, true);

wp_register_script('owl.carousel', get_parent_theme_file_uri('owl.carousel.min.js'), array('jQuery_migrate'), null, true);

wp_register_script('main', get_parent_theme_file_uri('main.js'), array('jQuery_migrate'), null, true);


wp_enqueue_script('modernizr');
wp_enqueue_script('jquery.min');
wp_enqueue_script('jquery.easing');
wp_enqueue_script('bootstrap');
wp_enqueue_script('jquery.waypoints');
wp_enqueue_script('owl.carousel');
wp_enqueue_script('main');


}


add_action( 'wp_enqueue_scripts', 'register_enqueue_scripts' );



//aca cambiar los llamados del menu cuando lo haga
?>

<?php 
if (function_exists('register_nav_menus')) {
	register_nav_menus (array('superior' => 'menú principal superior'));
}

if (function_exists('add_theme_support') ) {
	add_theme_support('post-thumbnails');
}
 

 ?>

