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
			<?php
	            $posts = new WP_Query( ['post_type' => 'date', 'posts_per_page' => -1, 'orderby' => 'desc'] );
	            if ( $posts->have_posts() ): while ( $posts->have_posts() ): $posts->the_post();
	        ?>
			<div class="menu-day__bloc">
				<ul class="list">
					<li class="list__elt">
						<a class="list__elt--link" href="#18">Vendredi 18 septembre</a>
					</li>
					<li class="list__elt">
						<a class="list__elt--link" href="#19">Samedi 19 septembre</a>
					</li>
					<li class="list__elt">
						<a class="list__elt--link" href="#20">Dimanche 20 septembre</a>
					</li>
					<li class="list__elt">
						<a class="list__elt--link active" href="javascript:window.location.reload(true)">Tous le festival</a>
					</li>
				</ul>
			</div>
			<?php endwhile; endif; ?>
		</section>
		<section class="programmation">
			<h3  class="programmation__heading3 heading3 hidden" aria-level="3" role="heading">Programme</h3>
			<!-- <div class="programmation__filter">
				<select>
                	<option value="type">filtrer par type</option>
					<option value="date">filtrer par date</option>
				</select>
			</div> -->
			<div class="programmation__bloc" id="18">
				<div class="programmation__bloc--event">
					<a class="programmation__bloc--link" href="#"><span class="hidden">&nbsp;</span></a>
					<div class="programmation__bloc--glob">
						<p class="programmation__bloc--taxonomy">Photo</p>
						<div class="programmation__bloc--infos">
							<p class="programmation__bloc--heure">10h30-12h</p>
							<p class="programmation__bloc--date">15 Septembre</p>
							<p class="programmation__bloc--nom">Maria Delaquir</p>
							<p class="programmation__bloc--adresse">Rue montmartre 15, 4000 Liège Belgique</p>
						</div>
					</div>
				</div>
				<div class="programmation__bloc--event">
					<a class="programmation__bloc--link" href="#"><span class="hidden">&nbsp;</span></a>
					<div class="programmation__bloc--glob">
						<p class="programmation__bloc--taxonomy">Photo</p>
						<div class="programmation__bloc--infos">
							<p class="programmation__bloc--heure">10h30-12h</p>
							<p class="programmation__bloc--date">15 Septembre</p>
							<p class="programmation__bloc--nom">Maria Delaquir</p>
							<p class="programmation__bloc--adresse">Rue montmartre 15, 4000 Liège Belgique</p>
						</div>
					</div>
				</div>
			</div>
			<div class="programmation__bloc" id="19">
				<div class="programmation__bloc--event">
					<a class="programmation__bloc--link" href="#"><span class="hidden">&nbsp;</span></a>
					<div class="programmation__bloc--glob">
						<p class="programmation__bloc--taxonomy">Photo</p>
						<div class="programmation__bloc--infos">
							<p class="programmation__bloc--heure">10h30-12h</p>
							<p class="programmation__bloc--date">15 Septembre</p>
							<p class="programmation__bloc--nom">Maria Delaquir</p>
							<p class="programmation__bloc--adresse">Rue montmartre 15, 4000 Liège Belgique</p>
						</div>
					</div>
				</div>
				<div class="programmation__bloc--event">
					<a class="programmation__bloc--link" href="#"><span class="hidden">&nbsp;</span></a>
					<div class="programmation__bloc--glob">
						<p class="programmation__bloc--taxonomy">Photo</p>
						<div class="programmation__bloc--infos">
							<p class="programmation__bloc--heure">10h30-12h</p>
							<p class="programmation__bloc--date">15 Septembre</p>
							<p class="programmation__bloc--nom">Maria Delaquir</p>
							<p class="programmation__bloc--adresse">Rue montmartre 15, 4000 Liège Belgique</p>
						</div>
					</div>
				</div>
				<div class="programmation__bloc--event">
					<a class="programmation__bloc--link" href="#"><span class="hidden">&nbsp;</span></a>
					<div class="programmation__bloc--glob">
						<p class="programmation__bloc--taxonomy">Photo</p>
						<div class="programmation__bloc--infos">
							<p class="programmation__bloc--heure">10h30-12h</p>
							<p class="programmation__bloc--date">15 Septembre</p>
							<p class="programmation__bloc--nom">Maria Delaquir</p>
							<p class="programmation__bloc--adresse">Rue montmartre 15, 4000 Liège Belgique</p>
						</div>
					</div>
				</div>
			</div>
			<div class="programmation__bloc" id="20">
				<div class="programmation__bloc--event">
					<a class="programmation__bloc--link" href="#"><span class="hidden">&nbsp;</span></a>
					<div class="programmation__bloc--glob">
						<p class="programmation__bloc--taxonomy">Photo</p>
						<div class="programmation__bloc--infos">
							<p class="programmation__bloc--heure">10h30-12h</p>
							<p class="programmation__bloc--date">15 Septembre</p>
							<p class="programmation__bloc--nom">Maria Delaquir</p>
							<p class="programmation__bloc--adresse">Rue montmartre 15, 4000 Liège Belgique</p>
						</div>
					</div>
				</div>
			</div>
			<div class="programmation__cta cta">
                <span class="cta__masque">Tous les voir</span>
                <a href="#" title="Aller vers la page à propos" class="cta__button">Tous les voir</a>
            </div>
		</section>
	</section>
<?php get_footer(); ?>