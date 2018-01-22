<?php 
/*
    Template Name: PAGE-AGENDA
*/
get_header(); ?>
	<nav class="sec-nav">
		<h2 class="header__heading2 hidden" aria-level="2" role="heading">Secondary nav</h2>
		<ul class="sec-nav__list">
			<li class="sec-nav__list--elt">
				<a href="<?php the_permalink(103); ?>" title="Aller vers la page du programme." class="sec-nav__list--txt">Programme
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
				<a href="<?php the_permalink(101); ?>" title="Aller vers la page de l'agenda." class="sec-nav__list--txt active">
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
	<section class="agenda">
		<h2  class="agenda__heading2 heading2 hidden" aria-level="2" role="heading">Bloc</h2>
					
		<section class="menu-day">
			<h3  class="menu-day__heading3 heading3 hidden" aria-level="3" role="heading">Menu</h3>
			<div class="menu-day__bloc">
				<ul class="list">
					<li class="list__elt">
						<a class="list__elt--link" href="#">Tous les jours</a>
					</li>
				</ul>
				<ul class="list">
					<?php if( have_rows('dates', 38) ): while ( have_rows('dates', 38) ) : the_row(); ?>
						<li class="list__elt">
							<a class="list__elt--link" href="#<?php the_sub_field('date'); ?>"><?php the_sub_field('date'); ?></a>
						</li>
					<?php endwhile; endif; ?>
				</ul>
			</div>
		</section>
		<section class="programmation">
			<h3 class="programmation__heading3 heading3 hidden" aria-level="3" role="heading">Programme</h3>
				<?php if( have_rows('dates', 38) ): while ( have_rows('dates', 38) ) : the_row(); ?>
				<ul class="ul" id="<?php the_sub_field('date'); ?>">
				<h4 class="programmation__heading4 heading4" aria-level="4" role="heading"><?php the_sub_field('date'); ?></h4>	
					<?php 
						$loop = new WP_Query( array( 'post_type' => 'evenement', 'posts_per_page' => -1 ));
						if (have_posts()) : while ($loop->have_posts()) : $loop->the_post();
					?>
					<?php if (get_sub_field('date') === get_field('date')): ?>
					<li class="all-events__event" id="<?php the_field('jour'); ?>">
						<a class="all-events__event--bloc" href="<?php the_permalink(); ?>" title="Aller vers la page de l'évènement <?php get_the_title(); ?>"><span class="hidden">&nbsp;</span></a>
						<img class="all-events__event--img" src="<?php the_post_thumbnail_url('medium_large');?>" alt="Photo de l'évènement <?php the_title();?>">
						<div class="all-events__event--taxonomy">
							<?php dw_the_category(', ', '<strong class="">', '</strong>'); ?>
						</div>
						<!-- <div class="all-events__event--date">
							<span class="all-events__event--month"><?php //the_field('date_month'); ?></span>
							<span class="all-events__event--day"><?php //the_field('date_day'); ?></span>
						</div> -->
						<div class="all-events__event--date">
					        <?php
					            // get raw date
					            $date = get_field('date', false, false);
					            // make date object
					            $date = new DateTime($date);
					        ?>
					        <span class="all-events__event--month"><?php echo substr($date->format('M'), 0, 4); ?></span>
					        <span class="all-events__event--day"><?php echo $date->format('j'); ?></span>
					    </div>
						<h3  class="all-events__heading3 heading3" aria-level="3" role="heading"><?php the_title(); ?></h3>
						<div class="all-events__event--social">
							<p class="all-events__event--txt">Partager</p>
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
					</li>
					<?php endif; ?>
					<?php endwhile; endif; ?>
				</ul>
				<?php endwhile; endif; ?>
			



			<div class="programmation__cta cta">
                <span class="cta__masque">Tous les voir</span>
                <a href="#" title="Aller vers la page à propos" class="cta__button">Tous les voir</a>
            </div>
		</section>
	</section>
<?php get_footer(); ?>