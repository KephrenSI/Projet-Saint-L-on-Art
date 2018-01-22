<?php

// ini_set('display_errors', 1);
add_action( 'init', 'dw_init_types' );
add_filter( 'wp_title', 'dw_page_title' );
add_filter( 'excerpt_length', 'my_excerpt_length' );
add_theme_support( 'post-thumbnails' );
add_action('acf/init', 'my_acf_init');

/**
 * AJAX filter artist posts by taxonomy term
 */
function misha_filter_function(){
	$args = array(
		'orderby' => 'date', // we will sort posts by date
		'order'	=> $_POST['date'],
		'posts_per_page' => -1, // ASC или DESC
		'post_type' => 'artiste'
	);
 
	// for taxonomies / categories
	if( isset( $_POST['disciplinefilter'] ) )
		$args['tax_query'] = array(
			array(
				'taxonomy' => 'discipline',
				'field' => 'id',
				'terms' => $_POST['disciplinefilter']
			)
		);

	$query = new WP_Query( $args );
 
	if( $query->have_posts() ) : while( $query->have_posts() ): $query->the_post();
		include('parts/all-artists.php');
	endwhile;

		wp_reset_postdata();

	else :
		echo 'Aucune artistes n\'a été trouvé';
	endif;
 
	die();
}
 
add_action('wp_ajax_myfilter', 'misha_filter_function'); 
add_action('wp_ajax_nopriv_myfilter', 'misha_filter_function');

// /**
//  * AJAX filter event posts by day term
//  */
// function misha_date_filter_function(){
// 	$args = array(
// 		'orderby' => 'date', // we will sort posts by date
// 		'order'	=> $_POST['date'],
// 		'posts_per_page' => -1, // ASC или DESC
// 		'post_type' => 'event'
// 	);
 
// 	// for taxonomies / categories
// 	if( isset( $_POST['datefilter'] ) )
// 		$args['tax_query'] = array(
// 			array(
// 				'taxonomy' => 'date',
// 				'field' => 'id',
// 				'terms' => $_POST['datefilter']
// 			)
// 		);

// 	$query = new WP_Query( $args );
 
// 	if( $query->have_posts() ) : while( $query->have_posts() ): $query->the_post();
// 		include('parts/all-events.php');
// 	endwhile;

// 		wp_reset_postdata();

// 	else :
// 		echo 'Aucune évènment n\'a été trouvé';
// 	endif;
 
// 	die();
// }
 
// add_action('wp_ajax_datefilter', 'misha_date_filter_function'); 
// add_action('wp_ajax_nopriv_datefilter', 'misha_date_filter_function');


/**
 * AJAX filter events posts by taxonomy term
 */
function misha_event_filter_function(){
	$args = array(
		'orderby' => 'date', // we will sort posts by date
		'order'	=> $_POST['date'],
		'posts_per_page' => -1, // ASC или DESC
		'post_type' => 'evenement'
	);
 
	// for taxonomies / categories
	if( isset( $_POST['event_categoryfilter'] ) )
		$args['tax_query'] = array(
			array(
				'taxonomy' => 'category',
				'field' => 'id',
				'terms' => $_POST['event_categoryfilter']
			)
		);

	$query = new WP_Query( $args );
 
	if( $query->have_posts() ) : while( $query->have_posts() ): $query->the_post();
		include('parts/all-events.php');
	endwhile;

		wp_reset_postdata();

	else :
		echo 'Aucune évènement n\'a été trouvé';
	endif;
 
	die();
}
 
add_action('wp_ajax_eventfilter', 'misha_event_filter_function'); 
add_action('wp_ajax_nopriv_eventfilter', 'misha_event_filter_function');

/**
 * Add theme support for infinity scroll
 */
function wpc_theme_support() {
	add_theme_support('infinite-scroll', array(
		'type'           => 'scroll',
	    'footer_widgets' => false,
	    'container'      => 'content',
	    'footer'		 => 'page',
	    'wrapper'        => true,
	    'render'         => 'wpc_scroll_render',
	    'posts_per_page' => 5,
	) );
}
add_action('after_setup_theme','wpc_theme_support');

function wpc_scroll_render() {
	get_template_part('page', 'artiste');
}

