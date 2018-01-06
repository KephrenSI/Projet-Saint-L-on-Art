<?php 
/*
    Template Name: SINGLE-ARTISTE
*/
get_header(); ?>
	<section class="title">
		<h2  class="title__heading2 heading2" aria-level="2" role="heading"><?php the_title(); ?></h2>
	</section>
	<section class="single-artiste">
		<h2  class="single-artiste__heading2 heading2 hidden" aria-level="2" role="heading">artiste</h2>
		<img class="single-artiste__img" src="<?php the_post_thumbnail_url('medium_large');?>" alt="Photo de profil de l'artiste <?php the_title(); ?>">
		<div class="single-artiste__taxonomy">
			<p class="single-artiste__taxonomy--txt"><?php dw_the_discipline(', ', '<strong class="">', '</strong>'); ?></p>
		</div>
		<div class="single-artiste__biography">
			<h3  class="single-artiste__heading3 heading3" aria-level="3" role="heading">Présentation</h3>
			<p class="single-artiste__biography--txt">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae quas autem et illo. Suscipit, doloremque aperiam delectus tempora maxime quaerat, fugiat saepe sed, ipsa unde molestias nulla nobis fuga! Veniam. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae quas autem et illo. Suscipit, doloremque aperiam delectus tempora maxime quaerat, fugiat saepe sed, ipsa unde molestias nulla nobis fuga! Veniam. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae quas autem et illo. Suscipit, doloremque aperiam delectus tempora maxime quaerat, fugiat saepe sed, ipsa unde molestias nulla nobis fuga! Veniam.</p>
			<p class="single-artiste__biography--txt">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae quas autem et illo. Suscipit, doloremque aperiam delectus tempora maxime quaerat, fugiat saepe sed, ipsa unde molestias nulla nobis fuga! Veniam. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae quas autem et illo. Suscipit, doloremque aperiam delectus.</p>
		</div>
		<div class="single-artiste__infos">
			<h3  class="single-artiste__heading3 heading3" aria-level="3" role="heading">Informations</h3>
			<p class="single-artiste__infos--adresse">Les trixhes 16, 4890 Thimister</p>
			<a href="tel:0498974541" class="single-artiste__infos--tel">0498 / 97 45 41</a>
			<a href="mailto:kephren.simonis@hotmail.com" class="single-artiste__infos--mail">kephren.simonis@hotmail.com</a>
			<a href="http://kephren-simonis.be/" class="single-artiste__infos--web">kephren.simonis.be</a>
		</div>
		<div class="photos">
			<h3  class="single-artiste__heading3 heading3" aria-level="3" role="heading">Avant goût</h3>
		  	<ul class="photos__list">
				<li class="photos__list--elt">
					<a class="photos__list--link" href="https://41.media.tumblr.com/0390d80d6c8cc4a7096033182a4bfe8a/tumblr_ndyvukSjNl1tubinno1_1280.jpg">
						<img alt="photo de l'oeuvre de l'artiste" class="photos__list--img" src="https://41.media.tumblr.com/0390d80d6c8cc4a7096033182a4bfe8a/tumblr_ndyvukSjNl1tubinno1_1280.jpg">
					</a>
				</li>
				<li class="photos__list--elt">
					<a class="photos__list--link" href="https://40.media.tumblr.com/bbe414414f4fd1f0b4886c6fcf4193de/tumblr_ndyvd3qoiL1tubinno1_1280.jpg">
						<img alt="photo de l'oeuvre de l'artiste" class="photos__list--img" src="https://40.media.tumblr.com/bbe414414f4fd1f0b4886c6fcf4193de/tumblr_ndyvd3qoiL1tubinno1_1280.jpg">
					</a>
				</li>
				<li class="photos__list--elt">
					<a class="photos__list--link" href="https://41.media.tumblr.com/3dde93f097de5e9db4f11b67729d6a2e/tumblr_na06dk1vWM1tubinno1_1280.jpg">
						<img alt="photo de l'oeuvre de l'artiste" class="photos__list--img" src="https://41.media.tumblr.com/3dde93f097de5e9db4f11b67729d6a2e/tumblr_na06dk1vWM1tubinno1_1280.jpg">
					</a>
				</li>
			</ul>
			<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
			<script type="text/javascript" src="<?php dw_asset('js/gallery.js'); ?>"></script>
		</div>
		<div class="single-artiste__find">
			<h3  class="single-artiste__heading3 heading3" aria-level="3" role="heading">Suivez-moi</h3>
			<a class="single-artiste__find--link" href="#" title="Aller vers la page Facebook">
				<svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
                    <title>facebook</title>
                    <path d="M19 6h5v-6h-5c-3.86 0-7 3.14-7 7v3h-4v6h4v16h6v-16h5l1-6h-6v-3c0-0.542 0.458-1 1-1z"></path>
                </svg>
			</a>
			<a class="single-artiste__find--link" href="#" title="Aller vers la page Twitter">
                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
                    <title>instagram</title>
                    <path d="M16 2.881c4.275 0 4.781 0.019 6.462 0.094 1.563 0.069 2.406 0.331 2.969 0.55 0.744 0.288 1.281 0.638 1.837 1.194 0.563 0.563 0.906 1.094 1.2 1.838 0.219 0.563 0.481 1.412 0.55 2.969 0.075 1.688 0.094 2.194 0.094 6.463s-0.019 4.781-0.094 6.463c-0.069 1.563-0.331 2.406-0.55 2.969-0.288 0.744-0.637 1.281-1.194 1.837-0.563 0.563-1.094 0.906-1.837 1.2-0.563 0.219-1.413 0.481-2.969 0.55-1.688 0.075-2.194 0.094-6.463 0.094s-4.781-0.019-6.463-0.094c-1.563-0.069-2.406-0.331-2.969-0.55-0.744-0.288-1.281-0.637-1.838-1.194-0.563-0.563-0.906-1.094-1.2-1.837-0.219-0.563-0.481-1.413-0.55-2.969-0.075-1.688-0.094-2.194-0.094-6.463s0.019-4.781 0.094-6.463c0.069-1.563 0.331-2.406 0.55-2.969 0.288-0.744 0.638-1.281 1.194-1.838 0.563-0.563 1.094-0.906 1.838-1.2 0.563-0.219 1.412-0.481 2.969-0.55 1.681-0.075 2.188-0.094 6.463-0.094zM16 0c-4.344 0-4.887 0.019-6.594 0.094-1.7 0.075-2.869 0.35-3.881 0.744-1.056 0.412-1.95 0.956-2.837 1.85-0.894 0.888-1.438 1.781-1.85 2.831-0.394 1.019-0.669 2.181-0.744 3.881-0.075 1.713-0.094 2.256-0.094 6.6s0.019 4.887 0.094 6.594c0.075 1.7 0.35 2.869 0.744 3.881 0.413 1.056 0.956 1.95 1.85 2.837 0.887 0.887 1.781 1.438 2.831 1.844 1.019 0.394 2.181 0.669 3.881 0.744 1.706 0.075 2.25 0.094 6.594 0.094s4.888-0.019 6.594-0.094c1.7-0.075 2.869-0.35 3.881-0.744 1.050-0.406 1.944-0.956 2.831-1.844s1.438-1.781 1.844-2.831c0.394-1.019 0.669-2.181 0.744-3.881 0.075-1.706 0.094-2.25 0.094-6.594s-0.019-4.887-0.094-6.594c-0.075-1.7-0.35-2.869-0.744-3.881-0.394-1.063-0.938-1.956-1.831-2.844-0.887-0.887-1.781-1.438-2.831-1.844-1.019-0.394-2.181-0.669-3.881-0.744-1.712-0.081-2.256-0.1-6.6-0.1v0z"></path>
                    <path d="M16 7.781c-4.537 0-8.219 3.681-8.219 8.219s3.681 8.219 8.219 8.219 8.219-3.681 8.219-8.219c0-4.537-3.681-8.219-8.219-8.219zM16 21.331c-2.944 0-5.331-2.387-5.331-5.331s2.387-5.331 5.331-5.331c2.944 0 5.331 2.387 5.331 5.331s-2.387 5.331-5.331 5.331z"></path>
                    <path d="M26.462 7.456c0 1.060-0.859 1.919-1.919 1.919s-1.919-0.859-1.919-1.919c0-1.060 0.859-1.919 1.919-1.919s1.919 0.859 1.919 1.919z"></path>
                </svg>
            </a>
            <a class="single-artiste__find--link" href="#" title="Aller vers la page Twitter">
                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
                    <title>twitter</title>
                    <path d="M32 7.075c-1.175 0.525-2.444 0.875-3.769 1.031 1.356-0.813 2.394-2.1 2.887-3.631-1.269 0.75-2.675 1.3-4.169 1.594-1.2-1.275-2.906-2.069-4.794-2.069-3.625 0-6.563 2.938-6.563 6.563 0 0.512 0.056 1.012 0.169 1.494-5.456-0.275-10.294-2.888-13.531-6.862-0.563 0.969-0.887 2.1-0.887 3.3 0 2.275 1.156 4.287 2.919 5.463-1.075-0.031-2.087-0.331-2.975-0.819 0 0.025 0 0.056 0 0.081 0 3.181 2.263 5.838 5.269 6.437-0.55 0.15-1.131 0.231-1.731 0.231-0.425 0-0.831-0.044-1.237-0.119 0.838 2.606 3.263 4.506 6.131 4.563-2.25 1.762-5.075 2.813-8.156 2.813-0.531 0-1.050-0.031-1.569-0.094 2.913 1.869 6.362 2.95 10.069 2.95 12.075 0 18.681-10.006 18.681-18.681 0-0.287-0.006-0.569-0.019-0.85 1.281-0.919 2.394-2.075 3.275-3.394z"></path>
                </svg>
            </a>
		</div>
		<div class="horaire">
			<h3  class="horaire__heading3 heading3" aria-level="3" role="heading">Venez me voir</h3>
			<?php
			   $events = get_posts(
			       array(
			           'post_type' => 'evenement',
			           'meta_query' => array(
			               array(
			                   'key' => 'relation', // name of custom field
			                   'value' => '"' . get_the_ID() . '"',
			                   'compare' => 'LIKE'
			               )
			           )
			       )
			   );
			?>
			<?php //var_dump($events); ?>
			<?php if( $events ): ?>
			<div class="programmation__event">
				<?php foreach( $events as $event ): ?>
				<?php 
				    $photo = wp_get_attachment_url( get_post_thumbnail_id($event->ID), 'evenement' );
				?>
				<a class="programmation__event--bloc" href="<?php echo get_permalink( $event->ID ); ?>" title="Aller vers la page de l'évènement <?php get_the_title( $event->ID ); ?>"><span class="hidden">&nbsp;</span>lien temporaire</a>
				<img class="programmation__event--img" width="200" src="<?php echo $photo;?>" alt="Photo de l'évènement <?php the_title( $event->ID );?>">
				<div class="programmation__event--taxonomy">
					<?php dw_the_discipline(', ', '<strong class="">', '</strong>'); ?>
				</div>
				<!-- <div class="programmation__event--date">
					<span class="programmation__event--month"><?php the_field('date_month'); ?></span>
					<span class="programmation__event--day"><?php the_field('date_day'); ?></span>
				</div> -->
				<div class="programmation__event--date">
	                <?php
	                    // get raw date
	                    $date = get_field('date', $event->ID, false, false);
	                    // make date object
	                    $date = new DateTime($date);
	                ?>
	                <span class="programmation__event--month"><?php echo substr($date->format('M'), 0, 4); ?></span>
	                <span class="programmation__event--day"><?php echo $date->format('j'); ?></span>
	            </div>
				<h3  class="programmation__heading3 heading3" aria-level="3" role="heading"><?php echo get_the_title( $event->ID ); ?></h3>
				<div class="programmation__event--social">
					<p class="programmation__event--txt">Partager</p>
					<div class="last-event__event--share">
	                    <a class="artistes__artiste--link" href="https://www.facebook.com/sharer/sharer.php?u=<?php get_permalink( $event->ID ); ?>&t=<?php get_the_title( $location->ID ); ?>" title="Aller vers la page Facebook"><span class="hidden">&nbsp;</span>
	                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
	                            <title>facebook</title>
	                            <path d="M19 6h5v-6h-5c-3.86 0-7 3.14-7 7v3h-4v6h4v16h6v-16h5l1-6h-6v-3c0-0.542 0.458-1 1-1z"></path>
	                        </svg>
	                    </a>
	                    <a class="artistes__artiste--link" href="https://twitter.com/intent/tweet/?url=<?php get_permalink( $event->ID ); ?>" title="Aller vers la page Twitter"><span class="hidden">&nbsp;</span>
	                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
	                            <title>twitter</title>
	                            <path d="M32 7.075c-1.175 0.525-2.444 0.875-3.769 1.031 1.356-0.813 2.394-2.1 2.887-3.631-1.269 0.75-2.675 1.3-4.169 1.594-1.2-1.275-2.906-2.069-4.794-2.069-3.625 0-6.563 2.938-6.563 6.563 0 0.512 0.056 1.012 0.169 1.494-5.456-0.275-10.294-2.888-13.531-6.862-0.563 0.969-0.887 2.1-0.887 3.3 0 2.275 1.156 4.287 2.919 5.463-1.075-0.031-2.087-0.331-2.975-0.819 0 0.025 0 0.056 0 0.081 0 3.181 2.263 5.838 5.269 6.437-0.55 0.15-1.131 0.231-1.731 0.231-0.425 0-0.831-0.044-1.237-0.119 0.838 2.606 3.263 4.506 6.131 4.563-2.25 1.762-5.075 2.813-8.156 2.813-0.531 0-1.050-0.031-1.569-0.094 2.913 1.869 6.362 2.95 10.069 2.95 12.075 0 18.681-10.006 18.681-18.681 0-0.287-0.006-0.569-0.019-0.85 1.281-0.919 2.394-2.075 3.275-3.394z"></path>
	                        </svg>
	                    </a>
	                </div>
				</div>
				<?php endforeach; ?>
			</div>
			<?php endif; ?>

			<!-- <div class="horaire__bloc">
				<a class="horaire__bloc--link" href="<?php //the_permalink(); ?>"><span class="hidden">&nbsp;</span></a>
				<p><?php //the_title(); ?></p>
				<div class="horaire__bloc--date">
					<span class="horaire__bloc--month">SEP</span>
					<span class="horaire__bloc--day">24</span>
				</div>
				<div class="horaire__bloc--date">
                <?php
                    // get raw date
                    //$date = get_field('date', false, false);
                    // make date object
                    //$date = new DateTime($date);
                ?>
	                <span class="horaire__bloc--month"><?php //echo substr($date->format('M'), 0, 4); ?></span>
	                <span class="horaire__bloc--day"><?php //echo $date->format('j'); ?></span>
	            </div>
				<p class="horaire__bloc--heure"><?php //the_sub_field('heure_debut'); ?> - <?php //the_sub_field('heure_fin'); ?></p>
				<a class="horaire__bloc--adresse" href=""><?php //the_sub_field('lieu') ?></a>
			</div> -->
		</div>
		<div class="choix">
			<div class="choix__cta cta">
                <span class="cta__masque">Tous le programme</span>
                <a href="#" title="Aller vers la page à propos" class="cta__button">Tous le programme</a>
            </div>
            <div class="choix__cta cta">
                <span class="cta__masque">Tous l'agenda</span>
                <a href="#" title="Aller vers la page à propos" class="cta__button">Tous l'agenda</a>
            </div>
            <div class="choix__cta cta">
                <span class="cta__masque">Tous les artistes</span>
                <a href="#" title="Aller vers la page à propos" class="cta__button">Tous les artistes</a>
            </div>
        </div>
	</section>
<?php get_footer(); ?>