<?php

// ini_set('display_errors', 1);
add_action( 'init', 'dw_init_types' );
add_filter( 'wp_title', 'dw_page_title' );
add_filter( 'excerpt_length', 'my_excerpt_length' );
add_theme_support( 'post-thumbnails' );

/**
 *
 * 
 *
 * @param string $sep   Optional separator.
 * @return string Filtered title.
 */
function dw_page_title( $title ) {
    // if( empty( $title ) && ( is_home() || is_front_page() ) ){
    // 	$title = 'HELLO!';
    // }
    // $title .= ' | ' . get_bloginfo( 'name' );
    // return $title;

   	// COMPLEXE
    if ( empty( $title ) || is_home() || is_front_page() ) {
        $title = 'HELLO!' .' | '. get_bloginfo( 'name' );
    }
    else {
        $title = the_title() .' | '. get_bloginfo( 'name' );
    }
    return $title;
}

/*
*
* UPLOAD SVG ENABLE
* 
*/

function cc_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');

/*
*
* Hide opsolet item admin menu
* 
*/
function remove_menus(){
  
  // remove_menu_page( 'index.php' );                  //Dashboard
  // remove_menu_page( 'jetpack' );                    //Jetpack* 
   remove_menu_page( 'edit.php' );                   //Posts
  // remove_menu_page( 'upload.php' );                 //Media
  // remove_menu_page( 'edit.php?post_type=page' );    //Pages
  remove_menu_page( 'edit-comments.php' );          //Comments
  // remove_menu_page( 'themes.php' );                 //Appearance
  // remove_menu_page( 'plugins.php' );                //Plugins
  // remove_menu_page( 'users.php' );                  //Users
  // remove_menu_page( 'tools.php' );                  //Tools
  // remove_menu_page( 'options-general.php' );        //Settings
  
}
add_action( 'admin_menu', 'remove_menus' );

/*
*
* Register navigation menu
* 
*/
register_nav_menu( 'header', 'Menu principale, affiché dans le header'); 

/*
*
* Get menu items
* 
*/
function dw_is_current( $object ) {
   global $post;
   return ( $object -> object_id == $post -> ID );
}

function dw_get_nav_items($location){
	// Récupérer les items du menu $location et les transformer en un objet contenant $link et $label
	$id = dw_get_nav_id($location);
	if(!$id) return [];
	$nav = [];
	$children = [];

	foreach (wp_get_nav_menu_items($id) as $object) {
		$item = new stdClass();
		$item->isCurrent = dw_is_current( $object );
		$item->link = $object->url;
		$item->label = $object->title;
		$item->children = [];

		if($object->menu_item_parent){
			$item->parent = $object->menu_item_parent;
			$children[] = $item;
		}else{
			$nav[$object->ID] = $item;
		}
	}
	
	foreach ($children as $item) {
		$nav[$item->parent]->children[] = $item;
	}

	return $nav;
}

/*
*
* Get menu ID from Location
* 
*/
function dw_get_nav_id($location){
	foreach(get_nav_menu_locations() as $navLocation => $id){
		if($navLocation == $location) return $id;
	}
	return false;
}

/*
*
* Get theme asset uri 
* 
*/
function get_dw_asset($resource){
	return get_template_directory_uri() . '/assets/' . trim($resource, '/');
}

/*
*
* Output theme asset uri 
* 
*/
function dw_asset($resource){
	echo get_dw_asset($resource);
}

/* New excerpt length of 9999 words*/
function my_excerpt_length($length) {
	return 9999;
}

/*
*
* Output a customizable excerpt
* 
*/
function dw_get_the_excerpt($length = null){
	$excerpt = get_the_content('');
	$excerpt = apply_filters('the_content', $excerpt);
	// $excerpt = get_the_excerpt();
	$allowed_tags = '<p>,<a>,<em>,<strong>,<img>,<h1>,<h2>,<h3>,<h4>,<h5>,<h6>';
	$excerpt = strip_tags($excerpt, $allowed_tags);
	if(is_null($length) || strlen($excerpt) <= $length) return $excerpt;
	return trim(substr($excerpt, 0, $length)) . '&hellip;';
}

/*
*
* Output a customizable excerpt
* 
*/
function dw_the_excerpt($length = null){
	echo dw_get_the_excerpt($length);
}

/*
*
* Register custom post types on INIT event 
* 
*/

