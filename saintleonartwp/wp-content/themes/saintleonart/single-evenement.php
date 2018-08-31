<?php 
/*
    Template Name: SINGLE-EVENEMENT
*/
get_header(); ?>
	<section class="title">
		<h2  class="title__heading2 heading2 single-event-heading2" aria-level="2" role="heading"><?php the_title(); ?></h2>
	</section>
	<div class="background">
		<section class="single-event">
			<h2  class="single-event__heading2 heading2 hidden" aria-level="2" role="heading">évènement</h2>
			<img class="single-event__img" src="<?php the_post_thumbnail_url('medium_large');?>" alt="Photo de profil de l'évènement<?php the_title(); ?>">
			<div class="single-event__taxonomy">
				<p class="single-event__taxonomy--txt"><?php dw_the_category(', ', '<strong class="">', '</strong>'); ?></p>
			</div>
			<div class="single-event__date">
				<p class="single-event__date--txt"><time class="single-event__date--time" datetime="<?php the_time('c'); ?>"><?php the_field('date'); ?></time></p>
			</div>
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<div class="single-event__bloc">
				<div class="single-event__bloc--txt"><?php the_content(); ?></div>
			</div>
			<?php endwhile; endif; ?>
			
			<div class="single-event__find">
				<h3  class="single-event__heading3 heading3" aria-level="3" role="heading">Partagez</h3>
				<a class="single-event__find--link" href="https://www.facebook.com/sharer?u=<?php the_permalink();?>&t=<?php the_title(); ?>" title="Aller vers la page Facebook">
					<span class="hidden">&nbsp;</span>
					<svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
	                    <title>facebook</title>
	                    <path d="M19 6h5v-6h-5c-3.86 0-7 3.14-7 7v3h-4v6h4v16h6v-16h5l1-6h-6v-3c0-0.542 0.458-1 1-1z"></path>
	                </svg>
				</a>
	            <a class="single-event__find--link" href="https://twitter.com/intent/tweet/?url=<?php the_permalink(); ?>" title="Aller vers la page Twitter">
	            	<span class="hidden">&nbsp;</span>
	                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
	                    <title>twitter</title>
	                    <path d="M32 7.075c-1.175 0.525-2.444 0.875-3.769 1.031 1.356-0.813 2.394-2.1 2.887-3.631-1.269 0.75-2.675 1.3-4.169 1.594-1.2-1.275-2.906-2.069-4.794-2.069-3.625 0-6.563 2.938-6.563 6.563 0 0.512 0.056 1.012 0.169 1.494-5.456-0.275-10.294-2.888-13.531-6.862-0.563 0.969-0.887 2.1-0.887 3.3 0 2.275 1.156 4.287 2.919 5.463-1.075-0.031-2.087-0.331-2.975-0.819 0 0.025 0 0.056 0 0.081 0 3.181 2.263 5.838 5.269 6.437-0.55 0.15-1.131 0.231-1.731 0.231-0.425 0-0.831-0.044-1.237-0.119 0.838 2.606 3.263 4.506 6.131 4.563-2.25 1.762-5.075 2.813-8.156 2.813-0.531 0-1.050-0.031-1.569-0.094 2.913 1.869 6.362 2.95 10.069 2.95 12.075 0 18.681-10.006 18.681-18.681 0-0.287-0.006-0.569-0.019-0.85 1.281-0.919 2.394-2.075 3.275-3.394z"></path>
	                </svg>
	            </a>
			</div>
			<div class="horaire">
				<?php if (have_rows('horaires')): ?>
				<h3  class="horaire__heading3 heading3" aria-level="3" role="heading">Artistes participants</h3>
				<?php if( have_rows('horaires') ) : while ( have_rows('horaires') ) : the_row(); ?>
					<?php
	                    $post_object = get_sub_field('artistes');
	                    $post = $post_object;
	                    setup_postdata( $post ); 
	                ?>
					<div class="artistes__artiste">
						<a class="artistes__artiste--bloc" href="<?php the_permalink(); ?>" title="Aller vers la page de l'artiste <?php get_the_title(); ?>"><span class="hidden">&nbsp;</span></a>
						<img class="artistes__artiste--img" src="<?php the_post_thumbnail_url('medium_large');?>" alt="Photo de profil de l'artiste <?php the_title();?>">
						<div class="artistes__artiste--taxonomy">
							<?php dw_the_discipline(', ', '<strong class="">', '</strong>'); ?>
						</div>
						<h3 class="artistes__heading3 heading3" style="text-align: center;" aria-level="3" role="heading"><?php the_title();?></h3>
						<p class="horaire__bloc--heure"><?php the_sub_field('heure_debut'); ?> - <?php the_sub_field('heure_fin'); ?></p>
						<div class="artistes__artiste--social">
							<p class="artistes__artiste--txt">Suivre</p>
							<div class="artistes__artiste--follow">
								<a class="artistes__artiste--link" href="#" title="Aller vers la page Facebook">
									<span class="hidden">&nbsp;</span>
									<svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
			                            <title>facebook</title>
			                            <path d="M19 6h5v-6h-5c-3.86 0-7 3.14-7 7v3h-4v6h4v16h6v-16h5l1-6h-6v-3c0-0.542 0.458-1 1-1z"></path>
			                        </svg>
								</a>
								<a class="artistes__artiste--link" href="#" title="Aller vers la page Instagram">
									<span class="hidden">&nbsp;</span>
			                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
			                            <title>instagram</title>
			                            <path d="M16 2.881c4.275 0 4.781 0.019 6.462 0.094 1.563 0.069 2.406 0.331 2.969 0.55 0.744 0.288 1.281 0.638 1.837 1.194 0.563 0.563 0.906 1.094 1.2 1.838 0.219 0.563 0.481 1.412 0.55 2.969 0.075 1.688 0.094 2.194 0.094 6.463s-0.019 4.781-0.094 6.463c-0.069 1.563-0.331 2.406-0.55 2.969-0.288 0.744-0.637 1.281-1.194 1.837-0.563 0.563-1.094 0.906-1.837 1.2-0.563 0.219-1.413 0.481-2.969 0.55-1.688 0.075-2.194 0.094-6.463 0.094s-4.781-0.019-6.463-0.094c-1.563-0.069-2.406-0.331-2.969-0.55-0.744-0.288-1.281-0.637-1.838-1.194-0.563-0.563-0.906-1.094-1.2-1.837-0.219-0.563-0.481-1.413-0.55-2.969-0.075-1.688-0.094-2.194-0.094-6.463s0.019-4.781 0.094-6.463c0.069-1.563 0.331-2.406 0.55-2.969 0.288-0.744 0.638-1.281 1.194-1.838 0.563-0.563 1.094-0.906 1.838-1.2 0.563-0.219 1.412-0.481 2.969-0.55 1.681-0.075 2.188-0.094 6.463-0.094zM16 0c-4.344 0-4.887 0.019-6.594 0.094-1.7 0.075-2.869 0.35-3.881 0.744-1.056 0.412-1.95 0.956-2.837 1.85-0.894 0.888-1.438 1.781-1.85 2.831-0.394 1.019-0.669 2.181-0.744 3.881-0.075 1.713-0.094 2.256-0.094 6.6s0.019 4.887 0.094 6.594c0.075 1.7 0.35 2.869 0.744 3.881 0.413 1.056 0.956 1.95 1.85 2.837 0.887 0.887 1.781 1.438 2.831 1.844 1.019 0.394 2.181 0.669 3.881 0.744 1.706 0.075 2.25 0.094 6.594 0.094s4.888-0.019 6.594-0.094c1.7-0.075 2.869-0.35 3.881-0.744 1.050-0.406 1.944-0.956 2.831-1.844s1.438-1.781 1.844-2.831c0.394-1.019 0.669-2.181 0.744-3.881 0.075-1.706 0.094-2.25 0.094-6.594s-0.019-4.887-0.094-6.594c-0.075-1.7-0.35-2.869-0.744-3.881-0.394-1.063-0.938-1.956-1.831-2.844-0.887-0.887-1.781-1.438-2.831-1.844-1.019-0.394-2.181-0.669-3.881-0.744-1.712-0.081-2.256-0.1-6.6-0.1v0z"></path>
			                            <path d="M16 7.781c-4.537 0-8.219 3.681-8.219 8.219s3.681 8.219 8.219 8.219 8.219-3.681 8.219-8.219c0-4.537-3.681-8.219-8.219-8.219zM16 21.331c-2.944 0-5.331-2.387-5.331-5.331s2.387-5.331 5.331-5.331c2.944 0 5.331 2.387 5.331 5.331s-2.387 5.331-5.331 5.331z"></path>
			                            <path d="M26.462 7.456c0 1.060-0.859 1.919-1.919 1.919s-1.919-0.859-1.919-1.919c0-1.060 0.859-1.919 1.919-1.919s1.919 0.859 1.919 1.919z"></path>
			                        </svg>
			                    </a>
			                    <a class="artistes__artiste--link" href="#" title="Aller vers la page Twitter">
			                    	<span class="hidden">&nbsp;</span>
			                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
			                            <title>twitter</title>
			                            <path d="M32 7.075c-1.175 0.525-2.444 0.875-3.769 1.031 1.356-0.813 2.394-2.1 2.887-3.631-1.269 0.75-2.675 1.3-4.169 1.594-1.2-1.275-2.906-2.069-4.794-2.069-3.625 0-6.563 2.938-6.563 6.563 0 0.512 0.056 1.012 0.169 1.494-5.456-0.275-10.294-2.888-13.531-6.862-0.563 0.969-0.887 2.1-0.887 3.3 0 2.275 1.156 4.287 2.919 5.463-1.075-0.031-2.087-0.331-2.975-0.819 0 0.025 0 0.056 0 0.081 0 3.181 2.263 5.838 5.269 6.437-0.55 0.15-1.131 0.231-1.731 0.231-0.425 0-0.831-0.044-1.237-0.119 0.838 2.606 3.263 4.506 6.131 4.563-2.25 1.762-5.075 2.813-8.156 2.813-0.531 0-1.050-0.031-1.569-0.094 2.913 1.869 6.362 2.95 10.069 2.95 12.075 0 18.681-10.006 18.681-18.681 0-0.287-0.006-0.569-0.019-0.85 1.281-0.919 2.394-2.075 3.275-3.394z"></path>
			                        </svg>
			                    </a>
							</div>
						</div>
					</div>
					<?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>

				<?php endwhile; endif; ?>
				<?php endif ?>
			</div>
			<div class="single-event__location">
				<h3  class="single-event__heading3 heading3" aria-level="3" role="heading">Lieu</h3>
				<div class="single-event__event--location">
	                <p class="single-event__event--txt">
	                    <?php
	                        $id = get_the_ID();
	                        $post = get_field('lieu', $id);
	                        
	                        setup_postdata( $post ); 
	                        $location = get_field('location');
	                    ?>
	                    <?= $location['address']; ?>
	                </p>
	            </div>
			</div>
			<div class="single-event__cta cta">
	            <span class="cta__masque">Tous les voir</span>
	            <a href="<?php the_permalink(21); ?>" title="Aller vers la page des évènements" class="cta__button">Tous les voir</a>
	        </div>
		</section>
	</div>
<?php get_footer(); ?>