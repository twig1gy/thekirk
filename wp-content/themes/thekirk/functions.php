<?php 
function register_menus() {
  register_nav_menu('main-menu',__( 'Main Menu' ));
  register_nav_menu('footer-menu',__( 'Footer Menu' ));
}

function add_assets(){
  wp_enqueue_script( 'kirk-js', get_stylesheet_directory_uri() . '/js/app.min.js', array( 'jquery' ), '1.0', true );
  wp_enqueue_script( 'kirk-fonts', get_stylesheet_directory_uri() . '/fonts/kirkfontskit.js' );
}

if ( function_exists('register_sidebar') ) {
  register_sidebar(array(
    'name' => 'Homepage CTA',
    'description' => 'Homepage blocks',
    'before_widget' => '<div class = "columns three cta">',
    'after_widget' => '</div>',
    'before_title' => '<h3>',
    'after_title' => '</h3>',
    )
  );
  register_sidebar(array(
    'name' => 'Homepage Ticker',
    'description' => 'Inline ticker text on home page',
    'before_widget' => '<div>',
    'after_widget' => '</div>',
    'before_title' => '<strong>',
    'after_title' => '</strong>',
    )
  );
  register_sidebar(array(
    'name' => 'Footer Section',
    'description' => 'Footer Menu Blocks',
    'before_widget' => '<div class="columns two">',
    'after_widget' => '</div>',
    'before_title' => '<strong>',
    'after_title' => '</strong>',
    )
  );
}
// custom menu example @ https://digwp.com/2011/11/html-formatting-custom-menus/
function clean_custom_menus() {
  // $locations = get_nav_menu_locations();
  // print_r($locations);
	$menu_name = 'main-menu'; // specify custom menu slug
	if (($locations = get_nav_menu_locations()) && isset($locations[$menu_name])) {
		$menu = wp_get_nav_menu_object($locations[$menu_name]);
		$menu_items = wp_get_nav_menu_items($menu->term_id);

		$menu_list = '<nav>' ."\n";
		$menu_list .= "\t\t\t\t". '<ul class="pull-right horizontal">' ."\n";
		foreach ((array) $menu_items as $key => $menu_item) {
      // print_r('<pre>');
      // print_r($menu_item);
      // print_r('</pre>');
      
			$title = $menu_item->title;
      $deeplink = strtolower(trim($title));
      $deeplink = preg_replace('/[ \/]/','',$deeplink);
			$url = $menu_item->url;
      if(is_front_page() || is_home()) {
        $menu_list .= "\t\t\t\t\t". '<li data-anchor-target="#'. $deeplink .'"
          data--200-center-bottom="opacity: 0.2;"
          data--200-center-top="opacity: 1;"
          data-200-center-bottom="opacity: 1;"
          data-200-center-top="opacity: 0.2;"
          ><a href="#'. $deeplink .'">'. $title .'</a></li>' ."\n";
      } else {
        $menu_list .= "\t\t\t\t\t". '<li><a href="'.$url.'">'. $title .'</a></li>' ."\n";
      }
		}
		$menu_list .= "\t\t\t\t". '</ul>' ."\n";
		$menu_list .= "\t\t\t". '</nav>' ."\n";
	} else {
		$menu_list = 'menu here<!-- no list defined -->';
	}
	echo $menu_list;
}

function change_menu($items){
  if(is_front_page()){
    
    foreach($items as $item){
      $item->url = 'community';
    }
  }
 
  return $items;
}

//add_filter('wp_nav_menu_objects', 'change_menu');
add_post_type_support( 'page', 'excerpt' );
add_theme_support( 'post-thumbnails' );
add_action( 'init', 'register_menus' );
add_action( 'wp_enqueue_scripts', 'add_assets' );
?>