function dw_init_types(){
	add_theme_support( 'post-thumbnails' );

	register_taxonomy('discipline', 'artiste', [
		'label' => 'Discipline',
		'labels' => [
			'singular_name' => 'Discipline',
			'edit_item' => 'Éditer la discipline',
			'add_new_item' => 'Ajouter une nouvelle discipline'
		],
		'description' => 'Discpline dans laquelle l\'artiste réalise ses œuvres',
		'hierarchical' => true,
		'public' => true
	]);

	register_taxonomy('category', 'evenement', [
		'label' => 'Catégories',
		'labels' => [
			'singular_name' => 'Catégories',
			'edit_item' => 'Éditer la catégorie',
			'add_new_item' => 'Ajouter une nouvelle catégorie'
		],
		'description' => 'Catégorie dans laquel l\'évènement est classé',
		'hierarchical' => true,
		'public' => true
	]);

	register_post_type('artiste', [
		'label' => 'Artistes',
		'labels' => [
			'singular_name' => 'Artistes',
			'add_new' => 'Ajouter un artiste'
		],
		'description' => 'Type d\'article permettant d\'ajouter des artistes à la page artiste du site',
		'menu_position' => 4,
		'menu_icon' => 'dashicons-id-alt',
		'supports' => ['title','thumbnail'],
		'public' => true
	]);

	register_post_type('evenement', [
		'label' => 'Évènements',
		'labels' => [
			'singular_name' => 'Évènements',
			'add_new' => 'Ajouter un évènement'
		],
		'description' => 'Type d\'article permettant d\'ajouter des évènements à la page évènements du site',
		'menu_position' => 5,
		'menu_icon' => 'dashicons-calendar-alt',
		'supports' => ['title','thumbnail', 'editor'],
		'public' => true
	]);

    register_post_type('actualite', [
        'label' => 'Actualites',
        'labels' => [
            'singular_name' => 'Actualités',
            'add_new' => 'Ajouter une actualité'
        ],
        'description' => 'Type d\'article permettant d\'ajouter des articles à la page actualités du site.',
        'menu_position' => 6,
        'menu_icon' => 'dashicons-media-document',
        'supports' => ['title', 'editor'],
        'public' => true
    ]);
    
	register_post_type('stat', [
        'label' => 'Statistiques',
        'labels' => [
            'singular_name' => 'Statistiques',
            'add_new' => 'Ajouter des statistiques pour une année'
        ],
        'description' => 'Type d\'article permettant d\'ajouter des données à la section statistique.',
        'menu_position' => 8,
        'menu_icon' => 'dashicons-chart-line',
        'supports' => ['title'],
        'public' => true
    ]);
 //    register_post_type('partners', [
 //        'label' => 'Partenaires',
 //        'labels' => [
 //            'singular_name' => 'Partenaires',
 //            'add_new' => 'Ajouter un Partenaire'
 //        ],
 //        'description' => 'Type d\'article permettant d\'ajouter des Partenaires au site.',
 //        'menu_position' => 7,
 //        'menu_icon' => 'dashicons-networking',
 //        'supports' => ['title'],
 //        'public' => true
 //    ]);

    

 //    register_post_type('faq', [
	// 	'label' => 'FAQ',
	// 	'labels' => [
	// 		'singular_name' => 'FAQ',
	// 		'add_new' => 'Ajouter une question/réponse'
	// 	],
	// 	'description' => 'Type d\'article permettant d\'ajouter des questions/réponses à la page FAQ du site',
	// 	'menu_position' => 9,
	// 	'menu_icon' => 'dashicons-editor-help',
	// 	'supports' => ['title'],
	// 	'public' => true
	// ]);
}

/*
*
* Return the places taxonomy for current posts (in the loop) 
* 
*/
// function dw_get_the_places($glue='', $prefix='', $suffix=''){
// 	$terms = wp_get_post_terms(get_the_ID(), 'places', ['orderby' => 'name', 'order' => 'ASC', 'fields' => 'all']);

// 	if(!$terms) return'il n\'y a pas d\'endroits associé à ce voyage';
// 	return implode($glue, array_map(function($term) use($prefix, $suffix){
// 		return str_replace(':type', get_field('type', $term ), $prefix) . $term->name . $suffix; 
// 	}, $terms));
// }

/*
*
* Output the places taxonomy for current posts (in the loop) 
* 
*/
// function dw_the_places($glue='', $prefix='', $suffix=''){
// 	echo dw_get_the_places($glue, $prefix, $suffix);
// }

/*
*
* Return the category taxonomy for current posts (in the loop) 
* 
*/
function dw_get_the_category($glue='', $prefix='', $suffix=''){
	$terms = wp_get_post_terms(get_the_ID(), 'category', ['orderby' => 'name', 'order' => 'ASC', 'fields' => 'all']);

	if(!$terms) return'N/D';
	return implode(array_map(function($term){
		return str_replace(':type', get_field('type', $term ), $prefix) . $term->name . $suffix; 
	}, $terms));
}

/*
*
* Output the category taxonomy for current posts (in the loop) 
* 
*/
function dw_the_category($glue='', $prefix='', $suffix=''){
	echo dw_get_the_category();
}

/*
*
* Return the discipline taxonomy for current posts (in the loop) 
* 
*/
function dw_get_the_discipline($glue='', $prefix='', $suffix=''){
	$terms = wp_get_post_terms(get_the_ID(), 'discipline', ['orderby' => 'name', 'order' => 'ASC', 'fields' => 'all']);

	if(!$terms) return'N/D';
	return implode(array_map(function($term){
		return str_replace(':type', get_field('type', $term ), $prefix) . $term->name . $suffix; 
	}, $terms));
}

/*
*
* Output the discipline taxonomy for current posts (in the loop) 
* 
*/
function dw_the_discipline($glue='', $prefix='', $suffix=''){
	echo dw_get_the_discipline();
}

/*
*
* Return the pays taxonomy for current posts (in the loop) 
* 
*/
// function dw_get_the_pays($glue='', $prefix='', $suffix=''){
// 	$terms = wp_get_post_terms(get_the_ID(), 'pays', ['orderby' => 'name', 'order' => 'ASC', 'fields' => 'all']);

// 	if(!$terms) return'il n\'y a pas de pays associé à ce projet';
// 	return implode(array_map(function($term){
// 		return str_replace(':type', get_field('type', $term ), $prefix) . $term->name . $suffix;
// 	}, $terms));
// }

/*
*
* Output the category taxonomy for current posts (in the loop) 
* 
*/
// function dw_the_pays($glue='', $prefix='', $suffix=''){
// 	echo dw_get_the_pays();
// }

/*
*
* Return string ( empty, singular or plural ) based on given number
* 
*/
function dw_chose_singularity($number, $singular, $plural, $empty=null){
	switch(intval($number)){
		case 0:
			if(is_null($empty)) break;
			return str_replace(':number', $number, $empty);
			break;
		case 1:
			return str_replace(':number', $number, $singular);
			break;
	}
	return str_replace(':number', $number, $plural);
}