function wp_get_the_gram()
{
	$auth_config = [
		'user_id'             => '6876297989',
		'token'             => '6876297989.0c6968b.ee8b9a6cead44f0faa9127edf0ae516b',
		'limit'             => '4',
		//'scope'             => array( 'likes', 'comments', 'relationships' )
	];
	
	$recent_media_url = sprintf( 'https://api.instagram.com/v1/users/%s/media/recent/?access_token=%s&count=%s', $auth_config['user_id'], $auth_config['token'], $auth_config['limit'] );
	$curl = curl_init($recent_media_url);
	curl_setopt( $curl, CURLOPT_CONNECTTIMEOUT, 3);
	curl_setopt( $curl, CURLOPT_RETURNTRANSFER, true);
	curl_setopt( $curl, CURLOPT_SSL_VERIFYPEER, false);
	$curl_return = json_decode( curl_exec( $curl) );
	
	//var_dump( $data);
	if(curl_errno($curl)){
		echo '<script>console.error(\'backend error -> Instagram API : ' . curl_error($curl) . '\')</script>';
	}elseif ($curl_return->meta->error_message){
		echo '<script>console.error(\'backend error -> Instagram API : ' . $curl_return->meta->error_message . '\')</script>';
	}else{
		return $curl_return->data;
	}
	return false;
}
//URL insta API
//'https://api.instagram.com/oauth/authorize/?client_id=0c6968bc0f214c5a87645daac2e26dfb&redirect_uri=http://localhost:8888/saintleonartwp/&response_type=token'
//'https://api.instagram.com/v1/users/search?q=kephrensi&access_token=6876297989.0c6968b.ee8b9a6cead44f0faa9127edf0ae516b'
//'https://api.instagram.com/oauth/authorize/?client_id=0c6968bc0f214c5a87645daac2e26dfb&redirect_uri=http://localhost:8888/saintleonartwp/&response_type=token&response_type=code&scope=public_content'

/**
 *
 * 
 *
 * @param string $sep   Optional separator.
 * @return string Filtered title.
 */
function dw_page_title( $title ) {
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
* Register navigation menu
* 
*/
register_nav_menu( 'header-menu', 'Menu principale, affiché dans le header'); 

register_nav_menu( 'footer-menu', 'Menu principale, affiché dans le footer');

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

/*
*
* Change search function globally to search only artist, event and news post types
* 
*/ 
// function prefix_limit_post_types_in_search( $query ) {
//     if ( $query->is_search ) {
//         $query->set( 'post_type', array( 'artiste', 'evenement'/*, 'actualite'*/ ) );
//     }
//     return $query;
// }
// add_filter( 'pre_get_posts', 'prefix_limit_post_types_in_search' );

/*
*
* New excerpt length of 9999 words
* 
*/
function my_excerpt_length($length) {
	return 9999;
}

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
* Hide opsolet item contributor menu
* 
*/
function my_remove_menu_pages() {
 
    global $user_ID;
 
    if ( current_user_can( 'contributor' ) ) {
    	
    	remove_menu_page('edit.php?post_type=artiste');
    	remove_menu_page('edit.php?post_type=evenement');
    	remove_menu_page('edit.php?post_type=actualite');
    	remove_menu_page('edit.php?post_type=stat');
    	remove_menu_page('edit.php?post_type=partners');
    	remove_menu_page('edit.php?post_type=lieux');
    	remove_menu_page('wpcf7');
		remove_menu_page('edit.php'); // Posts
		remove_menu_page('upload.php'); // Media
		remove_menu_page('link-manager.php'); // Links
		remove_menu_page('edit-comments.php'); // Comments
		remove_menu_page('edit.php?post_type=page'); // Pages
		remove_menu_page('plugins.php'); // Plugins
		remove_menu_page('themes.php'); // Appearance
		remove_menu_page('users.php'); // Users
		remove_menu_page('tools.php'); // Tools
    }
}
add_action( 'admin_init', 'my_remove_menu_pages' );

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

	// register_taxonomy('date', 'evenement', [
	// 	'label' => 'Date',
	// 	'labels' => [
	// 		'singular_name' => 'Date',
	// 		'edit_item' => 'Éditer le jour de l\'expo',
	// 		'add_new_item' => 'Définir le jour de l\'évènement'
	// 	],
	// 	'description' => 'Jour de l\'exposition où l\'évènmenet se déroulera',
	// 	'hierarchical' => true,
	// 	'public' => true
	// ]);

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
    register_post_type('partners', [
        'label' => 'Partenaires',
        'labels' => [
            'singular_name' => 'Partenaires',
            'add_new' => 'Ajouter un Partenaire'
        ],
        'description' => 'Type d\'article permettant d\'ajouter des Partenaires au site.',
        'menu_position' => 7,
        'menu_icon' => 'dashicons-networking',
        'supports' => ['title'],
        'public' => true
    ]);
    register_post_type('lieux', [
        'label' => 'Lieux',
        'labels' => [
            'singular_name' => 'Lieux',
            'add_new' => 'Ajouter une salle à l\'exposition'
        ],
        'description' => 'Type d\'article permettant d\'ajouter des lieux au festivlal.',
        'menu_position' => 9,
        'menu_icon' => 'dashicons-location',
        'supports' => ['title'],
        'public' => true
    ]);

    register_post_type('documents internes', [
        'label' => 'Documents internes',
        'labels' => [
            'singular_name' => 'Documents internes',
            'add_new' => 'Ajouter un document interne visible par les autres organisateurs'
        ],
        'description' => 'Type d\'article permettant d\'ajouter un document interne visible par les autres organisateurs.',
        'menu_position' => 11,
        'menu_icon' => 'dashicons-media-archive',
        'supports' => ['title'],
        'public' => true
    ]);
}

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
* get the google_api_key
* 
*/
function my_acf_init() {
	acf_update_setting('google_api_key', 'AIzaSyDt4Q4g4WKG8mCQyweq5JgWU1Kja4sZp7Q');
}

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