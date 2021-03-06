<?php 
/*
    Template Name: PAGE-PROGRAMME
*/
get_header(); ?>
	<nav class="sec-nav">
		<h2 class="header__heading2 hidden" aria-level="2" role="heading">Secondary nav</h2>
		<ul class="sec-nav__list">
			<li class="sec-nav__list--elt">
				<a href="<?php the_permalink(103); ?>" title="Aller vers la page du programme." class="sec-nav__list--txt active">Programme
				<span>
					<svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 32 32">
						<title>map</title>
						<path d="M0 6l10-4v24l-10 4z"></path>
						<path d="M12 1l10 6v23l-10-5z"></path>
						<path d="M24 7l8-6v24l-8 6z"></path>
					</svg>
				</span>
				</a>
			</li>
			<li class="sec-nav__list--elt">
				<span class="sec-nav__list--space">&nbsp;&nbsp;|&nbsp;&nbsp;</span>
			</li>
			<li class="sec-nav__list--elt">
				<a href="<?php the_permalink(101); ?>" title="Aller vers la page de l'agenda." class="sec-nav__list--txt">
				<span>
					<svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 32 32">
						<title>alarm</title>
						<path d="M16 4c-7.732 0-14 6.268-14 14s6.268 14 14 14 14-6.268 14-14-6.268-14-14-14zM16 29.25c-6.213 0-11.25-5.037-11.25-11.25s5.037-11.25 11.25-11.25c6.213 0 11.25 5.037 11.25 11.25s-5.037 11.25-11.25 11.25zM29.212 8.974c0.501-0.877 0.788-1.892 0.788-2.974 0-3.314-2.686-6-6-6-1.932 0-3.65 0.913-4.747 2.331 4.121 0.851 7.663 3.287 9.96 6.643v0zM12.748 2.331c-1.097-1.418-2.816-2.331-4.748-2.331-3.314 0-6 2.686-6 6 0 1.082 0.287 2.098 0.788 2.974 2.297-3.356 5.838-5.792 9.96-6.643z"></path>
						<path d="M16 18v-8h-2v10h8v-2z"></path>
					</svg>
				</span>
				Agenda</a>
			</li>
		</ul>
	</nav>
	<section class="title">
		<h2 class="title__heading2 heading2" aria-level="2" role="heading"><?php the_title(); ?></h2>	
	</section>
	<section class="programme">
		<h2 class="title__heading2 heading2 hidden" aria-level="2" role="heading">Programme</h2>
		<section class="carte">
			<h3 class="title__heading3 heading3 hidden" aria-level="3" role="heading">Carte</h3>
			<div id="map"></div>
			<script>
				function initMap() {
					var center = {lat: 50.648376, lng: 5.5855541};
					var map = new google.maps.Map(document.getElementById('map'), {
						scrollwhell: false,
						zoomControl: false,
						streetViewControl: false,
						fullscreenControl: false,
						mapTypeControl: false,
					  	styles:[
						    {
						        "featureType": "administrative",
						        "elementType": "all",
						        "stylers": [
						            {
						                "saturation": "-100"
						            }
						        ]
						    },
						    {
						        "featureType": "administrative.province",
						        "elementType": "all",
						        "stylers": [
						            {
						                "visibility": "off"
						            }
						        ]
						    },
						    {
						        "featureType": "landscape",
						        "elementType": "all",
						        "stylers": [
						            {
						                "saturation": "-100"
						            },
						            {
						                "lightness": 65
						            },
						            {
						                "visibility": "off"
						            }
						        ]
						    },
						    {
						        "featureType": "poi",
						        "elementType": "all",
						        "stylers": [
						            {
						                "saturation": "-100"
						            },
						            {
						                "lightness": "0"
						            },
						            {
						                "visibility": "off"
						            }
						        ]
						    },
						    {
						        "featureType": "road",
						        "elementType": "all",
						        "stylers": [
						            {
						                "saturation": "-100"
						            }
						        ]
						    },
						    {
						        "featureType": "road.highway",
						        "elementType": "all",
						        "stylers": [
						            {
						                "visibility": "simplified"
						            }
						        ]
						    },
						    {
						        "featureType": "road.arterial",
						        "elementType": "all",
						        "stylers": [
						            {
						                "lightness": "30"
						            }
						        ]
						    },
						    {
						        "featureType": "road.local",
						        "elementType": "all",
						        "stylers": [
						            {
						                "lightness": "40"
						            }
						        ]
						    },
						    {
						        "featureType": "transit",
						        "elementType": "all",
						        "stylers": [
						            {
						                "saturation": "-100"
						            },
						            {
						                "visibility": "simplified"
						            }
						        ]
						    },
						    {
						        "featureType": "water",
						        "elementType": "geometry",
						        "stylers": [
						            {
						                "hue": "blue"
						            },
						            {
						                "lightness": "0"
						            },
						            {
						                "saturation": "-80"
						            }
						        ]
						    },
						    {
						        "featureType": "water",
						        "elementType": "labels",
						        "stylers": [
						            {
						                "lightness": "-25"
						            },
						            {
						                "saturation": "-100"
						            }
						        ]
						    }
						],
						zoom: 17,
						center: center
					});
					
				// custom lieu
                   <?php $args = array( 'post_type' => 'lieux', 'posts_per_page' => -1 ); $the_query = new WP_Query( $args ); ?>
                   <?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

					var image = {
					   // Adresse de l'icône personnalisée
					   //url: '<?php //the_field('icon'); ?>',
					   url:'<?php dw_asset('img/logo.ico'); ?>',
					   size: new google.maps.Size(50,50),
					   scaledSize: new google.maps.Size(40,40),
					   origin: new google.maps.Point(0,0),
					   anchor: new google.maps.Point(0,0)
					};
					<?php $location = get_field('location');  ?>
                       var marker<?php the_ID(); ?> = new google.maps.Marker( {
                           map: map,
                           "position": {lat: <?php echo $location['lat']; ?>, lng: <?php echo $location['lng']; ?>	},
                           "title": '<?php the_title(); ?>',
                           //"icon": 'http://maps.google.com/mapfiles/kml/paddle/blu-blank.png',
                           "icon": image
                       } );
                       var contentString<?php the_ID(); ?> = '<?php the_title(); ?>: <?php echo $location['address']; ?>';

                       var infowindow<?php the_ID(); ?> = new google.maps.InfoWindow({
                         content: contentString<?php the_ID(); ?>
                       });
                       marker<?php the_ID(); ?>.addListener('click', function() {
                         infowindow<?php the_ID(); ?>.open(map, marker<?php the_ID(); ?>);
                       });
                   <?php endwhile; endif; ?>
                }
			</script>
			<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDt4Q4g4WKG8mCQyweq5JgWU1Kja4sZp7Q&callback=initMap">
			</script>
		</section>
		<section class="programation">
			<h3 class="programation__heading3 heading3 hidden" aria-level="3" role="heading">Programation</h3>
			<?php
	            $posts = new WP_Query( ['post_type' => 'evenement', 'posts_per_page' => -1, 'orderby' => the_field(''), 'order' => 'DESC' ] );
	            if ( $posts->have_posts() ): while ( $posts->have_posts() ): $posts->the_post();
	        ?>
			<div class="programation__event">
				<a class="programation__event--bloc" href="<?php the_permalink(); ?>" title="Aller vers la page de l'évènement <?php get_the_title(); ?>"><span class="hidden">&nbsp;</span></a>
				<img class="programation__event--img" src="<?php the_post_thumbnail_url('medium_large');?>" alt="Photo de l'évènement <?php the_title();?>">
				<div class="programation__event--taxonomy">
					<?php dw_the_category(', ', '<strong class="">', '</strong>'); ?>
				</div>
				<div class="programation__event--date">
	                <?php
	                    // get raw date
	                    $date = get_field('date', false, false);
	                    // make date object
	                    $date = new DateTime($date);
	                ?>
	                <span class="programation__event--month"><?php echo substr($date->format('M'), 0, 4); ?></span>
	                <span class="programation__event--day"><?php echo $date->format('j'); ?></span>
	            </div>
				<h3  class="programation__heading3 heading3" aria-level="3" role="heading"><?php the_title(); ?></h3>
				<div class="programation__event--social">
					<p class="programation__event--txt">Partager</p>
					<div class="last-event__event--share">
	                    <a class="artistes__artiste--link" href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>&t=<?php the_title();?>" title="Aller vers la page Facebook"><span class="hidden">&nbsp;</span>
	                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
	                            <title>facebook</title>
	                            <path d="M19 6h5v-6h-5c-3.86 0-7 3.14-7 7v3h-4v6h4v16h6v-16h5l1-6h-6v-3c0-0.542 0.458-1 1-1z"></path>
	                        </svg>
	                    </a>
	                    <a class="artistes__artiste--link" href="https://twitter.com/intent/tweet/?url=<?php the_permalink(); ?>" title="Aller vers la page Twitter"><span class="hidden">&nbsp;</span>
	                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
	                            <title>twitter</title>
	                            <path d="M32 7.075c-1.175 0.525-2.444 0.875-3.769 1.031 1.356-0.813 2.394-2.1 2.887-3.631-1.269 0.75-2.675 1.3-4.169 1.594-1.2-1.275-2.906-2.069-4.794-2.069-3.625 0-6.563 2.938-6.563 6.563 0 0.512 0.056 1.012 0.169 1.494-5.456-0.275-10.294-2.888-13.531-6.862-0.563 0.969-0.887 2.1-0.887 3.3 0 2.275 1.156 4.287 2.919 5.463-1.075-0.031-2.087-0.331-2.975-0.819 0 0.025 0 0.056 0 0.081 0 3.181 2.263 5.838 5.269 6.437-0.55 0.15-1.131 0.231-1.731 0.231-0.425 0-0.831-0.044-1.237-0.119 0.838 2.606 3.263 4.506 6.131 4.563-2.25 1.762-5.075 2.813-8.156 2.813-0.531 0-1.050-0.031-1.569-0.094 2.913 1.869 6.362 2.95 10.069 2.95 12.075 0 18.681-10.006 18.681-18.681 0-0.287-0.006-0.569-0.019-0.85 1.281-0.919 2.394-2.075 3.275-3.394z"></path>
	                        </svg>
	                    </a>
	                </div>
				</div>
			</div>
			<?php endwhile; endif; ?>
		</section>
	</section>
	<section class="artistes programmation__artistes">
		<h2  class="artistes__heading2 heading2" aria-level="2" role="heading">Artistes</h2>
		<a class="artistes__random" href="javascript:window.location.reload(true)"  title="Artistes aléatoire de l'expo Saint Léon'Art">
			mélanger
			<span class="shuffle">
                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 32 32">
                <title>shuffle</title>
                <path class="shuffle" d="M24 22h-3.172l-5-5 5-5h3.172v5l7-7-7-7v5h-4c-0.53 0-1.039 0.211-1.414 0.586l-5.586 5.586-5.586-5.586c-0.375-0.375-0.884-0.586-1.414-0.586h-6v4h5.172l5 5-5 5h-5.172v4h6c0.53 0 1.039-0.211 1.414-0.586l5.586-5.586 5.586 5.586c0.375 0.375 0.884 0.586 1.414 0.586h4v5l7-7-7-7v5z"></path>
                </svg>
            </span>
		</a>
		<?php
            $posts = new WP_Query( ['post_type' => 'artiste', 'posts_per_page' => 4, 'orderby' => 'rand'] );
            if ( $posts->have_posts() ): while ( $posts->have_posts() ): $posts->the_post();
        ?>
		<div class="artistes__artiste">
			<a class="artistes__artiste--bloc" href="<?php the_permalink(); ?>" title="Aller vers la page de l'artiste <?php get_the_title(); ?>"><span class="hidden">&nbsp;</span></a>
			<img class="artistes__artiste--img" src="<?php the_post_thumbnail_url('medium_large');?>" alt="Photo de profil de l'artiste <?php the_title();?>">
			<div class="artistes__artiste--taxonomy">
				<?php dw_the_discipline(', ', '<strong class="">', '</strong>'); ?>
			</div>
			<h3  class="artistes__heading3 heading3" aria-level="3" role="heading"><?php the_title();?></h3>
			<div class="artistes__artiste--social">
				<p class="artistes__artiste--txt">Suivre</p>
				<div class="artistes__artiste--follow">
					<a class="artistes__artiste--link" href="<?php the_field('facebook'); ?>" title="Aller vers la page Facebook">
						<span class="hidden">&nbsp;</span>
						<svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
                            <title>facebook</title>
                            <path d="M19 6h5v-6h-5c-3.86 0-7 3.14-7 7v3h-4v6h4v16h6v-16h5l1-6h-6v-3c0-0.542 0.458-1 1-1z"></path>
                        </svg>
					</a>
					<a class="artistes__artiste--link" href="<?php the_field('instagram'); ?>" title="Aller vers la page Instagram">
						<span class="hidden">&nbsp;</span>
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
                            <title>instagram</title>
                            <path d="M16 2.881c4.275 0 4.781 0.019 6.462 0.094 1.563 0.069 2.406 0.331 2.969 0.55 0.744 0.288 1.281 0.638 1.837 1.194 0.563 0.563 0.906 1.094 1.2 1.838 0.219 0.563 0.481 1.412 0.55 2.969 0.075 1.688 0.094 2.194 0.094 6.463s-0.019 4.781-0.094 6.463c-0.069 1.563-0.331 2.406-0.55 2.969-0.288 0.744-0.637 1.281-1.194 1.837-0.563 0.563-1.094 0.906-1.837 1.2-0.563 0.219-1.413 0.481-2.969 0.55-1.688 0.075-2.194 0.094-6.463 0.094s-4.781-0.019-6.463-0.094c-1.563-0.069-2.406-0.331-2.969-0.55-0.744-0.288-1.281-0.637-1.838-1.194-0.563-0.563-0.906-1.094-1.2-1.837-0.219-0.563-0.481-1.413-0.55-2.969-0.075-1.688-0.094-2.194-0.094-6.463s0.019-4.781 0.094-6.463c0.069-1.563 0.331-2.406 0.55-2.969 0.288-0.744 0.638-1.281 1.194-1.838 0.563-0.563 1.094-0.906 1.838-1.2 0.563-0.219 1.412-0.481 2.969-0.55 1.681-0.075 2.188-0.094 6.463-0.094zM16 0c-4.344 0-4.887 0.019-6.594 0.094-1.7 0.075-2.869 0.35-3.881 0.744-1.056 0.412-1.95 0.956-2.837 1.85-0.894 0.888-1.438 1.781-1.85 2.831-0.394 1.019-0.669 2.181-0.744 3.881-0.075 1.713-0.094 2.256-0.094 6.6s0.019 4.887 0.094 6.594c0.075 1.7 0.35 2.869 0.744 3.881 0.413 1.056 0.956 1.95 1.85 2.837 0.887 0.887 1.781 1.438 2.831 1.844 1.019 0.394 2.181 0.669 3.881 0.744 1.706 0.075 2.25 0.094 6.594 0.094s4.888-0.019 6.594-0.094c1.7-0.075 2.869-0.35 3.881-0.744 1.050-0.406 1.944-0.956 2.831-1.844s1.438-1.781 1.844-2.831c0.394-1.019 0.669-2.181 0.744-3.881 0.075-1.706 0.094-2.25 0.094-6.594s-0.019-4.887-0.094-6.594c-0.075-1.7-0.35-2.869-0.744-3.881-0.394-1.063-0.938-1.956-1.831-2.844-0.887-0.887-1.781-1.438-2.831-1.844-1.019-0.394-2.181-0.669-3.881-0.744-1.712-0.081-2.256-0.1-6.6-0.1v0z"></path>
                            <path d="M16 7.781c-4.537 0-8.219 3.681-8.219 8.219s3.681 8.219 8.219 8.219 8.219-3.681 8.219-8.219c0-4.537-3.681-8.219-8.219-8.219zM16 21.331c-2.944 0-5.331-2.387-5.331-5.331s2.387-5.331 5.331-5.331c2.944 0 5.331 2.387 5.331 5.331s-2.387 5.331-5.331 5.331z"></path>
                            <path d="M26.462 7.456c0 1.060-0.859 1.919-1.919 1.919s-1.919-0.859-1.919-1.919c0-1.060 0.859-1.919 1.919-1.919s1.919 0.859 1.919 1.919z"></path>
                        </svg>
                    </a>
                    <a class="artistes__artiste--link" href="<?php the_field('twitter'); ?>" title="Aller vers la page Twitter">
                    	<span class="hidden">&nbsp;</span>
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
                            <title>twitter</title>
                            <path d="M32 7.075c-1.175 0.525-2.444 0.875-3.769 1.031 1.356-0.813 2.394-2.1 2.887-3.631-1.269 0.75-2.675 1.3-4.169 1.594-1.2-1.275-2.906-2.069-4.794-2.069-3.625 0-6.563 2.938-6.563 6.563 0 0.512 0.056 1.012 0.169 1.494-5.456-0.275-10.294-2.888-13.531-6.862-0.563 0.969-0.887 2.1-0.887 3.3 0 2.275 1.156 4.287 2.919 5.463-1.075-0.031-2.087-0.331-2.975-0.819 0 0.025 0 0.056 0 0.081 0 3.181 2.263 5.838 5.269 6.437-0.55 0.15-1.131 0.231-1.731 0.231-0.425 0-0.831-0.044-1.237-0.119 0.838 2.606 3.263 4.506 6.131 4.563-2.25 1.762-5.075 2.813-8.156 2.813-0.531 0-1.050-0.031-1.569-0.094 2.913 1.869 6.362 2.95 10.069 2.95 12.075 0 18.681-10.006 18.681-18.681 0-0.287-0.006-0.569-0.019-0.85 1.281-0.919 2.394-2.075 3.275-3.394z"></path>
                        </svg>
                    </a>
				</div>
			</div>
		</div>
		<?php endwhile; endif; ?>
		<div class="artistes__cta cta">
            <span class="cta__masque">Tous les voir</span>
            <a href="<?php the_permalink(24); ?>" title="Aller vers la page à propos" class="cta__button">Tous les voir</a>
        </div>
	</section>
<?php get_footer(); ?>